<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/main.css?v=<?php echo "<?php echo filemtime('style.css'); ?>" ;?> ">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>ลงทะเบียน</title>
<body>


<form id="regForm" action="insert.php" method="post" target="_blank">

        <div style="text-align:center">
            <a href="index.html">
              <img src="img/logo.png" width="25%" height="25%">  
            </a>

            <h4>รายได้หลังค่าใช้จ่ายมอบให้แก่สมาคมกู้ชีพ-กู้ภัยลำพูน</h4>
        </div>

        <hr style="padding-top: 50;padding-bottom: 50;">

        <!-- One "tab" for each step in the form: -->
        <div class="tab">
                <p>เลขบัตรประชาชน:</p>
                  <input type="text" oninput="checkID()" id="IDcard" name="IDcard" minlength="13" maxlength="13"> 
                  <p id="message" style="font-size:12px;color:red;float:right"> </p>
                <p>อีเมล:</p>
                  <input type="email" name="Email"> 
                <p>เบอร์โทรติดต่อ:</p>
                  <input type="text" name="Tel1" minlength="10" maxlength="10">
        </div>

        <div class="tab"> 
          <p>ชื่อภาษาไทย:</p>           <input type="text" name="FnameTH"> 
          <p>นามสกุลภาษาไทย:</p>       <input type="text" name="LnameTH"> 
          <p>Name:</p>                <input type="text" name="FnameEN"> 
          <p>Lastname:</p>            <input type="text" name="LnameEN">
          <p>วัน เดือน ปีเกิด:</p>        <select name="day" style="width:50px">
                                          <?php
                                          for($i=1;$i<=31;$i++){
                                            echo  '<option value="'.$i.'">'.$i.'</option>'."\n";
                                          }
                                          ?>
                                      </select>&nbsp;&nbsp;

                                      <select name="month" style="width:50px" oninput="this.className = ''">
                                          <?php
                                          for($i=1;$i<=12;$i++){
                                            echo  '<option value="'.$i.'">'.$i.'</option>'."\n";
                                          }
                                          ?>
                                      </select>&nbsp;&nbsp;

                                      <select name="year" style="width:50px" oninput="this.className = ''">
                                          <?php
                                          for($i=2490;$i<=2556;$i++){
                                            echo  '<option value="'.$i.'">'.$i.'</option>'."\n";
                                          }
                                          ?>
                                      </select>

          <p>อายุ:</p>                 <select name="Age" style="width:50px" oninput="this.className = ''">
                                          <?php
                                          for($i=5;$i<=70;$i++){
                                            echo  '<option value="'.$i.'">'.$i.'</option>'."\n";
                                          }
                                          ?>
                                      </select>&nbsp;&nbsp;

          <p>เพศ: <em id="msgSex"></em>   </p>             <input type="radio" name="Sex" value="ชาย" style="width:10px">ชาย   &nbsp;&nbsp;&nbsp;
                                      <input type="radio" name="Sex" value="หญิง" style="width:10px">หญิง   &nbsp;&nbsp;&nbsp;
          <p>หมู่โลหิต:<em id="msgBlood"></em> </p>              <input type="radio" name="Blood" value="A"  style="width:10px">A    &nbsp;&nbsp;&nbsp;
                                      <input type="radio" name="Blood" value="B"  style="width:10px">B    &nbsp;&nbsp;&nbsp;
                                      <input type="radio" name="Blood" value="AB" style="width:10px">AB   &nbsp;&nbsp;&nbsp;
                                      <input type="radio" name="Blood" value="O"  style="width:10px">O    &nbsp;&nbsp;&nbsp;
          <p>โรคประจำตัว:</p>          <input type="text" name="Disease">
          <p>เบอร์โทรติดต่อยามฉุกเฉิน:</p> <input type="text" name="Tel2">
        </div>

        <div class="tab"> 
          <p>ระยะ:</p>                <select name="Typee" >
                                              <option  value="Fun Run">Fun run 4 km</option>
                                              <option  value="Mini Marathon">Mini Marathon 11 km</option>
                                              <option  value="VIP">VIP ทุกระยะ</option>
                                              <option  value="Fancy Fun Run">Fancy 4 km</option>
                                              <option  value="Fancy Mini Marathon">Fancy 11 km</option>
                                      </select>
          <p>รุ่นอายุ:</p>               <select name="Agetype" >
                                              <option value="1-19"> รุ่นอายุน้อยกว่า 19 ปี</option>
                                              <option value="20-29">รุ่นอายุ 20-29 ปี</option>
                                              <option  value="30-39">รุ่นอายุ 30-39 ปี</option>
                                              <option  value="40-49">รุ่นอายุ 40-49 ปี</option>
                                              <option  value="50-59">รุ่นอายุ 50-59 ปี</option>
                                              <option  value="60-80">รุ่นอายุ 60 ปี ขึ้นไป</option>
                                      </select>

          <p>ไซส์เสื้อ:</p>              <select name="Size" >
                                                <option  value="S">S</option>
                                                <option value="M">M</option>
                                                <option  value="L">L</option>
                                                <option  value="XL">XL</option>
                                                <option value="XXL">2XL</option>
                                                <option  value="XXXL">3XL</option>
                                      </select>

          <p>การรับเสื้อ หมายเลขBIB :  <em id="msgPost"></em>  </p>  <input type="radio"  name="Postconfirm" value="0" style="width:10px">รับเอง วันที่ 9 มีนาคม 62 เวลา10.00-18.00 <br> 
                                      <input type="radio" name="Postconfirm" value="1" style="width:10px">จัดส่ง EMS/KERRY ค่าบริการ 70 บาท

          <p>ชื่อสังกัด ชมรม ทีม:</p>       <input type="text" name="Team">
          
          <p>ที่อยู่ในการจัดส่ง:</p>          <input type="text" name="Addresss" style="width:100%;height100px">

        

        </div>

        
        
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">  Previous  </button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">   Next      </button>
            </div>
        </div>


        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            
        </div>
  </form>









    <script type="text/javascript" >
    //disable back button
    history.pushState(null, null, '');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, '');
    });
    </script>

    <script src="js/main.js"></script>
