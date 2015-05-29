<?php

namespace Gene\Bundle\QuestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var string
     */
    private $sex;

    /**
     * @var \DateTime
     */
    private $birthYear;

    /**
     * @var string
     */
    private $country;

    /**
     * @var boolean
     */
    private $isReligiousAffiliation;

    /**
     * @var string
     */
    private $religiousAffiliationType;

    /**
     * @var string
     */
    private $education;

    /**
     * @var boolean
     */
    private $isHealthRelated;

    /**
     * @var string
     */
    private $healthRelatedWork;

    /**
     * @var boolean
     */
    private $geneticEngineering;

    /**
     * @var boolean
     */
    private $financialSituation;

    /**
     * @var boolean
     */
    private $isInheritedGenetic;

    /**
     * @var string
     */
    private $inheritedGeneticWho;

    /**
     * @var string
     */
    private $inheritedGeneticWhat;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $question;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->question = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set sex
     *
     * @param string $sex
     * @return User
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set birthYear
     *
     * @param \DateTime $birthYear
     * @return User
     */
    public function setBirthYear($birthYear)
    {
        $this->birthYear = $birthYear;

        return $this;
    }

    /**
     * Get birthYear
     *
     * @return \DateTime 
     */
    public function getBirthYear()
    {
        return $this->birthYear;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set isReligiousAffiliation
     *
     * @param boolean $isReligiousAffiliation
     * @return User
     */
    public function setIsReligiousAffiliation($isReligiousAffiliation)
    {
        $this->isReligiousAffiliation = $isReligiousAffiliation;

        return $this;
    }

    /**
     * Get isReligiousAffiliation
     *
     * @return boolean 
     */
    public function getIsReligiousAffiliation()
    {
        return $this->isReligiousAffiliation;
    }

    /**
     * Set religiousAffiliationType
     *
     * @param string $religiousAffiliationType
     * @return User
     */
    public function setReligiousAffiliationType($religiousAffiliationType)
    {
        $this->religiousAffiliationType = $religiousAffiliationType;

        return $this;
    }

    /**
     * Get religiousAffiliationType
     *
     * @return string 
     */
    public function getReligiousAffiliationType()
    {
        return $this->religiousAffiliationType;
    }

    /**
     * Set education
     *
     * @param string $education
     * @return User
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return string 
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set isHealthRelated
     *
     * @param boolean $isHealthRelated
     * @return User
     */
    public function setIsHealthRelated($isHealthRelated)
    {
        $this->isHealthRelated = $isHealthRelated;

        return $this;
    }

    /**
     * Get isHealthRelated
     *
     * @return boolean 
     */
    public function getIsHealthRelated()
    {
        return $this->isHealthRelated;
    }

    /**
     * Set healthRelatedWork
     *
     * @param string $healthRelatedWork
     * @return User
     */
    public function setHealthRelatedWork($healthRelatedWork)
    {
        $this->healthRelatedWork = $healthRelatedWork;

        return $this;
    }

    /**
     * Get healthRelatedWork
     *
     * @return string 
     */
    public function getHealthRelatedWork()
    {
        return $this->healthRelatedWork;
    }

    /**
     * Set geneticEngineering
     *
     * @param boolean $geneticEngineering
     * @return User
     */
    public function setGeneticEngineering($geneticEngineering)
    {
        $this->geneticEngineering = $geneticEngineering;

        return $this;
    }

    /**
     * Get geneticEngineering
     *
     * @return boolean 
     */
    public function getGeneticEngineering()
    {
        return $this->geneticEngineering;
    }

    /**
     * Set financialSituation
     *
     * @param boolean $financialSituation
     * @return User
     */
    public function setFinancialSituation($financialSituation)
    {
        $this->financialSituation = $financialSituation;

        return $this;
    }

    /**
     * Get financialSituation
     *
     * @return boolean 
     */
    public function getFinancialSituation()
    {
        return $this->financialSituation;
    }

    /**
     * Set isInheritedGenetic
     *
     * @param boolean $isInheritedGenetic
     * @return User
     */
    public function setIsInheritedGenetic($isInheritedGenetic)
    {
        $this->isInheritedGenetic = $isInheritedGenetic;

        return $this;
    }

    /**
     * Get isInheritedGenetic
     *
     * @return boolean 
     */
    public function getIsInheritedGenetic()
    {
        return $this->isInheritedGenetic;
    }

    /**
     * Set inheritedGeneticWho
     *
     * @param string $inheritedGeneticWho
     * @return User
     */
    public function setInheritedGeneticWho($inheritedGeneticWho)
    {
        $this->inheritedGeneticWho = $inheritedGeneticWho;

        return $this;
    }

    /**
     * Get inheritedGeneticWho
     *
     * @return string 
     */
    public function getInheritedGeneticWho()
    {
        return $this->inheritedGeneticWho;
    }

    /**
     * Set inheritedGeneticWhat
     *
     * @param string $inheritedGeneticWhat
     * @return User
     */
    public function setInheritedGeneticWhat($inheritedGeneticWhat)
    {
        $this->inheritedGeneticWhat = $inheritedGeneticWhat;

        return $this;
    }

    /**
     * Get inheritedGeneticWhat
     *
     * @return string 
     */
    public function getInheritedGeneticWhat()
    {
        return $this->inheritedGeneticWhat;
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

    /**
     * Add question
     *
     * @param \Gene\Bundle\QuestionnaireBundle\Entity\QuestionEnglish $question
     * @return User
     */
    public function addQuestion(\Gene\Bundle\QuestionnaireBundle\Entity\QuestionEnglish $question)
    {
        $this->question[] = $question;

        return $this;
    }

    /**
     * Remove question
     *
     * @param \Gene\Bundle\QuestionnaireBundle\Entity\QuestionEnglish $question
     */
    public function removeQuestion(\Gene\Bundle\QuestionnaireBundle\Entity\QuestionEnglish $question)
    {
        $this->question->removeElement($question);
    }

    /**
     * Get question
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
