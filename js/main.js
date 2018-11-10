var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }



  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
    document.getElementById("nextBtn").addEventListener("click",function(){FormData.submit();});

 //   document.getElementById("nextBtn").type='Submit';
 
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");

  switch(currentTab) {
    case 0:
    if($('#message').text()!="หมายเลขนี้สามารถใช้ได้"){

      document.getElementById("message").innerHTML="กรุณากรอกข้อมูลให้ถูกต้อง";
      
    }else{
      
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    console.log(currentTab);
   
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
      // ... the form gets submitted:
      document.getElementById("regForm").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }
        break;
    case 1:
   
  
    if($('input[name=Sex]:checked', '#regForm').val()!= "หญิง" && $('input[name=Sex]:checked', '#regForm').val()!="ชาย"){
 
      document.getElementById("msgSex").innerHTML="กรุณาเลือกเพศ";
      $('#msgSex').css({"font-size:":"12px","color":"red","float":"right"});
  
      if($('input[name=Blood]:checked', '#regForm').val()!= "A" && $('input[name=Blood]:checked', '#regForm').val()!="B" && $('input[name=Blood]:checked', '#regForm').val()!="AB" && $('input[name=Blood]:checked', '#regForm').val()!="O"){
        document.getElementById("msgBlood").innerHTML="กรุณาเลือกกรุ๊ปเลือด";
        $('#msgBlood').css({"font-size:":"12px","color":"red","float":"right"});
      }
        
      
      if (n == 1 && !validateForm()) return false;
    }else{
      if($('input[name=Sex]:checked', '#regForm').val()== "หญิง" || $('input[name=Sex]:checked', '#regForm').val()=="ชาย"){
        document.getElementById("msgSex").innerHTML=" ";
        $('#msgSex').css({"font-size:":"12px","color":"red","float":"right"});
      }
        if($('input[name=Blood]:checked', '#regForm').val()== "A" || $('input[name=Blood]:checked', '#regForm').val()=="B" || $('input[name=Blood]:checked', '#regForm').val()=="AB" || $('input[name=Blood]:checked', '#regForm').val()=="O"){
          document.getElementById("msgBlood").innerHTML=" ";
          $('#msgBlood').css({"font-size:":"12px","color":"red","float":"right"});
        }
     
   
      if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    console.log(currentTab);
   
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
      // ... the form gets submitted:
      document.getElementById("regForm").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }
        break;
    case 2:
        break;

    default:break;
}


  // Exit the function if any field in the current tab is invalid:

}
function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...

    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
   
      valid = false;
    }else{
    
      y[i].className += " success";
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

function checkID(){
    var x = document.getElementById("IDcard").value;
    var y = x.length;
    if(y==13){
        document.getElementById("message").innerHTML=" ";
    }
    if(y!=13){
        document.getElementById("message").innerHTML="กรุณากรอกให้ครบ 13 หลัก";
    }
}



/*
function checkThainame(){
    var x = document.getElementById("FnameTH").value;
    var thailetter  = /^[u0E01-u0E5B]/; 
    if(thailetter.test(x)==false){
        document.getElementById("checkThainame").innerHTML="กรุณากรอกภาษาไทยเท่านั้น";
    }
    else{
        document.getElementById("checkThainame").innerHTML="";
    }
    
}
*/