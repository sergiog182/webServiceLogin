<?php
    require_once "LoginAPI.php";    
    $loginAPI = new LoginAPI();
    if ($_GET['action'] == "login") {
    	$loginAPI->ingresar();	
    }
    