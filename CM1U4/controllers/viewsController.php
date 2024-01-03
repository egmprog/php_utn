<?php

class viewsController {
public function CtrObtenerVista(){
    include "./views/inc/nav.php";
    include "./views/contents/" . $_GET['vista'] . ".php";
    include "./views/inc/footer.php";
    exit;
    
}
}