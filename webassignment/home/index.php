<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../mystyle/restaurantStyle.css">
    <!--use icon from internet resource-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <style>
        /* entire container, keeps perspective */
    .flip-container {
        margin-top: 1em;
        perspective: 1000px;
        -moz-transform: perspective(1000px);
        -moz-transform-style: preserve-3d;
        -webkit-perspective: 1000;
        -moz-perspective: 1000;
        -o-perspective: 1000;
    }

    .row{
        display: grid;
        margin-top: auto;
        grid-template-columns: repeat(auto-fit,minmax(28rem,1fr));    
        gap: 2rem;
    }

    /* flip the pane when hovered */
    .flip-container .flip-container:hover .flipper, .flip-container .flip-container.hover .flipper {
        transform: rotateY(180deg);
    }

    .flip-container, .front, .back {
        width: 100%;
        height: 500px;
    }

    /* flip speed goes here */
    .flipper {
        transition: 0.6s;
        transform-style: preserve-3d;
        position: relative;
    }

    /* hide back of pane during swap */
    .front, .back {
        backface-visibility: hidden;
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px;
    }

    /* front pane, placed above back */
    .front {
        z-index: 2;
        /* for firefox 31 */
        transform: rotateY(0deg);
        -webkit-transform: rotateY(0deg);
        background: #C8B6A6;
    }

    /* back, initially hidden pane */
    .back {
        transform: rotateY(180deg);
        -webkit-transform: rotateY(180deg);
    }

    .back h2{
        font-size:2em;
    }

    .back p{
        font-size:1.7em;
    }

    .thumbnail{
        background: none;
        border: none;
    }

    .thumbnail img{
        height:24em;
        width:100%;
    }
    .mb{margin-bottom: 20px;}
        
    .reviewDiv {
        width: 70%;
        height: auto;
        background-color: lightgrey;
        font-weight: bold;
        position: relative;
        animation: mymove 3s infinite;
        padding:3em 3.5em 5em;
        margin-bottom:2em;
        border-radius:10em;
    }

    .review .review-heading{
        margin-top: 8em;
    }

    .reviewDiv img {
        width: 20%;
        width: 20%;
    }

    #div1 .review-content ,#div3 .review-content{
        width:70%;
        height:fit-content;
        float:right;
    }

    #div2 .review-content ,#div4 .review-content{
        width:70%;
        height:fit-content;
        float:left;
    }
    .team{
        margin-top:15em;
    }

    #div1,#div2,#div3,#div4,#div5 {
        animation-timing-function: ease-in-out;
    }

    #div1,#div3,#div5 {
        text-align:left;
        animation: mymoveleft 3s ;
        animation-fill-mode: forwards;
    }

    #div2,#div4 {
        text-align:right;
        animation: mymoveright 3s ;
        animation-fill-mode: forwards;
    }

/*
    @media (max-width: 600px) 
    {
        .features, .review {
        display: none;
        }
        .team{
            margin-top: auto; 
        }
        #pageFooter {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 100px; /* adjust this value to match the height of your footer 
        }
        
    }*/
    @keyframes mymoveleft {
    from {left: 400px;}
    to {left: 50px;}
    }

    @keyframes mymoveright {
    from {right: 0px;}
    to {right: -350px;}
    }    

    .thumbnail1 img{
        height:42em;
        width:100%;
    }

