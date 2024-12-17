
document.querySelector('.contact-btn').addEventListener('click', function (event) {
    event.preventDefault();
    // 'contact-form-modal' sınıfına sahip modal'ın 'hidden' sınıfını kaldır
    document.querySelector('.contact-form-modal').classList.remove('hidden');
});



// Flash message fade-out after 3 seconds
    document.addEventListener('DOMContentLoaded', function () {
        const flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            setTimeout(() => {
                flashMessage.style.transition = 'opacity 0.5s ease';
                flashMessage.style.opacity = '0';

                setTimeout(() => {
                    flashMessage.remove();
                }, 500);
            }, 3000);
        }
    });

