
<?php
    $q=$_POST['vch'];
    $q2=$_POST['vch_1'];
    $q3=$_POST['choch'];
    $q4=$_POST['choch_1'];
    $q5=$_POST['sch'];
    $q6=$_POST['sch_1'];
    $q7=$_POST['rvch'];
    $q8=$_POST['rvch_1'];

    mysql_connect("localhost","root","");
    mysql_select_db("order");

    $query="UPDATE items SET q_6='$q', q_12='$q2' WHERE code='vch' ";
    mysql_query($query);

    $query2="UPDATE items SET q_6='$q3', q_12='$q4' WHERE code='choch' ";
    mysql_query($query2);

    $query3="UPDATE items SET q_6='$q5', q_12='$q6' WHERE code='sch' ";
    mysql_query($query3);

    $query4="UPDATE items SET q_6='$q7', q_12='$q8' WHERE code='rvch' ";
    mysql_query($query4);

    echo "<a href='bnp_order.php'>Click here</a> ";

?>
