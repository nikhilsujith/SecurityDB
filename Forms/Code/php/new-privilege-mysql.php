<?php
    $pid = $_POST['pid'];
    $privType = $_POST['privType'];

    include("connection.php");
        $sql = "INSERT INTO `privileges` (`pid`, `privType`) VALUES ('$pid','$privType')";


    $checking = mysqli_query($conn, $sql);
    $url = "../html/add_privilege.php";
    if ($checking) {
        $flag =1;
    }
    else{
        $flag = 0;
    }
//    Checkiung flags
    if($flag == 0){
        Header( 'Location: ../html/add_privilege.php?success=0' );
        exit();
    }
    else if($flag == 1){
        Header( 'Location: ../html/add_privilege.php?success=1' );
        exit();
    }
    mysqli_close($conn);
    ?>

