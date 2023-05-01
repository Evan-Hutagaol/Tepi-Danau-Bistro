<?php  
$koneksi = mysqli_connect("localhost", "root", "", "tdbistro") or die ('Gagal terhubung ke database');

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin login</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper" style="background-color: #1A2226">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background-color: white" >
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="background-color: #1A2226"; href="dashboard.php">ADMIN</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> 
<?php echo "date.timezone" ?>&nbsp; 
<a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>



        </nav>   
           <!-- navigasi  -->
            <nav class="navbar-default navbar-side" role="navigation" style="background-color: #1A2226">
            <div class="sidebar-collapse" >
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/logo.jpeg" class="user-image img-responsive" style="border-radius: 50%;" />
					</li>
                    <li><a href="dashboard.php"><i class="fa fa-dashboar fa-3x"></i> Home</a></li>
                    <li><a href="dashboard.php?halaman=produk"><i class="fa fa-dashboar fa-3x"></i> Menu</a></li>
                    <li><a href="dashboard.php?halaman=fasilitas"><i class="fa fa-dashboar fa-3x"></i> fasilitas</a></li>
                    <li><a href="dashboard.php?halaman=kelender"><i class="fa fa-dashboar fa-3x"></i> calender</a></li>
                    <li><a href="index.php"><i class="fa fa-dashboad f-3x"></i> logout</a></li>
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php 
                if(isset($_GET['halaman']))
                {
                    if($_GET['halaman']== "produk")
                    {
                        include 'produk.php';
                    }
                    elseif($_GET['halaman']== "pembelian")
                    {
                        include 'pembelian.php';
                    }
                    elseif ($_GET['halaman']=="fasilitas") 
                    {
                        include 'fasilitas.php';
                    }
                    elseif($_GET['halaman']=="tambahproduk")
                    {
                        include 'tambahproduk.php';
                    }
                    elseif($_GET['halaman']=="tambahfasilitas")
                    {
                        include 'tambahfasilitas.php';
                    }
                    elseif($_GET['halaman']=="hapusproduk")
                    {
                        include  'hapusproduk.php';
                    }
                    elseif ($_GET['halaman']=="ubahproduk") 
                    {
                        include 'ubahproduk.php';
                    }
                    elseif($_GET['halaman']=="kelender")
                    {
                        include 'kelender.php';
                    }
                    elseif ($_GET['halaman']=="hapusfasilitas") 
                    {
                        include 'hapusfasilitas.php';
                    }
                
                }
                else
                {
                    include 'home.php';
                }

                 ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
