<?php
    $userID = $_POST['userID'];
    $roleName = $_POST['roleName'];

    include("connection.php");
//    check if the user ID being input already has a role

    $query_check_user_role = "SELECT userID FROM user_role WHERE userID = $userID";
    $result_check_user_role = mysqli_query($conn, $query_check_user_role);

    if(mysqli_num_rows($result_check_user_role) == 0){ //userID entered is not assigned a role
        $flag = 1;

    $check_role_exists = "SELECT roleName FROM user_role WHERE roleName = '$roleName'";
    $result_check_role_exists = mysqli_query($conn, $check_role_exists);//Checking if entered role exists in the role table





//        Get the description for the role
        $query_get_role_desc = "SELECT description FROM user_role WHERE roleName = '$roleName'";
        $result_get_role_desc = mysqli_query($conn, $query_get_role_desc );

        while($row = mysqli_fetch_assoc($result_get_role_desc)){
            $description = $row['description'];
        }

// Assign given userID to existing role
        $sql = "INSERT INTO user_role VALUES ('$roleName','$description','$userID')";
        $result = mysqli_query($conn, $sql);
    }

    else{ //userID already has a role
        $flag = 0;
    }
//    else{
//        $sql = "UPDATE `user_role` SET `userID` = '$userID' WHERE (`roleName` = '$roleName') and (`userID` = '12')";
//    }

    $url = "../html/relate_account_to_role.php";
    if ($result)
    {
        $flag = 1;
    }
    else
    {
        $flag = 0;
    }
    if($flag == 0){
        Header( 'Location: ../html/relate_account_to_role.php?success=0' );
        exit();
    }
    else if ($flag == 1){
        Header( 'Location: ../html/relate_account_to_role.php?success=1' );
        exit();
    }
    mysqli_close($conn);

?>
