<?php 

namespace App\controller;
use App\core\Controller;

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

    public function clients(){

        $this->renderView('user/gestion_commerciale/clients');
    }

    public function contacts(){

        $this->renderView('user/gestion_commerciale/contacts');
    }
}

?>