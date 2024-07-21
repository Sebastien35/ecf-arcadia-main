document.addEventListener('DOMContentLoaded', function() {
    const toggleButtons = document.querySelectorAll('.password-toggle');

    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetId = button.getAttribute('data-target');
            const targetInput = document.getElementById(targetId);
            //console.log(`Toggling password visibility for input with ID: ${targetId}`);
            if (targetInput) {
                if (targetInput.type === 'password') {
                    targetInput.type = 'text';
                    button.innerHTML = '<i class="far fa-eye-slash"></i>';
                } else {
                    targetInput.type = 'password';
                    button.innerHTML = '<i class="far fa-eye"></i>';
                }
            } /*else {
                console.error(`Input with ID ${targetId} not found`);
            }*/
        });
    });
});
