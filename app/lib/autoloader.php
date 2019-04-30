<?php

function autochargement($nomClass) {
    if (file_exists(LIB.DS.strtolower($nomClass) . '.php'))
    {
        require_once(LIB.DS.strtolower($nomClass) . '.php') ;
    }elseif (file_exists(CONTROLLER.DS.strtolower($nomClass) . '.php'))
    {
        require_once(CONTROLLER.DS.strtolower($nomClass) . '.php') ;
    }elseif (file_exists(MODEL.DS.strtolower($nomClass) . '.php'))
    {
        require_once(MODEL.DS.strtolower($nomClass) . '.php') ;
    }else{
        throw new Exception("Classe $nomClass non trouvé");
    }



}
spl_autoload_register('autochargement');