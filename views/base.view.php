<?php
    require_once('libs/Smarty/Smarty.class.php');

    class View  {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
        $this->smarty->assign('base_url', BASE_URL);
        $username = HelperAuth::userLogged();
        $this->getSmarty()->assign('username', $username);
        $session = HelperAuth::isLogged();
        $this->getSmarty()->assign('session', $session);
        $administer = HelperAuth::isAdmin();
        $this->getSmarty()->assign('administer', $administer);
    }    

    public function getSmarty() {
        return $this->smarty;
    }
}
