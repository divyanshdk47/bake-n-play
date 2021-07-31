
<?php
    $q=$_POST['appi'];
    $q2=$_POST['appi_1'];
    $q3=$_POST['cs_6'];
    $q4=$_POST['cs_12'];
    $q5=$_POST['pupi'];
    $q6=$_POST['pupi_1'];
    

    mysql_connect("localhost","root","");
    mysql_select_db("order");

    $query="UPDATE items SET q_6='$q', q_12='$q2' WHERE code='appi' ";
    mysql_query($query);

    $query2="UPDATE items SET q_6='$q3', q_12='$q4' WHERE code='cs' ";
    mysql_query($query2);

    $query3="UPDATE items SET q_6='$q5', q_12='$q6' WHERE code='pupi' ";
    mysql_query($query3);

   

    echo "<a href='bnp_order.php'>Click here</a> ";

?>
