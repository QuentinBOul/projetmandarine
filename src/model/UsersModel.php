<?php
namespace App\model;

use App\core\Model;
use App\core\Dao;



class Users extends Model
{
    private $id_user;
    private $role;
    private $login_user;
    private $pass_user;
    
    

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

        /**
     * @return mixed
     */
    public function getLoginUser()
    {
        return $this->login_user;
    }

        /**
     * @return mixed
     */
    public function getPassUser()
    {
        return $this->pass_user;
    }


    /**
     * @return mixed
     */
    public function setIdUser($id_user): void
    {
        $this->id_user = $id_user;
    }


    /**
     * @return mixed
     */
    public function setRole($role): void
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function setLoginUser($login_user): void
    {
        $this->login_user = $login_user;
    }

    /**
     * @param mixed 
     */
    public function setPassUser($pass_user): void
    {
        $this->pass_user = $pass_user;
    }

    // Méthodes récupérations données
    /*
    public function getAll()
    {
        $contacts = Dao::getMany(self::class);
        return $contacts;
    }

    public function getOneById(int $id_client)
    {
        $contacts = Dao::getOne(self::class,
            [
                'id' => $id_client
            ]);
        return $contacts;
    }
    */
}