</style>
</head>
<body>
<?php include('../includes/checkSession.php'); ?>

    <?php include('../includes/header.php'); ?>
 
    <section class="searchbar" id="searchbar">
        <div class="wrapper">
            <div id="search-container">
                <input
                type="search"
                id="search-input-home"
                placeholder="Search product name here.."
                />
                <button type="submit" id="search" onclick="searchFromHome()">Search</button>
            </div>
        </div>
    </section>
    <section class="home" id="home">
        <div class="swiper-container home-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide slide">
                    <div class="content">
                        <span> Our special dish</span>
                        <h3>Sushi</h3>
                        <p> As the most famous Japanese dish and most popular dishes among the Japanese,
                            sushi had adapt and develop their flavor. Our restaurant are famous with the nigiri
                            with the fresh ingredients such as shrimp, squid and octopus.
                        </p>
                        <a href="../menu3/index.php" class="btn">Order Now</a>
                    </div>    
                    <div class="image">
                    <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F19%2F2018%2F04%2F23%2F1804-what-is-sushi-grade-fish-2000.jpg&q=60" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span> Our special dish</span>
                        <h3>Ramen</h3>
                        <p> Noodle soup dishes that import from China which now become ideal option for travelers. 
                            Countless varieties of toppings and ramen soup can be added according your preferences.
                            The most recommended ramen would be the Tonkotsu ramen with thick and creamy pork bone soup.
                        </p>
                        <a href="../menu3/index.php" class="btn">Order Now</a>
                    </div>    
                    <div class="image">
                        <img src="https://www.seriouseats.com/thmb/IBikLAGkkP2QVaF3vLIk_LeNqHM=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/rich-and-creamy-tonkotsu-ramen-broth-from-scratch-recipe-Diana-Chistruga-hero-6d318fadcca64cc9ac3e1c40fc7682fb.JPG" alt="">
            
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span> Our special dish</span>
                        <h3>Bento</h3>
                        <p> If you are students or office workers, then bento will be the best choice for you to start your day.
                            Our bento contains several dishes that enable you to try at a time and practice a balance diet.
                            All in one, all for health.
                        </p>                
                        <a href="../menu3/index.php" class="btn">Order Now</a>
                    </div>    
                    <div class="image">
                        <img src="https://imgix.theurbanlist.com/content/article/bento-box-sydney.jpg?auto=format,compress&w=520&h=390&fit=crop" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="features" id="features" >
        <div class="flip-container">
            <div class="row text-center mb">
                <h1 style="text-align:center; font-size:4em; margin-top:3em;">Features and Services</h1>
            </div>
            <div class="row">
                <div class="col-md-4 mb">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <div class="thumbnail">
                                    <img src="../home/authentic2.jpg" alt="#">
                                    <div class="caption text-center">
                                        <h3 class="" style = "font-size:2em;">Authentic Japanese Cuisine</h3>

                                        <p class="">Japanese culinary authenticity with skilled chefs, 
										traditional methods, and finest ingredients. Our menu features diverse flavors
                                         showcasing the richness of Japanese cuisine.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <h2 class="" >Authentic Japanese Cuisine:</h2>

                                <p class="">At Shintasaya, we are committed to preserving the <strong  style = "color:#D14D72">authenticity of Japanese cuisine</strong>.
                                 Our skilled chefs use traditional cooking methods and source the finest ingredients to create an array 
								of delicious and authentic Japanese dishes.  From sushi and sashimi to ramen, and dessert specialties, 
								our menu showcases the <strong style = "color:#D14D72">diverse and rich flavors</strong> of Japanese cuisine.</p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <div class="thumbnail">
                                    <img src="../home/fresh.jpg" alt="#" class="">
                                    <div class="caption text-center">
                                        <h3 class="" style = "font-size:2em;">Fresh and High-Quality Ingredients: </h3>

                                        <p class="">Freshest, highest-quality ingredients used are the foundation of our 
                                        Japanese cuisine, and we strive to deliver the best to our guests with pride.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <h2 class="">Fresh and High-Quality Ingredients: </h2>

                                <p class="">We take pride in using only the <strong style = "color:#D14D72">freshest and highest-quality</strong>
                                 ingredients in our dishes. Our chefs carefully select seasonal produce, premium seafood, and top-grade meats 
                                 to ensure that every dish is of the highest quality and flavor. We believe that the quality of ingredients is the foundation 
								of great Japanese cuisine, and we strive to <strong style = "color:#D14D72">deliver the best</strong> to our guests.</p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <div class="thumbnail">
                                    <img src="../home/service.jpg" alt="#" class="">
                                    <div class="caption text-center">
                                        <h3 class="" style = "font-size:2em;">Friendly and Attentive Service</h3>

                                        <p class="">Our knowledgeable staff assists with menu recommendations, 
                                        explanations about Japanese cuisine, ensuring a memorable dining experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <h2 class="">Friendly and Attentive Service: </h2>

                                <p class="">Shintasaya prides itself on providing <strong style = "color:#D14D72">warm and attentive service </strong>
                                to guests. The knowledgeable and friendly staff are always ready to assist with menu recommendations, 
								provide explanations about Japanese cuisine, and ensure that guests have a memorable 
								dining experience</p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class = "team" id = "team" >
        <div class="flip-container">
            <div class="row text-center mb">
                <h1 style="text-align:center; font-size:4em; margin-top:3em;">Our team</h1>
            </div>
            <div class="row">
                <div class="col-md-4 mb">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <div class="thumbnail1" >
                                    <img src="../home/chef.jpg" alt="#">
                                    <div class="caption text-center">
                                        <h3 class=""  style = "font-size:2em; text-align:center;">Hiroshi</h3>

                                        <p class=""style="text-align:center;">Chef</p>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <h2 class="">Overall Achievement</h2>

                                <p class="">With over 20 years of culinary experience in Japan and abroad, Chef Hiroshi 
								has honed his skills in traditional Japanese cooking techniques, such as sushi and 
								teppanyaki. He has won multiple awards for his culinary expertise, including the 
								"Best Sushi Chef" award in the prestigious Japanese Culinary Competition. Chef 
								Hiroshi's meticulous attention to detail and passion for creating exquisite 
								Japanese dishes have earned him recognition and praise from diners and critics alike.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <div class="thumbnail1">
                                    <img src="../home/manager.jpg" alt="#" class="">
                                    <div class="caption text-center">
                                        <h3 class=""  style = "font-size:2em;text-align:center;">Yuki</h3>

                                        <p class=""style="text-align:center;">Manager </p>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <h2 class="">Overall Achievement</h2>

                                <p class="">With a background in hospitality management and a deep understanding of 
								Japanese culture, Manager Yuki has successfully led the team at Shintasaya for over 
								a decade. Her exceptional leadership skills and dedication to providing exceptional 
								customer service have resulted in consistently high customer satisfaction scores and 
								numerous positive reviews. Manager Yuki's commitment to excellence and her ability to 
								create a welcoming and friendly atmosphere at the restaurant have contributed to its 
								success.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <div class="thumbnail1" style = "height: 23em;">
                                    <img src="../home/pastry_chef.jpg" alt="#" class="">
                                    <div class="caption text-center">
                                        <h3 class=""  style = "font-size:2em;text-align:center;">Mika</h3>

                                        <p class="" style="text-align:center;">Pastry Chef</p>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <h2 class="">Overall Achievement</h2>
                                <p class="">Mika is a highly skilled and accomplished Pâtissier at Shintasaya, with 
								a passion for creating exquisite Japanese-inspired desserts. Mika's desserts are known for their delicate flavors, 
								intricate presentation, and use of seasonal Japanese ingredients, such as matcha, yuzu, 
								and adzuki beans. Her creative and unique creations have become a highlight of the dining 
								experience at Shintasaya, with guests eagerly anticipating her latest dessert offerings. 
								Mika's commitment to perfection, attention to detail, and unwavering dedication to her 
								craft have made her a true asset to the Shintasaya team and a celebrated figure in the 
								world of pastry arts.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="review" id="review">
        <h1 style="text-align:center; font-size:4em;" class="review-heading">Customer review</h1>
        <h3 style="text-align:center; font-size:2.5em;">Have a Look on Their Feedback</h1>
        <div class="reviewDiv" id="div1">
            <h1>John Smith</h1>
            <img src="../reviewImage/profile1.png">
            <div class="review-content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>I was particularly impressed with the sushi selection and the attentive service provided by 
					my server, Aiko. The ambiance of the restaurant was also charming, with a cozy and 
					authentic Japanese atmosphere. I highly recommend Shintasaya to anyone looking for 
					a top-notch Japanese dining experience.</p>
            </div>
        </div>

        <div class="reviewDiv"  id="div2">
            <h1>Emily Wong</h1>
            <img src="../reviewImage/profile2.png">
            <div class="review-content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>I have been a loyal customer of Shintasaya for years, and the restaurant never 
				disappoints with their quality and authentic flavors.The attention to detail in dining 
				experience is remarkable, from the presentation of the dishes to the serene ambiance of 
				the restaurant.</p>
            </div>
        </div>

        <div class="reviewDiv"  id="div3">
            <h1>Sarah Johnson</h1>
            <img src="../reviewImage/profile3.png">
            <div class="review-content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>I recently celebrated a special occasion at Shintasaya and it exceeded my expectations. 
                The food preparation and presentation was outstanding. Shintasaya truly made our celebration 
                memorable. I can't wait to return for another extraordinary dining experience.</p>
            </div>
        </div>

        <div class="reviewDiv"  id="div4">
            <h1>Michael Chen</h1>
            <img src="../reviewImage/profile4.png">
            <div class="review-content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>I had the pleasure of dining at Shintasaya and it was an unforgettable experience. The 
				authenticity of the Japanese cuisine was evident in every dish, the freshest ingredients been
				used to create the most delicious flavors. The skill and creativity of the chefs, led by Chef 
				Sato, were truly remarkable.</p>
            </div>
        </div>
    </section>

    <script src="../javaScript/filterscript2.js"></script>
    <script src="../javaScript/restaurantScript.js"></script>
<?php include('../includes/footer.php'); ?> 
</body>
</html>