<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>test</title>
  <link rel="stylesheet" href="">
  <script src="vue.js"></script>
  <style>
  h1 {
  color: #1abc9c;
  }
  button {
  border: none;
  background: #1abc9c;
  color: white;
  }
  a {
  color: #1abc9c;
  text-decoration: none;
  }
  a:hover {
  color: red;
}
  </style>
</head>
<body>
<?php
  session_start();
?>
<?php
  $id = $_GET['id_banve'];
  include("config.php");
  $sql = "select sove from banve where id_banve = '$id'";
  $result = mysqli_query($connect,$sql);
  $row = mysqli_fetch_assoc($result);
?>
<h1>Thông tin đặt vé</h1>

<form method="POST">
<input type="number" min="1" max="<?php echo $row["sove"] ?>" name="sovemua">
<button type="submit" name="SDT">Xác Nhận</button>
</form>
<a href="goi.php">Quay lại</a>
<?php
  include "config.php";
  if (isset($_SESSION['SDT'])) {
    $tendangnhap_user = $_SESSION["tendangnhap_user"];
    $sovemua = $_POST["sovemua"];
    $id_banve = $_SESSION["id_banve"];
    $query = "insert into muave (tendangnhap_user, id_banve, sovemua) values('$tendangnhap_user', '$id_banve', '$sovemua')";
   
    if (mysqli_query($connect, $query)==true) {
      header("location:goi.php");
    }
    else{
      echo "error";
    }
  
  }
?>
<?php
  include "config.php";
  if (isset($_POST['SDT'])) {
    $sovemua = $_POST["sovemua"];
    $id_banve = $_GET["id_banve"];
    $query = "UPDATE banve SET sove = sove - '$sovemua' WHERE id_banve = '$id_banve'";
    if (mysqli_query($connect, $query)==true) {
        header("Location: goi.php");
    }
    else{
      echo "error";
    }
  }
?>
</body>
</html>