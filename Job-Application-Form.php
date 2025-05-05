<?php
require 'vendor/autoload.php'; // Ensure this path is correct

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // reCAPTCHA Secret Key
    $recaptcha_secret = "6LcWPSQrAAAAAAsps3AX4tKQDK4MoRXDHv5bCBvJ";  
    
    // reCAPTCHA response (user input)
    $recaptcha_response = $_POST['g-recaptcha-response'];
    
    // Send request to Google's reCAPTCHA API
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
    
    // Decode JSON response
    $response_keys = json_decode($response, true);

    // If reCAPTCHA failed
    if (intval($response_keys["success"]) !== 1) {
        echo "reCAPTCHA verification failed. Please try again.";
    } else {

        // Collect form data
        $fullName = htmlspecialchars($_POST['fullName']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $dob = htmlspecialchars($_POST['dob']);
        $gender = htmlspecialchars($_POST['gender']);
        $position = htmlspecialchars($_POST['position']);
        $currentSalary = htmlspecialchars($_POST['currentSalary']);
        $expectedSalary = htmlspecialchars($_POST['expectedSalary']);
        $notice = htmlspecialchars($_POST['notice']);
        $experienceLevel = htmlspecialchars($_POST['experienceLevel']);
        $otherExperienceDetail = isset($_POST['otherExperienceDetail']) ? htmlspecialchars($_POST['otherExperienceDetail']) : '';
        $lastCompany = htmlspecialchars($_POST['lastCompany']);
        $skills = htmlspecialchars($_POST['skills']);
        $resume = $_FILES['resume']; // Handling file upload

        // File upload handling
        if ($resume['error'] == 0) {
            $resumePath = 'uploads/' . basename($resume['name']);
            move_uploaded_file($resume['tmp_name'], $resumePath);
        } else {
            echo "Error uploading resume.";
            exit;
        }

        // Prepare email using PHPMailer
        $mail = new PHPMailer(true);

        try {
            // SMTP Configuration
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'skriassociate57@gmail.com'; // Your Gmail ID
            $mail->Password = 'paya fqew fkaq cyrw';    // Gmail App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Sender and recipient
            $mail->setFrom('skriassociate57@gmail.com', 'Job Application');
            $mail->addAddress('skriassociate57@gmail.com'); // Receiver email address

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'New Job Application Received';
            $mail->Body = "
                <h2>New Job Application</h2>
                <p><strong>Full Name:</strong> $fullName</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Date of Birth:</strong> $dob</p>
                <p><strong>Gender:</strong> $gender</p>
                <p><strong>Position Applying For:</strong> $position</p>
                <p><strong>Current Salary:</strong> $currentSalary</p>
                <p><strong>Expected Salary:</strong> $expectedSalary</p>
                <p><strong>Notice Period:</strong> $notice</p>
                <p><strong>Experience Level:</strong> $experienceLevel</p>
                <p><strong>Other Experience Detail:</strong> $otherExperienceDetail</p>
                <p><strong>Last Company:</strong> $lastCompany</p>
                <p><strong>Skills:</strong> $skills</p>
                <p><strong>Resume:</strong> <a href='$resumePath' target='_blank'>Download Resume</a></p>
            ";

            // Attach the resume file
            $mail->addAttachment($resumePath, $resume['name']);

            // Send Email
            $mail->send();

            // Success Message
            echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        icon: "success",
                        title: "✅ Application submitted successfully!",
                        confirmButtonText: "OK"
                    }).then(() => {
                        window.location.href = "index.php";
                    });
                });
            </script>';

        } catch (Exception $e) {
            echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        icon: "error",
                        title: "❌ Email sending failed!",
                        text: "'. $mail->ErrorInfo .'",
                        confirmButtonText: "Try Again"
                    }).then(() => {
                        window.history.back();
                    });
                });
            </script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Job Application Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
<?php include 'navbar.php'; ?>

