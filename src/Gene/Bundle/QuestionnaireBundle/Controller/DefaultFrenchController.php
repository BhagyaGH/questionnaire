<?php

namespace Gene\Bundle\QuestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultFrenchController extends Controller {

    public function homeAction() {
        $text = $this->getDoctrine()->getManager()->getRepository(
                        'GeneQuestionnaireBundle:QuestionFrench')->findAll();
        return $this->render('GeneQuestionnaireBundle:Default:index_french.html.twig', array('content' => $text));
    }

    public function indexAction($user) {
        return $this->redirect($this->generateUrl('gene_questionnaire_question_fr', array('id' => 1, 'user' => $user)));
    }

    public function questionAction($id, $user) {
        $question = $this->getDoctrine()->getManager()->getRepository(
                        'GeneQuestionnaireBundle:QuestionFrench')->findOneBy(array('id' => $id));
        return $this->render('GeneQuestionnaireBundle:Default:question_french.html.twig', array(
                    'question' => $question, 'user' => $user));
    }

    public function saveAnswerAction(Request $request, $id, $user) {
        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getEntityManager();
            $connection = $em->getConnection();

            $sql = "SELECT * FROM user_answers WHERE user_id = " . $user . " AND question_id = " . $id;
            $statement = $connection->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();

            if ($result == null) {
                $sql = "INSERT INTO user_answers(user_id, question_id, answer) VALUES (" . $user . "," . $id . ", '" . $request->get('answer') . "')";
                $statement1 = $connection->prepare($sql);
                $statement1->execute();
            } else {
                $sql = "UPDATE user_answers SET answer = '" . $request->get('answer') . "' WHERE user_id = " . $user . " AND question_id = " . $id;
                $statement1 = $connection->prepare($sql);
                $statement1->execute();
            }
            
            if ($id < 5) {
                return $this->redirect($this->generateUrl('gene_questionnaire_question_fr', array('id' => $id + 1, 'user' => $user)));
            }
            if ($id == 5) {
                if ($request->get('answer') == 'A' || $request->get('answer') == 'SA') {
                    return $this->redirect($this->generateUrl('gene_questionnaire_question_fr', array('id' => $id + 1, 'user' => $user)));
                }
                else {
                    return $this->redirect($this->generateUrl('gene_questionnaire_question_fr', array('id' => 11, 'user' => $user)));
                }
            }
            if ($id > 5 && $id < 11) {
                return $this->redirect($this->generateUrl('gene_questionnaire_question_fr', array('id' => $id + 1, 'user' => $user)));
            }
            
            return $this->redirect($this->generateUrl('gene_questionnaire_final_fr'));
        }
    }
    
    public function thankyouAction() {
        return $this->render('GeneQuestionnaireBundle:Default:final_french.html.twig');
    }

}
