<?php
$failMessage = "Role Already Exists";
$successMessage = "Role Added";
include("../html/heading.php");
?>
<!--php message thing-->
<title>Create New User</title>
<div class="row">
    <h4>Create New Role</h4>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">User Settings</p>
        </div>
        <div class="card-body">
            <form method="POST" action="../php/new-role-mysql.php">
                <div class="row">
                    <div class="form-group"><label for="userRole"><strong>Role Name</strong></label><input required class="form-control" type="text"  name="roleName" /></div>
                </div>
                <div class="row">
                    <div class="form-group"><label for="description"><strong>Description</strong></label><input required class="form-control" type="phone" name="description" /></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Execute Query</button></div>
            </form>
        </div>
    </div>
    <div class="col">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Existing Roles</p>
        </div>
        <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
            <table class="table my-0 table-light table-striped  " id="dataTable">
                <thead class="thead-dark">
                <tr>
                    <th>Role Name </th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT `roleName`, `description`,`userID` FROM user_role;";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0)
                {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "
                                <tr>
                                <td>". $row['roleName']."</td>
                                <td>". $row['description']."</td>
                                </tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include("../html/footer.php"); ?>
