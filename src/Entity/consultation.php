<?php
declare(strict_type=1);

namespace App\entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="app_consultation")
 * @ORM\Entity()
 */

class Consultation
{

    /**
     * @var int|null
     *
     * @ORM\Column(name="id",type="integer")
     * @ORM\id()
     * @ORM\GeneratedValue(stategy="AUTO")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patientConcerner",type="string")

     */
    private $patientConcerner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="symptome",type="string")

     */
    private $symptome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDepuis",type="string")

     */
    private $dateDepuis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="natureMaladie",type="string")

     */
    private $natureMaladie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="testAFaire",type="string")

     */
    private $testAFaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire",type="string")

     */
    private $commentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateConsultation",type="date")

     */
    private $dateConsultation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="medicament",type="date")

     */
    private $medicament;



    /**
     * @return int|null

     */

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int|null $id
     */

    public function setId($id): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null

     */

    public function getPatientConcerner(): ?string
    {
        return $this->patientConcerner;
    }
    /**
     * @return string|null $nomPatient

     */

    public function setPatientConcerner($patientConcerner): ?string
    {
        return $this->patientConcerner;
    }
    /**
     * @return string|null

     */

    public function getSymptome(): ?string
    {
        return $this->symptome;
    }

    /**
     * @return string|null $prenomPatient

     */

    public function setSymptome($symptome): ?string
    {
        return $this->symptome;
    }
    /**
     * @return \DateTime

     */

    public function getDateDepuis(): \DateTime
    {
        return $this->dateDepuis;
    }
    /**
     * @return \DateTime $dateDepuis

     */

    public function setDateDepuis($dateDepuis): \DateTime
    {
        return $this->dateDepuis;
    }
    /**
     * @return string|null

     */

    public function getNatureMaladie(): ?string
    {
        return $this->natureMaladie;
    }

    /**
     * @return string|null $natureMaladie

     */

    public function setNatureMaladie($natureMaladie): ?string
    {
        return $this->natureMaladie;
    }
    /**
     * @return string|null

     */

    public function getTestAFaire(): ?string
    {
        return $this->testAFaire;
    }
    /**
     * @return string|null $testAFaire

     */

    public function setTestAFaire($testAFaire): ?string
    {
        return $this->testAFaire;
    }
    /**
     * @return string|null

     */

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }
    /**
     * @return string|null $email

     */

    public function setCommentaire($commentaire): ?string
    {
        return $this->commentaire;
    }
    /**
     * @return \DateTime

     */

    public function getDateConsultation(): \DateTime
    {
        return $this->dateConsultation;
    }
    /**
     * @return \DateTime $dateConsultation

     */

    public function setDateConsultation($dateConsultation): \DateTime
    {
        return $this->dateConsultation;
    }
    /**
     * @return string|null

     */

    public function getMedicament(): ?string
    {
        return $this->medicament;
    }
    /**
     * @return string|null $medicament

     */

    public function setMedicament($medicament): ?string
    {
        return $this->medicament;
    }





}
