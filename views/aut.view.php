<?php 
    require_once('base.view.php');

    class AutView extends View{
    
    // Vista del formulario para que el usuario pueda loguearse
    public function ViewFormLogin($error = null){//parametros opcionales, a este metodo lo puedo llamar con o sin parametro
        $this->getSmarty()->assign('error', $error);
        $this->getSmarty()->display('admin.login.tpl');

    }

    public function ViewFormRegistry($error = null){
        $this->getSmarty()->assign('error', $error);
        $this->getSmarty()->display('admin.registry.tpl');
    }
    

}