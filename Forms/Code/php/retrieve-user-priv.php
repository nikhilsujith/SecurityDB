<?php
include ("connection.php");

$userID = isset($_POST["userID"]) ? $_POST["userID"] : '';

$sql = "SELECT user_accounts.userID, user_accounts.userName,
       user_role.roleName, role_priv.privType
FROM user_accounts, user_role, role_priv
WHERE user_accounts.userID = user_role.userID
      AND user_accounts.userID = '$userID'
      AND user_role.roleName = role_priv.roleName";

$result = mysqli_query($conn, $sql);
if($result){
    if(mysqli_num_rows($result)  == 0){
        $flag = 0;
    }
    else{
        $flag = 1;
    }
}else {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
?>

<?php
$failMessage = "User Exists";
$successMessage = "User Added!";
include("../html/heading.php");
?>
    <title>Retrieve User Privileges</title>
    <div class="row">
        <div class="col-sm-4">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">User Settings</p>
            </div>
            <div class="card-body">
                <form method="POST" action="retrieve-user-priv.php">
                    <div class="row">
                        <div class="form-group"><label for="userid"><strong>User ID</strong></label><input required class="form-control" type="text" placeholder="ID" name="userID" /></div>
                    </div>
                    <!--                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Execute Query</button></div>-->
                    <button class="btn btn-primary btn-sm d-none d-sm-inline-block" type ="submit" name="submit" ><i class="fas fa-download fa-sm text-white-50">
                        </i>&nbsp;Execute Query</button>
                    <div  class = "row">
                        <div class ="form-group">
                            <ul>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </ul><div class="row">
                                <?php
                                if($flag == 0){
                                    echo'<div class="alert alert-danger" id="flash-msg"> <center> Privileges for user with ID '.$userID.' not found</center></div>';
                                }
                                else if($flag == 1){
                                    echo'<div class="alert alert-success" id="flash-msg"> <center> Privileges for user with ID '.$userID.' found!</center></div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="col">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">Roles and Privileges</p>
            </div>
            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0 table-light table-striped  " id="dataTable">
                    <thead class="thead-dark">
                    <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Privilege</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<td>" . $row['userID'] . "</td>";
                        echo "<td>" . $row['userName'] . "</td>";
                        echo "<td>" . $row['privType'] . "</td>";
                        echo "</tr>";
                    }
                    mysqli_close($conn);
                    ?>
                </table>
            </div>
        </div>
    </div>
<?php include("../html/footer.php"); ?>
