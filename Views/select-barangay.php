
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
                        <h1 class="h3 mb-0 text-gray-800">Select Barangay</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                         <!-- Table -->
                         <div class="col-xl-8 col-lg-7">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Select Barangay to Add Case</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Barangay Name</th>
                                                    <th>Case No.</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Barangay Name</th>
                                                    <th>Case No.</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody id="tbody">
                                                <?php foreach($tbDatas as $tbData): ?>
                                                    <tr>
                                                        <td><?=$tbData["barangay_name"]?></td>
                                                        <td style="width: 20%;"><?=$tbData["case_count"]?></td>
                                                        <td style="width: 20%;">
                                                            <button type="button" class="btn btn-primary my-2" data-toggle="modal" data-target="#open_barangay" onclick="show_data(<?php echo $tbData['barangay_id']?>)">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                                                </svg>
                                                            </button>   
                                                            <a type="button" href="./case?addcase=<?=$tbData["barangay_name"]?>" class="btn btn-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                                                                </svg>
                                                            </a>
                                                        </td>
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


    <!-- Modal for Each Opened Barangay -->
    <!-- Modal -->
    <div class="modal fade" id="open_barangay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body" id="modal_body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
            </div>
        </div>
    </div>

    <script>
        async function show_data(id) {
            console.log(id)
            try {
            const response = await fetch(`http://localhost/mental-health-management-system/api/barangay?id=${id}`);

            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            const data = await response.json();

            // Clear existing modal content before appending new data
            const modalBody = document.querySelector("#modal_body");
            modalBody.innerHTML = ''; // This removes all existing children of the modal body

            // Set the title
            document.querySelector("#title").textContent = data.length > 0 ? data[0].barangay_name : 'N/A';

            // Append new data to the modal body
            for (let d of data) {
                const p = document.createElement('p');
                const p2 = document.createElement('p');
                p.textContent = d.purok_name || 'No Purok Name';
                p2.textContent = `Case Count : ${d.case_count}` || 'No Case';
                modalBody.appendChild(p);
                modalBody.appendChild(p2);
            }
        } catch (error) {
            console.error('Error fetching barangay data:', error);
            // Display error message to the user if needed
            document.querySelector("#errorMessage").textContent = "Failed to load data.";
        }

        }
    </script>



    <!-- Logout Modal-->
    <?php include 'components/logout.modal.html';?>

    <?php include 'components/scripts.html';?>


    

</body>

</html>