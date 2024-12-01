
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
        <?=sidebar('addresource')?>
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
                        <h1 class="h3 mb-0 text-gray-800">Add Resource</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                         <!-- Table -->
                         <div class="col-xl-7 col-lg-6">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Add Resource</h6>
                                </div>
                                <div class="card-body">
                                    <div class="p-lg-2 p-xl-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Resource Information</h1>
                                            
                                            <!-- Message -->
                                            <p class="<?php echo isset($_SESSION["statusColor"]) ? $_SESSION["statusColor"] : ''; ?> text-white">
                                                <?php
                                                if (isset($_SESSION["resource_insertion"]) && !empty($_SESSION["resource_insertion"])) {
                                                    echo $_SESSION["resource_insertion"];
                                                    // Clear the session message after displaying it
                                                    unset($_SESSION["resource_insertion"]);
                                                }
                                                ?>
                                            </p>
                                        </div>
                                        <form class="user" method="POST" action="./resource">
                                            <label for="">Details</label>
                                            <hr>

                                            <!-- First name and Last name -->
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="name"> Name</label>
                                                    <input type="text" name="name" class="form-control form-control-user" id="name" placeholder="Full Name">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="contact_number">Contact Number</label>
                                                    <input type="text" name="contact_number" class="form-control form-control-user" id="contact_number" placeholder="Contact Number">
                                                </div>
                                            </div>
                                            

                                            <!-- Address -->
                                            <div class="form-group">
                                                <label for="resource_name">Clinic / Resource Name</label>
                                                <input type="text" name="resource_name" class="form-control form-control-user" id="resource_name" placeholder="Clinic / Resource Name">
                                            </div>

                                            <!-- Gender and Birthdate -->
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="type">Type</label>
                                                    <input type="text" class="form-control form-control-user" name="type" id="type" placeholder="Type">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control form-control-user" name="address" id="address" placeholder="Address">
                                                </div>
                                                
                                            </div>         
                                            <!-- Submit Button -->
                                            <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                                <?= ($_SESSION["role_name"] !== "Administrator" && $_SESSION["role_name"] !== "Case Manager") ? "Request Add Resource" : "Add Resource" ?>
                                            </button>
                                            <hr>
                                        </form>

                                        <hr>
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

    <script>
        // function calculateAge() {
        //     const birthdate = document.getElementById("birthdate").value;
        //     const birthDate = new Date(birthdate);
        //     const today = new Date();
        //     let age = today.getFullYear() - birthDate.getFullYear();
        //     const monthDiff = today.getMonth() - birthDate.getMonth();
        //     if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
        //         age--;
        //     }
        //     document.getElementById("age").value = age;
        // }

        // const barangay = document.getElementById("barangay");

        // async function fetch_purok(id) {
        //     try {
        //         const response = await fetch(`http://localhost/mental-health-management-system/api/purok?id=${id}`);
        //         if (!response.ok) {
        //             throw new Error(`Error: ${response.statusText}`);
        //         }
        //         const data = await response.json();
        //         console.log("API Response:", data); // Debugging

        //         const purokData = data.data;

        //         const purokOptions = document.getElementById("purok");
        //         purokOptions.innerHTML = "";


        //         let defaultOption = document.createElement("option");
        //         defaultOption.text = "Select Purok";
        //         defaultOption.value = "";
        //         purokOptions.appendChild(defaultOption);

    
        //         if (purokData && typeof purokData === "object") {
        //             for (const key in purokData) {
        //                 if (purokData.hasOwnProperty(key)) {
        //                     let option = document.createElement("option");
        //                     option.text = purokData.purok_name || "Unnamed Purok"; 
        //                     option.value = purokData.purok_id || ""; 
        //                     purokOptions.appendChild(option);
        //                 }
        //             }
        //         } else {
        //             console.error("Invalid purok data structure:", purokData);
        //         }
        //     } catch (error) {
        //         console.error("Error fetching purok data:", error);
        //         alert("Failed to load purok options. Please try again later.");
        //     }
        // }

        // // Onchange of barangay the purok are being fetch base on barangay id
        // barangay.addEventListener("change", ()=>{
        //     const barangay_id = barangay.value;
        //     fetch_purok(barangay_id);
        // });
    </script>



    <!-- Logout Modal-->
    <?php include 'components/logout.modal.html';?>

    <?php include 'components/scripts.html';?>


    

</body>

</html>