<?php
$roleName = $_GET['roleName'];

include("connection.php");

$sql = "SELECT privType, roleName FROM privileges, account_privileges
                                                    WHERE account_privileges.pid = privileges.pid 
                                                        AND account_privileges.roleName='$roleName';";

// INSERT INTO `user_accounts` (`userID`, `phone`, `userName`) VALUES ('11', '234-234-2342', 'A.Bich');

$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo "$row[roleName]";
}
$url = "../html/retrieve-role-priv.php";
if ($result)
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
