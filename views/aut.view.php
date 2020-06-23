<?php 
    require_once 'libs/Smarty/Smarty.class.php';
class AutView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);
    }
    
    // Vista del formulario para que el usuario pueda loguearse
    public function ViewFormLogin($error = null){//parametros opcionales, a este metodo lo puedo llamar con o sin parametro
        $this->smarty->assign('error', $error);
        $this->smarty->display('admin.login.tpl');


    }
    

}