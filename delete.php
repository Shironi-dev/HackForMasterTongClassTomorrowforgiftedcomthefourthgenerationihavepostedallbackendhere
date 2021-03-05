<?php
include("conn.php");
$sql = "DELETE FROM <database-table-name> WHERE <your-variable> = <your-value> and ...";
$exeq = mysqli_query($sql);
if(!$exeq) {
    echo "delete error! : ".mysqli_error($conn);
}
?>