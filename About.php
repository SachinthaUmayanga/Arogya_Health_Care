<?php
    session_start();
    if(isset($_SESSION['un'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Arogya Health Care Hospital</title>
  <link rel="icon" href="imgs/logo.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="main.css">
  <style>
    p{
      text-align: justify;
    }
  </style>
</head>
<body>
<?php include 'NavBar.php';?>
<?php include 'Header.php';?>

  <section class="h-100 bg-light">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-left align-items-left h-100">
          <div class="col">
            <div class="card card-registration my-4">
              <div class="card-body p-md-5 text-black">
              <h3 class="mb-5 text-uppercase">About us</h3>

                  <div class="form-outline mb-4">
                    <p>Welcome to Arogya Health Care Hospital!</p><br>
                    <p>At Arogya Health Care, we are committed to providing exceptional healthcare services to our community. With a focus on patient-centered care and a passion for medical excellence, we strive to be the leading destination for all your healthcare needs.</p>
                    <p>Our hospital is equipped with state-of-the-art facilities and staffed by a dedicated team of healthcare professionals. From highly skilled doctors and specialists to compassionate nurses and support staff, our team works collaboratively to ensure the highest standards of medical care and patient satisfaction.</p>
                    <p>With a wide range of medical services and specialties, we are able to address diverse healthcare needs under one roof. Whether you require routine check-ups, specialized treatments, or emergency care, our comprehensive offerings ensure that you receive the care you deserve.</p>
                    <p>At Arogya Health Care, we understand that healthcare can be complex and overwhelming. That's why we prioritize clear communication, patient education, and personalized attention. We believe in empowering our patients to make informed decisions about their health, and our team is dedicated to guiding you through every step of your medical journey.</p>
                    <p>In addition to our commitment to patient care, we are also at the forefront of medical advancements and technology. Our hospital is equipped with the latest diagnostic and treatment equipment, enabling us to provide accurate diagnoses and effective treatments. We continuously invest in training and development for our staff to ensure they remain up-to-date with the latest medical practices and innovations.</p>
                    <p>As part of our community engagement, we actively participate in health awareness programs and initiatives. We believe in promoting preventive care and wellness, encouraging our community to lead healthier lives.</p>
                    <p>Thank you for considering Arogya Health Care Hospital for your healthcare needs. We are here to provide you with exceptional medical care, compassionate support, and a commitment to your well-being. Contact us today or visit our facility to experience the Arogya Health Care difference.</p>
                    <p>Your health is our priority, and we look forward to serving you and your family.</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>

<?php include 'Footer.php';?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <?php
    }
  ?>
</body>
</html>