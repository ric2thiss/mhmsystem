<?php
    function sidebar($current){
        $dashboardActive = $current === "dashboard" ? "active" : "";
        $CaseOperationActive = $current === "addcase" ? "active" : "";
        $ResourceOperationActive = $current === "addresource" ? "active" : "";
        $ResourceUtilizationActive = $current === "resourceutilization" ? "active" : "";
        // $dashboardActive = $current === "dashboard" ? "active" : "";
        // $dashboardActive = $current === "dashboard" ? "active" : "";
        // $dashboardActive = $current === "dashboard" ? "active" : "";
        // $dashboardActive = $current === "dashboard" ? "active" : "";
        // $dashboardActive = $current === "dashboard" ? "active" : "";
        // $dashboardActive = $current === "dashboard" ? "active" : "";
        // $dashboardActive = $current === "dashboard" ? "active" : "";
        // $dashboardActive = $current === "dashboard" ? "active" : "";
        // $dashboardActive = $current === "dashboard" ? "active" : "";
        // $dashboardActive = $current === "dashboard" ? "active" : "";
        ob_start(); // Start output buffering
        
        ?>
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                     <img src="Views/assets/img/logo.svg" alt="" width="70px">
                </div>
                <div class="sidebar-brand-text mx-3">MHMSystem</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?=$dashboardActive?>">
                <a class="nav-link" href="./">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Case Management
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?=$CaseOperationActive?>">
                <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <!-- <i class="fas fa-fw fa-cog"></i> for settings -->
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Case Operations</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Data Entry:</h6> -->
                        <a class="collapse-item" href="./case?action=select-barangay">Insert Case</a>
                        <a class="collapse-item" href="./case?action=view-cases">View Case</a>
                        <!-- <a class="collapse-item" href="./case?action=pendings">Pending Case</a> -->
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item <?=$ResourceOperationActive?> <?=$ResourceUtilizationActive?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Resources</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Utilities:</h6>
                        <a class="collapse-item" href="./resource?action=insert-resource">Insert Resource</a>
                        <a class="collapse-item" href="./utilization">Resource Utilization</a>
                        <a class="collapse-item" href="./utilization-lists">Resource Lists</a>
                        <!-- <a class="collapse-item" href="utilities-other.html">Other</a> -->
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Other
            </div>

            Nav Item - Pages Collapse Menu
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>User Management</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User Lists</h6>
                        <a class="collapse-item" href="login.html">City Officials</a>
                        <a class="collapse-item" href="register.html">Barangay Official</a>
                        <a class="collapse-item" href="forgot-password.html">Health Official</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Actions:</h6>
                        <a class="collapse-item" href="404.html">Add User</a>
                        <a class="collapse-item" href="404.html">Edit User</a>
                        <a class="collapse-item" href="blank.html">Restrict User</a>
                    </div>
                </div>
            </li>

            Nav Item - Charts
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Programs</span></a>
            </li>

            Nav Item - Tables
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Barangays</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>
        <?php
    return ob_get_clean(); 
    }
?>