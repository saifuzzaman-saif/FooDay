<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daily Menu</title>

  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script>
    $(document).ready(function() {
      $(".fa-search").click(function() {
        $(".icon").toggleClass("active");
        $("input[type='text']").toggleClass("active");

      });

    });
  </script>

</head>

<body>
  <style>
    <style>* {
      padding: 0;
      margin: 0;
      outline: 0px;
    }

    img {
      width: 100%;
    }


         .navbar{
    
    font-weight: 700;
    font-size: .9rem;
    letter-spacing: .1rem;
    background-color: black!important;
}
.navbar-brand img{
    height: auto;
    width: auto;
    margin: auto;
}
.navbar-nav ul{
  display: inline;
  cursor: pointer;
}

.navbar-nav ul li {
    padding-right:.7rem;
}
.navbar-dark .navbar-nav .nav-link {
    color:white;
    padding-top: .8rem;
}
.navbar-dark .navbar-nav .nav-item .nav-link {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 18px;
    margin: 5px 7px;
    
}

.navbar-dark .navbar-nav .nav-link.active,
.navbar-dark .navbar-nav .nav-link:hover{
  color:tomato;
  
}

.dropdown-menu .dropdown-item{
    color:white;
    padding-top: .8rem; 
}
.dropdown-menu .dropdown-item:hover{
  
  color: tomato;
      border-radius: 5px;
      text-align: 17px;


}


.navbar .searchbar{
    position: relative;
}
.navbar .searchbar input[type="text"]{
    border:  0;
    padding: 0px;
    width: 0px;
    height: 35px;
    border-radius: 3px;
    transition: all 0.3s ease;

}
.navbar .searchbar .icon{
    position: absolute;
    top:0;
    right: 0;
    background:none;
    width: 35px;
    height: 100%;
    border-radius: 3px;
    color: #fff;
    transition: all 0.5s 0.2s ease;
}

.navbar .searchbar .icon i{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    cursor: pointer;

}
.navbar .searchbar .icon.active{
    background-color: rgb(30, 39, 46);
    transition: all 0.3s ease;
}

