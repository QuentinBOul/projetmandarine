<?php
namespace App\model;

use App\core\Model;
use App\core\Dao;



class Clients extends Model
{
    private int $id_client;
    private int $id_sect;
    private string $raison_sociale;
    private string $adresse_client;
    private string $code_postal_client;
    private string $ville_client;
    private int $ca;
    private int $effectif;
    private string $telephone_client;
    private string $type_client;
    private string $nature_client;
    private string $commentaire_client;



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
    public function getAllClients()
    {
        $clients = Dao::getMany(self::class);
        return $clients;
    }

    public function getOneByIdClient(int $id_client)
    {
        $clients = Dao::getOne(self::class,
            [
                'id_client' => $id_client
            ]);
        return $clients;
    }

    // Méthode ajout données
    public function setClient()
    {
        Dao::insertOne($this, get_object_vars($this));
    }
}