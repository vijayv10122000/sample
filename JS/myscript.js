$(document).ready( function () {
    $('#myTable').DataTable();
} );

function menu(){
  if (document.getElementById("sidenavbar").style.display!="block"){
      document.getElementById("sidenavbar").style.display="block";
      document.getElementById("containermain").style.marginLeft="230px";
      document.getElementById("containermain").style.width="100%";
      // document.getElementById("containermain").style.width="100%";
      
  
    }  else{
      document.getElementById("sidenavbar").style.display="none";
      document.getElementById("containermain").style.marginLeft="0px";
      document.getElementById("containermain").style.width="auto";
  }   
  


}
function reset_pass(){
  document.getElementById("pass_reset").style.display="block";
  document.getElementById("pass_reset").style.transition="all 2s";
  document.getElementsByName
  
}
var male=document.getElementById("male")
var female=document.getElementById("female")
var gender=document.getElementById("gender")
function malegenderdata(){
    female.checked=false
    gender.value=male.value
}
function femalegenderdata(){
    male.checked=false
    gender.value=female.value

}

var message=document.getElementById("message");
var error_message=document.getElementById("messagemessage");




var mstatus=document.getElementById("mstatus")
var msingle=document.getElementById("msingle")
var mmarried=document.getElementById("mmarried")
function smarriedstatus(){
    mmarried.checked=false
    mstatus.value=msingle.value
}
function mmarriedstatus(){
    msingle.checked=false
    gender.value=mmarried.value

}

var password= document.getElementById("password");
var confirmpassword= document.getElementById("confirm_password");
var form=document.getElementById("add-employee");
var error=document.getElementById("error");
var gender=document.getElementById("gender");
const radioButtons = document.querySelectorAll('input[name="gender"]');





function sameaddress(){

  var address= document.getElementById("address").value;
  var sameaddress= document.getElementById("peraddress");
  var addcheckbox= document.getElementById("addcheckbox");
  
  if (addcheckbox.checked) {
    sameaddress.value=address
  }
  if (addcheckbox.checked==false) {
    sameaddress.value=""
  }

}

function deleteemployee(value){
var delete_emplyee_id =document.getElementById("delete_emplyee_id");

this.value = value;
delete_emplyee_id.value=this.value;
console.log(delete_emplyee_id);
console.log(this.value);
 
}





