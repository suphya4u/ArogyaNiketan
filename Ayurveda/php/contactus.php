<!DOCTYPE html> 
<html>

<head>
  <title>Ayurved Aarogya Niketan - Panchakarma Chikitsalay</title>
  <meta name="description" content="Ayurved Arogya Niketan. Ayurveda Hospital" />
  <meta name="keywords" content="Ayurveda, Panchakarma, Hospital, Clinic, Doctor" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main" class="main-content">
    <header id="header"></header>
    <div class="top-image"></div>

	<div id="site_content">

	  <div id="sidebar"></div>

	  <div id="content">
        <div class="content_item">
          <h2>Schedule An Appointment</h2>
          <p>Please reach us at <strong>+91-20-27247188</strong> or <strong>+91-9822028527</strong>
             to schedule an appointment or please email us at
             <a href="mailto:contact@ayurvedniketan.com"><strong>contact@ayurvedniketan.com</strong></a>.
        </div><!--close content_item-->

        <div class="content_item">
          <h2>Send A Note / Feedback</h2>
		  <div id="feedbackForm" class="form_settings">
		    <p>
              <span>Name</span>
              <input class="contact" type="text" name="your_name" value=""
                  id="feedbackName" oninput="clearError('#feedbackName')" />
            </p>
            <p>
              <span>Email Address</span>
              <input class="contact" type="text" name="your_email" value=""
                  id="feedbackEmail" oninput="clearError('#feedbackEmail')" />
            </p>
			<p>
              <span>Message</span>
              <textarea class="contact textarea" rows="5" cols="50" name="your_message"
                  id="feedbackMessage" oninput="clearError('#feedbackMessage')"
                  value=""></textarea>
            </p>
            <p style="padding-top: 15px">
              <span>&nbsp;</span>
              <input class="submit" type="submit" name="contact_submitted"
                  value="Send" onclick="submitFeedback()"/>
            </p>
          </div><!--close form_settings-->
          <div id="thankYouNote" class="thankYouNote" style="display: none">
             Thank you for your message / feedback.
          </div>
		</div><!--close content_item-->

        <div class="content_item">
          <h2>Find Us on Map</h2>
        </div><!--close content_item-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.230989519497!2d73.7794670149397!3d18.653627769959733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9da68060ad3%3A0x7dcb4c7265e21155!2sAyurved+Aarogya+Niketan!5e0!3m2!1sen!2sin!4v1447538070264"
            width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
      </div><!--close content-->   
	</div><!--close site_content-->  	
    <footer id="footer"></footer>  
  </div><!--close main-->

  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/common.js"></script>
  <script type="text/javascript" src="js/contactform.js"></script>
  <script type="text/javascript">
    $(function() {
    	initCommonSections("#contactUsMenuItem");
    });
  </script>
  
</body>
</html>
