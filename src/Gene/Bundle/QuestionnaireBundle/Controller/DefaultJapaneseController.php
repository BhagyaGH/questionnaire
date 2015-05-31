<?php

namespace Gene\Bundle\QuestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultJapaneseController extends Controller {

    public function homeAction() {
        $text = $this->getDoctrine()->getManager()->getRepository(
                        'GeneQuestionnaireBundle:QuestionJapanese')->findAll();
        return $this->render('GeneQuestionnaireBundle:Default:index_japanese.html.twig', array('content' => $text));
    }

    public function indexAction($user) {
        return $this->redirect($this->generateUrl('gene_questionnaire_question_jp', array('id' => 1, 'user' => $user)));
    }

    public function questionAction($id, $user) {
        $question = $this->getDoctrine()->getManager()->getRepository(
                        'GeneQuestionnaireBundle:QuestionJapanese')->findOneBy(array('id' => $id));
        return $this->render('GeneQuestionnaireBundle:Default:question_japanese.html.twig', array(
                    'question' => $question, 'questions' => null, 'user' => $user));
    }

    public function multiQuestionsAction($user) {
        $questions = $this->getDoctrine()->getManager()->getRepository(
                        'GeneQuestionnaireBundle:QuestionEJapanese')->findAll();
        return $this->render('GeneQuestionnaireBundle:Default:question_japanese.html.twig', array(
                    'questions' => $questions, 'user' => $user));
    }

    public function saveAnswerAction(Request $request, $id, $user) {
        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getEntityManager();
            $connection = $em->getConnection();

            if ($id == 6) {
                $a1 = $request->get('answer1');
                $a2 = $request->get('answer2');
                $a3 = $request->get('answer3');
                $a4 = $request->get('answer4');

                $sql = "SELECT * FROM user_answers WHERE user_id = " . $user . " AND question_id = 6";
                $statement = $connection->prepare($sql);
                $statement->execute();
                $result = $statement->fetchAll();

                if ($result == null) {
                    $sql1 = "INSERT INTO user_answers(user_id, question_id, answer) VALUES (" . $user . ", 6, '" . $a1 . "')";
                    $statement1 = $connection->prepare($sql);
                    $statement1->execute();

                    $sql2 = "INSERT INTO user_answers(user_id, question_id, answer) VALUES (" . $user . ", 7, '" . $a2 . "')";
                    $statement2 = $connection->prepare($sql);
                    $statement2->execute();

                    $sql3 = "INSERT INTO user_answers(user_id, question_id, answer) VALUES (" . $user . ", 8, '" . $a3 . "')";
                    $statement3 = $connection->prepare($sql);
                    $statement3->execute();

                    $sql4 = "INSERT INTO user_answers(user_id, question_id, answer) VALUES (" . $user . ", 9, '" . $a4 . "')";
                    $statement4 = $connection->prepare($sql);
                    $statement4->execute();
                } else {
                    $sql1 = "UPDATE user_answers SET answer = '" . $a1 . "' WHERE user_id = " . $user . " AND question_id = 6";
                    $statement1 = $connection->prepare($sql);
                    $statement1->execute();

                    $sql2 = "UPDATE user_answers SET answer = '" . $a2 . "' WHERE user_id = " . $user . " AND question_id = 7";
                    $statement2 = $connection->prepare($sql);
                    $statement2->execute();

                    $sql3 = "UPDATE user_answers SET answer = '" . $a3 . "' WHERE user_id = " . $user . " AND question_id = 8";
                    $statement3 = $connection->prepare($sql);
                    $statement3->execute();

                    $sql4 = "UPDATE user_answers SET answer = '" . $a4 . "' WHERE user_id = " . $user . " AND question_id = 9";
                    $statement4 = $connection->prepare($sql);
                    $statement4->execute();
                }
                return $this->redirect($this->generateUrl('gene_questionnaire_question_jp', array('id' => 10, 'user' => $user)));
            } else {
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
                    return $this->redirect($this->generateUrl('gene_questionnaire_question_jp', array('id' => $id + 1, 'user' => $user)));
                }
                if ($id == 5) {
                    if ($request->get('answer') == 'A' || $request->get('answer') == 'SA') {
                        return $this->redirect($this->generateUrl('gene_questionnaire_multi_questions_jp', array('user' => $user)));
                    } else {
                        return $this->redirect($this->generateUrl('gene_questionnaire_question_jp', array('id' => 10, 'user' => $user)));
                    }
                }
                if ($id == 10) {
                    return $this->redirect($this->generateUrl('gene_questionnaire_question_jp', array('id' => 11, 'user' => $user)));
                }
                return $this->redirect($this->generateUrl('gene_questionnaire_final_jp'));
            }
        }
    }
    
    public function thankyouAction() {
        return $this->render('GeneQuestionnaireBundle:Default:final_japanese.html.twig');
    }

}
