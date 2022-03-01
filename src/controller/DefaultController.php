<?php 

namespace App\controller;
use App\core\Controller;

class DefaultController extends Controller
{
    public function index(){
        //...
        $message = 'Hello World!';
        $user = 'John Doe';
        $this->renderView('default/index',[
            'message' => $message,
            'userName' => $user
            //...
        ]);
    } 
    public function my_second_action(mixed ...$values){
        
    }
}

?>