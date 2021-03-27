<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<style>
#container{
    background-color: lightyellow;
    font-family: verdana;
    font-size: 20px;
    width:50%;
    text-align: center;
    border: 3px solid #73AD21;
    position: absolute;
    left: 25%;
    
}
.btn {
  
  
  
  background-color: lightyellow;
  color: black;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
h1{
    color:red;
}
.container .btn:hover {
  background-color: black;
  color: white;
}

input,dselect, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
<div id="container">
<form action="" method="post">
<h1>THÊM MÓN ĂN</h1>
Ten San Pham:<input type="text" name="ten" value='<?php if(isset($_POST['ten'])) echo $_POST['ten'] ?>'><br>

Gia Tien:<input type="number" name="tien" placeholder="Giá trên 1 sản phẩm" value='<?php if(isset($_POST['tien'])) echo $_POST['tien'] ?>'><br>

Chi tiết sản phẩm:<input type="text" name="chitiet" placeholder="Miêu tả sản phẩm" value='<?php if(isset($_POST['chitiet'])) echo $_POST['chitiet'] ?>'><br>
Hinh Anh:<input type="text" name="img" placeholder="Hãy coppy ảnh trên internet để gián vào"  value='<?php if(isset($_POST['img'])) echo $_POST['img'] ?>'><br>
<input type="submit" class="btn"name="btn" value="Thêm sản phẩm"/><br>




    <?php
    //$_SESSION['mang'];
    $n=0;

       if(isset($_SESSION['mang'])){
            $mang = $_SESSION['mang'];

            $n=count($mang);
            echo $n;

        }
            if(isset($_POST['btn'])){

                $_SESSION['mang'][$n][0] =$_POST['ten'];
                $_SESSION['mang'][$n][1] =$_POST['tien'];
                $_SESSION['mang'][$n][2] =$_POST['chitiet'];
                $_SESSION['mang'][$n][3] =$_POST['img'];

                unset($_SESSION['mang']);
            header("location:http://localhost/projectNew/gioihang.php");
            }
    

    ?>
    </form>

    </div>
</body>
</html>