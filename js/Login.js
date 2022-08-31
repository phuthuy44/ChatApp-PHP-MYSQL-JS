/*login*/
const formlogin=document.querySelector(".login form");
const LogincontinueBtn=formlogin.querySelector(".button input");
const LoginerrorText=formlogin.querySelector(".error-txt");

formlogin.onsubmit=(e)=>{
    e.preventDefault();

}
LogincontinueBtn.onclick=()=>{
    //console.log("Hello");
    let xhr= new XMLHttpRequest();
    xhr.open("POST","../database/login.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status===200){
                let data=xhr.response;
                //console.log(data);
                if(data=="Success"){
                    location.href="../../ChatApp/page/user.php";
                }else{
                    LoginerrorText.textContent=data;
                    LoginerrorText.style.display="block";
                    
                }
            }
        }
    }
    let formData = new FormData(formlogin);
    xhr.send(formData);
}