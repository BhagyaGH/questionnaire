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
    private $language;

    /**
     * @var string
     */
    private $sex;

    /**
     * @var string
     */
    private $birthYear;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $ethnicity;

    /**
     * @var string
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
     * @var string
     */
    private $isHealthRelated;

    /**
     * @var string
     */
    private $healthRelatedWork;

    /**
     * @var string
     */
    private $geneticEngineering;

    /**
     * @var string
     */
    private $financialSituation;

    /**
     * @var string
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
     * @var \DateTime
     */
    private $timestamp;

    /**
     * @var integer
     */
    private $reference;

    /**
     * @var string
     */
    private $ip;

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
     * Set language
     *
     * @param string $language
     * @return User
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
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
     * @param string $birthYear
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
     * @return string 
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
     * Set ethnicity
     *
     * @param string $ethnicity
     * @return User
     */
    public function setEthnicity($ethnicity)
    {
        $this->ethnicity = $ethnicity;

        return $this;
    }

    /**
     * Get ethnicity
     *
     * @return string 
     */
    public function getEthnicity()
    {
        return $this->ethnicity;
    }

    /**
     * Set isReligiousAffiliation
     *
     * @param string $isReligiousAffiliation
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
     * @return string 
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
     * @param string $isHealthRelated
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
     * @return string 
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
     * @param string $geneticEngineering
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
     * @return string 
     */
    public function getGeneticEngineering()
    {
        return $this->geneticEngineering;
    }

    /**
     * Set financialSituation
     *
     * @param string $financialSituation
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
     * @return string 
     */
    public function getFinancialSituation()
    {
        return $this->financialSituation;
    }

    /**
     * Set isInheritedGenetic
     *
     * @param string $isInheritedGenetic
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
     * @return string 
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
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return User
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set reference
     *
     * @param integer $reference
     * @return User
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return integer 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return User
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
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
