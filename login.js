const form=document.querySelector("#form");
const n=document.querySelector("#name");
const i=document.querySelector("#id");
const e=document.querySelector("#email");
const password=document.querySelector("#password");


form.addEventListener("submit",(event)=>
{
    name_validate(event);
   
    email_validate(event);
    pwd_validate(event);

});

function name_validate(event)
{
    let name=n.value.trim();
    const sname=document.querySelector("#sname");
    if(name==""|| name==null)
    {
        sname.innerHTML="name cant be empty";
        event.preventDefault();

    }
    else if(name.length>20)
    {
        sname.innerHTML="name should be less than 20 characters";
        event.preventDefault();
        
    }
    else if(name.length<3)
    {
        sname.innerHTML="name should be alteast 3 characters";
        event.preventDefault();
    }
    else if(name.match(/[0-9]/))
    {
        sname.innerHTML="digits  are not  allowed";
        event.preventDefault();
    }
    else if(name.match(/[-_$@!*&\^%\(\)]/))
    {
        sname.innerHTML="special characters are not allowed";
        event.preventDefault();
    }
    else{
        sname.innerHTML="";
    }
    
}


function email_validate(event)
{
    let email=e.value.trim();
    const semail=document.querySelector("#semail");
    if(email==""||email==null)
    {
        semail.innerHTML="email can't be empty";
        event.preventDefault();
    }
    else if(!email.match(/^([A-z0-9_\.$@]+)(@)([A-z]+)(\.)([a-z]{2,6})$/))
    {
        semail.innerHTML="invalid email";
        event.preventDefault();
    }
    else{
        semail.innerHTML="";
    }
}
function pwd_validate(event)
{
    let pwd=password.value.trim();
    const spwd=document.querySelector("#spassword");
    if(pwd==""||pwd==null)
    {
        spwd.innerHTML="password can't be empty";
        event.preventDefault();
    }
    else if(!pwd.match(/[0-9]/))
    {
        spwd.innerHTML="password must contain atleast 1 digit";
        event.preventDefault();
    }
    else if(!pwd.match(/[a-z]/))
    {
        spwd.innerHTML="password must contain alteast 1 lowercase alphabet";
        event.preventDefault();
    }
    else if(!pwd.match(/[A-Z]/))
    {
        spwd.innerHTML="password must contain atleast 1 uppercase alphabet";
        event.preventDefault();
    }
    else if(!pwd.match(/[@_\-$&]/))
    {
        spwd.innerHTML="password must contain atleast 1 special character";
        event.preventDefault();
    }
    else if(pwd.length<6)
    {
        spwd.innerHTML="password should contain atleast 6 characters";
        event.preventDefault();
    }
    else{
        spwd.innerHTML="";
    }
}
