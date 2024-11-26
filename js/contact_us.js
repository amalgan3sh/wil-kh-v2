function sendMail() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var service = document.getElementById("service").value;
    var message = document.getElementById("message").value;

    // Validation to ensure all fields are filled
    if (!name || !email || !phone || !service || !message) {
        alert("Please fill in all fields before submitting the form.");
        return; // Prevent submission if validation fails
    }

    var params = {
        name: name,
        email: email,
        phone: phone,
        service: service,
        message: message,
    };

    const serviceID = "service_v5zx5ud";
    const templateID = "template_ox93etp";

    emailjs.send(serviceID, templateID, params)
        .then(res => {
            // Clear the form fields after successful submission
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("phone").value = "";
            document.getElementById("service").value = "";
            document.getElementById("message").value = "";

            console.log(res);
            alert("Your message was sent successfully!");
        })
        .catch(err => console.log(err));
}
