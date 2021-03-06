<?php

namespace Gene\Bundle\QuestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionHindi
 */
class QuestionHindi
{
    /**
     * @var string
     */
    private $question;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set question
     *
     * @param string $question
     * @return QuestionHindi
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
