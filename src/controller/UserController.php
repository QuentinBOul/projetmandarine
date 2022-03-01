<?php 

namespace App\controller;
use App\core\Controller;

class UserController extends Controller
{
    public function dashboard(){

        $this->renderView('user/dashboard');
    }
}

?>