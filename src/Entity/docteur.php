<?php
declare(strict_type=1);

namespace App\entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="app_docteur")
 * @ORM\Entity()
 */

class Docteur
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
     * @ORM\Column(name="nom",type="string")

     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom",type="string")

     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status",type="string")

     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email",type="string")

     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone",type="string")

     */
    private $phone;

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
     * @param  int|null $id

     */

    public function setId($id): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null

     */

    public function getNom(): ?string
    {
        return $this->nom;
    }
    /**
     * @param string|null $nom

     */

    public function setNom(?string $nom): void
    {
        $this->nom = $nom;
    }
    /**
     * @return string|null

     */

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }
    /**
     * @param  string|null $prenom

     */
    public function setPrenom(?string $prenom):void
    {
        $this->prenom = $prenom;
    }
    /**
     * @return string|null

     */

    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status

     */

    public function setStatus(?string $status):void
    {
        $this->status = $status;
    }
    /**
     * @return string|null

     */

    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * @param  string|null $email

     */

    public function setEmail($email): ?string
    {
        $this->email =$email;
    }
    /**
     * @return int|null

     */

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone

     */

    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }





}
