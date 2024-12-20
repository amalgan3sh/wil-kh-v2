function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function sendMail() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var service = document.getElementById("service").value;
    var message = document.getElementById("message").value;

    // Enhanced validation
    if (!name || !email || !phone || !service || !message) {
        alert("Please fill in all fields before submitting the form.");
        return;
    }

    if (!validateEmail(email)) {
        alert("Please enter a valid email address.");
        return;
    }

    // Format email content
    const emailContent = `
    New Contact Form Submission:
    
    Name: ${name}
    Email: ${email}
    Phone: ${phone}
    Service Requested: ${service}
    Message: ${message}
    `;

    var params = {
        from_name: name,
        email_id: email,
        phone: phone,
        service: service,
        message: message,
        email_content: emailContent,
        to_email: "lab@wil-kh.com" // You can change this to your preferred recipient
    };

    const serviceID = "service_6btgd38";
    const templateID = "template_rwxzhbc";

    emailjs.send(serviceID, templateID, params)
        .then(res => {
            // Clear the form fields after successful submission
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("phone").value = "";
            document.getElementById("service").value = "";
            document.getElementById("message").value = "";

            console.log("Email sent successfully:", res);
            alert("Your message was sent successfully!");
        })
        .catch(err => {
            console.error("Failed to send email:", err);
            alert("Failed to send message. Please try again later.");
        });
}