<?php
class DBConnection{
	function getConnection(){
	  //change to your database server/user name/password
		//mysql_connect("localhost","root","") or
		$mysqli = new mysqli('localhost', 'root', '', 'calendar');
		 
		 $mysqli->set_charset("utf8");
		 
		 return $mysqli;
    //change to your database name
		//mysql_select_db("calendar") or 
		//     die("Could not select database: " . mysql_error());
	}
}
?>