<?php
declare(strict_type=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="app_patient")
 * @ORM\Entity()
 */

class Patient
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
     * @ORM\Column(name="nomPatient",type="string")

     */
    private $nomPatient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenomPatient",type="string")

     */
    private $prenomPatient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="genre",type="string")

     */
    private $genre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeNaissance",type="string")

     */
    private $dateDeNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse",type="string")

     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email",type="string")

     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone",type="date")

     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status",type="date")

     */
    private $status;
    /**
     * @var string|null
     *
     * @ORM\Column(name="couverture",type="date")

     */
    private $couverture;


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

    public function getNomPatient(): ?string
    {
        return $this->nomPatient;
    }
    /**
     * @return string|null $nomPatient

     */

    public function setNomPatient($nomPatient): ?string
    {
        return $this->nomPatient;
    }
    /**
     * @return string|null

     */

    public function getPrenomPatient(): ?string
    {
        return $this->prenomPatient;
    }

    /**
     * @return string|null $prenomPatient

     */

    public function setPrenomPatient($prenomPatient): ?string
    {
        return $this->prenomPatient;
    }
    /**
     * @return string|null

     */

    public function getGenre(): ?string
    {
        return $this->genre;
    }
    /**
     * @return string|null $genre

     */

    public function setGenre($genre): ?string
    {
        return $this->genre;
    }
    /**
     * @return \DateTime

     */

    public function getDateDeNaissance(): \DateTime
    {
        return $this->dateDeNaissance;
    }

    /**
     * @return \DateTime $dateDeNaissance

     */

    public function setDateDeNaissance($dateDeNaissance): \DateTime
    {
        return $this->dateDeNaissance;
    }
    /**
     * @return string|null

     */

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }
    /**
     * @return string|null $adresse

     */

    public function setAdresse($adresse): ?string
    {
        return $this->adresse;
    }
    /**
     * @return string|null

     */

    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * @return string|null $email

     */

    public function setEmail($email): ?string
    {
        return $this->email;
    }
    /**
     * @return string|null

     */

    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * @return string|null $phone

     */

    public function setPhone($phone): ?string
    {
        return $this->phone;
    }
    /**
     * @return string|null

     */

    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * @return string|null $status

     */

    public function setStatus($status): ?string
    {
        return $this->status;
    }
    /**
     * @return string|null

     */

    public function getCouverture(): ?string
    {
        return $this->couverture;
    }
    /**
     * @return string|null $couverture

     */

    public function setCouverture($couverture): ?string
    {
        return $this->couverture;
    }




}
