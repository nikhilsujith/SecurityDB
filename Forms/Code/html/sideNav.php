<?php
include("../php/connection.php");
?>

<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15"></div>
            <div class="sidebar-brand-text mx-3"></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="nav navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item"><a class="nav-link " href="../html/index.php"><i class="fa fa-user-plus"></i><span>Create New User</span></a></li>
            <li class="nav-item"><a class="nav-link" href="../html/new_role.php"><i class="fas fa-user"></i>Create New Role</a></li>
            <li class="nav-item"><a class="nav-link" href="../html/create_new_table.php"><i class="fas fa-table"></i>Create New&nbsp;<span>Table</span></a></li>
            <li class="nav-item"><a class="nav-link" href="../html/add_privilege.php"><i class="far fa-user-circle"></i>Insert New Privilege</a></li>
            <li class="nav-item"><a class="nav-link" href="../html/relate_account_to_role.php"><i class="fas fa-user-circle"></i>Relate User Account to Role</a></li>
            <li class="nav-item"><a class="nav-link" href="../html/relate_acc_priv_to_role.php"><i class="fas fa-window-maximize"></i><span>Relate Acc Priv to Role</span></a></li>
            <li class="nav-item"><a class="nav-link" href="../html/add-relation-privilege.php"><i class="fas fa-window-maximize"></i><span>Add Relation Privilege</span></a></li>
            <li class="nav-item"><a class="nav-link" href="../html/relate-ternary.php"><i class="fas fa-window-maximize"></i><span>Relate Relation Priv to Role and Table</span></a></li>
            <li class="nav-item"><a class="nav-link" href="../php/retrieve_role-priv-mysql.php"><i class="fas fa-window-maximize"></i>Retrieve Role Privileges</a></li>
            <li class="nav-item"><a class="nav-link" href="../php/retrieve-user-priv.php"><i class="fas fa-window-maximize"></i>&nbsp;Retrieve User Privileges</a></li>
            <li class="nav-item"><a class="nav-link" href="../php/check-priv-for-user.php"><i class="fas fa-window-maximize"></i><span>Check Privilege for User</span></a></li>
        </ul>
    </div>
</nav>
<script>
    setTimeout(function() {
        $('#flash-msg').fadeOut('fast');
    }, 1000); // <-- time in milliseconds
</script>
<!--Remove success flag from url after reload-->
<script>
    history.pushState(null, "", location.href.split("?")[0]);
</script>
