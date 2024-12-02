
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
                        <h1 class="h3 mb-0 text-gray-800">Barangay <?=$_GET["addcase"];?></h1>
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
                                    <h6 class="m-0 font-weight-bold text-primary">ADD CASE</h6>
                                </div>
                                <div class="card-body">
                                    <div class="p-lg-2 p-xl-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Case Information</h1>
                                            
                                            <!-- Message -->
                                            <p class="<?php echo isset($_SESSION["statusColor"]) ? $_SESSION["statusColor"] : ''; ?> text-white">
                                                <?php
                                                if (isset($_SESSION["case_insertion"]) && !empty($_SESSION["case_insertion"])) {
                                                    echo $_SESSION["case_insertion"];
                                                    // Clear the session message after displaying it
                                                    unset($_SESSION["case_insertion"]);
                                                }
                                                ?>
                                            </p>
                                        </div>
                                        <form class="user" method="POST" action="./case">
                                            <label for="">Client Details</label>
                                            <hr>

                                            <!-- First name and Last name -->
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="first_name">First Name</label>
                                                    <input type="text" name="first_name" class="form-control form-control-user" id="first_name" placeholder="First Name" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="last_name">Last Name</label>
                                                    <input type="text" name="last_name" class="form-control form-control-user" id="last_name" placeholder="Last Name" required>
                                                </div>
                                            </div>
                                            

                                            <!-- Address -->
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" name="address" class="form-control form-control-user" id="address" placeholder="Complete Home Address" required>
                                            </div>

                                            <!-- Gender and Birthdate -->
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="birthdate">Birthdate</label>
                                                    <input type="date" class="form-control form-control-user" name="birthdate" id="birthdate" required onchange="calculateAge()">
                                                    <input type="number" class="d-none" name="age" id="age">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="sex" class="mr-2">Sex</label>
                                                    <select name="sex" id="sex" class="form-control" required>
                                                        <option value="" selected disabled>Select Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Case Title and Description -->
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="case_title">Case Title</label>
                                                    <input type="text" name="case_title" class="form-control form-control-user" id="case_title" placeholder="Case Title" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="case_description">Case Description</label>
                                                    <input type="text" name="case_description" class="form-control form-control-user" id="case_description" placeholder="Case Description" required>
                                                </div>
                                            </div>

                                            <!-- Barangay, Purok, Case Category, and Severity -->
                                            <div class="form-group row">
                                                <!-- Barangay -->
                                                <div class="col-sm-6">
                                                    <label for="barangay" class="mr-2">Barangay</label>
                                                    <select name="barangay" id="barangay" class="form-control" required>
                                                        <option value="" selected disabled>Select Barangay</option>
                                                        <?php foreach ($barangays as $barangay): ?>
                                                            <option value="<?= $barangay["barangay_id"] ?>"><?= $barangay["barangay_name"] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <!-- Purok -->
                                                <div class="col-sm-6">
                                                    <label for="purok" class="mr-2">Purok</label>
                                                    <select name="purok" id="purok" class="form-control" required>
                                                        <option value="" selected disabled>Select Purok</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="case_category" class="mr-2">Case Category</label>
                                                    <select name="case_category" id="category" class="form-control" required>
                                                        <option value="" selected disabled>Select Case Category</option>
                                                        <?php foreach ($categories as $category): ?>
                                                            <option value="<?= $category["case_category_id"] ?>"><?= $category["case_category_name"] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="case_severity" class="mr-2">Case Severity</label>
                                                    <select name="case_severity" id="case_severity" class="form-control" required>
                                                        <option value="" selected disabled>Select Case Severity</option>
                                                        <?php foreach ($case_severities as $case_severity): ?>
                                                            <option value="<?= $case_severity["case_severity_id"] ?>"><?= $case_severity["name"] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                                
                                        

                                            <!-- Submit Button -->
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                <?= ($_SESSION["role_name"] !== "Administrator" && $_SESSION["role_name"] !== "Case Manager") ? "Request Add Case" : "Add Case" ?>
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
        function calculateAge() {
            const birthdate = document.getElementById("birthdate").value;
            const birthDate = new Date(birthdate);
            const today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();
            const monthDiff = today.getMonth() - birthDate.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            document.getElementById("age").value = age;
        }

        const barangay = document.getElementById("barangay");

        async function fetch_purok(id) {
            try {
                const response = await fetch(`/mental-health-management-system/api/purok?get-purok=all&id=${id}`);
                if (!response.ok) {
                    throw new Error(`Error: ${response.statusText}`);
                }
                const data = await response.json();
                console.log("API Response:", data); // Debugging

                const purokData = data.data;

                const purokOptions = document.getElementById("purok");
                purokOptions.innerHTML = "";

                // Create and append default option
                let defaultOption = document.createElement("option");
                defaultOption.text = "Select Purok";
                defaultOption.value = "";
                purokOptions.appendChild(defaultOption);

                // Ensure purokData is an array before processing
                if (Array.isArray(purokData)) {
                    purokData.forEach((purok) => {
                        let option = document.createElement("option");
                        option.text = purok.purok_name || "Unnamed Purok"; // Use the actual property names
                        option.value = purok.purok_id || ""; // Use the actual property names
                        purokOptions.appendChild(option);
                    });
                } else {
                    console.error("Invalid purok data structure:", purokData);
                }
            } catch (error) {
                console.error("Error fetching purok data:", error);
                alert("Failed to load purok options. Please try again later.");
            }
        }


        // Onchange of barangay the purok are being fetch base on barangay id
        barangay.addEventListener("change", ()=>{
            const barangay_id = barangay.value;
            fetch_purok(barangay_id);
        });
    </script>



    <!-- Logout Modal-->
    <?php include 'components/logout.modal.html';?>

    <?php include 'components/scripts.html';?>


    

</body>

</html>