<?php

//defini une var config pour le site
Config::set("site_name" , "Restaurant");
//defini une var config pour la bdd
Config::set("db_user", "root");
Config::set("db_pwd", "troiswa");
//defini mon controleur par defaut
Config::set("default_controller", "default");
//defini ma la fonction par defaut ma page index
Config::set("default_action", "index");
//defini mon layout(header/footer)
Config::set("default_layout", "layout");
//defini les accès de la bdd
Config::set("db_name", "restaurant");
Config::set("db_host", "localhost");
