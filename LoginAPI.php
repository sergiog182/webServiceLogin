<?php
	class LoginAPI
	{    
	    public function ingresar()
	    {
	        header('Content-Type: application/JSON');                
	        echo "<pre>" . var_export($_SERVER, true) . "</pre>";
	        $method = $_SERVER['REQUEST_METHOD'];
	        $respuesta = array();
	        if ($_GET['user'] != "" && $_GET['password'] != "") {
	        	$respuesta["permitido"] = true;
	        } else {
	        	$respuesta["permitido"] = false;
	        }
	        echo json_encode($respuesta);
	    }    
	}