<?php
    require_once('base.view.php');
    require_once('helpers/auth.helper.php');
    class AreasView extends View{

    public function __construct(){
        parent::__construct();
        $username = HelperAuth::userLogged();
        $this->getSmarty()->assign('username', $username);
    }
    
    // vista de todas las areas
    public function viewAreas($areas){
        $this->getSmarty()->assign('arreglo', $areas);
        $this->getSmarty()->display('showAreas.tpl');
    }
}