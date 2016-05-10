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
    $ins = "INSERT INTO 
    UserName (userName, pass) 
    VALUES
   ('mrbool','mrbool123')";
         
     //this runs is the part that executes $ins
       $handler->exec($ins);
     echo "inserted successfully"; 
	 
    //this creates a new table.
          //$create = "CREATE TABLE UserName(
	      //UserNameID int(9) NOT NULL auto_increment, 
		  //userName VARCHAR(40) NOT NULL, 
		  //pass VARCHAR(40) NOT NULL, 
		  //PRIMARY KEY(UserNameID) )";
	
	//this is the part that excutes it. 
	    //$handler->exec($create);
	    //echo "your table has been created";
	
	
?>