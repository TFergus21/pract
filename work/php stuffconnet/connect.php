<?php
$inputuser = $_POST ['user'];
$inputpass = $_POST ['password'];

$username="root";
$password="";
try
{
$handler = new PDO('mysql:host=localhost;dbname=myDBPDO',$username, $password);
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected";
}
//this catches the errors 
catch(PDOException $e)
{
	echo "Not connected:" . $e->getMessage();
}

/this print what is on the table info.
	  //$query = $handler->query('SELECT * FROM register');
      //while ( $r=$query->fetch(PDO::FETCH_NUM )) 
       // {
       // 	echo( print_r ( $r ,1 ) );
       // }



?>