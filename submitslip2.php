<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/main.css?v=<?php echo "<?php echo filemtime('style.css'); ?>" ;?> ">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>ยืนยันการชำระเงิน</title>
<body>


     
        <form id="regForm" action="finish.php" method="post" target="_SELF" style="width:60%" enctype="multipart/form-data">
             <?php
                error_reporting(~E_NOTICE);
                if($_GET["Action"] == "Save")
                {
                    // ปิด Warning
                }
                $person= $_POST['person'];
                echo '<p>เบอร์โทรติดต่อ: </p>';
                echo '<input type="text" name="tel" maxlength="10" minlength="10">';
                for($i=1;$i<=$person;$i++){
                    echo "<p id='m$i'></p>";
                    echo "<p>คนที่ $i:</p><input id='p$i' type='text' name='person$i' maxlength='13' maxlength='13'><br><br>";
               
                }
                ?>
                <br><br>
                <p style='width:30%;float:left'>กรุณา upload สลิปการโอน :  </p>
                <input type="file" id="file" name="myImage" style="border:none">
                <span id="massege" style="font-size:13px ; float:left; color:red;"></span>
                <br><br><br>
                <div style="text-align: center;">
                <button type="submit" style="text-align:center" id="submitslip">Submit</button>
            </div>
        

 
 




            <!--
            <script type="text/javascript" >
            //disable back button//
            history.pushState(null, null, '');
            window.addEventListener('popstate', function(event) {
            history.pushState(null, null, '');
            });
            </script>
        -->
        <script type="text/javascript">
     

   
    $('#regForm').submit(function(e) {
      
        var i ,length = <?php echo $_POST['person']; ?> ;
        var check=0;
        
        if (document.getElementById("file").files.length == 0 ) {
        $('#massege').html("กรุณาอัพโหลดหลักฐานการโอนเงิน");
        e.preventDefault();
    }

        for(i=1;i<=length;i++){
            if($('#p'+i).val()==""){
            
                if(i==1){
                    $('#m'+i).html('กรุณากรอกเลขบัตรคนที่ '+i+' (ผู้แจ้ง)');
                $('#m'+i).css({"font-size:":"12px","color":"red","float":"right"});
                e.preventDefault();
                }else{
                $('#m'+i).html('กรุกรอกเลขบัตรคนที่ '+i);
                $('#m'+i).css({"font-size:":"12px","color":"red","float":"right"});
                e.preventDefault();
                }
            }else{
                $('#m'+i).text(" ");
            
            }

            
        }

       if (document.getElementById("file").files.length != 0 ) {
        $('#massege').html(" ");
        for(i=1;i<=length;i++){
             console.log(length);
            if($('#p'+i).val()!=""){
              check=1;
            }else{
                check=0;
              
            }

       }
      
       if(check==1){
 
    }else{

        e.preventDefault();
       
    }
}
    
      
    
});


        </script>

</body>
</html>