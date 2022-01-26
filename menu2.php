<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu2</title>
   
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
 ></script>
    <script>
        $(document).ready(function(){
            $(".fa-search").click(function(){
                $(".icon").toggleClass("active");
                $("input[type='text']").toggleClass("active");

            });

        });
    </script>
    <link rel="stylesheet" href="css/menu2.css">
    
</head>
<body>
  <style >
    * {
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
  font-size: 19px;
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

.back_img1 {
   

    background: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0.8,0.3)), url('images/bg8.jpg');
   height: 90vh;
   
   background-repeat: no-repeat;
   background-position: center;
   background-size: cover;
   background-attachment: fixed;
   
   
}

.text3{
    
    padding-top: 250px;
        
 }

#dish {
  padding-top: 10px;
  width: 100%;

}

#dish .heading h1 {
  font-size: 2.2rem;
  color: black;
  padding-top: 7rem;
  margin-bottom: 2rem;
}

#dish .heading h1 span {
  color: rgb(255, 121, 63);
}

#dish .box-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-pack: distribute;
      justify-content: space-around;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin: 1rem auto;
  width: 90%;
}

#dish .box-container .box {
  height: 16rem;
  width: 20rem;
  border-radius: .5rem;
  margin: 1rem;
  cursor: pointer;
  overflow: hidden;
  position: relative;
  -webkit-box-shadow: 0 0 .5rem #333;
          box-shadow: 0 0 .5rem #333;
}

#dish .box-container .box img {
  height: 100%;
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

#dish .box-container .box .info {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(51, 51, 51, 0.6);
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-flow: column;
          flex-flow: column;
  color: #fff;
  -webkit-transform: scale(0);
          transform: scale(0);
}

#dish .box-container .box .info h3 {
  font-size: 1.7rem;
}

#dish .box-container .box .info p {
  font-size: 1rem;
  border-bottom: 0.2rem solid rgb(255, 121, 63);
  border-top: 0.2rem solid rgb(255, 121, 63);
  margin: 1rem 2rem;
}

#dish .box-container .box .info button {
  outline: none;
  border: none;
  border-radius: 5rem;
  color: #333;
  font-size: 0.8rem;
  font-weight: bold;
  text-transform: capitalize;
  letter-spacing: .2rem;
  cursor: pointer;
  position: relative;
  z-index: 1;
  overflow: hidden;
  height: 2rem;
  width: 11rem;
}

#dish .box-container .box .info button::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  background: rgb(255, 121, 63);
  height: 100%;
  width: 0%;
  -webkit-transition: .2s;
  transition: .2s;
  z-index: -1;
}

#dish .box-container .box .info button:hover::before {
  width: 100%;
}

#dish .box-container .box:hover .info {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.recipe_section .heading{
  padding-bottom: 30px;
}
.recipe_section.heading h1 {
  font-size: 2.2rem;
  color: black;
  padding-top: 7rem;
  margin-bottom: 2rem;
}

.recipe_section .heading h1 span {
  color: rgb(255, 121, 63);
}

.extra_section .heading{
  padding-bottom: 30px;
}
.extra_section.heading h1 {
  font-size: 2.2rem;
  color: black;
  padding-top: 7rem;
  margin-bottom: 2rem;
}

.extra_section .heading h1 span {
  color: rgb(255, 121, 63);
}


.recipe_section{
  padding: 20px 0;
}
.image_wrapper{
  position: relative;
  width: 100%;
  max-width: 100%;
  height: 90%;
  overflow: hidden;
  border-radius: 2px;
}
.image_wrapper img{
   width: 100%;
  max-width: 100%;
  height: 90%;
  transition: all 0.4s;
}

.image_wrapper:hover img{
  transform: scale(1.2, 1.2);
  cursor: pointer;
}
.image_wrapper-text{
  padding: 30px 15px;
  max-height: 150px;
  position: absolute;
  bottom: 0px;
  text-align: center;
  background-color:rgb(0,0,0,.6); 
  color: #fff;
}
.image_wrapper-text h5{
  color: rgb(255, 121, 63);
  font-size: 25px;
  font-weight: bold; 
}

.image_wrapper-text p{
  line-height: 26px;
}
.bg_dark{
  background-color: #212121;
}
.text_light{
  color:#fff; 


}

.extra_section{
  padding: 20px 0;

}
.extra_section h4{
  font-size:26px;
  font-weight:bold;
}
.btn5{
  background-color:rgb(255, 121, 63,.8) ;
color: white;
font-weight: bold;
padding: 6px 27px;
border: none;
font-size: 15px;
border-radius: 90px;
box-shadow: 7px 10px 12px rgb(255, 121, 63,.1);
cursor: pointer;
transition: all .3s;
text-align: center;

}

