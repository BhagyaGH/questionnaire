<?php

namespace Gene\Bundle\QuestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserQuestionsChinese
 */
class UserQuestionsChinese
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
     * @return UserQuestionsChinese
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
