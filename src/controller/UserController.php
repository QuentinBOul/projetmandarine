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

                    if ($_SESSION['user']->getRole() == "com"){

                        // redirection vers dashboard com
                        $this->redirectToRoute('dashboard1'); 

                    } else if ($_SESSION['user']->getRole() == "dev"){

                        // redirection vers dashboard dev
                        $this->redirectToRoute('dashboard2');

                    } else{

                        // redirection vers dashboard rh
                        $this->redirectToRoute('dashboard3');

                    }

                } else {
                    $this->renderView('default/index', [
                        'error' => "Mauvais mot de passe !"
                    ]);
                    return;
                }
            }
        }

    }

    public function logout(){

        session_start();
        session_destroy();
        $this->redirectToRoute('');

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
        $this->renderView('user/gestion_commerciale/profil/clientProfil', [
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

        $this->renderView('user/gestion_commerciale/formulaire/formClient');
        
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

    public function editClient(){

        $this->renderView('user/gestion_commerciale/edit/editClient');

    }


     //Affichage des contacts
    public function contactProfil(){

        $id = $_GET["contactProfil"];
        $contact = (new Contacts())->getOneByIdContact($id);
        $this->renderView('user/gestion_commerciale/profil/contactProfil', [
            'contact' => $contact
        ]);
    }

    public function contacts(){

        $contacts = (new Contacts())->getAllContacts();
        $this->renderView('user/gestion_commerciale/contacts', [
            'contacts' => $contacts
        ]);
    }

    public function formContact(){

        $this->renderView('user/gestion_commerciale/formulaire/formContact');
        
    }

    public function addContact(){

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $newContact = new Contacts();
            $newContact->setId_client($_POST['idClient']);
            $newContact->setId_fonc($_POST['fonction']);
            $newContact->setNom_contact($_POST['nom']);
            $newContact->setPrenom_contact($_POST['prenom']);
            $newContact->setTel_contact($_POST['tel']);
            $newContact->setEmail_contact($_POST['email']);
            $newContact->setPhoto($_POST['photo']);
            $newContact->setDuree($_POST['duree']);
            $newContact->setContact();
        }

        $this->redirectToRoute('contacts');
    }

    public function editContact(){

        $this->renderView('user/gestion_commerciale/edit/editContact');
                
    }

    //Affichage des users
    public function profilUser(){

        $id = $_GET["profilUser"];
        $user = (new Users())->getOneUser($id);
        $this->renderView('user/gestion_RH/profilUser', [
            'user' => $user
        ]);
    }

    public function usersList(){

        $users = (new Users())->getAllUsers();
        $this->renderView('user/gestion_RH/usersList', [
            'users' => $users
        ]);
    }

    public function formUser(){

        $this->renderView('user/gestion_RH/formUser');
        
    }

    public function addUser(){

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $newUser = new Users();
            $newUser->setRole($_POST['role']);
            $newUser->setLoginUser($_POST['login_user']);
            $newUser->setPassUser($_POST['pass_user']);
            $newUser->setUser();
        }

        $this->redirectToRoute('dashboard3');
    }

    public function editUser(){

        $this->renderView('user/gestion_RH/editUser');
                
    }
    public function deleteUser(){

        $this->renderView('user/gestion_RH/deleteUser');
                
    }
    
}