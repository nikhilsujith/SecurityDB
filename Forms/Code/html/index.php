<?php
    $failMessage = "User Exists";
    $successMessage = "User Added!";
    include("../html/heading.php");
?>
<title>Create New User</title>
<div class="row">
        <div class="col-sm-4">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">User Settings</p>
            </div>
            <div class="card-body">
                <form method="POST" action="../php/add_user.php">
                    <div class="row">
                        <div class="form-group"><label for="username"><strong>Username</strong></label><input required class="form-control" type="text" placeholder="Name" name="username" /></div>
                    </div>
                    <div class="row">
                        <div class="form-group"><label for="phone"><strong>Phone Number</strong></label><input required class="form-control" type="phone" placeholder="XXX-XXX-XXXX" name="phone" /></div>
                    </div>
                    <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Execute Query</button></div>
                </form>
            </div>
        </div>
    <div class="col">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Existing User Details</p>
        </div>
        <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
            <table class="table my-0 table-light table-striped  " id="dataTable">
                <thead class="thead-dark">
                <tr>
                    <th>User ID </th>
                    <th>Phone</th>
                    <th>User Name</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT `userID`, `phone`,`userName` FROM user_accounts;";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0)
                {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "
                        <tr>
                        <td>". $row['userID']."</td>
                        <td>". $row['phone']."</td>
                        <td>". $row['userName']."</td>
                        </tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include("../html/footer.php"); ?>
