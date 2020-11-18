<?php
    /*$dbname="axb1186";
    $localhost="127.0.0.1";
    $uname = "axb1186";
    $password="Amitesh123";

    try{
        $db = new PDO("mysql:host=$localhost;dbname=$dbname;port=3306",$uname,$password);
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (Exception $e){
        echo "Unable to connect";
        echo $e -> getMessage();
        exit;
    }*/

    include 'connection.php'; //db connectin

    try{
        if($_POST['operation'] == "addParticipant"){
            $pName = $_POST['pName'];
            $pEvent = $_POST['pEvent'];
            $pEmail = $_POST['pEmail'];
            $pLocation=$_POST['pLocation'];
            $event = $db->query("SELECT * FROM  events WHERE eName = '$pEvent'");
            $result = $event->fetch();
            if($result!=0 || $result['eSpotRemaining'] != 0)
            {
                if($result['eSpotRemaining'] == NULL)
                {
                    $spotValue = $result['eSpot'] - 1;
                    $query = $db->query("UPDATE events SET eSpotRemaining = '$spotValue' WHERE eName = '$pEvent'");
                    $participant = $db->query("INSERT INTO participants (pName,pEvent,pEmail,pLocation) VALUES
                    ('$pName','$pEvent','$pEmail','$pLocation')");
                }else{
                    $spotValue = $result['eSpotRemaining'] - 1;
                    $query = $db->query("UPDATE events SET eSpotRemaining = '$spotValue' WHERE eName = '$pEvent'");
                    $participant = $db->query("INSERT INTO participants (pName,pEvent,pEmail,pLocation) VALUES
                    ('$pName','$pEvent','$pEmail','$pLocation')");
                }
                echo "Successfully registered for event";
            }else{
                echo "Event you have chosen to participate in is either closed or does not exist";
            }

        }else{
            $org_name = $_POST['name'];
            $event_Name = $_POST['event'];
            $spots = $_POST['spot'];
            $location = $_POST['location'];
            $desc = $_POST['desc'];
            $event = $db->query("INSERT INTO events(eName,eOrganizer,eSpot,eLocation,eDesc)VALUES('$event_Name','$org_name','$spots','$location','desc')");
            echo "Event created successfully";
        }
        
        
    }catch(Exception $e){
        echo "Unable to retrieve results";
        echo $e;
        exit;
    }

?>
<html>
<head>
    <script type="text/JavaScript">
        setTimeout("location.href = 'profile.php';",1500);
    </script>
</head>
</html>