.navbar .searchbar input[type="text"].active{
    width: 250px;
    padding: 0 10px;
    transition: all 0.5s 0.2s ease;
}

    .contentitem {
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0.8, 0.8)), url('dailymenu/bcover.jpg');
      no-repeat center;
      background-size: cover;
      font-family: sans-serif;
      height: auto;
      color: #fff;
    }

    .section-title h3 {
      color: #fff;
      font-family: cursive;
      text-align: center;
      font-weight: bold;
      padding-top: 20px;
    }

    .content1 p {
      color: #fff;

      font-size: 16px;

    }

    .content1 img {

      width: 70%;
      border-radius: 100%;
      padding: 0 10px;
      margin-bottom: 10px;
    }

    .btn3 {
      background-color: rgb(255, 121, 63, .8);
      color: #fff;
      font-weight: bold;
      padding: 10px 45px;
      border: none;
      font-size: 18px;
      border-radius: 110px;
      box-shadow: 7px 10px 12px rgb(255, 121, 63, .1);
      cursor: pointer;
      transition: all .3s;

    }

    .btn3:hover {
      transform: scale(1.03);
      box-shadow: 10px 12px 15px rgba(255, 121, 63, .4);
    }

    .variety .sectiontitle1 {
      padding: 40px;
    }

    .variety .sectiontitle1 h2 {
      text-align: center;
      font-size: 32px;
      font-weight: bold;
      font-style: italic;
      color: #ff793f;

    }

    .variety .sectiontitle1 p {
      padding-right: 10px;

      font-style: italic;
      text-align: center;
      font-size: 28px;
      font-weight: bold;
    }

    .variety .content2 img {

      max-width: 240px;
      margin-right: 30px;
      border-radius: 60%;
      border: 2px solid #ddd;
      padding: 3px;
      transition: .5s;
    }

    .variety .content2 img:hover {
      border-radius: 0;
    }

    .variety .card-body {
      background: none;
      margin: 8px;

    }

    .variety .card-body p {
      font-weight: bold;
    }

    .variety .card-body span {
      padding-left: 4px;
      font-style: italic;
      font-size: 17px;
    }

    .variety .card-body h5 {
      font-weight: bold;
      font-size: 22px;
      font-style: italic;
    }

    .variety .card-body h6 {
      font-size: 19px;
      font-weight: bold;
    }

    .preorder {
      background-color: rgba(0, 0, 0.8, 0.9);
      width: 100%;
      height: 30vh;
    }

    .btn4 {
      background-color: rgb(255, 121, 63, .8);
      color: white;
      font-weight: bold;
      padding: 10px 45px;
      border: none;
      font-size: 18px;
      border-radius: 110px;
      box-shadow: 7px 10px 12px rgb(255, 121, 63, .1);
      cursor: pointer;
      transition: all .3s;

    }

    .btn4:hover {
      transform: scale(1.03);
      box-shadow: 10px 12px 15px rgba(255, 121, 63, .4);
    }


    footer {
      margin-top: 100px;
    }

    .foot {
      background-image: url('images/footer.jpg');
      height: 100%;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;

    }

    .logo2 {

      width: 180px;
      margin-top: 50px;

    }

    .form {

      background-image: url('images/foot.jpg');
      height: 100%;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }

    .segment-two h5:before {
      content: '|';
      color: white;
      padding-right: 10px;
    }

    .segment-two ul {
      margin: 0;
      padding: 0;
      list-style: none;

    }

    .segment-two ul li {
      border-bottom: 1px solid rgba(255, 255, 255, 0.3);
      line-height: 29px;
    }

    .segment-two ul li a {
      color: skyblue;
      text-decoration: none;

    }

    .segment-three form input [type=submit] {
      background: #c65039;
      border: none;
      padding: 3px 15px;
      margin-left: -5px;
      color: #fff;
      text-transform: uppercase;
    }
  </style>
  </style>
  
  <!--navbar start-->
    <body data-spy="scroll" data-target="navbarResponsive">
   
        <nav class="navbar navbar-expand-lg navbar-expand-md navbar-dark fixed-top">
            <div class="container">
            
                    <a class="navbar-brand" href="#">
                        <img src="images/logo1.png"  style="height: auto; width: auto; padding-top: 3px ; padding-bottom: 3px;" class="d-inline-block align-top" alt="" loading="lazy">
    
                    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
    
                </button>
          
            <div class="collapse navbar-collapse " id="navbarResponsive">
            
              <ul class="navbar-nav mx-auto ">
                <li class="nav-item active">
                   <a class="nav-link" href="home.php">Home </a>
                </li>
                <li class="nav-item">
                 <a class="nav-link" href="about.php">About US</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="reservation.php">Reservation</a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu <span class="sr-only">(current)</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgba(0,0,0.7,0.3);important;">
                     <a class="dropdown-item" href="dailymenu.php">Daily Items</a>
                                <a class="dropdown-item" href="menu1.php">Special Menu</a>
                                <a class="dropdown-item" href="menu2.php">Evening Items</a>

                   
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="blog.php" >Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contact.php" >Contact</a>
                  </li>
              </ul>
              
                
            </div>
            <div class="col-auto">
              <div class="searchbar">
                  <input type="text" placeholder="search">
                  <div class="icon">
                      <i class="fa fa-search fa-1.5x"></i>  
                  </div>
              </div>
            </div>
          </div>
          </nav>
          <br><br><br>
          
    <!--navbar end-->

   
    <!--background image strt--->

    <section id="contentitem" class="contentitem mx-auto">
      <div class="container">
        <div class="section-title">
          <h2 class="text-center font-weight-bold  text-white pt-5 wow bounceInDown" data-wow-duration="2s" data-wow-delay="1s">Food tastes better when you eat it with your family</h2>
          <p class="text-center font-weight-bold pt-2 pb-3 text-white  wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1s" style="padding-top: 25px; font-size: 18px;"> Veg, Non-Veg and all kind of Snacks are available
          </p>
        </div>
        <div class="content-items">
          <div class="row">

            <div class=" col-sm-12 col-md-6 col-lg-4 ">
              <div class="content1 mx-2">
                <img src="images/mb1.jpg" class="img-fluid" alt="Responsive image" style="height: auto; width: auto;">
                <h5>Thai Tanic</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi aut vero </p>
              </div>

            </div>

            <div class=" col-sm-12 col-md-6 col-lg-4 ">
              <div class="content1 mx-2">

                <img src="images/mb2.jpg" class="img-fluid" alt="Responsive image" style="height: auto; width: auto;">
                <h5> Sangamsope </h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi aut vero sint </p>
              </div>

            </div>

            <div class=" col-sm-12 col-md-6 col-lg-4 ">

              <div class="content1 mx-2">
                <img src="images/mb3.jpg" class="img-fluid" alt="Responsive image" style="height: auto; width: auto;">
                <h5>Thai Tanic</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi aut vero sint </p>
              </div>

            </div>
          </div>

          <div class="pb-4 text-center">
            <a href="reservation.php"><button class=" btn3 animated zoomIn" style="animation-delay: 3s">Order Now!</button></a>
          </div>


        </div>
    </section>

    <!--background img end-->

    <!--breakfst start-->

    <section id="variety " class="variety pt-3">
      <div class="container">
        <div class="sectiontitle1">
          <h2 class="text-center wow bounceInLeft " data-wow-duration="2s" data-wow-delay="1s">Breakfirst Time</h2>
          <p class="text-center wow bounceInRight " data-wow-duration="2s" data-wow-delay="1s">Our Menu</p>
        </div>
        <div class="row">

          <div class=" col-sm-12 col-md-6 col-lg-4 ">
            <div class="content2" id="pastabeef">
              <img src="dailymenu/break1.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Pasta Beef.............<spnan style="color: rgb(255, 121, 63,.9);">$12</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D0001</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Don Joe</span></p>
                <div class=" mt-0 read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>


          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="fishfried">
              <img src="dailymenu/break2.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5 > Fish Fried.............<spnan style="color: rgb(255, 121, 63,.9);">$17</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D0002</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Kim Jogu</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>


          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="spaghettibolognnese">
              <img src="dailymenu/break3.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5 > Spaghetti Bolognnese.............<spnan style="color: rgb(255, 121, 63,.9);">$11</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D0003</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Jeon Leo</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="vegetablecurry">
              <img src="dailymenu/break4.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Vegetable Curry............<spnan style="color: rgb(255, 121, 63,.9);">$9</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D0004</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Park Jeon</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="chickengarlic">
              <img src="dailymenu/break5.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Chicken Garlic.............<spnan style="color: rgb(255, 121, 63,.9);">$14</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D0005</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Kim Deo</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="chesecake">
              <img src="dailymenu/break6.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Chese cake.............<spnan style="color: rgb(255, 121, 63,.9);">$10</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D0006</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Don Joe</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>




        </div>
      </div>
    </section>
    <!--breakfst end-->


    <!--lunch start-->

    <section id="variety " class="variety pt-3">
      <div class="container">
        <div class="sectiontitle1">
          <h2 class="text-center wow bounceInLeft " data-wow-duration="2s" data-wow-delay="1s">Lunch Time</h2>
          <p class="text-center wow bounceInRight " data-wow-duration="2s" data-wow-delay="1s">Our Menu</p>
        </div>
        <div class="row">

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="shrimpfried">
              <img src="dailymenu/lun1.png" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Shrimp Fried.............<spnan style="color: rgb(255, 121, 63,.9);">$12</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">L0001</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Don Joe</span></p>
                <div class=" mt-0 read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>


          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="stawberrycreme">
              <img src="dailymenu/lun2.png" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Stawberry Creme.............<spnan style="color: rgb(255, 121, 63,.9);">$27</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">L0002</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Robin Jogu</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>


          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="vegetablebolognnese">
              <img src="dailymenu/lun3.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Vegetable Bolognnese.............<spnan style="color: rgb(255, 121, 63,.9);">$11</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">L0003</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Jeon Leo</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="shrimpcurry">
              <img src="dailymenu/lun4.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Shrimp Curry............<spnan style="color: rgb(255, 121, 63,.9);">$19</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">L0004</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Park Jeon</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="lambsteak">
              <img src="dailymenu/lun5.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Lamb Steak.............<spnan style="color: rgb(255, 121, 63,.9);">$17</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">L0005</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Kim Taehung</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="fishcurry">
              <img src="dailymenu/lun6.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Fish Curry.............<spnan style="color: rgb(255, 121, 63,.9);">$11</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">L0006</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Maegeb Joe</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>




        </div>
      </div>
    </section>
    <!--lunch end-->


    <!--Dinner start-->

    <section id="variety " class="variety pt-3">
      <div class="container">
        <div class="sectiontitle1">
          <h2 class="text-center wow bounceInLeft " data-wow-duration="2s" data-wow-delay="1s">Dinner Time</h2>
          <p class="text-center wow bounceInRight " data-wow-duration="2s" data-wow-delay="1s">Our Menu</p>
        </div>
        <div class="row">

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="beefsteak">
              <img src="dailymenu/din1.png" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Beef Steak..............<spnan style="color: rgb(255, 121, 63,.9);">$22</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D3001</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Don Margin</span></p>
                <div class=" mt-0 read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>


          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="chesespancake">
              <img src="dailymenu/din2.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Cheses Pancake.............<spnan style="color: rgb(255, 121, 63,.9);">$27</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D3002</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Robin Jogu</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>


          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="muttonstew">
              <img src="dailymenu/din3.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Mutton Stew............<spnan style="color: rgb(255, 121, 63,.9);">$21</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D3003</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Don Leo</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="ribsteak">
              <img src="dailymenu/din4.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Rib Steak............<spnan style="color: rgb(255, 121, 63,.9);">$19</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D3004</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Park Jeon</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="lambsteak">
              <img src="dailymenu/din5.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Lamb Steak.............<spnan style="color: rgb(255, 121, 63,.9);">$16</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D3005</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Kim Namjoon</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="chickenvegetable">
              <img src="dailymenu/din6.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Chicken Vegetable.............<spnan style="color: rgb(255, 121, 63,.9);">$13</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D3006</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Marnenr Loe</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>




        </div>
      </div>
    </section>
    <!--dinner end-->

    <section id="variety " class="variety pt-3">
      <div class="container">
        <div class="sectiontitle1">
          <h2 class="text-center wow bounceInLeft " data-wow-duration="2s" data-wow-delay="1s">Dessert Time</h2>
          <p class="text-center wow bounceInRight " data-wow-duration="2s" data-wow-delay="1s">Our Menu</p>
        </div>
        <div class="row">

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="berrypancake">
              <img src="dailymenu/dessert1.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Berry Pancake..............<spnan style="color: rgb(255, 121, 63,.9);">$22</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D1001</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Don Margin</span></p>
                <div class=" mt-0 read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>


          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="chocolatecake">
              <img src="dailymenu/dessert2.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Chocolate Cake.............<spnan style="color: rgb(255, 121, 63,.9);">$27</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D1002</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Robin Jogu</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>


          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="chocolatestick">
              <img src="dailymenu/dessert3.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Chocolate Stick............<spnan style="color: rgb(255, 121, 63,.9);">$11</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D1003</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Don Robin</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="ricesteak">
              <img src="dailymenu/dessert4.png" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Rice Steak............<spnan style="color: rgb(255, 121, 63,.9);">$9</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D1004</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Park Jeon</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="fruiticecream">
              <img src="dailymenu/dessert5.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Fruit Icecream.............<spnan style="color: rgb(255, 121, 63,.9);">$19</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D1005</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Jeon jun</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="honnypancake">
              <img src="dailymenu/dessert6.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Honny Pancake.............<spnan style="color: rgb(255, 121, 63,.9);">$15</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D1006</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Marnenr kim</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>




        </div>
      </div>
    </section>
    <!--dinner end-->

    <!--drink  start-->

    <section id="variety " class="variety pt-3">
      <div class="container">
        <div class="sectiontitle1">
          <h2 class="text-center wow bounceInLeft " data-wow-duration="2s" data-wow-delay="1s">Drinks</h2>
          <p class="text-center wow bounceInRight " data-wow-duration="2s" data-wow-delay="1s">Our Menu</p>
        </div>
        <div class="row">

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="grapejuice">
              <img src="dailymenu/drink1.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Grape Juice..............<spnan style="color: rgb(255, 121, 63,.9);">$22</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D2001</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Don Margin</span></p>
                <div class=" mt-0 read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>


          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="mangoojuice">
              <img src="dailymenu/drink2.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Mangoo Juice.............<spnan style="color: rgb(255, 121, 63,.9);">$27</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D2002</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Robin Jogu</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>


          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="leomonjuice">
              <img src="dailymenu/drink3.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Leomon Juice............<spnan style="color: rgb(255, 121, 63,.9);">$11</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D2003</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Don Robin</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="mixjuice">
              <img src="dailymenu/drink4.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Mix Juice............<spnan style="color: rgb(255, 121, 63,.9);">$9</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D2004</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Park Jeon</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="orangejuice">
              <img src="dailymenu/drink5.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Orange Juice.............<spnan style="color: rgb(255, 121, 63,.9);">$9</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D2005</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Jeon jun</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class=" col-sm-12 col-md-6 col-lg-4">
            <div class="content2" id="pineapplejuice">
              <img src="dailymenu/drink6.jpg" alt="Responsive image" style="height: 225px; width: 292px;">
              <div class="card-body">
                <h5> Pineapple Juice.............<spnan style="color: rgb(255, 121, 63,.9);">$10</spnan>
                </h5>
                <h6>#Dish Code :<spnan style="color: rgb(255, 121, 63,.9);">D2006</spnan>
                </h6>
                <p class="card-text"> Bulgogi beef with souces, fried eggs,thai style chilly pasta, with rice.
                  .</p>
                <p>Chef<span style="color: rgb(255, 121, 63,.9);">Marnenr kim</span></p>
                <div class="read-more"><a href="#" style="color: black">
                    <i class="fas fa-arrow-circle-right"></i>
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>




        </div>
      </div>
    </section>
    <!--drink end-->

    <!-- order section starts  -->
    <section id="preorder" class="preorder">
      <div class="container">
        <div class="row">

          <div class="col-4 ">

            <div class="mt-5 ml-2 wow bounceInLeft " data-wow-duration="2s" data-wow-delay="1s">
              <img src="images/order5.png" style="height:auto ; width:auto ;">
            </div>
          </div>

          <div class="col-4">
            <div class="seg1 mt-5 ml-2 animated zoomIn" style="animation-delay: 7s">
              <button class="btn4" ><a href="reservation.php">Order Now</a></button>
            </div>

          </div>

          <div class="col-4 ">
            <div class="seg2 mt-3 ml-5 wow bounceInRight" data-wow-duration="2s" data-wow-delay="1s">
              <img src="images/order3.png" style="height:auto ; width:auto ; margin-top:30px; margin-right:10px;">
            </div>

          </div>

        </div>
      </div>
    </section>
    <!-- order section ends  -->




    <footer>
      <div class="foot">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="row">
                <div class="col-6">
                  <img class="logo2 " src="images/logo1.png" alt="">
                  <p class=" text-white mt-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br>
                    incididunt ut labore et dolore magna aliqua.</p>
                  <hr class="my-4"> <br>

                </div>
                <div class="col-6 segment-two">
                  <h5 class="text-white mt-5">QUICK LINKS</h5>
                  <ul>
                    <li><a href="#" style="color:#ff793f;">ABOUT.......</a></li>
                    <li><a href="#" style="color:#ff793f;">MENU.......</a></li>
                    <li><a href="#" style="color:#ff793f;">BLOG........</a></li>
                    <li><a href="#" style="color:#ff793f;">CONTACT.....</a></li>
                  </ul>

                </div>
              </div>


              <div class="row">
                <div class="col-6">
                  <address class="text-white">
                    <i class="far fa-address-card fa-1x" style="padding-right: 9px;"></i>57 White Oak Drive Kansas City <br>
                    689 Lynn Street South Boston<br><br>
                    <i class="fas fa-phone fa-1x" style="padding-right: 9px;"></i>(617)-276-8031<br>
                    (617)-276-8031
                  </address>
                </div>
                <div class="col-6 segment-three pt-1">
                  <h4 class="text-white pt-1">Follow Us</h4>
                  <p class="text-white"> Please Follow us on our social Media Profile in order to keep updated.</p>
                  <a href="#" style="padding-right: 8px ;color:white;"><i class="fab fa-facebook fa-2x"></i></a>
                  <a href="#" style="padding-right: 8px; color:white;"><i class="fab fa-twitter-square fa-2x"></i></a>
                  <a href="#" style="padding-right: 8px; color:white;"><i class="fab fa-instagram fa-2x"></i></a>
                  <a href="#" style="color:white;"><i class="fab fa-pinterest-square fa-2x"></i></a><br><br>

                  <form style="padding-top: 2px">
                    <input type="email" class="footform">
                    <input type="submit" value="send" style="background-color:rgb(205, 97, 51); font-size: 14px; font-weight: bold; padding: 2px 14px ;">
                  </form>


                </div>

              </div>


            </div>
            <div class="col-md-4">
              <div class="form">
                <h3 class="text-center text-white ">Open Hour</h3>
                <p class="mt-3 ml-4">
                  Tuesday .......................................7AM - 9PM <br> <br>

                  Wednesday .....................................7AM - 9PM <br> <br>
                  Thursday ......................................7AM - 9PM <br> <br>

                  Friday ........................................7AM - 9PM <br> <br>
                  Saturday.......................................7AM - 9PM <br> <br>

                  Sunday ........................................7AM - 9PM <br> <br>
                  Monday ........................................7AM - 9PM <br> <br>

                </p>
                <h4 class="text-center">Reservation Numbers <br>
                  (617)-276-8031</h4> <br>


              </div>
            </div>
          </div>

        </div>
      </div>

    </footer>
    <!--footer end-->







    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>

    <script>
      new WOW().init();
    </script>

  </body>

</html>