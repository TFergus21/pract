<?php
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
    //this deletes any specifed element form the table.
	//$del=('DELETE FROM info WHERE id=6');
	//$handler->exec($del);
	//echo "success";
     //this print what is on the table info.
	  //$query = $handler->query('SELECT * FROM register');
      //while ( $r=$query->fetch(PDO::FETCH_NUM )) 
       // {
       // 	echo( print_r ( $r ,1 ) );
       // }
	   
       //inserts valuses into the table 
       $ins = "INSERT INTO user ( ID, user, password )
       VALUES ('', 'k', 'dan3')";
         
     //this runs is the part that executes $ins
       $handler->exec($ins);
     echo "inserted successfully"; 
	 
    //this creates a new table.
        //$create = "CREATE TABLE users (
	    //id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   	   // firstname 	varchar(20) NOT NULL,
   	   // lastname 	varchar(20) NOT NULL,
   	   // email 		varchar(30)	NOT NULL)";
	
	//this is the part that excutes it. 
	  //$handler->exec($create);
	 // echo "your table has been created";
	
	
?>