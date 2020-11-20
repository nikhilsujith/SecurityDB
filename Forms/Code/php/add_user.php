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
        // echo "query success";
//        echo '<script type="text/javascript">';
//        echo 'window.location.href="'.$url.'";';
//        echo '</script>';
//        echo '<noscript>';
//        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
//        echo '</noscript>';
        $flag = 1;
         Header( 'Location: ../html/index.php?success=1' );
         exit();
        } 
        else 
        {   
//            echo "Query Error";
//            echo "Error: " . $sql . "<br>" . $conn->error;
            if($conn->errno == 1062){
                $flag = 0;
//                echo '<script>alert("A user with the same name already exists, Please pick a different name")</script>';
            }
        }
        if($flag == 0){
            // echo "query success";
            Header( 'Location: ../html/index.php?success=0' );
            exit();
        }
        mysqli_close($conn);

?>
