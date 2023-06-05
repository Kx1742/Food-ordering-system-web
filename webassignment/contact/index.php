<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Contact Us</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
      <link rel="stylesheet" href="../mystyle/restaurantStyle.css">
      <!--use icon from internet resource-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
   </head>
   <body>
   <?php include('../includes/checkSession.php'); ?>

      <?php include('../includes/header.php'); ?>

      <div class="heading">
         <h3 style = "margin-top:2em;"class = "contact-heading">Contact Us</h3>
         <!--<p><a href="home.html">home </a> <span> / contact</span></p>-->
      </div>
      <section class="contact">
         <div class="row">
            <!--
               <div class="image">
                  <img src="https://th.bing.com/th/id/OIP.7wBgzdGJAhF8bPFUfHUuNQHaHa?pid=ImgDet&rs=1" alt="">
               </div>
               -->
            <!--<i class="fa fa-phone"></i>-->
            <img class="contactimage" src = "../contact/contactimage.png">

            <!--The Form-->
            <form action="index.php" method="post" id="theForm" onsubmit="return validateForm() && showSubmit();">
               <img class = "hearfromyou" src = "../hearFromYou.gif">
               <!--<h3>Tell Us Something!</h3>-->
               <span class="reminder" id = "reminder">* required field</span>
               <label for="name" >Name<span class="error">*</span>:</label>
               <input type="text" id="name" name="name" required placeholder="enter your name" maxlength="50" class="box"><br>
               <div id="nameError" class="error"></div>

               <label for="email">E-mail<span class="error">*</span>:</label>
               <input type="email" id="email" name="email" required placeholder="enter your email" maxlength="50" class="box"><br>
               <div id="emailError" class="error"></div>

               <label for="phone">Phone<span class="error">*</span>:</label>
               <input type="number" id="phone" name="phone" required placeholder="enter your number" max="99999999999" min="0" class="box" onkeypress="if(this.value.length == 10) return false;"><br>
               <div id="phoneError" class="error"></div>

               <label for="enquiry">Type of Enquiry<span class="error">*</span>:</label>
               <div class = enquiryList>
                  <input type="radio" name="enquiry" value="General Enquiry">  <span class="radioLabel">General Enquiry</span> 
                  <input type="radio" name="enquiry" value="Complaints"><span class="radioLabel"> Complaints</span>
                  <input type="radio" name="enquiry" value="Suggestions"> <span class="radioLabel">Suggestions</span>
               </div>

               <div id="enquiryError" class="error"></div>
               <label for="subject">Subject<span class="error">*</span>:</label>
               <textarea style="resize:none;" id="feedback" name="subject" form="theForm" placeholder="enter your message" required class="box" cols="30" rows="10" maxlength="500"></textarea>
               <div id="subjectError" class="error"></div>
               <input type="submit" value="Submit" class="btn" name="send" id="submit-button">
            </form>
         </div>
         <div class="contact-info">
            <hr style="width:100%;text-align:left;margin-left:0;">
            <h3>Find us at</h3>
            <pre>      
               Shintasaya Restaurant
               Email : <a class="contact-link" href="mailto:shintasaya@info.my">shintasaya@info.my</a>
               Tel : <a class="contact-link" href="tel:+60179869004">017-9869004</a>
               Address : 12,Jalan Pasar,Taman Mewah,41200,Kuala Lumpur.
	            <!--Map-->
	            <iframe name="map"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7491.143014497285!2d101.79335875830624!3d3.038547549190213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc34a5f21a8235%3A0x78796ffc32ce3fcd!2z5ouJ5pu85aSn5a246ZuZ5rqq6b6N5qCh5Y2A!5e1!3m2!1szh-TW!2smy!4v1679630611114!5m2!1szh-TW!2smy"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	         </pre>
         </div>
      </section>
      <script type="text/javascript">
         document.getElementById("submit-button").onclick = function () {
            location.href = "../home/index.php";
         };
      </script>
      <script src = "../javaScript/validateContact.js"></script>
      <script src="../javaScript/restaurantScript.js"></script>

      <?php include('../includes/footer.php'); ?>

   </body>
</html>