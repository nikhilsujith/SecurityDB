<?php
include ("connection.php");

$roleName = $_POST["roleName"];

$sql = "SELECT privType, roleName FROM privileges, account_privileges
        WHERE account_privileges.pid = privileges.pid
        AND account_privileges.roleName = '$roleName'";

$result = mysqli_query($conn, $sql);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}


echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['roleName'] . "</td>";
    echo "<td>" . $row['privType'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($conn);


?>
