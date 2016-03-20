<?php

	header('Access-Control-Allow-Origin: *');
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "trainx";


/*
$mysqli = new MySQL($hostname,$username,$password,$db_name);
if($mysql->connect_error){
	echo "error login";
}

else
{
	*/
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("trainx", $connection);
 $markers = array();
	$query ="SELECT * FROM customers ";

$result = mysql_query($query);
if (mysql_num_rows($result) > 0) {
    // output data of each row
    while($row = mysql_fetch_array($result)) {
      //  echo $row["id"]."-";
	  
	   $markers[] = array(
      'id' => $row['customerId'],
      'login' => $row['email'],
      'password' => $row['Password'],
      'phoneNumber' => $row['phoneNumber'],
      'customerfname' => $row['customerfname'],
      'customerlname' => $row['customerlname'],

    );
}

echo json_encode($markers);
}