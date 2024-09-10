<?php
session_start();
?>
<?php


// Language : fr $ en
if (!isset($_SESSION['language'])) {
    $_SESSION['language'] = "fr";
  }
  
  if ($_GET) {
    // var_dump($_GET);
    // die();
    switch ($_GET['lang']) {
      case 'fr':
        $_SESSION['language'] = 'fr';
        break;
      case 'en':
        $_SESSION['language'] = 'en';
        break;
      default:
        $_SESSION['language'] = 'en';
    }
  }

$message = "";
$error = "";

    require_once 'functions.php';
    $AllActivities = getAllActivity();


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
    <!-- <link href="../assets/css/style.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="../node_modules/css/bootstrap.min.css">
    <link href="../assets/css/dark-style.css?<?php echo time(); ?>" rel="stylesheet" />
    <link href="../assets/css/transparent-style.css?<?php echo time(); ?>" rel="stylesheet">
    <link href="../assets/css/skin-modes.css?<?php echo time(); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />

    <!--- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />
    <style>
        .avatar {
            width: 60px;
            height: 60px;
            object-fit: cover;
        }
    </style>

</head>
<body class="app sidebar-mini ltr light-mode">
    
                <!--app-content open-->
            <div class="main-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                     


                        <!-- ROW-2 -->
                        <div class="row my-5">
                            <div class="col-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between"  style="width:100%">
                                        <h3 class="card-title mb-0">Posts</h3>
                                        <div id="open-modal" class="container-login100-form-btn" style="width:100px">
                                            <button id="open-modal"  class="login100-form-btn btn-success px-2">New</button>	                    
                                        </div>
                                    </div>
                                    <div id="activityForm" class="wrap-login100 p-3" style="display:none;">
                                        <form action="auth.php" method="post" enctype="multipart/form-data">
                                            <span class="login100-form-title">
                                                   Products Form
                                                </span>
                                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="mdi mdi-account" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 ms-0 form-control" id="titleEnglish" name="titleEnglish" type="text" placeholder="English Title" required>
                                                <input name="id" id="id" type="text" hidden>
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="mdi mdi-account" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 ms-0 form-control" id="titleFrench" name="titleFrench" type="text" placeholder="French Title" required>
                                            
                                            </div>
                                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="mdi mdi-account" aria-hidden="true"></i>
                                                </a>
                                                <textarea class="input100 border-start-0 ms-0 form-control" style="height:100px" id="descEnglish" name="descEnglish" type="text" placeholder="English Description" required></textarea>
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="mdi mdi-account" aria-hidden="true"></i>
                                                </a>
                                                <textarea class="input100 border-start-0 ms-0 form-control" style="height:100px" id="descFrench" name="descFrench" type="text" placeholder="French Description" required></textarea>
                                            </div>
                                            <!-- Upload image input-->
                                            <div class="input-group rounded-pill bg-white shadow-sm my-3">
                                                <input name="image" id="upload" type="file" class="form-control border-0">
                                                <!-- <label id="upload-label" for="upload" class="font-weight-light text-muted"></label> -->
                                                <div class="input-group-append">
                                                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                                </div>
                                            </div>
                                            <div class="" id="pic" style="display:none;margin-top:10px">
                                                <img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-lg mx-auto d-block" style="height:240px;width:240px;object-fit:cover">
                                            </div>
                                            <div class="container-login100-form-btn my-3">
                                                <button id="close-modal" style="width:100px;margin-right:30px"  class="login100-form-btn btn-danger">Cancel</button>	    
                                                <button type="submit" style="width:100px;margin-left:10px" name="submit" id="submit"  class="login100-form-btn btn-success">Save</button>	    
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
                                                                <div class="table-responsiv">
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
                                                                            $lang = $_SESSION['language'] == 'en' ? 'en' : 'fr';
                                                                                foreach ($AllActivities as $data) {
                                                                                    $jsonData = json_encode($data); 
                                                                                    ?>
                                                                                    
                                                                                    <tr class="border-bottom">
                                                                                        <td class="text-center">
                                                                                            <div class="mt-0 mt-sm-2 d-block">
                                                                                                <h6 class="mb-0 fs-14 fw-semibold">
                                                                                                    #<?php echo $count++ ;?></h6>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="text-center">
                                                                                            <div class="mt-0 mt-sm-2 d-block">
                                                                                                <h6 class="mb-0 fs-14 fw-semibold">
                                                                                                    <?php echo $data["titleEnglish"];?>
                                                                                                    </h6>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="text-center">
                                                                                            <div class="mt-0 mt-sm-2 d-block">
                                                                                                <h6
                                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                                    <?php echo $data["titleFrench"];?></h6>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="">
                                                                                                <span> <img class="avatar bradius" src="assets/post_images/<?php echo $data["image"];?>" alt=""></span>
                                                                                            </div>
                                                                                        </td>
                                                                                 
                                                                                       <td>
                                                                                            
                                                                                            <div class="g-2">
                                                                                                <a class="btn text-success btn-sm" 
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-bs-original-title="View"><span 
                                                                                                        class="fe fe-eye" onclick='openPopUp(<?php echo $jsonData; ?>, "<?php echo $lang; ?>")'></span></a>
                                                                                                <a href="#activityForm" onclick='UpdateAccount(<?php echo $jsonData; ?>)' class="btn text-primary btn-sm"
                                                                                                    data-bs-toggle="tooltip"
                                                                                                    data-bs-original-title="Edit">
                                                                                                    <span class="fe fe-edit"></span></a>
                                                                                                <a onclick='DeleteAccount(<?php echo $jsonData; ?>)' name="delete" class="btn text-danger btn-sm"
                                                                                                data-bs-target="#country-selector"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-toggle="tooltip"
                                                                                                    data-bs-original-title="Delete"><span
                                                                                                        class="fe fe-trash-2"></span></a>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <?php
       
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



    <div id="popup1" class="popup hide-popup1">
                        <div class="popup-content1">
                            <div class="popup-close1 text-danger">X
                                <i class='fas fa-xmark '></i>
                            </div>
                            <div class="popup-left1">
                                <div class="popup-img-container1">
                                    <img src="assets/post_images/<?php echo htmlspecialchars($data['image']); ?>"
                                        class="img-fluid popup-img1" alt="">
                                </div>
                            </div>
                            <div class="popup-right1">
                                <div class="right-content1">
                                    <h1 id="titl">
                                        <?php echo htmlspecialchars($_SESSION['language'] == 'en' ? $data['titleEnglish'] : $data['titleFrench']); ?>
                                    </h1>
                                    <p id="description">
                                        <?php echo htmlspecialchars($_SESSION['language'] == 'en' ? $data['descEnglish'] : $data['descFrench']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                        <!-- Country-selector modal-->
        <div class="modal fade" id="country-selector">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content country-select-modal">
                    <div class="modal-header">
                        <h6 class="modal-title" id="Test2">Deleting Post<h6><button id="close" aria-label="Close" class="btn-close"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form class="login100-form validate-form" action="auth.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" id="user_id" name="id" value="" />
                            <div id="deletModal"></div>
                            <div class="container-login100-form-btn">
                            <button id="close" aria-label="Close" class="btn-close login100-form-btn btn-primary" style="width:100px;margin-left:10px"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">Close</span></button>   
                                <button type="submit" style="width:100px;margin-left:70px" name="delete"  class="login100-form-btn btn-danger">DELETE</button>	    
                            </div>
                        </form>                  
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Country-selector modal-->
    
  </section><!-- popup section -->
  <script>
    function openPopUp(data, lang) {
        // Assuming 'data' is the object passed from PHP
        const popup = document.getElementById('popup1');
        const close = document.querySelector('.popup-close1');

        // Setting image source
        const img = popup.querySelector('.popup-img1');
        img.src = `assets/post_images/${data.image}`;
        img.alt = data.titleEnglish; // Or titleFrench, depending on the session language

        // Setting title
        const title = popup.querySelector('.popup-right1 .right-content1 h1');
        title.textContent = lang == 'en' ? data.titleEnglish : data.titleFrench; // Or titleFrench

        // Setting description
        const desc = popup.querySelector('.popup-right1 .right-content1 p');
        desc.textContent = lang == 'en' ? data.descEnglish : data.descFrench; // Or descFrench

        // Show the popup
        popup.classList.remove("hide-popup1");
        popup.classList.add("show-popup1");
        close.addEventListener('click', ()=>{
          popup.classList.add("hide-popup1");
        })
    }
</script>
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
        if($('#title:visible').fadeOut(6000 )){}; 
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
<script>
      function UpdateAccount(data) {
        $('#submit').attr('name', 'update')
        document.getElementById("activityForm").style.display = "block"; 
        $("#id").val(data.id)
        $("#titleEnglish").val(data.titleEnglish)
        $("#titleFrench").val(data.titleFrench)
        $("#descEnglish").val(data.descEnglish)
        $("#descFrench").val(data.descFrench)
        var path = "assets/post_images/"+ data.image
        $('#imageResult').attr('src', path); 
        document.getElementById("pic").style.display = "block";
        document.getElementById("activityForm").focus();
	    document.getElementById("open-modal").style.display = "none";
    }

  document.getElementById("open-modal").addEventListener("click", function() {
    document.getElementById("pic").style.display = "none";
  });
   
   function DeleteAccount(data) {
        $("#user_id").val(data.id)
        var element = document.getElementById("deletModal");
        var newElement = document.createElement("h3");
        newElement.textContent = "Are you sure you want to delete this post ?";
        element.appendChild(newElement);
        let lchild = element.lastChild;
        element.innerHTML = '';
        element.appendChild(lchild)      
    };

  document.getElementById("close-modal").addEventListener("click", function(e) {
    e.preventDefault()
	document.getElementById("activityForm").style.display = "none";
	document.getElementById("open-modal").style.display = "block";

  });
</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imageResult')
                    .attr('src', e.target.result);
                    $( "#pic" ).css( "display", "block" )
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

$(function () {
    $('#upload').on('change', function () {
        readURL(input);
    });
});

/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}
        if($('.alert:visible').fadeOut(8000 )){
          
        };        
    </script>


</body>

</html>