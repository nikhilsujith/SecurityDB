<?php

include("connection.php");


$ownerID = $_POST['ownerID'];
$tableName = $_POST['tableName'];
$pid = $_POST['pid'];
$roleName = $_POST['roleName'];



$sql = "";


$checking = mysqli_query($conn, $sql);
$url = "../html/index.php";
if ($checking)
{
    // echo "query success";
    echo '<script type="text/javascript">';
    echo 'window.location.href="'.$url.'";';
    echo '</script>';
    echo '<noscript>';
    echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
    echo '</noscript>';
    exit();
}
else
{
    echo "Query Error";
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);

?>
