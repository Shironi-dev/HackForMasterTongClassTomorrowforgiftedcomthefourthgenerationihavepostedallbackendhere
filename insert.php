<?php
include("conn.php");
$sql = "insert into <database_table_name> (key1 , key2 , ..) value (value1 , value2 , ...)";
$exeq = mysqli_query($sql);
if(!$exeq) {
    echo "insert error! : ".mysqli_error($conn);
}
?>