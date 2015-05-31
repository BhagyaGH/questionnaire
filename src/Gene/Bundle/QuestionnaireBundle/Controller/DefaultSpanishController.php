<?php

namespace Gene\Bundle\QuestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultSpanishController extends Controller {

    public function homeAction() {
        $text = $this->getDoctrine()->getManager()->getRepository(
                        'GeneQuestionnaireBundle:QuestionSpanish')->findAll();
        return $this->render('GeneQuestionnaireBundle:Default:index_spanish.html.twig', array('content' => $text));
    }

    public function indexAction($user) {
        return $this->redirect($this->generateUrl('gene_questionnaire_question_es', array('id' => 1, 'user' => $user)));
    }

    public function questionAction($id, $user) {
        $question = $this->getDoctrine()->getManager()->getRepository(
                        'GeneQuestionnaireBundle:QuestionSpanish')->findOneBy(array('id' => $id));
        return $this->render('GeneQuestionnaireBundle:Default:question_spanish.html.twig', array(
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
                return $this->redirect($this->generateUrl('gene_questionnaire_question_es', array('id' => $id + 1, 'user' => $user)));
            }
            if ($id == 5) {
                if ($request->get('answer') == 'A' || $request->get('answer') == 'SA') {
                    return $this->redirect($this->generateUrl('gene_questionnaire_question_es', array('id' => $id + 1, 'user' => $user)));
                }
                else {
                    return $this->redirect($this->generateUrl('gene_questionnaire_question_es', array('id' => 11, 'user' => $user)));
                }
            }
            if ($id > 5 && $id < 11) {
                return $this->redirect($this->generateUrl('gene_questionnaire_question_es', array('id' => $id + 1, 'user' => $user)));
            }
            
            return $this->redirect($this->generateUrl('gene_questionnaire_final_es'));
        }
    }
    
    public function thankyouAction() {
        return $this->render('GeneQuestionnaireBundle:Default:final_spanish.html.twig');
    }

}
