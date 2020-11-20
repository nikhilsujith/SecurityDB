<?php
    $roleName = $_POST['roleName'];
    $description = $_POST['description'];
    include("connection.php");



    $sql = "INSERT INTO `user_role` (`roleName`, `description`)
     VALUES ('$roleName','$description')";

    $checking = mysqli_query($conn, $sql);
    $url = "../html/new_role.php";

    if ($checking) {
        $flag = 1;
        Header( 'Location: ../html/new_role.php?success=1' );
        exit();
    }
    else {
        if($conn->errno == 1062){
            $flag = 0;
        }
    }
        if($flag == 0){
         Header( 'Location: ../html/new_role.php?success=0' );
         exit();
    }
        mysqli_close($conn);
?>
