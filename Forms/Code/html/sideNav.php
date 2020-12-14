<?php
include("../php/connection.php");
?>

<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-fingerprint"></i></div>
            <div class="sidebar-brand-text mx-3"><span style="font-weight: bolder">DACM</span></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="nav navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item"><a class="nav-link " href="../html/index.php"><i class="fa fa-user-plus"></i><span>Create New User [3.1]</span></a></li>
            <li class="nav-item"><a class="nav-link" href="../html/new_role.php"><i class="fas fa-user"></i>Create New Role [3.2]</a></li>
            <li class="nav-item"><a class="nav-link" href="../html/create_new_table.php"><i class="fas fa-table"></i>Create New Table [3.3]&nbsp;</a></li>
            <li class="nav-item"><a class="nav-link" href="../html/add_privilege.php"><i class="far fa-user-circle"></i>Insert New Privilege [3.4]</a></li>
            <li class="nav-item"><a class="nav-link" href="../html/relate_account_to_role.php"><i class="fas fa-user-circle"></i>Relate User Account to Role [3.5]</a></li>
            <li class="nav-item"><a class="nav-link" href="../html/relate_acc_priv_to_role.php"><i class="fas fa-window-maximize"></i><span>Relate Acc Priv to Role [3.6]</span></a></li>
            <li class="nav-item"><a class="nav-link" href="../html/add-relation-privilege.php"><i class="fas fa-window-maximize"></i><span>Add Relation Privilege [3.7a]</span></a></li>
            <li class="nav-item"><a class="nav-link" href="../html/relate-ternary.php"><i class="fas fa-window-maximize"></i><span>Relate Relation Priv to Role and Table [3.7b]</span></a></li>
            <li class="nav-item"><a class="nav-link" href="../php/retrieve_role-priv-mysql.php"><i class="fas fa-window-maximize"></i>Retrieve Role Privileges [3.8a]</a></li>
            <li class="nav-item"><a class="nav-link" href="../php/retrieve-user-priv.php"><i class="fas fa-window-maximize"></i>&nbsp;Retrieve User Privileges [3.8b]</a></li>
            <li class="nav-item"><a class="nav-link" href="../php/check-priv-for-user.php"><i class="fas fa-window-maximize"></i><span>Check Privilege for User [3.8c]</span></a></li>
            <li class="nav-item"><a class="nav-link" href="../html/user-proof.php"><i class="fas fa-window-maximize"></i><span>Access Table as User </span></a></li>
            <li class="nav-item"><a class="nav-link" href="../html/revoke.php"><i class="fas fa-window-maximize"></i><span>Revoke Privilege of User From Table</span></a></li>

        </ul>
    </div>
</nav>
<script>
    setTimeout(function() {
        $('#flash-msg').fadeOut('fast');
    }, 5000); // <-- time in milliseconds
</script>
<!--Remove success flag from url after reload-->
<script>
    history.pushState(null, "", location.href.split("?")[0]);
</script>
