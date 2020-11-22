<?php
$userName = $_POST['userName'];
$privType = $_POST['privType'];
$tableName = $_POST['tableName'];

include("connection.php");

$sql = "SELECT userName, privType, tableName FROM user_priv_table 
            WHERE userName = '$userName' AND privType = '$privType' AND tableName = '$tableName'";
$checking = mysqli_query($conn, $sql);


if ($checking) {
    if(mysqli_num_rows($checking) > 0){
            $flag = 1;
    }
    else {
          $flag = 0;
    }
}

if($flag == 1){
    Header('Location: ../html/user-proof.php?success=1');
    exit();
}
else if ($flag == 0){
    Header('Location: ../html/user-proof.php?success=0');
    exit();
}

mysqli_close($conn);

?>
