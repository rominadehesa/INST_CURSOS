<?php 
    require_once 'libs/Smarty.class.php';
class AdminView{

    private function encabezado(){

        $smarty = new Smarty(); 
        $smarty->assign('base_url', BASE_URL);
        $smarty->assign('titulo', "IDC Administrador"); 
        
        $smarty->assign('btnhome', "Home"); 
        $smarty->display('homeadmin.tpl');

    }

    public function viewFormLog(){
        echo $this->encabezado();
            
    }
    
}