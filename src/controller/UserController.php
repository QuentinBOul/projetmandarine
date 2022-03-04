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

    public function formClient(){

        $this->renderView('user/gestion_commerciale/formClient');
        
    }

    public function addClient(){

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $newClient = new Clients();
            $newClient->setId_sect($_POST['secteur']);
            $newClient->setRaison_sociale($_POST['raisonSociale']);
            $newClient->setAdresse_client($_POST['adresse']);
            $newClient->setCode_postal_client($_POST['codePostal']);
            $newClient->setVille_client($_POST['ville']);
            $newClient->setCa($_POST['ca']);
            $newClient->setEffectif($_POST['effectif']);
            $newClient->setTelephone_client($_POST['tel']);
            $newClient->setType_client($_POST['type']);
            $newClient->setNature_client($_POST['nature']);
            $newClient->setCommentaire_client($_POST['com']);
            $newClient->setClient();
        }

        $this->redirectToRoute('clients');
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
