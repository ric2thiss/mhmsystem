
<?php include 'components/includes.css.php' ?>

<style>
    select.form-control-user .placeholder {
    color: #a9a9a9; /* Light gray placeholder color */
}

</style>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'components/sidebar.php';?>
        <?=sidebar('addcase')?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require('components/top-navbar.php') ?>
                <?=topNavbar($userData["first_name"], $userData["last_name"])?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Resource Lists</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row flex justify-content-center">
                         <!-- Table -->
                         <div class="col-xl-8 col-lg-7">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Lists of Assign Resource</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Case</th>
                                                    <th>Clinc</th>
                                                    <th>Note</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody id="tbody">
                                                <?php foreach($resourceLists as $resourceList): ?>
                                                    <tr>
                                                        <td><?=$resourceList["utilization_id"]?></td>
                                                        <td><?=$resourceList["case_title"]?></td>
                                                        <td><?=$resourceList["name"]?></td>
                                                        <td><?=$resourceList["additional_description"]?></td>
                                                        <td><?=$resourceList["month_used"]?> <?=$resourceList["day_used"]?></td>
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include 'components/footer.html';?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>





    <!-- Logout Modal-->
    <?php include 'components/logout.modal.html';?>

    <?php include 'components/scripts.html';?>


    

</body>

</html>