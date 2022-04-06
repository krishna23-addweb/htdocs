<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Sleek - Admin Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <link href="assets/img/favicon.png" rel="shortcut icon" />
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
      
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <?php  include('includesidebar.php'); ?>
        </aside>
      <div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
            <?php include('header.php'); ?>
          </header>
        <div class="content-wrapper">
          <div class="content">				
<?php
error_reporting(0);
ob_start();
include('commonData.php');
?>
<html>
<head>
<title>PHP File Upload example</title>
</head>
<body>
<center>
<table class= "mt-3">
<form enctype="multipart/form-data" method="post" >
    <tr>
    <td>Enter Id:</td>
    <td><input type-="text" name="id"/><br/><br/></td>
    </tr>
    <tr>
    <td>Enter Brand: </td>
    <td><input type="text" name="brand"/><br/><br/></td>
    </tr>
    <tr>
    <td>Enter Product_Details: </td>
    <td><input type="text" name="Product"/><br/><br/></td>  
    </tr>
    <tr>
    <td>Enter Price: </td>
    <td><input type="number" name="Price"/><br/><br/></td>
    </tr>
    <tr>
    <td>Enter Features : </td>
    <td><input type="text" name="features"/><br/><br/></td>
    </tr>
    <tr>
    <td>Enter Frame Material:</td>
    <td><input type="text" name="frame"/><br/><br/></td>
    </tr>
    <tr>
    <td>Enter Warranty:</td>
    <td><input type="text" name="Warranty"/><br/><br/></td>
    </tr>
    <tr>
    <td>Select image :</td>
    <td><input type="file" name="file"><br/><br/></td>
    </tr>
    <tr>
    <td><input type="submit" value="Upload" name="Submit1"> <br/><br/></td>
    </tr>
<!-- <a href="t-shirt.php">Image</a> -->
</form>
</center>
</table>
<?php
$con=mysqli_connect("localhost","root","","admin_panel");
if(isset($_POST['Submit1']))
{ 
    $id=$_POST['id'];
    $brand=$_POST['brand'];
    $Product=$_POST['Product'];
    $Price=$_POST['Price'];
    $features=$_POST['features'];
    $frame=$_POST['frame'];
    $Warranty=$_POST['Warranty'];
    $filepath = "img/" . $_FILES["file"]["name"];

$sql = "INSERT INTO sunglasses VALUES ('$id','$brand','$Product',$Price,'$features','$frame','$Warranty','$filepath')";
move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
$query =mysqli_query($con, $sql);
if($query) 
{
echo "Data Inserted";
//header('Location:sunglasses.php');
} 
else 
{
echo "Error !!";
}
} 
?>

</body>
</html>
</div>
        </div>
      </div>
    </div>

    <footer class="footer mt-auto">
      <div class="copyright bg-white">
          <p>
                &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                <a
                  class="text-primary"
                  href="http://www.iamabdus.com/"
                  target="_blank"
                  >Abdus</a
                >.
          </p>
      </div>
      <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
      </script>
      </footer>

    </div>
  </div>

    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/toaster/toastr.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/charts/Chart.min.js"></script>
<script src="assets/plugins/ladda/spin.min.js"></script>
<script src="assets/plugins/ladda/ladda.min.js"></script>
<script src="assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>
<script src="assets/js/sleek.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/date-range.js"></script>
<script src="assets/js/map.js"></script>
<script src="assets/js/custom.js"></script>




  </body>
</html>