<?php 
  require_once('connection.php');

  if (isset($_REQUEST['btn_insert'])){
    try {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];  
        $detail = $_REQUEST['detail'];
        $time = $_REQUEST['time'];

        if(empty($name)){
          $errorMsg = "กรุณากรอกชื่อ";
      } else if (empty($email)){
          $errorMsg = "กรุณากรอกอีเมลล์";
      } else if (empty($subject)){
          $errorMsg = "กรุณากรอกหัวข้อ";
      } else if (empty($detail)){
          $errorMsg = "กรุณากรอกเนื้อหา";
      }

      if (!isset($errorMsg)) {
        $insert_stmt = $db->prepare("INSERT INTO tbl_comment(name, email, subject, detail, time) VALUES (:name, :email, :subject ,:detail, :time)");
                $insert_stmt->bindParam(':name', $name);
                $insert_stmt->bindParam(':email', $email);
                $insert_stmt->bindParam(':subject', $subject);
                $insert_stmt->bindParam(':detail', $detail);
                $insert_stmt->bindParam(':time', $time);
                
                
                    
                if ($insert_stmt->execute()){
                    //$insertMsg = "Insert News Successfully";
                    //echo "<script>alert('เพิ่มข้อมูลรถเรียบร้อยแล้ว')</script>";
                    header("refresh:1;contact.php");
                }
            }
        
        
        
        
        
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        
       
    }
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
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="https://unpkg.com/feather-icons"></script>


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
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">ติดต่อเรา
                <span class="sr-only">(current)</span>
              </a>

            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>ติดต่อเรา</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div id="map">
            		<!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->

                    <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d414.70294594420363!2d99.0099103281847!3d18.750320125388225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d18.7500947!2d99.0099182!5e0!3m2!1sth!2sth!4v1625731691704!5m2!1sth!2sth" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                      <br><br>
                  <img src="assets/images/home.svg" alt="" width="25" height="25"> 933 ถนน เชียงใหม่-ลำพูน ตำบลหนองหอย อำเภอเมือง เชียงใหม่ 50000
                  <br><br>
                  <img src="assets/images/phone.svg" alt="" width="25" height="25"> 099 296 3555 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  
                  <img src="assets/images/mail.svg" alt="" width="25" height="25"> pittayarat1994@gmail.com
                  <br><br>
                  <a href="https://www.facebook.com/cnxcarrental88"><img src="assets/images/facebook.svg" alt="" width="25" height="25"></a> R&D Car rental Chiangmai รถเช่าเชียงใหม่ราคาถูก&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/cnxcarrental88"><img src="assets/images/fb.png" alt="" width="50" height="50"></a>
                  <br>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post">
                 
                <?php
 
 $date = date("Y-m-d");
 $time = date("H:i:s");
  
 

?>
                  <div class="row">
                  
                      <fieldset>
                        <input name="time" type="text" class="form-control" value="<?php echo $date; ?>" hidden>
                      </fieldset>
                    
                    <div class="col-md-6">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="ชื่อ..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" placeholder="อีเมลล์..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="หัวข้อ..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="detail" rows="6" class="form-control" id="message" placeholder="เนื้อหา..." required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" name="btn_insert" class="button">ส่งข้อคิดเห็น</button>
                      </fieldset>
                    </div>
                   
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Page Ends Here -->

   


    
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
