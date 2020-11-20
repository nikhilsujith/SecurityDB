<?php
    $pid = $_POST['pid'];
    $roleName = $_POST['roleName'];

    include("connection.php");
$sql = "INSERT INTO `account_privileges` (`pid`,`roleName`) VALUES ('$pid','$roleName')";

$checking = mysqli_query($conn, $sql);
$url = "../html/relate_acc_priv_to_role.php";

if ($checking) 
        {
        $flag = 1;
         Header( 'Location: ../html/relate_acc_priv_to_role.php?success=1' );
         exit();
        } 
        else 
        {
            if($conn->errno == 1452){
                $flag = 0;
            }
        }
        if($flag == 0){
            Header( 'Location: ../html/relate_acc_priv_to_role.php?success=0' );
            exit();
        }
        mysqli_close($conn);


// if ($checking) 
//         {   
//         // echo "query success";
//         echo '<script type="text/javascript">';
//         echo 'window.location.href="'.$url.'";';
//         echo '</script>';
//         echo '<noscript>';
//         echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
//         echo '</noscript>'; 
//             exit();
//         } 
//         else 
//         {   echo "Role Does Not Exist ";
//             echo "Query Error";
//             echo "Error: " . $sql . "<br>" . $conn->error;
//             echo $conn->errno;
//         }
?>