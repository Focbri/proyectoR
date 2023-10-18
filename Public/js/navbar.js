const COMPROBAR = document.getElementById("id-Login")
const LOGIN = document.getElementById("menu-logeo")

var verificador = 0;

COMPROBAR.addEventListener("click",()=>{
  if(verificador === 0){
    LOGIN.style.display = "block";
    verificador = 1;
  }else{
    LOGIN.style.display = "none";
    verificador = 0;
  }
})