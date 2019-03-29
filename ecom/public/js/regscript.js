
function checkpass(){

  if (document.getElementById('password').value == document.getElementById('confirm-password').value) {

      document.getElementById('checkpass').innerHTML='Password Matching';
      document.getElementById('checkpass').style.color='green';
      document.getElementById('checkpass').style.fontSize='medium';


    }else{

      document.getElementById('checkpass').innerHTML='Password Is Not Matching';
      document.getElementById('checkpass').style.color='red';
      document.getElementById('checkpass').style.fontSize='medium';
  }

}
