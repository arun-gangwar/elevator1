<?php
include("partial/header.php");
?>

<!-- contact us start -->
<?php


// Function to sanitize form input
function sanitize_input($data) {
    return htmlspecialchars(trim($data));
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $to = 'info@blcelevators.com';
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $subject = sanitize_input($_POST['subject']);
    $message = sanitize_input($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="alert alert-danger">Invalid email address.</div>';
        exit;
    }

    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    $body = "Name: " . $name . "\r\n";
    $body .= "Email: " . $email . "\r\n";
    $body .= "Subject: " . $subject . "\r\n\n";
    $body .= "Message:\r\n" . $message;

    if (mail($to, $subject, $body, $headers)) {
        echo '<div class="alert alert-success">Thank you for your message. We will get back to you soon!</div>';
    } else {
        echo '<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again.</div>';
        error_log("Mail failed: to=$to, subject=$subject");
    }
}
?>


<!-- Contact Section -->
<section class="section__container" id="contact">
    <div class="container py-5">
        <h1 class="text-center mb-4">Get In Touch</h1>
        <p class="text-center mb-5">We’d love to hear from you. Fill out the form below and our team will get back
            to you shortly.</p>

        <div class="row g-5">
            <div class="col-md-6">
                <h4>Contact Information</h4>
                <p><strong>Address:</strong> No 23, 11th Main, Yellchannahalli, Kumaraswamy Layout, Bangalore,
                    Kumaraswamy Layout Police Station, Kumaraswamy Layout, Bangalore, India -560111</p>
                <p><strong>Phone:</strong> 9743322229/9743902111</p>
                <p><strong>Email:</strong> blc.accessoriesspares@gmail.com, blc.elevators@gmail.com</p>
                <iframe class="w-100 rounded" height="250" style="border:0" loading="lazy"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d971.6282574892654!2d77.56238297084766!3d12.905144000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDU0JzE4LjUiTiA3N8KwMzMnNDUuMyJF!5e0!3m2!1sen!2sin!4v1682431234567!5m2!1sen!2sin"
                    allowfullscreen="" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="col-md-6">
                <h4>Contact Form</h4>
                <form name="myForm" id="contact-form2" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required />
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Your Subject</label>
                        <select class="form-control" id="subject" name="subject" required>
                            <option value="" disabled selected>Select a subject</option>
                            <option value="Sales">Sales</option>
                            <option value="Services">Services</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    // Get current path
    const currentPath = window.location.pathname.split("/").pop();

    // Loop through all nav links
    document.querySelectorAll('.nav-link').forEach(link => {
        const linkPath = link.getAttribute('href');

        if (linkPath === currentPath) {
            link.classList.add('active');
        }
    });
</script>



<?php
include("partial/footer.php");
?>