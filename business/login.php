<?php
	class business_Login
	{
		/*
		* Valida si un usuario es autorizado o no
		* @param $in->user string Usuario que intenta ingresar
		* @param $in->password string password de ingreso
		* return $out
		* $out->status boolean indica si el usuario es autorizado
		*/
		public function login($in) {
			$out = new stdClass();
			try {
				if (empty($in->sumandoa) || empty($in->sumandob)) {
					$out->status = "NOK";
					$out->statusMessage = "La suma requiere dos numeros";
				} else {
					$out->resultado = $in->sumandoa + $in->sumandob;
					$out->status = "OK";
					$out->statusMessage = "Suma realizada";	
				}
			} catch(Exception $e) {
				$out->status = "NOK";
				$out->statusMessage = $e->getMessage();
			}

			return $out;
		}
	}