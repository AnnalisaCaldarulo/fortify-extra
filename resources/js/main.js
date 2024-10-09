let eyeBtn = document.querySelectorAll('.eye');
let passwordInputs = document.querySelectorAll('.password-input');

eyeBtn.forEach((el, i) => {
    el.addEventListener('click', function (event) {
        event.preventDefault();

        const type = passwordInputs[i]
            .getAttribute('type') === 'password' ?
            'text' : 'password';
        passwordInputs[i].setAttribute('type', type);

        const eyeIcon = this.querySelector('i');
        eyeIcon.classList.toggle('bi-eye');
        eyeIcon.classList.toggle('bi-eye-slash')

    })
})