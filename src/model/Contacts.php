<?php
namespace App\model;

use App\core\Model;
use App\core\Dao;



class Contacts extends Model
{
    private int $id_contact;
    private int $id_client;
    private int $id_fonc;
    private string $nom_contact;
    private string $prenom_contact;
    private string $tel_contact;
    private string $email_contact;
    private string $photo;
    private int $duree;



    /**
     * @return mixed
     */
    public function getId_contact()
    {
        return $this->id_contact;
    }

    /**
     * @return mixed
     */
    public function getId_client()
    {
        return $this->id_client;
    }

    /**
     * @return mixed
     */
    public function setId_client($id_client): void
    {
        $this->id_client = $id_client;
    }

    /**
     * @return mixed
     */
    public function getId_fonc()
    {
        return $this->id_fonc;
    }

    /**
     * @return mixed
     */
    public function setId_fonc($id_fonc): void
    {
        $this->id_fonc = $id_fonc;
    }

    /**
     * @return mixed
     */
    public function getNom_contact()
    {
        return $this->nom_contact;
    }

    /**
     * @return mixed
     */
    public function setNom_contact($nom_contact): void
    {
        $this->nom_contact = $nom_contact;
    }

    /**
     * @return mixed
     */
    public function getPrenom_contact()
    {
        return $this->prenom_contact;
    }

    /**
     * @param mixed 
     */
    public function setPrenom_contact($prenom_contact): void
    {
        $this->prenom_contact = $prenom_contact;
    }

    /**
     * @return mixed
     */
    public function getTel_contact()
    {
        return $this->tel_contact;
    }

    /**
     * @return mixed
     */
    public function setTel_contact($tel_contact): void
    {
        $this->tel_contact = $tel_contact;
    }

    /**
     * @return mixed
     */
    public function getEmail_contact()
    {
        return $this->email_contact;
    }

    /**
     * @return mixed
     */
    public function setEmail_contact($email_contact): void
    {
        $this->email_contact = $email_contact;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @return mixed
     */
    public function setPhoto($photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @return mixed
     */
    public function setDuree($duree): void
    {
        $this->duree = $duree;
    }


    // Méthodes récupérations données
    
    public function getAllContacts()
    {
        $contacts = Dao::getMany(self::class);
        return $contacts;
    }

    public function getOneByIdContact(int $id_contact)
    {
        $contacts = Dao::getOne(self::class,
            [
                'id_contact' => $id_contact
            ]);
        return $contacts;
    }

    
    // Méthode ajout données

    public function setContact()
    {
        Dao::insertOne($this, get_object_vars($this));
    }
}