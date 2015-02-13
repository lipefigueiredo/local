<?php
 /*  CRIANDO CONEXAO  COM BANCO DE DADOS 
 PHP + MYSQL VERSAO 1.0
 */
$bdservidor = '127.0.0.1' ;    // aqui vem seu servidor 
$bdUsuario = 'root'  ;      // aqui vem o nome de usuario do seu banco
$bdSenha = '' ;               // aqui vem a senha do banco
$dbBanco = 'dbphp'   ;        // aqui vem o nome do banco 
$conexao = mysqli_connect($bdservidor, $bdUsuario , $bdSenha , $dbBanco );  //aqui a variavel conexao recebe  servidor , usuario , senha , banco
   if ( mysqli_connect_errno($conexao)) {  // se conexao tiver erro
        echo " problemas para conectar no banco verifique os dados!"; // imprime na tela a mensagem de erro
	   die();   
    }

    
    
