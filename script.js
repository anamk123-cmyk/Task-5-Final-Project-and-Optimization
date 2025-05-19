emailjs.init('LQg16IgbHl5i8ZmvH');  // Replace with your actual User ID

// Function to send email
function sendEmail(formId) {
    emailjs.sendForm('service_va0', 'template_va123', formId)
        .then(function(response) {
            console.log('Sent successfully:', response);
            alert('Your form has been submitted successfully!');
        }, function(error) {
            console.log('Failed to send:', error);
            alert('Oops! Something went wrong.');
        });
}

// Handle form submissions
document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.form-container').addEventListener('submit', function(event) {
        event.preventDefault();
        const form = event.target;
        if (form.matches('form')) {
            sendEmail(form.id); // Send the form data
        }
    });
});

// JavaScript for Form Toggle
document.getElementById('switch-to-signup').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('.form-section').classList.add('hidden');
    document.querySelectorAll('.form-section')[1].classList.remove('hidden');
});

document.getElementById('switch-to-login').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelectorAll('.form-section')[1].classList.add('hidden');
    document.querySelectorAll('.form-section')[0].classList.remove('hidden');
});