<?php

namespace Gene\Bundle\QuestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLastAnswer
 */
class UserLastAnswer
{
    /**
     * @var string
     */
    private $answer;

    /**
     * @var \Gene\Bundle\QuestionnaireBundle\Entity\User
     */
    private $user;


    /**
     * Set answer
     *
     * @param string $answer
     * @return UserLastAnswer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set user
     *
     * @param \Gene\Bundle\QuestionnaireBundle\Entity\User $user
     * @return UserLastAnswer
     */
    public function setUser(\Gene\Bundle\QuestionnaireBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Gene\Bundle\QuestionnaireBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
