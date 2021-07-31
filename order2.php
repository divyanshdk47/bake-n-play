
<?php
    $q=$_POST['cdcb_6'];
    $q2=$_POST['cdcb_12'];
    $q3=$_POST['cb_6'];
    $q4=$_POST['cb_12'];
    $q5=$_POST['cfb_6'];
    $q6=$_POST['cfb_12'];
    $q7=$_POST['ccb_6'];
    $q8=$_POST['ccb_12'];

    mysql_connect("localhost","root","");
    mysql_select_db("order");

    $query="UPDATE items SET q_6='$q', q_12='$q2' WHERE code='cdcb' ";
    mysql_query($query);

    $query2="UPDATE items SET q_6='$q3', q_12='$q4' WHERE code='cb' ";
    mysql_query($query2);

    $query3="UPDATE items SET q_6='$q5', q_12='$q6' WHERE code='cfb' ";
    mysql_query($query3);

    $query4="UPDATE items SET q_6='$q7', q_12='$q8' WHERE code='ccb' ";
    mysql_query($query4);

    echo "<a href='bnp_order.php'>Click here</a> ";

?>
