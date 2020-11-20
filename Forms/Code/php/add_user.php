<?php
    $flag = 1;
    $username = $_POST['username'];
    $phone = $_POST['phone'];

    include("connection.php");

    $sql = "INSERT INTO `user_accounts` (`phone`, `userName`) VALUES ('$phone','$username')";


// INSERT INTO `user_accounts` (`userID`, `phone`, `userName`) VALUES ('11', '234-234-2342', 'A.Bich');

$checking = mysqli_query($conn, $sql);
$url = "../html/index.php";
if ($checking) 
        {
        $flag = 1;
         Header( 'Location: ../html/index.php?success=1' );
         exit();
        } 
        else 
        {
            if($conn->errno == 1062){
                $flag = 0;
            }
        }
        if($flag == 0){
            Header( 'Location: ../html/index.php?success=0' );
            exit();
        }
        mysqli_close($conn);

?>
