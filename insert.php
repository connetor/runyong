<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/main.css?v=<?php echo "<?php echo filemtime('style.css'); ?>" ;?> ">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>ลงทะเบียน</title>
<body>


<?php
error_reporting(~E_NOTICE);
if($_GET["Action"] == "Save")
{
    // Statement
}
$conn=mysqli_connect("localhost","root","","runyong");
mysqli_set_charset($conn, "utf8");
if(!$conn){
  die("connection failed".mysqli_connect_error());
}


    if($_POST){
    $IDcard     = $_POST['IDcard'];
    $Email      = $_POST['Email'];
    $FnameTH    = $_POST['FnameTH'];
    $LnameTH    = $_POST['LnameTH'];
    $FnameEN    = $_POST['FnameEN'];
    $LnameEN    = $_POST['LnameEN'];
    $day        = $_POST['day'];
    $month      = $_POST['month'];
    $year       = $_POST['year'];
    $Bdate      = $_POST['year']."-".$_POST['month']."-".$_POST['day'];
    $Age        = $_POST['Age'];
    $Sex        = $_POST['Sex'];
    $Blood      = $_POST['Blood'];
    $Disease    = $_POST['Disease'];
    $Tel1       = $_POST['Tel1'];
    $Tel2       = $_POST['Tel2'];
    $Typee      = $_POST['Typee'];
    $Agetype    = $_POST['Agetype'];
    $Team       = $_POST['Team'];
    $Size       = $_POST['Size'];
    $Postconfirm= $_POST['Postconfirm'];
    $Addresss   = $_POST['Addresss'];
    $Comment    = $_POST['Comment'];
    $Isconfirm=0;
    $Price = 0;
    }
    else{
  //      echo "POST FAILED";
    }

if($Typee=='Fun Run' or $Typee=='Mini Marathon' or $Typee=='Fancy Fun Run' or $Typee=='Fancy Mini Marathon'){
  $Price = 350;
}
else
if($Typee=='VIP'){
  $Price = 1000;
}


if($Postconfirm==1){
  $Price+=70;
}



$sql="INSERT INTO regis (IDcard,Email,FnameTH,LnameTH,FnameEN,LnameEN,Bdate,Age,Sex,Blood,Disease,Tel1,Tel2,Typee,Agetype,Team,Size,Postconfirm,Addresss,Comment,Isconfirm,Price)
  VALUES ('$IDcard','$Email','$FnameTH','$LnameTH','$FnameEN','$LnameEN',DATE '$Bdate','$Age','$Sex','$Blood','$Disease','$Tel1','$Tel2','$Typee','$Agetype','$Team','$Size','$Postconfirm','$Addresss','$Comment','$Isconfirm','$Price')";

if(mysqli_query($conn,$sql)){
  //echo "Success";
}

else{
  //echo "Error".$sql."<br>".mysqli_error($conn);;
}

mysqli_close($conn);
?>


<form id="regForm" action="submitslip1.php" style="widht:50%">
<h1>ชำระเงิน</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <p>เลขบัตรประชาชน:</p>
      <input type="text" value="<?php echo "$IDcard"; ?>" readonly="readonly">       
    <p>เบอร์โทรติดต่อ:</p>
      <input type="text" value="<?php echo "$Tel1"; ?>" readonly="readonly">
    <p>ระยะ:</p>
    <select style="width:100px">
      <option> <?php echo "$Typee"; ?> </option>
    </select>
    <p>รุ่นอายุ:</p>
    <select style="width:100px">
      <option> <?php echo "$Agetype"; ?> </option>
    </select>

    <p>ไซส์เสื้อ:</p>
    <select style="width:50px">
      <option> <?php echo "$Size"; ?> </option>
    </select>

   <?php 
  if($Postconfirm==1){
    echo "<p>การรับเสื้อ และ หมายเลขBIB:</p>";
    echo "<input type='text' value='จัดส่ง EMS/KERRY ค่าบริการ 70 บาท' readonly>";

    echo "<p>ที่อยู่ในการจัดส่ง:</p>";
    echo "<input type='text' value='$Addresss' readonly>";
  }else
  if($Postconfirm==1){
    echo "<p>การรับเสื้อ และ หมายเลขBIB:</p>";
    echo "<input type='text' value='รับเอง วันที่ 9 มีนาคม 62 เวลา10.00-18.00' readonly>";
  }

  ?>


 

  <br><br><br><br>
  <div style="text-align: center;">
  <h1><br><br>ยอดชำระ:     <?php echo "$Price   "; ?> บาท</h1>
  </div>
  <div style="text-align: center;">
  <h3>กรุณาโอนเงินเข้าธนาคารไทยพาณิชย์ เลขบัญชี : 868-235492-0</h3>
  <img src="img/8.jpg" style="width:60%;height:30%;">
  </div>



  <br><br><br>
  <div style="text-align: center;">
  <button type="submit">แจ้งชำระเงิน</button>
  </div>


  </div>

</form>


  <script src="js/main.js"></script>


  <script type="text/javascript" >
  //disable back button//
  history.pushState(null, null, '');
  window.addEventListener('popstate', function(event) {
    history.pushState(null, null, '');
  });
  </script>

</body>
</html>