<script  >

var digit ,checkdata=0;		
$(document).ready(function() {
        var len ;
        $('#IDcard').focusout(function() {
         check_IDcard();
        });


    });
    function check_IDcard() {
      $('#message').css({"font-size:":"12px","color":"red","float":"right"});
    len = $("#IDcard").val().length;
    /*เช็คกรอกค่าเป็นตัวเลข*/
    if(len!=13){
  
      $('#message').html('กรุณากรอกข้อมูลให้ถูกต้อง');
				
    }else{
for(var i=0 ; i<len ; i++)
{
digit = $("#IDcard").val().charAt(i)
if( (digit >= "a" && digit <= "z") || (digit >="ก" && digit <="ฮ") || (digit >="A" && digit <="Z") || (digit =="_")){


checkdata=1;
}else{
$('#message').html(' ');
checkdata=0;
}	
}	

if(checkdata==1){


}else{
/* เช็คเทียบตัวเลขในฐานข้อมูล */
 $.ajax({
          type: 'POST',
          data: {IDcard: $('#IDcard').val()},
          url: 'checkid.php'
      }).then(function (response) {


  if (response == 1) {
      $('#message').html('รหัสบัตรประชาชนมีคนใช้แล้ว');

   }
  else if(response == 3){
$('#message').html('กรุณากรอกรหัสบัตรประชาชน');

}else{
$('#message').html('หมายเลขนี้สามารถใช้ได้');
$('#message').css({"font-size:":"12px","color":"green","float":"right"});


}

}, function (error) {
});
  
}
}
}

</script>

</body>






</html>