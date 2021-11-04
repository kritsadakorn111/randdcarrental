<!-- bQVqP8yufvadpcQpms6vfaooH45e01MvFoYMkMeXPC1 -->

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <title>R&D Car Rental Chiangmai</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/flex-slider.css">
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
            <li class="nav-item">
              <a class="nav-link" href="index.php">หน้าแรก</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="allcar.php">รถเช่าทั้งหมด
                <span class="sr-only">(current)</span>
              </a>
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
    <!-- Single Starts Here -->
    <?php
               
               
               /*$id = $_REQUEST['id'];
               $select_stmt = $db->prepare("SELECT * FROM tbl_car WHERE id = :uid");
               $select_stmt->bindParam(':uid', $id);
               $select_stmt->execute();
               $row = $select_stmt->fetch(PDO::FETCH_ASSOC);*/

                
            ?>
    <div class="single-product">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>ชำระเงิน</h1>
              
            </div>
          </div>
          <div class="col-md-6">
          <?php
                $select_stmt = $db->prepare("SELECT * FROM tbl_bookbank");
                $select_stmt->execute();

                $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

                
            ?>
            <div class="product-slider">
              <div id="slider" class="flexslider">
               <img src="imgbookbank/<?php echo $row['bankimg']; ?>" width="500px" height="500px"/>
            </div>    
            </div>
            <form action="line-notify.php" method="post" class="form-horizontal" enctype="multipart/form-data">
            
            <?php
                $datestart = "$_POST[datego]";
                $dateend = "$_POST[dateback]";
                
                $calculate =strtotime("$dateend")-strtotime("$datestart");
                $summary=floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.)

            ?>
            <?php

                $a = "$_POST[txt_price]";
                $b = $summary;
                $c = $a * $b;

               

            ?>
                    <div class="input-group">
                         <h1>ยอดชำระรวม     &nbsp;    &nbsp;    &nbsp;        </h1>
                         <input type="text" name="txt_totalprice" size="1" value="<?php echo $c ;?>.00" readonly> &nbsp;บาท
                    </div>
                    <div class="input-group">
                         
                         <h3>หลักฐานการชำระเงิน    &nbsp;    &nbsp;    &nbsp;        </h3>
                         <input type="file" name="txt_img">
                         <h5>** หากท่านเลือกชำระเงิน ณ วันรับรถ สามารถกด "ตกลง" ได้เลย</h5>
                    </div>
              
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4>กรุณาตรวจสอบข้อมูล</h4>
              <?php 
                if (isset($errorMsg)) {
                  foreach($errorMsg as $error) {
              ?>
                <div class="alert alert-danger">
                  <strong><?php echo $error; ?></strong>
                </div>
              <?php
                  }
                }
              ?>
              <?php 
                if (isset($insertMsg)) {    
              ?>
                <div class="alert alert-success">
                  <strong><?php echo $insertMsg; ?></strong>
                </div>
              <?php
                  }
                
              ?>
              
              
                    <div class="input-group">
                         
                         <label for="username">ยี่ห้อ / รุ่น     &nbsp;    &nbsp;    &nbsp;        </label>
                         <input type="text" name="txt_carbrand"  value="<?php echo $_POST["txt_carbrand"];?>" readonly>
                    </div>
                    <div class="input-group">
                         <label for="username">ราคา &nbsp;    &nbsp;    </label>
                         <input type="text" name="txt_price"  value="<?php echo $_POST["txt_price"];?>" readonly>
                    </div>  
                    <div class="input-group">
                         <label for="username">ชื่อ     &nbsp;    &nbsp;    &nbsp;        </label>
                         <input type="text" name="txt_name"  value="<?php echo $_POST["txt_name"];?>" readonly>
                    </div>
                    <div class="input-group">
                         <label for="username">นามสกุล</label>
                         <input type="text" name="txt_lastname"  value="<?php echo $_POST["txt_lastname"];?>" readonly>
                    </div>  
                    <div class="input-group">
                         <label for="username">เลขประจำตัวประชาชน</label>
                         <input type="text" name="txt_idnumber"  value="<?php echo $_POST["txt_idnumber"];?>" readonly>
                    </div>  
                    <div class="input-group">
                         <label for="username">ที่อยู่ &nbsp;    &nbsp;    &nbsp;</label>
                         <input type="text" name="txt_address"  value="<?php echo $_POST["txt_address"];?>" readonly>
                    </div> 
                    <div class="input-group">
                         <label for="username">อีเมลล์</label>
                         <input type="text" name="txt_email"  value="<?php echo $_POST["txt_email"];?>" readonly>
                    </div> 
                    <div class="input-group">
                         <label for="username">เบอร์โทรศัพท์</label>
                         <input type="text" name="txt_phone"  value="<?php echo $_POST["txt_phone"];?>" readonly>
                    </div> 
                   
                    <br>
           
                    <label for="date">วันที่ต้องการจอง</label>
                    <input type="text" name="datego" size="12" value="<?php echo $_POST["datego"];?>">
                    
                    <label for="date">ถึงวันที่</label>
                    <input type="text" name="dateback" size="12" value="<?php echo $_POST["dateback"];?>">

                    <p>
                    <label for="date">รวมจำนวนวันที่เช่ารถ</label>
                    <input type="text" name="sumday" size="2" value="<?php echo $summary ;?>"> วัน
<br><br>
                    <label for="date">สถานที่รับรถ</label>
                    <input type="text" name="txt_place" value="<?php echo $_POST["txt_place"];?>">
                    <label for="date">เวลา</label>
                    <input type="text" name="txt_time" value="<?php echo $_POST["txt_time"];?> น.">
                    
                    <input type="text" name="txt_date"  value="<?php echo $_POST["txt_date"];?>" hidden>
                    
                    <div class="input-group">
                    <!--<label for="pay">การชำระเงิน</label>&nbsp;&nbsp;-->
                    <input type="text" name="status" value="<?php echo $_POST["status"]/*=="1"?"ชำระ ณ วันรับรถ":"ชำระเงินแล้ว"*/;?>" hidden>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    </p>
               
                
                <!--<input type="submit" class="btn btn-primary"  value="ตกลง">-->
                <!--<a href="carrent2.php" class="btn btn-primary" name="btn_rent">ตกลง</a>-->
                <button type="submit" name="btn_rent" class="btn btn-primary" >ตกลง</button>&nbsp;
                <a href="carrentform.php" class="btn btn-danger">ยกเลิก</a>
                
                
                
              </form>

              <!--<div class="down-content">
                
                <div class="share">
                  <h6>Share: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
                </div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Single Page Ends Here -->


    <!-- Similar Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>รถเช่าที่แนะนำ</h1>
            </div>
          </div>
          <div class="col-md-12">
            
            <div class="owl-carousel owl-theme">
            <?php
                $select_stmt = $db->prepare("SELECT * FROM tbl_car");
                $select_stmt->execute();

                while($row = $select_stmt->fetch(PDO::FETCH_ASSOC)){

                
            ?>
              <a href="car1.php?id=<?php echo $row['id']; ?>">
                <div class="featured-item mb-3">
                    
                  <img src="news_manage/car_img/<?php echo $row['img1']; ?>" width="140px" height="160px" alt="">
                  <h4><?php echo $row['car']; ?></h4>
                  <h6><?php echo $row['price']; ?> บาท / วัน</h6>
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
      
    </div>
    
    <!-- Similar Ends Here -->


    

    
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
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/flex-slider.js"></script>


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