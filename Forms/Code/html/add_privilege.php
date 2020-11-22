<?php
$failMessage = "Privilege Type Already Exists";
$successMessage = "Privilege Added!";
include("../html/heading.php");
?>
<title>Create New User</title>
<div class="row">
    <h4>Add A New Privilege</h4>
</div>

<div class="row">
    <div class="col-sm-4">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">User Settings</p>
        </div>
        <div class="card-body">
            <form method="POST" action="../php/new-privilege-mysql.php">
                <div class="row">
                    <div class="form-group"><label for="username"><strong>Privilege ID</strong></label><input required class="form-control" type="text" placeholder=" " name="pid" /></div>
                </div>
                <div class="row">
                    <div class="form-group"><label for="phone"><strong>Privilege Type</strong></label><input required class="form-control" type="phone" placeholder=" " name="privType" /></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Execute Query</button></div>
            </form>
        </div>
    </div>
    <div class="col">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Existing Privileges</p>
        </div>
        <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
            <table class="table my-0 table-light table-striped  " id="dataTable">
                <thead class="thead-dark">
                <tr>
                    <th>Privilege ID</th>
                    <th>Privilege Type</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT `pid`, `privType` FROM privileges;";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0)
                {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "
                                <tr>
                                <td>". $row['pid']."</td>
                                <td>". $row['privType']."</td>
                                </tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include("../html/footer.php"); ?>
