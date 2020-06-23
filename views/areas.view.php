<?php

    require_once 'libs/Smarty/Smarty.class.php';

    class AreasView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);
        $username = HelperAuth::userLogged();
        $this->smarty->assign('username', $username);
    }
    
    // vista de todas las areas
    public function viewAreas($areas){
        $this->smarty->assign('arreglo', $areas);
        $this->smarty->display('showAreas.tpl');
    }
}