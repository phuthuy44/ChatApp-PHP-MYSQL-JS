//show-hide-password
const passwordField=document.querySelector(".form .field input[type='password']");
const toggleBtn=document.querySelector(".form .field i");
toggleBtn.onclick=()=>{
    if(passwordField.type=="password"){
        passwordField.type="text";
        toggleBtn.classList.add("active");
    }else{
        passwordField.type="password";
        toggleBtn.classList.remove("active");
    }

}
/*signup*/
const form=document.querySelector(".signup form");
const continueBtn=form.querySelector(".button input");
const errorText=form.querySelector(".error-txt");

form.onsubmit=(e)=>{
    e.preventDefault();

}
continueBtn.onclick=()=>{
    //console.log("Hello");
    let xhr= new XMLHttpRequest();
    xhr.open("POST","database/signup.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status===200){
                let data=xhr.response;
                //console.log(data);
                if(data=="Success"){
                    location.href="./../../ChatApp/page/user.php";
                }else{
                    errorText.textContent=data;
                    errorText.style.display="block";
                    
                }
            }
        }
    }
    let formData=new FormData(form);
    xhr.send(formData);
}

