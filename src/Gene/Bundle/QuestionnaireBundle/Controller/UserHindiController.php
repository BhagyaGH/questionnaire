<?php

namespace Gene\Bundle\QuestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Gene\Bundle\QuestionnaireBundle\Entity\User;

class UserHindiController extends Controller {

    public function hindiAction() {
        $questions = $this->getDoctrine()->getManager()->getRepository(
                        'GeneQuestionnaireBundle:UserQuestionsHindi')->findAll();
        return $this->render('GeneQuestionnaireBundle:User:user_hindi.html.twig', array('questions' => $questions));
    }

    public function saveUserAction(Request $request) {
        if ($request->getMethod() == 'POST') {

            $em = $this->getDoctrine()->getEntityManager();
            $connection = $em->getConnection();
            $sql = "SELECT MAX(reference) FROM user;";
            $statement = $connection->prepare($sql);
            $statement->execute();
            $id = $statement->fetchAll();
            $em->flush();
            
            $user = new User();
            
            $ip = $this->container->get('request')->getClientIp();
            $user->setIp($ip);
            
            if(($id[0]['MAX(reference)']) == null) {
                $user->setReference(0);
            }
            else {
                $newId = ($id[0]['MAX(reference)']) + 1;
                echo $newId;
                $user->setReference($newId);
            }
            
            $user->setSex($request->get('sex'));
            $user->setLanguage('Hindi');
            $user->setBirthYear($request->get('year'));
            $user->setCountry($request->get('country'));
            $user->setEthnicity($request->get('ethnicity'));

            $user->setIsReligiousAffiliation($request->get('isRel'));

            if ($user->getIsReligiousAffiliation() == 'yes') {
                $religiousType = $request->get('rel');
                if ($religiousType == 'Other') {
                    $user->setReligiousAffiliationType($request->get('otherRel'));
                } else {
                    $user->setReligiousAffiliationType($religiousType);
                }
            }

            $user->setEducation($request->get('edu'));

            $user->setIsHealthRelated($request->get('isHealth'));
            if ($user->getIsHealthRelated() == 'yes') {
                $health = $request->get('heal_yes');
                if ($health == 'Other') {
                    $user->setHealthRelatedWork($request->get('otherHeal'));
                } else {
                    $user->setHealthRelatedWork($health);
                }
            }
            $user->setGeneticEngineering($request->get('gene'));
            $user->setFinancialSituation($request->get('fin'));
            $user->setIsInheritedGenetic($request->get('inh'));

            if ($user->getIsInheritedGenetic() == 'yes') {
                $user->setInheritedGeneticWho($request->get('who'));
                $user->setInheritedGeneticWhat($request->get('what'));
            }

            $em1 = $this->getDoctrine()->getEntityManager();
            $em1->persist($user);
            $em1->flush();
            
            return $this->redirect($this->generateUrl('gene_questionnaire_user_q_hn', array('user' => $user->getId())));
        }
    }

}
