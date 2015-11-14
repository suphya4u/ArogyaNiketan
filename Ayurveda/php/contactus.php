<!DOCTYPE html> 
<html>

<head>
  <title>Ayurved Arogya Niketan - Panchakarma Chikitsalay</title>
  <meta name="description" content="Ayurved Arogya Niketan. Ayurveda Hospital" />
  <meta name="keywords" content="Ayurveda, Panchakarma, Hospital, Clinic, Doctor" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header id="header"></header>

    <div id="slideshow_container">  
	  <div class="slideshow">
	    <ul class="slideshow">
          <li class="show">
            <img class="slideshow_image"
                src="images/home_1.jpg" alt="&quot;Enter your caption here&quot;" /></li>
          <li>
            <img class="slideshow_image"
                src="images/home_2.jpg" alt="&quot;Enter your caption here&quot;" /></li>
        </ul> 
	  </div><!--close slideshow-->  	
	</div><!--close slideshow_container-->  	
    
	<div id="site_content">

	  <div id="sidebar"></div>

	  <div id="content">
        <div class="content_item">
          <h2>Schedule An Appointment</h2>
          <p>Please reach us at <strong>+91-20-27247188</strong> or <strong>+91-9822028527</strong>
             to schedule an appointment or please email us at <strong>contact@ayurvedniketan.com</strong>.
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.2341232689637!2d73.7795256149397!3d18.653487069964008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9da67bd0a0f%3A0xc26046f41f41fe2d!2sBalaji+Printers!5e0!3m2!1sen!2sus!4v1446703817137"
            width="600" height="450" frameborder="1" style="border:1px solid" allowfullscreen>
        </iframe>

      </div><!--close content-->   
	</div><!--close site_content-->  	
    <footer id="footer"></footer>  
  </div><!--close main-->

  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <script type="text/javascript" src="js/common.js"></script>
  <script type="text/javascript" src="js/contactform.js"></script>
  <script type="text/javascript">
    $(function() {
    	initCommonSections("#contactUsMenuItem");
    });
  </script>
  
</body>
</html>
