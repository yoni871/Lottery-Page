document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('password');
    const passwordToggleBtn = document.getElementById('passwordToggleBtn');
    const passwordIcon = document.getElementById('passwordIcon');

    passwordToggleBtn.addEventListener('click', function () {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordIcon.className = 'fa fa-eye';
        } else {
            passwordInput.type = 'password';
            passwordIcon.className = 'fa fa-eye-slash';
        }
    });
});

var myCarousel = new bootstrap.Carousel(document.getElementById('carouselExample'), {
    interval: 500
});
