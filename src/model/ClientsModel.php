<?php
namespace App\model;

use App\core\Model;
use App\core\Dao;



class Clients extends Model
{
    private $id_client;
    private $id_sect;
    private $raison_sociale;
    private $adresse_client;
    private $code_postal_client;
    private $ville_client;
    private $ca;
    private $effectif;
    private $telephone_client;
    private $type_client;
    private $nature_client;
    private $commentaire_client;



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
    public function getId_sect()
    {
        return $this->id_sect;
    }

    /**
     * @return mixed
     */
    public function setId_sect($id_sect): void
    {
        $this->id_sect = $id_sect;
    }

    /**
     * @return mixed
     */
    public function getRaison_sociale()
    {
        return $this->raison_sociale;
    }

    /**
     * @return mixed
     */
    public function setRaison_sociale($raison_sociale): void
    {
        $this->raison_sociale = $raison_sociale;
    }

    /**
     * @return mixed
     */
    public function getAdresse_client()
    {
        return $this->adresse_client;
    }

    /**
     * @return mixed
     */
    public function setAdresse_client($adresse_client): void
    {
        $this->adresse_client = $adresse_client;
    }

    /**
     * @return mixed
     */
    public function getCode_postal_client()
    {
        return $this->code_postal_client;
    }

    /**
     * @param mixed 
     */
    public function setCode_postal_client($code_postal_client): void
    {
        $this->code_postal_client = $code_postal_client;
    }

    /**
     * @return mixed
     */
    public function getVille_client()
    {
        return $this->ville_client;
    }

    /**
     * @return mixed
     */
    public function setVille_client($ville_client): void
    {
        $this->ville_client = $ville_client;
    }

    /**
     * @return mixed
     */
    public function getCa()
    {
        return $this->ca;
    }

    /**
     * @return mixed
     */
    public function setCa($ca): void
    {
        $this->ca = $ca;
    }

    /**
     * @return mixed
     */
    public function getEffectif()
    {
        return $this->effectif;
    }

    /**
     * @return mixed
     */
    public function setEffectif($effectif): void
    {
        $this->effectif = $effectif;
    }

    /**
     * @return mixed
     */
    public function getTelephone_client()
    {
        return $this->telephone_client;
    }

    /**
     * @return mixed
     */
    public function setTelephone_client($telephone_client): void
    {
        $this->telephone_client = $telephone_client;
    }

    /**
     * @return mixed
     */
    public function getType_client()
    {
        return $this->type_client;
    }

    /**
     * @return mixed
     */
    public function setType_client($type_client): void
    {
        $this->type_client = $type_client;
    }

    /**
     * @return mixed
     */
    public function getNature_client()
    {
        return $this->nature_client;
    }

    /**
     * @return mixed
     */
    public function setNature_client($nature_client): void
    {
        $this->nature_client = $nature_client;
    }

    /**
     * @return mixed
     */
    public function getCommentaire_client()
    {
        return $this->commentaire_client;
    }

    /**
     * @return mixed
     */
    public function setCommentaire_client($commentaire_client): void
    {
        $this->commentaire_client = $commentaire_client;
    }


    // Méthodes récupérations données
    /*public function getAll()
    {
        $clients = Dao::getMany(self::class);
        return $clients;
    }

    public function getOneById(int $id_client)
    {
        $clients = Dao::getOne(self::class,
            [
                'id' => $id
            ]);
        return $clients;
    }*/
}