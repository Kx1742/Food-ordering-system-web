<!DOCTYPE html>
<html lang="en">
    <head>
    <title> About</title>
    <link rel="stylesheet" href="../mystyle/restaurantStyle.css">
    <!--use icon from internet resource-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
<?php include('../includes/checkSession.php'); ?>

    <?php include('../includes/header.php'); ?>


    <section class="about" id="about">

    <h2 class="dishes-sub-heading">About Us</h2>
    <h1 class="dishes-heading">Why choose us?</h1>
    <div class="row">
        <div class="image">
            <img src="https://i.pinimg.com/564x/3e/4b/8c/3e4b8ca7a3587a554a00344604940569.jpg" alt="">
        </div>
        <div class="content">
        <h3> Cheaper price, Unique recipe, Relax atmosphere</h3>
            <p style="text-transform: none;">&nbsp;&nbsp;&nbsp;&nbsp;Shintasaya restaurant as a Japanese cuisine restaurant operate with the aim of serving Japanese cuisine
                to masses with a affordable price and atmosphere. <br><br>&nbsp;&nbsp;&nbsp;&nbsp;Over the 5 years, we always maintain our quality, hygiene during whole food processing.
                We are serving up more than 5 types of food. Over the years, our restaurant are famous with our signature recipe with a 
                secret blend of seasonings. Fresh ingredients, master preparation and innovation in inventing new cuisine could always 
                bring a lots of surprise to our customers. <br><br>&nbsp;&nbsp;&nbsp;&nbsp;Japandi furniture style with natural colors of materials create a soft, 
                comfortable and relaxed atmosphere for you to enjoy the meals. We believe that numbers of outlets for Shintasaya restaurant 
                will growth year by year to provide our better service and cuisine.
            </p>
            <p> &nbsp;&nbsp;&nbsp;&nbsp;We are aim to become better as <br>
                “A recipe has no soul. You, as the cook, must bring the soul to the recipe.”
                – Thomas Keller
            </p>
            
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>Free Delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>Easy Payment</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 Service</span>
                </div>
            </div>
            <a href="#" class="btn" >Learn More</a><!--link somthing here-->
        </div>
    </div>
</section>
<div class = "operate-hour">
    <h3>Operation Hour</h3>
    <table class="operateHour">
        <tbody>
            <tr class="table">
                <td class="operateDay">Wednesday - Monday</td>
                <td>9.00 am – 10:30 pm</td>
            </tr>
            <tr style = "color:red;">
                <td class="operateDay">Tuesday</td>
                <td>Closed</td>
            </tr>
        </tbody>
    </table>    
</div>
<script src="../javaScript/restaurantScript.js"></script>
<?php include('../includes/footer.php'); ?>

</body>
</html>