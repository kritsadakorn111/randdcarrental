<?php 

  require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>R&D Car Rental Chiangmai</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>

  <body>
    
    <!-- Pre Header -->
    <div id="pre-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
              <span><a href="register.php">สมัครสมาชิก</a></span>&nbsp;&nbsp;l&nbsp;&nbsp;<span><a href="login.php">เข้าสู่ระบบ</a></span>&nbsp;&nbsp;
              <span><a href="adminlogin.php"><img src="assets/images/admin1.png" width="16px" height="16px" alt=""></a></span>
              
              
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        
        <a class="navbar-brand" href="index.php"><img src="assets/images/R&D1.png" alt="" width="450" height="30"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">หน้าแรก
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="allcar.php">รถเช่าทั้งหมด</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="news.php">ข่าวสารเว็บไซต์</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">เงื่อนไขการให้บริการ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">ติดต่อเรา</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caption">
              <h2>บริการรถเช่าราคาถูก !!</h2>
              <div class="line-dec"></div>
              <p>บริการรถเช่าเชียงใหม่ในราคาเบาๆ พร้อมบริการแบบเป็นกันเอง  
              <br><br>คุณกำลังมองหารถเช่าเชียงใหม่อยู่รึเปล่า 😊 มาเช่ารถกับเราสิคะ R&D บริการรถเช่าเชียงใหม่ในราคาเบาๆสบายกระเป๋า มีรถให้เลือกมากมายหลายรุ่น หลายยี่ห้อ</p>
              <p>เพียงเป็นสมาชิก รับส่วนลดในการจองรถทุกคนไปเลย 10% <u><a href="register.php">สมัครสมาชิก</a></u></p>
              <div class="main-button">
                <a href="allcar.php">จองรถเช่าเลย !</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Featured Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>รถเช่าแนะนำ</h1>
              <p><a href="allcar.php">ดูทั้งหมด >></a></p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
            <?php
                $select_stmt = $db->prepare("SELECT * FROM tbl_car");
                $select_stmt->execute();

                while($row = $select_stmt->fetch(PDO::FETCH_ASSOC)){

                
            ?>
              <a href="car1.php?id=<?php echo $row['id']; ?><?php //echo $row['news_link']; ?>">
                <div class="featured-item mb-3">
                    
                  <img src="news_manage/car_img/<?php echo $row['img1']; ?>" width="140px" height="160px" alt="">
                  <h4><?php echo $row['car']; ?></h4>
                  <?php
                      $number = $row["price"];
                    ?>
                  <h6><?php echo number_format($number,2) ?> บาท / วัน</h6>
                  <h6>
                  <?php 
                    $status = $row["status"]; // ทดสอบ if else ที่เราได้เขียนไว้

                    if($status==1) {  
                         echo "สถานะการจอง : <font color='red'> ไม่ว่าง </font>";
                    } else {
                    echo "สถานะการจอง : <font color='green'> ว่าง </font>";
                    } 
                    ?>
                  </h6>
                </div>
              </a>
              <?php } ?>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Featred Ends Here -->




    
    <!-- Footer Starts Here -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="logo">
              <img src="assets/images/R&D2.png" alt="" width="300" height="25">
            </div>
          </div>
          <div class="col-md-12">
            <div class="footer-menu">
              <ul>
                <li><a href="index.php">หน้าแรก</a></li>
                <li><a href="allcar.php">รถเช่าทั้งหมด</a></li>
                <li><a href="news.php">ข่าวสารเว็บไซต์</a></li>
                <li><a href="service.php">เงื่อนไขการให้บริการ</a></li>
                <li><a href="contact.php">ติดต่อเรา</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="social-icons">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Ends Here -->


    <!-- Sub Footer Starts Here -->
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
              <p>Copyright &copy; 2021
                
                - Design by: <a rel="nofollow" href="https://www.facebook.com/KritsadakornKhaoluang/">Kritsadakorn Khaoluang</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sub Footer Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
