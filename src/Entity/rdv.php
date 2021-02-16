<?php
declare(strict_type=1);

namespace App\entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="app_rdv")
 * @ORM\Entity()
 */

class Rdv
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
     * @ORM\Column(name="venantDe",type="string")

     */
    private $venantDe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="docteurConcerner",type="string")

     */
    private $docteurConcerner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone",type="string")

     */
    private $phone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRdv",type="date")

     */
    private $dateRdv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timeRdv",type="timestamp")

     */
    private $timeRdv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire",type="timestamp")

     */
    private $commentaire;

    /**
     * Les lignes suivantes nous montre les setters et getters
     */

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

    public function getVenantDe(): ?string
    {
        return $this->venantDe;
    }
    /**
     * @return string|null $venantDe

     */

    public function setVenantDe($venantDe): ?string
    {
        return $this->venantDe;
    }
    /**
     * @return string|null

     */

    public function getDocteurConcerner(): ?string
    {
        return $this->docteurConcerner;
    }

    /**
     * @return string|null $docteurConcerner

     */

    public function setDocteurConcerner($docteurConcerner): ?string
    {
        return $this->docteurConcerner;
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
     * @return \DateTime

     */

    public function getDateRdv(): \DateTime
    {
        return $this->dateRdv;
    }

    /**
     * @return \DateTime $dateRdv

     */

    public function setDateRdv($dateRdv){
        return $this->phone;
    }
    /**
     * @return \DateTime

     */

    public function getTimeRdv(): \DateTime
    {
        return $this->timeRdv;
    }

    /**
     * @return \DateTime $timeRdv

     */

    public function setTimeRdv($timeRdv): \DateTime
    {
        return $this->timeRdv;
    }





}
