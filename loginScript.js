const passwordIcon = document.getElementById('passwordIcon');
const password = document.getElementById('password');
const email = document.getElementById('email');
const loginForm = document.getElementById('loginForm');


passwordIcon.addEventListener('click',function handleShowHidePassword() {
    if(passwordIcon.classList.contains('fa-lock')){
        passwordIcon.classList.remove('fa-lock');
        passwordIcon.classList.add('fa-lock-open');
        password.type = 'text';
    } else {
        passwordIcon.classList.remove('fa-lock-open');
        passwordIcon.classList.add('fa-lock');
        password.type = 'password';
    }
});

password.addEventListener('copy', (evt) => {
    evt.preventDefault();
});







