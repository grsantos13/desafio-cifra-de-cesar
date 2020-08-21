 <?php

	session_start();
	date_default_timezone_set('America/Sao_Paulo');
	$autoload = function($class){
		if ($class == 'Email'){
			include('class/phpmailer/PHPMailerAutoLoad.php');
		}
		include('class/'.$class.'.php');
	};
	spl_autoload_register($autoload);

	define("INCLUDE_PATH", "http://localhost/DesenvolvimentoWeb/Projeto Pessoal/Sistema Financeiro/");
	//Conectar DB
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'financas');
	define('NOME_EMPRESA', 'Aprimore');
?>