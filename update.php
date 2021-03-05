<?php
include("conn.php");
$sql = "update <database-table-name> set <variable> = <value> where <ref-var> = <ref-value>";
$exeq = mysqli_query($sql);
if(!$exeq) {
    echo "insert error! : ".mysqli_error($conn);
}
?>