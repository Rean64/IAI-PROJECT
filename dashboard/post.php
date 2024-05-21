<?php
session_start();
?>
<?php

$message = "";
$error = "";

    require_once 'functions.php';
    $AllActivities = getAllActivity();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: index.php');
}

?>
<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Eintein Institut Dashboard Template">
    <meta name="author" content="IAI SMS">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="" />

    <!-- TITLE -->
    <title>Post</title>

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="../node_modules/css/bootstrap.min.css">

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/dark-style.css" rel="stylesheet" />
    <link href="../assets/css/transparent-style.css" rel="stylesheet">
    <link href="../assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />


</head>
<body class="app sidebar-mini ltr light-mode">
                <!--app-content open-->
            <div class="main-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                     


                        <!-- ROW-2 -->
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <h3 class="card-title mb-0">Posts</h3>
                                        <div id="open-modal" class="container-login100-form-btn" style="width:100px">
                                            <button id="open-modal"  class="login100-form-btn btn-primary">New</button>	                    
                                        </div>
                                    </div>
                                    <div id="activityForm" class="wrap-login100 p-6" style="display:none;">
                                        <form action="auth.php" method="post" enctype="multipart/form-data">
                                            <span class="login100-form-title">
                                                    Activties Form
                                                </span>
                                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="mdi mdi-account" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 ms-0 form-control" name="titleEnglish" type="text" placeholder="English Title" required>
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="mdi mdi-account" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 ms-0 form-control" name="titleFrench" type="text" placeholder="French Title" required>
                                            
                                            </div>
                                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="mdi mdi-account" aria-hidden="true"></i>
                                                </a>
                                                <textarea class="input100 border-start-0 ms-0 form-control" style="height:100px" name="descEnglish" type="text" placeholder="English Description" required></textarea>
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="mdi mdi-account" aria-hidden="true"></i>
                                                </a>
                                                <textarea class="input100 border-start-0 ms-0 form-control" style="height:100px" name="descFrench" type="text" placeholder="French Description" required></textarea>
                                            </div>
                                            <!-- Upload image input-->
                                            <div class="input-group rounded-pill bg-white shadow-sm">
                                                <input name="image" id="upload" type="file" class="form-control border-0">
                                                <!-- <label id="upload-label" for="upload" class="font-weight-light text-muted"></label> -->
                                                <div class="input-group-append">
                                                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                                </div>
                                            </div>
                                            <div class="" id="pic" style="display:none;margin-top:10px">
                                                <img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-lg mx-auto d-block" style="height:240px;width:240px;">
                                            </div>
                                            <div class="container-login100-form-btn">
                                                <button id="close-modal" style="width:100px;margin-right:30px"  class="login100-form-btn btn-danger">Cancel</button>	    
                                                <button type="submit" style="width:100px;margin-left:10px" name="submit"  class="login100-form-btn btn-primary">Save</button>	    
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 END -->
                        <!-- ROW-3 -->
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0">Post List</h3>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="grid-margin">
                                            <div class="">
                                                <div class="panel panel-primary">
                                                    <div class="tab-menu-heading border-0 p-0">
                                                        <div class="tabs-menu1">
                                                            <ul class="nav panel-tabs product-sale">
                                                                <li><a href="#tab5" class="active"
                                                                        data-bs-toggle="tab">All Posts</a></li>
                                                                <!-- <li><a href="#tab6" data-bs-toggle="tab"
                                                                        class="text-dark">Published</a></li>
                                                                <li><a href="#tab7" data-bs-toggle="tab"
                                                                        class="text-dark">Not Published</a></li> -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body tabs-menu-body border-0 pt-0">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tab5">
                                                                <div class="table-responsive">
                                                                    <table id="data-table"
                                                                        class="table table-bordered text-nowrap mb-0">
                                                                        <thead class="border-top">
                                                                            <tr>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 5%;">Post Id</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    English Title</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    French Title</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Image</th>
                                                                               
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 5%;">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            $count = 1;
                                                                                foreach ($AllActivities as $data) { 
                                                                                    echo '
                                                                                    <tr class="border-bottom">
                                                                                        <td class="text-center">
                                                                                            <div class="mt-0 mt-sm-2 d-block">
                                                                                                <h6
                                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                                    #'.$count++.'</h6>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="text-center">
                                                                                            <div class="mt-0 mt-sm-2 d-block">
                                                                                                <h6
                                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                                    '.$data["titleEnglish"].'</h6>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="text-center">
                                                                                            <div class="mt-0 mt-sm-2 d-block">
                                                                                                <h6
                                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                                    '.$data["titleFrench"].'</h6>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="d-flex">
                                                                                                <span class="avatar bradius"
                                                                                                    style="background-image: url(assets/post_images/'.$data["image"].')"></span>
                                                                                            </div>
                                                                                        </td>';
                                                                                 
                                                                                   echo '<td>
                                                                                            <div class="g-2">
                                                                                                <a class="btn text-primary btn-sm"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-bs-original-title="Edit"><span
                                                                                                        class="fe fe-edit fs-14"></span></a>
                                                                                                <a class="btn text-danger btn-sm"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-bs-original-title="Delete"><span
                                                                                                        class="fe fe-trash-2 fs-14"></span></a>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>';
                                                                                }
                                                                                
                                                                            ?>
                                                                             
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-3 END -->
                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->

        </div>

        <!-- Sidebar-right -->
        
        <!--/Sidebar-right-->

        <!-- Country-selector modal-->

        <!-- Country-selector modal-->

        
    </div>
    <!-- FOOTER -->
    <footer class="footers">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 col-sm-12 text-center">
                    Copyright © <?php
                        echo date('Y');
                    ?> 
                    <!-- <a href="javascript:void(0)">Sash</a> -->
                    . Designed 
                    <!-- with  -->
                    <!-- <span class="fa fa-heart text-danger"></span> -->
                    by <span style="color: blue;">TECH</span><span style="color: yellow;">TEAM</span>
                    <!-- <a href="javascript:void(0)"> Spruko </a> -->
                     All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="../assets/js/jquery.sparkline.min.js"></script>

    <!-- Sticky js -->
    <script src="../assets/js/sticky.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="../assets/js/circle-progress.min.js"></script>

    <!-- PIETY CHART JS-->
    <script src="../assets/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="../assets/plugins/peitychart/peitychart.init.js"></script>

    <!-- SIDEBAR JS -->
    <script src="../assets/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <!-- <script src="assets/plugins/chart/Chart.bundle.js"></script>
    <script src="assets/plugins/chart/rounded-barchart.js"></script>
    <script src="assets/plugins/chart/utils.js"></script> -->

    <!-- INTERNAL SELECT2 JS -->
    <script src="../assets/plugins/select2/select2.full.min.js"></script>

    <!-- INTERNAL Data tables js-->
    <script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>

    <!-- INTERNAL APEXCHART JS -->
    <!-- <script src="assets/js/apexcharts.js"></script>
    <script src="assets/plugins/apexchart/irregular-data-series.js"></script> -->

    <!-- C3 CHART JS -->
    <!-- <script src="assets/plugins/charts-c3/d3.v5.min.js"></script>
    <script src="assets/plugins/charts-c3/c3-chart.js"></script> -->

    <!-- CHART-DONUT JS -->
    <script src="../assets/js/charts.js"></script>

    <!-- INTERNAL Flot JS -->
    <script src="../assets/plugins/flot/jquery.flot.js"></script>
    <script src="../assets/plugins/flot/jquery.flot.fillbetween.js"></script>
    <script src="../assets/plugins/flot/chart.flot.sampledata.js"></script>
    <script src="../assets/plugins/flot/dashboard.sampledata.js"></script>

    <!-- INTERNAL Vector js -->
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- SIDE-MENU JS-->
    <script src="../assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="../assets/js/index1.js"></script>

    <!-- Color Theme js -->
    <script src="../assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="../assets/js/custom.js"></script>
    <script>
        if($('#title:visible').fadeOut(6000 )){
          
        }; 
    </script>
    <script>
  document.getElementById("open-modal").addEventListener("click", function() {
	document.getElementById("activityForm").style.display = "block";
	document.getElementById("open-modal").style.display = "none";
  });

  document.getElementById("close-modal").addEventListener("click", function() {
	document.getElementById("activityForm").style.display = "none";
	document.getElementById("open-modal").style.display = "block";

  });
</script>

</body>

</html>