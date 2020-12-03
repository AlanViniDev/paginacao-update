<?php
/*Conexao com banco de dados*/
/* Constantes */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'produtos');
define('PORT', '');

/* Classe Conexão */
class Conection 
{

    public $conexao;
    
    function Conecta ()
    {
		try
		{
			$this->conexao = new pdo('mysql:host=' . HOST . ';port=' . PORT . ';dbname=' . DBNAME, USER, PASS);
		}
		catch (PDOException $e)
		{
			echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
		}
	}
}
