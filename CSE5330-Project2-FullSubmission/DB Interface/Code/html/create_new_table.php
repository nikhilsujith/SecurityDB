<?php
    $failMessage = "Table Exists";
    $successMessage = "Table Added!";
    include("../html/heading.php");
?>
<title>Create New Table</title>
<div class="row">
    <h4>Create New Table</h4>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">User Settings</p>
        </div>
        <div class="card-body">
            <form method="POST" action="../php/add_table.php">
                <div class="row">
                    <div class="form-group"><label for="tableName"><strong>Table Name</strong></label><input required class="form-control" type="text"  name="tableName" /></div>
                </div>
                <div class="row">
                    <div class="form-group"><label for="description"><strong>Owner ID</strong></label><input required class="form-control" type="phone" name="ownerID" /></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Execute Query</button></div>
            </form>
        </div>
    </div>
    <div class="col">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Existing Table Details</p>
        </div>
        <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
            <table class="table my-0 table-light table-striped  " id="dataTable">
                <thead class="thead-dark">
                <tr>
                    <th>Table Name</th>
                    <th>Owner ID</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT `tableName`, `ownerID` FROM DbTable;";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0)
                {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "
                                <tr>
                                <td>". $row['tableName']."</td>
                                <td>". $row['ownerID']."</td>
                                </tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include("../html/footer.php"); ?>
