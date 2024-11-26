document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        // Create FormData object to collect form data
        const formData = new FormData(contactForm);

        // Send AJAX request
        fetch('php/contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Show popup based on response status
            if (data.status === 'success') {
                showPopup('Success', data.msg, 'success');
                contactForm.reset(); // Clear form fields
            } else {
                showPopup('Error', data.msg, 'error');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showPopup('Error', 'An unexpected error occurred. Please try again.', 'error');
        });
    });

    function showPopup(title, message, type) {
        // Remove any existing popups
        const existingPopup = document.getElementById('custom-popup');
        if (existingPopup) {
            existingPopup.remove();
        }

        // Create popup container
        const popup = document.createElement('div');
        popup.id = 'custom-popup';
        popup.style.position = 'fixed';
        popup.style.top = '0';
        popup.style.left = '0';
        popup.style.width = '100%';
        popup.style.height = '100%';
        popup.style.backgroundColor = 'rgba(0,0,0,0.5)';
        popup.style.display = 'flex';
        popup.style.justifyContent = 'center';
        popup.style.alignItems = 'center';
        popup.style.zIndex = '1000';
        
        // Popup content
        const popupContent = document.createElement('div');
        popupContent.style.backgroundColor = 'white';
        popupContent.style.padding = '20px';
        popupContent.style.borderRadius = '10px';
        popupContent.style.textAlign = 'center';
        popupContent.style.maxWidth = '400px';
        popupContent.style.width = '90%';
        
        popupContent.innerHTML = `
            <h2 style="color: ${type === 'success' ? 'green' : 'red'};">${title}</h2>
            <p>${message}</p>
            <button id="close-popup" style="
                background-color: ${type === 'success' ? 'green' : 'red'};
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 15px;
            ">Close</button>
        `;
        
        popup.appendChild(popupContent);
        document.body.appendChild(popup);

        // Close popup when button is clicked
        const closeButton = document.getElementById('close-popup');
        closeButton.addEventListener('click', () => {
            document.body.removeChild(popup);
        });

        // Close popup if clicked outside
        popup.addEventListener('click', (e) => {
            if (e.target === popup) {
                document.body.removeChild(popup);
            }
        });
    }
});