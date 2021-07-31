<?php
	$name = $_POST['a'];
	$phone = $_POST['b'];
	$wa = $_POST['c'];
  $email = $_POST['d'];
	$add = $_POST['e'];


  mysql_connect("localhost","root","");
  mysql_select_db("order");

  $query="INSERT INTO cust VALUES('$name','$phone','$wa','$email','$add')";
  mysql_query($query);

  echo"mast naam hai<br>";

  ?>
