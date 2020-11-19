<?php
    $pid = $_POST['pid'];
    $privType = $_POST['privType'];

    include("connection.php");
$sql = "INSERT INTO `privileges` (`pid`, `privType`)
 VALUES ('$pid','$privType')";


$checking = mysqli_query($conn, $sql);
$url = "../html/add_privilege.php";
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