.btn5:hover {
transform: scale(1.03);
box-shadow: 10px 12px 15px rgba( 255, 121, 63,.4);
}




.preorder{
  background-color: rgba(0,0,0.8,0.9);
  width: 100%;
  height: 30vh;
}

.btn4{
  background-color:rgb(255, 121, 63,.8) ;
color: white;
font-weight: bold;
padding: 10px 45px;
border: none;
font-size: 18px;
border-radius: 110px;
box-shadow: 7px 10px 12px rgb(255, 121, 63,.1);
cursor: pointer;
transition: all .3s;

}

.btn4:hover {
transform: scale(1.03);
box-shadow: 10px 12px 15px rgba( 255, 121, 63,.4);
}

.seg1  button {
 
  color: white; 
}


footer{
      margin-top: 100px;
  }
  .foot{
    background-image:url('images/footer.jpg') ;
    height: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
   
}
.logo2{
      
      width: 180px;
      margin-top: 50px;
      
  }
  .form{
      
    background-image:url('images/foot.jpg') ;
    height: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }
  .segment-two h5:before{
      content: '|';
      color: white;
      padding-right:10px ;
  }
  .segment-two ul {
      margin :0;
      padding: 0;
      list-style: none;

  }

  .segment-two ul li {
      border-bottom: 1px solid rgba(255,255,255,0.3);
      line-height: 29px;
  }
  .segment-two ul li a {
      color : skyblue;
      text-decoration: none;

  }
  .segment-three form input [type=submit]{
      background: #c65039;
      border :none;
      padding : 3px 15px;
      margin-left :-5px;
      color :#fff;
      text-transform : uppercase;
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
    

      <!--head page end-->

      <div class="back_img1">
      <div class="text3">
        <h2 class="text-center wow bounceInDown " data-wow-duration="2s" data-wow-delay="1s" style="color: white ;font-size:38px ;font-family: 'Righteous', cursive; font-style: italic;">
          MENU GRID 02</h2> <br>
        <p class="text-center text-white wow bounceInLeft " data-wow-duration="2s" data-wow-delay="1.2s" style="font-size:30px;  font-style: italic;">The various dishes are waiting for your coming to enjoy its.</p>
  
      </div>
     </div>

    
      <section id="dish" class="container">

    <div class="heading text-center">
        <h1 class="text-center mt-5 wow bounceInLeft"  data-wow-duration="2s" data-wow-delay="0.5s" style="font-style: italic;">Our <span>Dishes</span></h1>
    </div>

    <div class="box-container">

        <div class="box">
            <img src="menu/dinner6.png" alt="">
            <div class="info">
                <h3>dish1</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil.</p>
                <a href="#"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="menu/dinner3.jpg" alt="">
            <div class="info">
                <h3>Dish2</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil.</p>
                <a href="#"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="menu/lunch4.jpg" alt="">
            <div class="info">
                <h3>Dish3</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil.</p>
                <a href="#"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="menu/dinner5.jpg" alt="">
            <div class="info">
                <h3>Dish4</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil.</p>
                <a href="#"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="menu/lunch22.jpg" alt="">
            <div class="info">
                <h3>Dish5</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil.</p>
                <a href="#"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="menu/lunch55.jpg" alt="">
            <div class="info">
                <h3>Dish6</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil.</p>
                <a href="#"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="menu/dinner3.jpg" alt="">
            <div class="info">
                <h3>Dish6</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil.</p>
                <a href="#"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="menu/dinner2.jpg" alt="">
            <div class="info">
                <h3>Dish6</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil.</p>
                <a href="#"><button>view</button></a>
            </div>
        </div>

    </div>

</section>

<!-- dish section ends  -->

<!-- dish section ends  -->
<section class="recipe_section">
   <div class="heading text-center">
        <h1 class="text-center mt-5 wow bounceInLeft"  data-wow-duration="2s" data-wow-delay="0.5s" style="font-style: italic;">You May <span>Also Like</span></h1>
    </div>
  <div class="container">
    <div class="row">

      <div class="col-4">
        <div class="image_wrapper">
          <img src="images/cat1.jpg">
          <div class="image_wrapper-text">
            <h5>Lunch</h5>
            <p>Quick & Healthy Lunch box Ideas for the week(Lunch box).</p>
          </div>  
        </div>
      </div>

      <div class="col-4">
        <div class="image_wrapper">
          <img src="images/cat2.jpg">
          <div class="image_wrapper-text">
            <h5>Dinner</h5>
            <p>Quick & Healthy dinner box Ideas for the week(Lunch box).</p>
          </div>  
        </div>
      </div>
      <div class="col-4">
        <div class="image_wrapper">
          <img src="images/cat3.jpg">
          <div class="image_wrapper-text">
            <h5>Dessert</h5>
            <p>Quick & Healthy dessert box Ideas for the week(dessert box).</p>
          </div>  
        </div>
      </div>
      
      
    </div>
    
  </div>
</section>
<!-- dish section ends  -->

<!-- dish section ends  -->
<div class="extra_section">
  <div class="heading text-center">
        <h1 class="text-center mt-5 wow bounceInLeft"  data-wow-duration="2s" data-wow-delay="0.5s" style="font-style: italic;">Check Out <span>Some Specila Food...</span></h1>
    </div>
  <div class="container">
    <div class="row">

      <div class="col-6">
        <div class="row no-gutters">
          <div class="col-md-4">
          <img src="images/food.jpg" class="image_responsive"> 
          </div>
          <div class="col-md-8 bg_dark text_light p-3">
            <h4>The Best Chicken Wings</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil. adipisicing elit. Quisquam, nihi</p>
            <div class="text-center">
              <div class="read-more"><a href="#">
                      <i class="fas fa-arrow-circle-right"></i>
                      Read More
                    </a></div>
            </div>
          </div>
        </div>  
      </div>

        <div class="col-6">
        <div class="row no-gutters">
          <div class="col-md-4">
          <img src="images/food.jpg" class="image_responsive"> 
          </div>
          <div class="col-md-8 bg_dark text_light p-3">
            <h4>The Best Chicken Wings</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil. adipisicing elit. Quisquam, nihi</p>
            <div class="text-center">
              <div class="read-more"><a href="#">
                      <i class="fas fa-arrow-circle-right"></i>
                      Read More
                    </a></div>
            </div>
          </div>
        </div>  
      </div>


    

    </div>
    <div>
      
  </div>
  </div>
</div>

<div class="extra_section">
  <div class="container">
    <div class="row">

      <div class="col-6">
        <div class="row no-gutters">
          <div class="col-md-4">
          <img src="images/food.jpg" class="image_responsive"> 
          </div>
          <div class="col-md-8 bg_dark text_light p-3">
            <h4>The Best Chicken Wings</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil. adipisicing elit. Quisquam, nihi</p>
            <div class="text-center">
              <div class="read-more"><a href="#">
                      <i class="fas fa-arrow-circle-right"></i>
                      Read More
                    </a></div>
            </div>
          </div>
        </div>  
      </div>

        <div class="col-6">
        <div class="row no-gutters">
          <div class="col-md-4">
          <img src="images/food.jpg" class="image_responsive"> 
          </div>
          <div class="col-md-8 bg_dark text_light p-3">
            <h4>The Best Chicken Wings</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil. adipisicing elit. Quisquam, nihi</p>
            <div class="text-center">
              <div class="read-more"><a href="#">
                      <i class="fas fa-arrow-circle-right"></i>
                      Read More
                    </a></div>
            </div>
          </div>
        </div>  
      </div>


    

    </div>
    <div>
      
  </div>
  </div>
</div><br><br>
<!-- dish section ends  -->



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
       <div class="seg1 mt-5 ml-2 animated zoomIn" style="animation-delay: 2s">
         <button class="btn4" ><a href="#">Order Now</a></button>
       </div>
           
      </div>

      <div class="col-4 ">
       <div class="seg2 mt-3 ml-5 wow bounceInRight" data-wow-duration="2s" data-wow-delay="1s">
          <img src="images/order3.png" style="height:auto ; width:auto ; margin-top:30px; margin-right:10px;" >
       </div>

      </div>

    </div>
  </div>
  </section>
<!-- order section ends  -->

       <!--footer start-->

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
                    <li><a href="#" style="color:#ff793f;" >ABOUT.......</a></li>
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
                    <h4 class="text-white pt-1" >Follow Us</h4>
                    <p class="text-white"> Please Follow us on our social Media Profile in order to keep updated.</p>
                    <a href="#"  style="padding-right: 8px ;color:white;"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" style="padding-right: 8px; color:white;"><i class="fab fa-twitter-square fa-2x"></i></a>
                    <a href="#"  style="padding-right: 8px; color:white;"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#" style="color:white;"><i class="fab fa-pinterest-square fa-2x"></i></a><br><br>

                    <form style="padding-top: 2px" >
                      <input type="email" class="footform" >
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
