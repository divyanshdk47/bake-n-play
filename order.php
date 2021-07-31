
<?php
    $q=$_POST['dbc_6'];
    $q2=$_POST['dbc_12'];
    $q3=$_POST['cfc_6'];
    $q4=$_POST['cfc_12'];
    $q5=$_POST['ccc_6'];
    $q6=$_POST['ccc_12'];
    $q7=$_POST['mgc_6'];
    $q8=$_POST['mgc_12'];

    mysql_connect("localhost","root","");
    mysql_select_db("order");

    $query="UPDATE items SET q_6='$q', q_12='$q2' WHERE code='dbc' ";
    mysql_query($query);

    $query2="UPDATE items SET q_6='$q3', q_12='$q4' WHERE code='cfc' ";
    mysql_query($query2);

    $query3="UPDATE items SET q_6='$q5', q_12='$q6' WHERE code='ccc' ";
    mysql_query($query3);

    $query4="UPDATE items SET q_6='$q7', q_12='$q8' WHERE code='mgc' ";
    mysql_query($query4);

    echo "<center>";
    echo "<h1>Taking order of only 1 item at a time !!!!!</h1><br><br>";
    echo "<a href='bnp_order.php' onclick='closebk()'>OK</a> ";
    
    echo "</center>";

?>
