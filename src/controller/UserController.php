<?php

namespace App\controller;

use App\core\Controller;
use App\model\Users;
use App\model\Clients;
use App\model\Contacts;

class UserController extends Controller
{

    public function login()
    {

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
                if (password_verify($_POST['password'], $user->getPassUser())  ) {

                    $_SESSION['isLogged'] = true;
                    $user->beforeInsertInSession();
                    $_SESSION['user'] = $user;
                    echo '<script type="text/javascript">alert("Vous êtes bien connecté !")</script>';
                    echo "<script>setTimeout(\"location.href = '';\",300);</script>";
                } else {
                    $this->renderView('default/index', [
                        'error' => "Mauvais mot de passe !"
                    ]);
                    return;
                }
            }
        }
    }

    public function logout()
    {

        session_destroy();
        $this->redirectToRoute('');
    }

    public function dashboard_com()
    {
        $this->areYouCom();
        $this->renderView('user/gestion_commerciale/dashboard');
    }

    public function dashboard_project()
    {

        $this->renderView('user/gestion_projets/dashboard');
    }

    public function dashboard_rh()
    {

        $this->renderView('user/gestion_RH/dashboard');
    }

    public function aPropos()
    {
        $this->renderView('default/a_propos');
        
        if (isset($_SESSION['user']) && $_SESSION['isLogged'] == true) {
            $this->renderView('default/a_propos');            
        }
        $this->login();
    }


    //Affichage des clients
    public function clients()
    {
        $this->areYouCom();
        $clients = (new Clients())->getAllClients();
        $this->renderView('user/gestion_commerciale/clients', [
            'clients' => $clients
        ]);
    }

    public function clientProfil()
    {
        $this->areYouCom();
        $id = $_GET["clientProfil"];
        $client = (new Clients())->getOneByIdClient($id);
        $this->renderView('user/gestion_commerciale/profil/clientProfil', [
            'client' => $client
        ]);
    }

    public function formClient()
    {
        $this->areYouCom();
        $this->renderView('user/gestion_commerciale/formulaire/formClient');
    }

    public function addClient()
    {
        $this->areYouCom();
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

    public function editClient()
    {
        $this->areYouCom();
        $client = new Clients();
        $client->setId_sect($_POST['secteur']);
        $client->setRaison_sociale($_POST['raisonSociale']);
        $client->setAdresse_client($_POST['adresse']);
        $client->setCode_postal_client($_POST['codePostal']);
        $client->setVille_client($_POST['ville']);
        $client->setCa($_POST['ca']);
        $client->setEffectif($_POST['effectif']);
        $client->setTelephone_client($_POST['tel']);
        $client->setType_client($_POST['type']);
        $client->setNature_client($_POST['nature']);
        $client->setCommentaire_client($_POST['com']);
        $client->editClient();

        $this->redirectToRoute('clients');
    }

    public function deleteClient()
    {
        $this->areYouCom();
        $client = new Clients();
        $client->deleteClient();

        $this->redirectToRoute('clients');
    }


    //Affichage des contacts
    public function contacts()
    {
        $this->areYouCom();
        $contacts = (new Contacts())->getAllContacts();
        $this->renderView('user/gestion_commerciale/contacts', [
            'contacts' => $contacts
        ]);
    }

    public function contactProfil()
    {
        $this->areYouCom();
        $id = $_GET["contactProfil"];
        $contact = (new Contacts())->getOneByIdContact($id);
        $this->renderView('user/gestion_commerciale/profil/contactProfil', [
            'contact' => $contact
        ]);
    }

    public function formContact()
    {
        $this->areYouCom();
        $this->renderView('user/gestion_commerciale/formulaire/formContact');
    }

    public function addContact()
    {
        $this->areYouCom();
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

    public function editContact()
    {
        $this->areYouCom();
        $contact = new Contacts();
        $contact->setId_fonc($_POST['idFonction']);
        $contact->setNom_contact($_POST['nom']);
        $contact->setPrenom_contact($_POST['prenom']);
        $contact->setTel_contact($_POST['tel']);
        $contact->setEmail_contact($_POST['email']);
        $contact->setPhoto($_POST['photo']);
        $contact->setDuree($_POST['duree']);
        $contact->editContact();

        $this->redirectToRoute('contacts');
    }

    //Affichage des users
    public function profilUser()
    {
        $this->areYouRH();
        $id = $_GET["profilUser"];
        $user = (new Users())->getOneUser($id);
        $this->renderView('user/gestion_RH/profilUser', [
            'user' => $user
        ]);
    }

    public function usersList()
    {
        $this->areYouRH();
        $users = (new Users())->getAllUsers();
        $this->renderView('user/gestion_RH/usersList', [
            'users' => $users
        ]);
    }

    public function formUser()
    {
        $this->areYouRH();
        $this->renderView('user/gestion_RH/formUser');
    }

    public function addUser()
    {
        $this->areYouRH();
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $newUser = new Users();
            $newUser->setRole($_POST['role']);
            $newUser->setLoginUser($_POST['login_user']);
            $newUser->setPassUser(password_hash($_POST['pass_user'], PASSWORD_DEFAULT));
            $newUser->setUser();
        }

        $this->redirectToRoute('dashboard3');
    }

    public function editUser()
    {

        $this->areYouRH();
        $user = new Users();
        $user->setRole($_POST['role']);
        $user->setLoginUser($_POST['login_user']);
        $user->setPassUser(password_hash($_POST['pass_user'], PASSWORD_DEFAULT));
        $user->editUser();

        $this->redirectToRoute('dashboard3');
    }
    public function deleteUser()
    {
        $this->areYouRH();
        $user = new Users();
        $user->deleteUser();

        $this->redirectToRoute('dashboard3');
    }

    public function areYouDev()
    {

        if ($_SESSION == null || $_SESSION['isLogged'] == true && $_SESSION['user']->getRole() != 'dev') {


            $this->renderView('default/index', [
                'error' => "Vous n'êtes pas connecté en temps que developpeur !"
            ]);
            $this->login();
        } else {

            return;
        }
    }

    public function areYouCom()
    {

        if ($_SESSION == null || $_SESSION['isLogged'] == true && $_SESSION['user']->getRole() != 'com') {


            $this->renderView('default/index', [
                'error' => "Vous n'êtes pas connecté en temps que commercial !"
            ]);
            $this->login();
        } else {

            return;
        }
    }

    public function areYouRH()
    {

        if ($_SESSION == null || $_SESSION['isLogged'] == true && $_SESSION['user']->getRole() != 'rh') {


            $this->renderView('default/index', [
                'error' => "Vous n'êtes pas connecté en temps que RH !"
            ]);
            $this->login();
        } else {

            return;
        }
    }
}
