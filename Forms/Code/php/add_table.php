<?php
$tableName = $_POST['tableName'];
$ownerID = $_POST['ownerID'];

include("connection.php");

$sql = "INSERT INTO `DbTable` (`tablename`, `ownerID`)
 VALUES ('$tableName','$ownerID')";

// INSERT INTO `user_accounts` (`userID`, `phone`, `userName`) VALUES ('11', '234-234-2342', 'A.Bich');

$checking = mysqli_query($conn, $sql);
$url = "../html/create_new_table.php";
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