<div class="container my-5">
  <h2 class="mb-4">Job Application Form</h2>
  <form id="jobForm" enctype="multipart/form-data" method="POST" action="">


    <!-- Full Name -->
    <div class="mb-3">
      <label for="fullName" class="form-label">Full Name</label>
      <input type="text" class="form-control" id="fullName" name="fullName" required>
    </div>

    <!-- Email -->
    <div class="mb-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <!-- Phone -->
    <div class="mb-3">
      <label for="phone" class="form-label">Phone Number</label>
      <input type="tel" class="form-control" id="phone" name="phone" required>
    </div>

    <!-- Date of Birth -->
    <div class="mb-3">
      <label for="dob" class="form-label">Date of Birth (optional)</label>
      <input type="date" class="form-control" id="dob" name="dob">
    </div>

    <!-- Gender -->
    <div class="mb-3">
      <label for="gender" class="form-label">Gender</label>
      <select class="form-select" id="gender" name="gender">
        <option value="" selected>Select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
      </select>
    </div>

    <!-- Position Applying For -->
    <div class="mb-3">
      <label for="position" class="form-label">Position Applying For</label>
      <select class="form-select" id="position" name="position" required>
        <option value="">Select Position</option>
        <option value="Web Developer">Web Developer</option>
        <option value="UI/UX Designer">UI/UX Designer</option>
        <option value="SEO Specialist">SEO Specialist</option>
        <option value="Content Writer">Content Writer</option>
      </select>
    </div>

    <!-- Current Salary -->
    <div class="mb-3">
      <label for="currentSalary" class="form-label">Current Salary</label>
      <input type="text" class="form-control" id="currentSalary" name="currentSalary">
    </div>

    <!-- Expected Salary -->
    <div class="mb-3">
      <label for="expectedSalary" class="form-label">Expected Salary</label>
      <input type="text" class="form-control" id="expectedSalary" name="expectedSalary">
    </div>

    <!-- Notice Period -->
    <div class="mb-3">
      <label for="notice" class="form-label">Notice Period</label>
      <input type="text" class="form-control" id="notice" name="notice">
    </div>


<!-- Experience Level Dropdown -->
<div class="mb-3">
  <label for="experienceLevel" class="form-label">What is your current level of experience?</label>
  <select class="form-select" id="experienceLevel" name="experienceLevel" required>
    <option value="" selected>Select Experience Level</option>
    <option value="Entry Level">Entry Level</option>
    <option value="Mid Level">Mid Level</option>
    <option value="Senior Level">Senior Level</option>
    <option value="Other">Other (please specify)</option>
  </select>
</div>

<!-- Other Experience Detail (initially hidden) -->
<div class="mb-3" id="otherExperienceWrapper" style="display: none;">
  <label for="otherExperienceDetail" class="form-label">Please specify your experience level</label>
  <input type="text" class="form-control" name="otherExperienceDetail" id="otherExperienceDetail">
</div>

<!-- Small JavaScript to toggle input field -->
<script>
  document.getElementById("experienceLevel").addEventListener("change", function () {
    const wrapper = document.getElementById("otherExperienceWrapper");
    const input = document.getElementById("otherExperienceDetail");
    
    if (this.value === "Other") {
      wrapper.style.display = "block";
      input.required = true;
    } else {
      wrapper.style.display = "none";
      input.value = "";
      input.required = false;
    }
  });
</script>


    <!-- Last Company -->
    <div class="mb-3">
      <label for="lastCompany" class="form-label">Last Company Name</label>
      <input type="text" class="form-control" id="lastCompany" name="lastCompany">
    </div>

    <!-- Skills -->
    <div class="mb-3">
      <label for="skills" class="form-label">Skills (comma-separated)</label>
      <input type="text" class="form-control" id="skills" name="skills">
    </div>

    <!-- Resume Upload -->
    <div class="mb-3">
      <label for="resume" class="form-label">Upload Resume (PDF, DOCX)</label>
      <input type="file" class="form-control" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
    </div>

    <div class="mb-3">
  <div class="g-recaptcha" data-sitekey="6LcWPSQrAAAAABew8GDGx565oDDNCbetyh4Dxxca"></div>
</div>

    <!-- Submit -->
    <button type="submit" class="btn btn-primary">Submit Application</button>

  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php'; ?>
</body>
</html>
