<?php 

namespace App\controller;

use App\core\Controller;
use App\model\Clients;

class UserController extends Controller
{
    public function dashboard_com(){

        $this->renderView('user/gestion_commerciale/dashboard');
    }

    public function dashboard_project(){

        $this->renderView('user/gestion_projets/dashboard');
    }

    public function dashboard_rh(){

        $this->renderView('user/gestion_RH/dashboard');
    }

    public function clientProfil(){
        $id = $_GET["clientProfil"];
        $client = (new Clients())->getOneById($id);
        $this->renderView('user/gestion_commerciale/clientProfil', [
            'client' => $client
        ]);
    }

    public function clients(){

        $clients = (new Clients())->getAll();
        $this->renderView('user/gestion_commerciale/clients', [
            'clients' => $clients
        ]);
    }

    public function contacts(){

        $this->renderView('user/gestion_commerciale/contacts');
    }
    
}

?>