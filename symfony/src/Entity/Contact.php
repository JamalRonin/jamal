<?php 
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert; 

class Contact{

    /**
     * @var string|null
     * @Assert\NotBlanc()
     * @Assert\Length(min=2, max=100)
     */
    private $nom;

       /**
     * @var string|null
     * @Assert\NotBlanc()
     * @Assert\Length(min=2, max=100)
     */
    private $prenom;


       /**
     * @var string|null
     * @Assert\NotBlanc()
     * @Assert\Regex(pattern="/[0-9]{10}/")
     */
    private $telephone;


           /**
     * @var string|null
     * @Assert\NotBlanc()
     * @Assert\Email()
     */
    private $mail;


           /**
     * @var string|null
     * @Assert\NotBlanc()
     * @Assert\length(min=10)
     */
    private $message;


    /**
     * Get the value of nom
     *
     * @return  string|null
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param  string|null  $nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     *
     * @return  string|null
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param  string|null  $prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of telephone
     *
     * @return  string|null
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @param  string|null  $telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of mail
     *
     * @return  string|null
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @param  string|null  $mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of message
     *
     * @return  string|null
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @param  string|null  $message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}