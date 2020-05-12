<?php 
    require_once 'libs/Smarty.class.php';
class AutView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);
    }

    public function ViewFormLogin(){
        
        $this->smarty->display('admin.login.tpl');
        
    }
    
}