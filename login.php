<!DOCTYPE html>
<html>
    <head>
        <title>Đăng nhập</title>
          <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
          <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
          <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
          <!------ Include the above in your HEAD tag ---------->
          <style type="text/css">
            @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
          .login-block{
            background: #AFEEEE;
          float:left;
          width:100%;
          padding : 50px 0;
          }
          .banner-sec{background:url(https://thietbivesinhthienloc.com/images/tintuc/11-2019/lamviec1.jpg)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
          .container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
          .carousel-inner{border-radius:0 10px 10px 0;}
          .carousel-caption{text-align:left; left:5%;}
          .login-sec{padding: 50px 30px; position:relative;}
          .login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
          .login-sec .copy-text i{color:#FEB58A;}
          .login-sec .copy-text a{color:#E36262;}
          .login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #5250db;}
          .login-sec h2:after{content:" "; width:100px; height:5px; background:#B0C4DE; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
          .btn-login{background: #AFEEEE; font-weight:600;}
          .banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
          .banner-text h2{color:#000; font-weight:600;}
          .banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
          .banner-text p{color:#000; font-size: 17px;}
          </style>
    </head>
<body>
<form method="POST">
<section class="login-block">
    <div class="container">
    <div class="row">
        <div class="col-md-4 login-sec">
            <h2 class="text-center">Login thành viên</h2>
            <form class="login-form">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text" name="tendangnhap_user" class="form-control" placeholder="">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" name="pass_user" class="form-control" placeholder="">
  </div>
  <?php
    error_reporting(0);
    session_start();
    $tendangnhap_user = $_POST["tendangnhap_user"];
    $_SESSION["tendangnhap_user"]="$tendangnhap_user";
  ?>
  <?php
  include "config.php";
  if(isset($_POST['submit']))
  {
    $tendangnhap_user = $_POST["tendangnhap_user"];
    $pass_user = $_POST["pass_user"];
    if($tendangnhap_user=="" || $pass_user=="")
    {
      echo "<p style='color:red'>Hãy điền đầy đủ thông tin</p>";   
    }
    else{
      $sql="select * from user where tendangnhap_user='$tendangnhap_user' and pass_user='$pass_user'";
      $query=mysqli_query($connect,$sql);
      $num_rows=mysqli_num_rows($query);
      $row = mysqli_fetch_assoc($query);
      if ($num_rows!=0) {
        header("Location: trangchu.php?tendangnhap_user=".$row["tendangnhap_user"]."");
      }
      else{
        echo "<p style='color:red'>Tên đăng nhập hoặc mật khẩu không chính xác!</p>";
          }
      }
    }
  ?>
  
  <div class="form-check">
    <button type="submit" name="submit" class="btn btn-login float-right">Đăng nhập</button>
  </div>
  
</form>
<br>
<br>
<br>
<br>
<div class="d-flex justify-content-center links">
  Don't have an account?<a href="dangki.php">Sign Up</a>
</div>
<div class="d-flex justify-content-center links"><a href="adminlogin.php">Login ADMIN</a>
</div>
<div class="copy-text">VIBRANT <i class="fa fa-heart"></i> Việt Nam</div>
        </div>
        <div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://toigingiuvedep.vn/wp-content/uploads/2021/08/nhung-background-book-background-sach-dep-day-an-tuong.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>VIBRANT</h2>
            <p>VIBRANT Group là một tập đoàn đa quốc gia có trụ sở chính được đặt tại Hàn Quốc và Nhật Bản. VIBRANT do doanh nhân người Hàn Quốc Shin Kyuk-ho thành lập lần đầu tiên vào tháng 6 năm 1948 tại Tokyo. Từ Tokyo, VIBRANT mở rộng sang Hàn Quốc với việc thành lập của VIBRANT Confectionery tại Seoul vào ngày 3 tháng 4 năm 1967 và cuối cùng phát triển trở thành tập đoàn kinh doanh đa ngành có quy mô lớn thứ 5 của Hàn Quốc.</p>
        </div>  
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://toigingiuvedep.vn/wp-content/uploads/2021/08/nhung-background-book-background-sach-dep-day-an-tuong.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>VIBRANT</h2>
            <p>VIBRANT Group là một tập đoàn đa quốc gia có trụ sở chính được đặt tại Hàn Quốc và Nhật Bản. VIBRANT do doanh nhân người Hàn Quốc Shin Kyuk-ho thành lập lần đầu tiên vào tháng 6 năm 1948 tại Tokyo. Từ Tokyo, VIBRANT mở rộng sang Hàn Quốc với việc thành lập của VIBRANT Confectionery tại Seoul vào ngày 3 tháng 4 năm 1967 và cuối cùng phát triển trở thành tập đoàn kinh doanh đa ngành có quy mô lớn thứ 5 của Hàn Quốc.</p>
        </div>  
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://toigingiuvedep.vn/wp-content/uploads/2021/08/nhung-background-book-background-sach-dep-day-an-tuong.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>VIBRANT</h2>
            <p>VIBRANT Group là một tập đoàn đa quốc gia có trụ sở chính được đặt tại Hàn Quốc và Nhật Bản. VIBRANT do doanh nhân người Hàn Quốc Shin Kyuk-ho thành lập lần đầu tiên vào tháng 6 năm 1948 tại Tokyo. Từ Tokyo, VIBRANT mở rộng sang Hàn Quốc với việc thành lập của VIBRANT Confectionery tại Seoul vào ngày 3 tháng 4 năm 1967 và cuối cùng phát triển trở thành tập đoàn kinh doanh đa ngành có quy mô lớn thứ 5 của Hàn Quốc.</p>
        </div>  
    </div>
  </div>
            </div>     
            
        </div>
    </div>
</div>
</section>
</body>
</html>
