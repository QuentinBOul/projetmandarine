<?php 

namespace App\controller;

use App\core\Controller;
use App\model\Users;
use App\model\Clients;
use App\model\Contacts;

class UserController extends Controller
{

    public function login(){

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'get') {
            $this->renderView('default/index');
        } elseif (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $user = (new Users())->getOneByUsername($_POST['username']);
                if (is_null($user)) {
                    $this->renderView('default/index', [
                        'error' => "L'utilisateur n'existe pas"
                    ]);
                    return;
                }
                if ($_POST['password'] == $user->getPassUser()) {
                    
                    session_start();
                    $_SESSION['isLogged'] = true;
                    $user->beforeInsertInSession();
                    $_SESSION['user'] = $user;

                    // redirection vers dashboard1 (temporairement)
                    $this->redirectToRoute('dashboard1');
                } else {
                    $this->renderView('default/index', [
                        'error' => "Mauvais mot de passe !"
                    ]);
                    return;
                }
            }
        }

    }
    
    public function dashboard_com(){

        $this->renderView('user/gestion_commerciale/dashboard');
    }

    public function dashboard_project(){

        $this->renderView('user/gestion_projets/dashboard');
    }

    public function dashboard_rh(){

        $this->renderView('user/gestion_RH/dashboard');
    }


    //Affichage des clients
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

    public function addClient(){

        //$clients = (new Clients())->getAllClients();
        $this->renderView('user/gestion_commerciale/addClient');
    }


     //Affichage des contacts
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