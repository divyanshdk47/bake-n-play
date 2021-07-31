<?php
	$name = $_POST['a'];
	$phone = $_POST['b'];
	$wa = $_POST['c'];
    $email = $_POST['d'];
	$add = $_POST['e'];

    mysql_connect("localhost","root","");
    mysql_select_db("order");

    $query="SELECT * FROM items WHERE q_6>'0' OR q_12>'0' ";
    $result=mysql_query($query);
    while($row=mysql_fetch_array($result))
    $v=$row[0];
    
    $query2="SELECT * FROM items WHERE q_6>'0' OR q_12>'0' ";
    $result2=mysql_query($query2);
    while($row2=mysql_fetch_array($result2))
    $v2=$row2[2];

    $query3="SELECT * FROM items WHERE q_6>'0' OR q_12>'0' ";
    $result3=mysql_query($query3);
    while($row3=mysql_fetch_array($result3))
    $v3=$row3[3];

    if($v2>0){

    $query="INSERT INTO cust VALUES('$name','$phone','$wa','$email','$add','$v','$v2','pack of 6')";
    mysql_query($query);

    echo "<center style='margin-top:60px;'>";
    echo "<h2>Order Received</h2><br>";
    echo "<img src='200w.gif'><br> ";
    echo "<h2>Thank You for Ordering<br>
                Visit Again.
    
            </h2><br><br>";
    echo "<a href='bake.php' onclick='closed()' target='_blank'><button>Press to go back </button></a>";
    echo "<script>
    function closed(){
    window.close('order.php');
    }
    </script>";
    echo "</center>";
    }

    else if($v3>0) {

    $query="INSERT INTO cust VALUES('$name','$phone','$wa','$email','$add','$v','$v3','pack of 12')";
    mysql_query($query);

    echo "<center>";
    echo "order received<br><br>";
    echo "<img src='200w.gif'> ";
    echo "<a href='bake.php' target='_blank'><button onclick='closed()'>Press to go back </button></a>";
    echo "<script>
    function closed(){
    window.close(cust.php);
    }
    </script>";
    echo "</center>";

    }

    else{

        echo " <center> ";
        echo "<h2>";
        echo "Sorry for inconvinience!!<br>";
        echo "Order not received<br> ";
        echo "Please re-order<br>";
        echo "</h2>";
        echo "<a href='bake.php' target='_blank'>Click Here</a>";
        echo " </center> ";
    }
   
 ?>
