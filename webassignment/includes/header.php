<!--header sec-->
<header id="mainHeader">
  <style>
  a, .navigatebar, .icons{
    text-decoration: none !important;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    max-width: 150px;
    overflow: auto;
    box-shadow: rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    width:120px;
    color: black;
    padding: 12px 12px;
    margin:auto;
    text-align:center;
    text-decoration: none;
    display: block;
    border-radius:0;
  }

  .dropdown a:hover {background-color: #675D50;}
  .dropdown #user:hover {
    color: #675D50;
  }

  .show {
    display: block;
    text-align: center;
    width:fit-content;
    right:0;
    height: 102px;
    border-radius:.5em;
  }
  </style>
  <script src="../menu3/index.php"></script>

  <a href="../home/index.php" class="restaurantLogo"><img src = "../Shintasaya-Logo.png" style="width:fit-content;height:55px;"></a>
  <div class="navigateSelect">
    <nav class="navigatebar">
      <!--navigation menu-->
      <a class="alink active" href="../home/index.php">Home</a>
      <a class="alink" href="../dishes/index.php">Dishes</a>
      <a class="alink" href="../about/index.php">About Us</a>
      <a class="alink" href="../menu3/index.php">Menu</a>      
      <a class="alink" href="../contact/index.php">Contact Us</a>
    </nav>
  </div>

  
  <div class="icons">
    <!--change id name later-->
    <!--use bar icon-->
    <i class="fas fa-bars" id="menu-bars"></i>
    <!--use shopping cart icon-->
    <a href="../cart/index.php" class="fas fa-shopping-cart" id="cart-icon"></a>
    <span id="cart-item" class="badge badge-danger"></span></a>

    <div class="dropdown">
      <button id ="user"style="cursor: pointer;
        margin-left: 0.5rem;
        height: 4.5rem;
        line-height: 4.5rem;
        width: 4.5rem;
        text-align: center;
        font-size: 2rem;
        border-radius: 50%;
        background: #eee;"class="fas fa-user-alt" onclick="myFunction()"></button>
      <div id="myDropdown" class="dropdown-content">
        <a style="transition:none;"href="../logout.php">Logout</a>
        <a style="transition:none;"href="../contact/index.php">Contact Us</a>
      </div>
    </div>
  </div>

  <script>
  /* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.fas.fa-user-alt')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  </script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
       
        load_cart_item_number()
    function load_cart_item_number() {
      
      $.ajax({
        url: '../menu3/action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
  
  <script src="https://bootstrapmade.com/assets/js/demo.js?v=5.0"></script>

</header>
<!--header sec-->
