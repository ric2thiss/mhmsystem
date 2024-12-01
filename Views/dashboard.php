
<?php include 'components/includes.css.php' ?>

<style>
    .lists {
    max-height: 250px;
    overflow-y: auto;
    }

    .lists::-webkit-scrollbar {
        width: 8px;
    }

    .lists::-webkit-scrollbar-thumb {
        background-color: rgba(0, 0, 0, 0.3);
        border-radius: 4px;
    }

    .lists::-webkit-scrollbar-thumb:hover {
        background-color: rgba(0, 0, 0, 0.5);
    }

</style>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'components/sidebar.php';?>
        <?=sidebar('dashboard')?>
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Total Case Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Case</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="total_case_count"><?php echo htmlspecialchars($case_count) ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Resources Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Resources</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $resource_count ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Programs Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Programs
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">5</div>
                                                </div>
                                                <!-- <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <!-- City Chart Overview -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4"  id="chart">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary" id="title-header">Overall Case Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Chart Action:</div>
                                            <a class="dropdown-item" href="chart">All Charts</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                 
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChartCity"></canvas>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Doughnut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Overall Categories</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small" id="category-indicators">
                                        <!-- <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Mental Illness 
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Mental Problem
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Mental Disorder
                                        </span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--All Categories row line graph -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-9">
                            <div class="card shadow mb-4"  id="chart">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary" id="title-header">Categories Chart</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Chart Action:</div>
                                            <a class="dropdown-item" href="chart">All Charts</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                 
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myNewLineChartForCategories"></canvas>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Doughnut Chart -->
                        
                    </div>

                    <!-- Barangays Chart Overview -->
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4"  id="chart">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary" id="Month_Name">Barangay Cases</h6>
                                    <div class="dropdown no-arrow mt-2">
                                        <a class="dropdown-toggle   " href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <!-- <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> -->
                                            <p class="text-gray-500">Select Month
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                                </svg>
                                            </p>
                                        </a>
                                        <div class=" dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Months:</div>
                                            
                                            <button class="dropdown-item" onclick="update_barangay_cases_chart('January'); fetch_demographic_chart('January');">January</button>
                                            <button class="dropdown-item" onclick="update_barangay_cases_chart('February'); fetch_demographic_chart('February');">February</button>
                                            <button class="dropdown-item" onclick="update_barangay_cases_chart('March'); fetch_demographic_chart('March'); ">March</button>
                                            <button class="dropdown-item" onclick="update_barangay_cases_chart('April'); fetch_demographic_chart('April');">April</button>
                                            <button class="dropdown-item" onclick="update_barangay_cases_chart('May'); fetch_demographic_chart('May');">May</button>
                                            <button class="dropdown-item" onclick="update_barangay_cases_chart('June'); fetch_demographic_chart('June');">June</button>
                                            <button class="dropdown-item" onclick="update_barangay_cases_chart('July'); fetch_demographic_chart('July');">July</button>
                                            <button class="dropdown-item" onclick="update_barangay_cases_chart('August'); fetch_demographic_chart('August');">August</button>
                                            <button class="dropdown-item" onclick="update_barangay_cases_chart('September'); fetch_demographic_chart('September');">September</button>
                                            <button class="dropdown-item" onclick="update_barangay_cases_chart('October'); fetch_demographic_chart('October');">October</button>
                                            <button class="dropdown-item" onclick="update_barangay_cases_chart('November'); fetch_demographic_chart('November');">November</button>
                                            <button class="dropdown-item" onclick="update_barangay_cases_chart('December'); fetch_demographic_chart('December');">December</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                 
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChartBarangay"></canvas>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <!-- Doughnut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Profile Demographic</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="demographicChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <!-- <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Mental Illness 
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Mental Problem
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Mental Disorder
                                        </span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Purok Chart Overview -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4"  id="chart">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary" id="barangays_name">Purok Cases</h6>
                                    <div class="dropdown no-arrow mt-2">
                                        <a class="dropdown-toggle   " href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <!-- <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> -->
                                            <p class="text-gray-500">Select Barangay
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                                </svg>
                                            </p>
                                        </a>
                                        <div class=" dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <!-- Search Barangay -->
                                            <div class="dropdown-header"><input type="text" placeholder="Search Barangay" class="searchInput"></div>
                                            <div class="lists" id="lists">
                                               
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                 
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChartPurok"></canvas>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <!-- Doughnut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieCategoryChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Mental Illness 
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Mental Problem
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Mental Disorder
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!-- Content Row for Table -->
                    <div class="row">
                        <!-- Table -->
                        <div class="col-xl-8 col-lg-7">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Overall Cases</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Barangay Name</th>
                                                    <th>Case No.</th>
                                                    <th>Action</th>
                                                    <!-- <th>Barangay</th>
                                                    <th>Status</th>
                                                    <th>Generated By</th> -->
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Barangay Name</th>
                                                    <th>Case No.</th>
                                                    <th>Action</th>
                                                    <!-- <th>Barangay</th>
                                                    <th>Status</th>
                                                    <th>Generated By</th> -->
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
                                                            <a type="button" href="./#chart" class="btn btn-primary" onclick="fetchChart(<?php echo htmlspecialchars($tbData['barangay_id']) ?>); fetchChartCategory(<?php echo htmlspecialchars($tbData['barangay_id']) ?>);fetch_demographic_chart(<?php echo htmlspecialchars($tbData['barangay_id']) ?>) ">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
                                                                    <path d="M4 11H2v3h2zm5-4H7v7h2zm5-5v12h-2V2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1z"/>
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


                         <!-- Bar graph -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Demographics - Age</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="ageDemoographiccChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Content Row -->
                    <!-- <div class="row"> -->

                        <!-- Content Column -->
                        <!-- <div class="col-lg-6 mb-4"> -->

                            <!-- Project Card Example -->
                            <!-- <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Outreach Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Project 1 <span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Project 1 <span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Project 1  <span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Project 1  <span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Project 1  <span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- Color System -->
                            <!-- <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                            Primary
                                            <div class="text-white-50 small">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Success
                                            <div class="text-white-50 small">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body">
                                            Info
                                            <div class="text-white-50 small">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-warning text-white shadow">
                                        <div class="card-body">
                                            Warning
                                            <div class="text-white-50 small">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Danger
                                            <div class="text-white-50 small">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-secondary text-white shadow">
                                        <div class="card-body">
                                            Secondary
                                            <div class="text-white-50 small">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                            Light
                                            <div class="text-black-50 small">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-dark text-white shadow">
                                        <div class="card-body">
                                            Dark
                                            <div class="text-white-50 small">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        <!-- </div> -->

                        <!-- <div class="col-lg-6 mb-4"> -->

                            <!-- Illustrations -->
                            <!-- <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                        unDraw &rarr;</a>
                                </div>
                            </div> -->

                            <!-- Approach -->
                            <!-- <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                                </div>
                                <div class="card-body">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class="mb-0">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div> -->

                        <!-- </div> -->
                    <!-- </div> -->

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
            </div>
            </div>
        </div>
    </div>




    <script>

        async function show_data(id) {
            console.log(id)
            try {
            const response = await fetch(`/mental-health-management-system/api/purok?get=purok&id=${id}`);

            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            const datas = await response.json();

            const {data} = datas

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
        // console.log("START")

        // // const url = "http://localhost/mental-health-management-system/api/cases?get=all&scope=barangay&lists=numberofcases"

        // fetch("http://localhost/mental-health-management-system/api/cases?get=all&scope=barangay&lists=numberofcases")
        // .then(res =>res.json())
        // .then(datas => {
        //     const {data} = datas;
        //     // let arr = data.map((item) => item.case_count);

        //     console.log(data)
        // })
        
        const lists = document.getElementById("lists");

        document.addEventListener("DOMContentLoaded", async () => {
            const res = await fetch("/mental-health-management-system/api/barangay?get=all");
            const data = await res.json();
            const {data: barangayData} = data;

            // Limit to the first 10 items
            barangayData.forEach(barangay => {
                lists.innerHTML += `<button class="dropdown-item" onclick="get_purok_data_of_this_barangay(${barangay.barangay_id}, '${barangay.barangay_name}'); fetchChartCategory(${barangay.barangay_id});">${barangay.barangay_name}</button>`;
            });
        });

    



    </script>
    <!-- Logout Modal-->
    <?php include 'components/logout.modal.html';?>

    <?php include 'components/scripts.html';?>


    

</body>

</html>