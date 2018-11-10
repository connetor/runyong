<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/main.css?v=<?php echo "<?php echo filemtime('style.css'); ?>" ;?> ">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>แจ้งชำระเงินเสร็จสิ้น</title>
<body>
<?php
        error_reporting(~E_NOTICE);
        if($_GET["Action"] == "Save")
        {
            // ปิด Warning
        }
        $conn=mysqli_connect("localhost","root","","runyong");
        mysqli_set_charset($conn, "utf8");
        if(!$conn){
        die("connection failed".mysqli_connect_error());
        }
        if($_POST['person1']){
                $img=$_POST['person1'];
                $filename="img/payment/$img.jpg";
                $success = move_uploaded_file($_FILES['myImage']['tmp_name'],$filename);
                
                $Img=$filename;
                $RefID1=$_POST['person1'];
                $RefID2=$_POST['person2'];
                $RefID3=$_POST['person3'];
                $RefID4=$_POST['person4'];
                $RefID5=$_POST['person5'];
                $RefID6=$_POST['person6'];
                $RefID7=$_POST['person7'];
                $RefID8=$_POST['person8'];
                $RefID9=$_POST['person9'];
                $RefID10=$_POST['person10'];
                $Tel=$_POST['tel'];


                $sql="INSERT INTO payment (Img,RefID1,RefID2,RefID3,RefID4,RefID5,RefID6,RefID7,RefID8,RefID9,RefID10,Tel) VALUES('$Img','$RefID1','$RefID2','$RefID3','$RefID4','$RefID5','$RefID6','$RefID7','$RefID8','$RefID9','$RefID10','$Tel')";
            
                if(mysqli_query($conn,$sql)){
                // echo "Success";
                }
                
                else{
                // echo "Error".$sql."<br>".mysqli_error($conn);;
                }
                
                mysqli_close($conn);
                }


            

?>

        <form id="regForm">
            <div style="text-align:center">
                <h2>ขอบคุณที่ทำการชำระเงิน ท่านสามารถตรวจสอบสถานะภายใน 24 ชั่วโมงค่ะ</h2>
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