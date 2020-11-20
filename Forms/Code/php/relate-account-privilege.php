<?php
    $pid = $_POST['pid'];
    $accID = $_POST['accID'];
    $roleName = $_POST['roleName'];

    include("connection.php");
$sql = "INSERT INTO `account_privileges` (`pid`,`roleName`) VALUES ('$pid','$roleName')";

$checking = mysqli_query($conn, $sql);
$url = "../html/relate_acc_priv_to_role.php";
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
