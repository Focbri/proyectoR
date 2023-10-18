const COMPROBAR = document.getElementById("id-Login")
const LOGIN = document.getElementById("menu-logeo")

var verificador = 0;

COMPROBAR.addEventListener("click",()=>{
  if(verificador === 0){
    LOGIN.style.visibility = "visible";
    LOGIN.style.opacity = "1";
    verificador = 1;
  }else{
    LOGIN.style.visibility = "hidden";
    LOGIN.style.opacity = "0";
    verificador = 0;
  }
})