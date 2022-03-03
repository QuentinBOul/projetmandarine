<?php 

namespace App\controller;

use App\core\Controller;
use App\model\Clients;
use App\model\Contacts;

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
        $client = (new Clients())->getOneByIdClient($id);
        $this->renderView('user/gestion_commerciale/clientProfil', [
            'client' => $client
        ]);
    }

    public function clients(){

        $clients = (new Clients())->getAllClients();
        $this->renderView('user/gestion_commerciale/clients', [
            'clients' => $clients
        ]);
    }

    public function contactProfil(){

        $id = $_GET["contactProfil"];
        $contact = (new Contacts())->getOneByIdContact($id);
        $this->renderView('user/gestion_commerciale/contactProfil', [
            'contact' => $contact
        ]);
    }

    public function contacts(){

        $contacts = (new Contacts())->getAllContacts();
        $this->renderView('user/gestion_commerciale/contacts', [
            'contacts' => $contacts
        ]);
    }
    
}

?>