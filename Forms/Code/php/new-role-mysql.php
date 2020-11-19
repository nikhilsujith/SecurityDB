<?php
    $rolename = $_POST['rolename'];
    $description = $_POST['description'];


    include("connection.php");

$sql = "INSERT INTO `user_role` (`roleName`, `description`)
 VALUES ('$rolename','$description')";

$checking = mysqli_query($conn, $sql);
$url = "../html/new_role.php";
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
