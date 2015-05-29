<?php

namespace Gene\Bundle\QuestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GeneQuestionnaireBundle:Default:index.html.twig', array('name' => $name));
    }

    public function questionAction($id)
    {
        $question = $this->getDoctrine()->getManager()->getRepository(
                'GeneQuestionnaireBundle:QuestionEnglish')->findOneBy(array('id' => $id));
        return $this->render('GeneQuestionnaireBundle:Default:question.html.twig', array(
            'question' => $question));
    }
}
