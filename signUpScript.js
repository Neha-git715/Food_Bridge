const confirmPasswordIcon = document.getElementById('confirmPasswordIcon');
const registerPasswordIcon = document.getElementById('registerPasswordIcon');
const confirmPassword = document.getElementById('confirmPassword');
const password = document.getElementById('password');
const username = document.getElementById('username');
const email = document.getElementById('email');
const registerForm = document.getElementById('registerForm');
const cpasswordInputBox = document.getElementById('cpasswordInputBox');

registerPasswordIcon.addEventListener('click',function handleShowHidePassword() {
    if(registerPasswordIcon.classList.contains('fa-lock')){
        registerPasswordIcon.classList.remove('fa-lock');
        registerPasswordIcon.classList.add('fa-lock-open');
        password.type = 'text';
    } else {
        registerPasswordIcon.classList.remove('fa-lock-open');
        registerPasswordIcon.classList.add('fa-lock');
        password.type = 'password';
    }
});

confirmPasswordIcon.addEventListener('click',function handleShowHidePassword() {
    if(confirmPasswordIcon.classList.contains('fa-lock')){
        confirmPasswordIcon.classList.remove('fa-lock');
        confirmPasswordIcon.classList.add('fa-lock-open');
        confirmPassword.type = 'text';
    } else {
        confirmPasswordIcon.classList.remove('fa-lock-open');
        confirmPasswordIcon.classList.add('fa-lock');
        confirmPassword.type = 'password';
    }
});


cpasswordInputBox.addEventListener('change', ()=> {
    if(password.value != confirmPassword.value) {
        cpasswordInputBox.style.borderBottom = "2px solid red";
    } else {
        cpasswordInputBox.style.borderBottom = "2px solid #162938";
    }
});

password.addEventListener('copy', (evt) => {
    evt.preventDefault();
});

confirmPassword.addEventListener('copy', (evt) => {
    evt.preventDefault();
});