<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/main.css?v=<?php echo "<?php echo filemtime('style.css'); ?>" ;?> ">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>ยืนยันการชำระเงิน</title>
<body>



<form id="regForm" method="post" target="_SELF" action="submitslip2.php" style="width:60%">
    <div style="text-align:center">
        <h1>กรุณาเลือกจำนวนผู้สมัครที่ต้องการแจ้งชำระเงิน</h1>
        <br><br>
        <h5 style="color:red">สามารถแจ้งชำระเงินได้ 1 ครั้งต่อ 1 เลขบัตรประชาชนเท่านั้น กรุณาตรวจสอบความถูกต้องด้วยค่ะ</h5>
        <select name="person" style="width:18%" onchange="this.form.submit();">
        <option disabled selected value> -- select an option -- </option>
            <?php
           
            for($i=1;$i<=10;$i++){
            echo  '<option value="'.$i.'">'.$i.'</option>'."\n\n";
            }
            ?>
        </select>
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