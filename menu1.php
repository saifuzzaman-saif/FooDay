<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu 1</title>
   
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
   
    background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0.8,0.9)), url('images/bg5.jpg');
   height: 90vh;
   
   background-repeat: no-repeat;
   background-position: center;
   background-size: cover;
   background-attachment: fixed;
   
}

.text3{
    
    padding-top: 300px;
        
 }



 .reg {
    background:url('images/product2.jpg') ;
    width:100%;
    height: 100%;  
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    
   
}

.special{
   
    margin-top: 5%;
    width: 650px;
   
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


.variety{
    padding-bottom: 40px;

}
.variety .card{
    border: 0;
    padding: 0 10px;
    margin-bottom: 40px;
    position: relative;
    background: transparent;

}
.variety .card img{
    
    margin-left:-10px ;
    overflow: hidden;
    z-index: 9;
    border-radius: 0;
    box-shadow: 0px 7px 10px rgba(0,0,0,.5);
}
.variety  .card img{
    max-width:100% ;
    transition:all 0.3s ease-in-out ;

}
.variety .card-body{
    z-index: 10;
    background-color:rgb(255, 121, 63,.5);
    border-top: 4px solid rgb(205, 97, 51);
    padding: 17px;
    width: 264px;
    height: 200px;
    box-shadow: 0px 2px 15px (241,159,5,0.5);
    margin-top: -60px;
    transition: 0.3s;

}
.variety .card-body p {
    font-weight: bold;
}
.variety .card-body h2 {
    font-weight: bold;
}

.variety .card-title{
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
}
.variety .card-title a{
    color: #000;
    transition: 0.3s;

}
.variety .read-more{
    color: #000;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 12px;
    transition: 0.3s;
    margin-top: 5px;
}
.variety .read-more a:hover{
    color:black;
    

}
.variety .card:hover img{
    transform: scale(1.1);

}
.variety .card:hover .card-body{
    border-color: #fdc134;
}
.variety .card:hover .card-body .card-title a{
    color: #854101;
}


.product{
    padding-bottom: 40px;

}
.product .card{
    width: 280px;
    height: 360px;
    padding: 2rem 1rem;
    background: #fff;
    display: flex;
    align-items: flex-end;
    box-shadow: 0px 7px 10px rgba(0,0,0,.5);
    transition: .5s all;
    position: relative;
}

.product .card img{
    
    position: absolute;
    top:0;
    left:0;
    object-fit: cover;
    width: 100%;
    height: 100%;
}
.product .card:hover{
    transform:translateY(20px);

}
.product .card:before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height:  100%;
    display: block;
    background: linear-gradient( to bottom, rgb(214, 48, 49,.4),rgb(214, 48, 49,.3));
    z-index:2;
    transition: 0.5s;
    opacity: 0;
}
.product .card:hover:before{
    opacity: 1;
}
.product .card .card-body{
    position: relative;
    z-index: 3;
    opacity: 0;
    color: #fff;
    transform: translateY(30px);
    transition: 0.5s;
}
.product .card:hover .card-body{
    opacity: 1;
    transform:translateY(0px);
}
.product .card .card-body h5{
    font-weight: 400;
    margin: 0;
    color: rgb(214, 48, 49,.8);

}

.product .card .card-body .btn{
    text-decoration: none;
    padding: .5rem 1rem;
    color:orange;
    font-weight: 400;
    cursor: pointer;
    font-size: 14px;
    background-color: #fff;

}

.product .card .card-body .btn:hover{
    box-shadow: 0px 7px 10px rgb(0,0,0,0.9);

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

 <!--head page start-->
     

         <div class="back_img1">
      <div class="text3">
        <h2 class="text-center wow bounceInDown " data-wow-duration="2s" data-wow-delay="1s" style="color: white ;font-size:38px ;font-family: 'Righteous', cursive; font-style: italic;">
          MENU GRID 01</h2> <br>
        <p class="text-center text-white wow bounceInLeft " data-wow-duration="2s" data-wow-delay="1.2s" style="font-size:30px;  font-style: italic;">The various dishes are waiting for your coming to enjoy its.</p>
  
      </div>
     </div>

      <!--head page end-->

      

       <!---variety start-->
       <section id="variety " class="variety pt-5">
         <div class="container">
           <div class="section-title">
             <h2 class="text-center font-weight-bold wow bounceInLeft"  data-wow-duration="2s" data-wow-delay="0.5s" style="font-style: italic;">Categories</h2>
             <p class="text-center font-weight-bold pt-2 pb-3 wow bounceInRight" data-wow-duration="2s" style="font-size: 25px ;color:rgb(255, 121, 63);font-style: italic;"> Enjoy Your FOOD</p>
           </div>
           <div class="row">

            <div class=" col-sm-12 col-md-6 col-lg-4">
              <div class="card border-0 transform-on-hover">
                <img src="images/product-2e.jpg" class="img-fluid" alt="Responsive image"  style="height: 225px; width: 292px;">
                <div class="card-body">
                  <h5> Fish Vegetable</h5>
                  <p class="card-text"> unlimited vacation possibilities to explore and experience an unforgettable trip to Japan. 
                   .</p>
                    <div class="read-more"><a href="#">
                      <i class="fas fa-arrow-circle-right"></i>
                      Read More
                    </a></div>
                </div>
              </div>
            </div>


            <div class=" col-sm-12 col-md-6 col-lg-4">
              <div class="card border-0 transform-on-hover">
                <img src="images/product-2k.jpg" class="img-fluid" alt="Responsive image"  style="height: 225px; width: 292px;">
                <div class="card-body">
                  <h5> Fish Curry</h5>
                  <p class="card-text"> unlimited vacation possibilities to explore and experience an unforgettable trip to Japan. 
                   </p>
                    <div class="read-more"><a href="#">
                      <i class="fas fa-arrow-circle-right"></i>
                      Read More
                    </a></div>
                </div>
              </div>
            </div>

            
            <div class=" col-sm-12 col-md-6 col-lg-4">
              <div class="card border-0 transform-on-hover">
                <img src="images/product-2c.jpg" class="img-fluid" alt="Responsive image"  style="height: 225px; width: 292px;">
                <div class="card-body">
                  <h5> Slad SOuce</h5>
                  <p class="card-text"> unlimited vacation possibilities to explore and experience an unforgettable trip to Japan. 
                    .</p>
                    <div class="read-more"><a href="#">
                      <i class="fas fa-arrow-circle-right"></i>
                      Read More
                    </a></div>
                </div>
              </div>
            </div>

            <div class=" col-sm-12 col-md-6 col-lg-4">
              <div class="card border-0 transform-on-hover">
                <img src="images/product-2d.jpg" class="img-fluid" alt="Responsive image"  style="height: 225px; width: 292px;">
                <div class="card-body">
                  <h5> Lamb Stack</h5>
                  <p class="card-text"> unlimited vacation possibilities to explore and experience an unforgettable trip to Japan. 
                   .</p>
                    <div class="read-more"><a href="#">
                      <i class="fas fa-arrow-circle-right"></i>
                      Read More
                    </a></div>
                </div>
              </div>
            </div>

            <div class=" col-sm-12 col-md-6 col-lg-4">
              <div class="card border-0 transform-on-hover">
                <img src="images/product-2f.jpg" class="img-fluid" alt="Responsive image"  style="height: 225px; width: 292px;">
                <div class="card-body">
                  <h5> Beef Katelet</h5>
                  <p class="card-text"> unlimited vacation possibilities to explore and experience an unforgettable trip to Japan. 
                   </p>
                    <div class="read-more"><a href="#">
                      <i class="fas fa-arrow-circle-right"></i>
                      Read More
                    </a></div>
                </div>
              </div>
            </div>
            <div class=" col-sm-12 col-md-6 col-lg-4">
              <div class="card border-0 transform-on-hover">
                <img src="images/product-2l.jpg" class="img-fluid" alt="Responsive image"  style="height: 225px; width: 292px;">
                <div class="card-body">
                  <h5> Slad SOuce</h5>
                  <p class="card-text"> unlimited vacation possibilities to explore and experience an unforgettable trip to Japan. 
                   </p>
                    <div class="read-more"><a href="#">
                      <i class="fas fa-arrow-circle-right"></i>
                      Read More
                    </a></div>
                </div>
              </div>
            </div>
                
           </div>
         </div>
       </section>
       

  <!---category end-->

  <!---product start-->
  <scection id="product" class="product pt-6">
    <div class="container">
      <div class="section-title">
        <h2 class="text-center font-weight-bold pb-4 wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0.5s" style="color:rgb(255, 121, 63); letter-spacing: .1rem;font-style: italic;">Take Away</h2>
      </div>
      <div class="row">


        <div class=" col-sm-12 col-md-6 col-lg-4 mx-auto">
          <div class="card border-0 transform-on-hover">
            <img src="images/pro3.jpg" class="img-fluid" alt="Responsive image" >
            <div class="card-body">
              <h5> Slad SOuce</h5>
              <p class="card-text"> unlimited vacation possibilities to explore and experience an unforgettable trip to Japan. 
               .</p>
                <a href="#" class="btn">ORDER NOW</a>
            </div>
          </div>
        </div>

        <div class=" col-sm-12 col-md-6 col-lg-4 mx-auto">
          <div class="card border-0 transform-on-hover">
            <img src="images/pro1.jpg" class="img-fluid" alt="Responsive image" >
            <div class="card-body">
              <h5> Slad SOuce</h5>
              <p class="card-text"> unlimited vacation possibilities to explore and experience an unforgettable trip to Japan. 
               .</p>
               <a href="#" class="btn">ORDER NOW</a>
            </div>
          </div>
        </div>

        <div class=" col-sm-12 col-md-6 col-lg-4 mx-auto">
          <div class="card border-0 transform-on-hover">
            <img src="images/pro2.jpg" class="img-fluid" alt="Responsive image" >
            <div class="card-body">
              <h5> Slad SOuce</h5>
              <p class="card-text"> unlimited vacation possibilities to explore and experience an unforgettable trip to Japan. 
               .</p>
               <a href="#" class="btn">ORDER NOW</a>
            </div>
          </div>
        </div>

      </div>

      

    </div>
  </scection><br><br><br>


       <!---product end-->
       <!---product end-->

    <div class="reg mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <img class="  special"data-wow-duration="3s" data-wow-delay="0.1s" src="images/product1.jpg" alt="">

                </div>
                <div class="col-lg-4 " >
                    <div class="menu3 " >
                        <h1 class="daily text-center wow bounceIn" style="color: rgb(255, 121, 63);margin-top: 30px;">
                            Daily Special</h1>
                        <!--Products item class item1-->
                        <div class="row item1 ">
                            <div class="col-4 ">
                                <img class="mt-3 wow bounceInRight " data-wow-duration="2s" data-wow-delay="0.1s" src="images/producte.jpg" alt=""
                                    style="border-radius: 50%;">

                            </div>
                            <div class="col-8">

                                <p class="mt-4 wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.2s" style="color: #fff; font-size: 18px;">The
                                    Cracker Barrel's Country.......<span style="color: rgb(255, 121, 63);">$25</span>
                            </div>
                            <div class="col-4 ">
                                <img class="mt-3 wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.3s" src="images/producta.jpg" alt=""
                                    style="border-radius: 50%;">

                            </div>
                            <div class="col-8">

                                <p class="mt-4 wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.4s" style="color: #fff; font-size: 18px;">The
                                    Cracker Barrel's Country.......<span style="color: rgb(255, 121, 63);">$25</span>
                            </div>
                            <div class="col-4 ">
                                <img class="mt-3  wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.5s" src="images/productb.jpg" alt=""
                                    style="border-radius: 50%;">

                            </div>
                            <div class="col-8">

                                <p class="mt-4 wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.6s" style="color: #fff; font-size: 18px;">The
                                    Cracker Barrel's Country.......<span style="color: rgb(255, 121, 63);">$25</span>
                            </div>
                            <div class="col-4 ">
                                <img class="mt-3  wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.7s" src="images/productc.jpg" alt=""
                                    style="border-radius: 50%;">

                            </div>
                            <div class="col-8">

                                <p class="mt-4 wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.8s" style="color: #fff; font-size: 18px;">The
                                    Cracker Barrel's Country.......<span style="color: rgb(255, 121, 63);">$25</span>
                            </div>
                            <div class="col-4 ">
                                <img class="mt-3  wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.9s" src="images/productd.jpg" alt=""
                                    style="border-radius: 50%;">

                            </div>
                            <div class="col-8">

                                <p class="mt-4 wow bounceInRight" data-wow-duration="2s" data-wow-delay="1s" style="color: #fff; font-size: 18px;">The
                                    Cracker Barrel's Country.........<span style="color: rgb(255, 121, 63);">$25</span>
                            </div>
                            

                        </div>
                        <!-- item1 ends here-->

                    </div>

                </div>
            </div>
        </div>
    </div><br><br><br>
       <!---product end-->


  <!---product start-->
  <scection id="product" class="product pt-6">
    <div class="container">
      <div class="section-title">
        <h2 class="text-center font-weight-bold pb-4 wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0.5s" style="color:rgb(255, 121, 63); letter-spacing: .1rem; font-style: italic;">Take Away With Discount </h2>
      </div>
      <div class="row">


        <div class=" col-sm-12 col-md-6 col-lg-4 mx-auto">
          <div class="card border-0 transform-on-hover">
            <img src="images/pro6.jpg" class="img-fluid" alt="Responsive image" >
            <div class="card-body">
              <h5> Slad SOuce</h5>
              <p class="card-text"> unlimited vacation possibilities to explore and experience an unforgettable trip to Japan. 
               .</p>
                <a href="#" class="btn">ORDER NOW</a>
            </div>
          </div>
        </div>

        <div class=" col-sm-12 col-md-6 col-lg-4 mx-auto">
          <div class="card border-0 transform-on-hover">
            <img src="images/pro5.jpg" class="img-fluid" alt="Responsive image" >
            <div class="card-body">
              <h5> Slad SOuce</h5>
              <p class="card-text"> unlimited vacation possibilities to explore and experience an unforgettable trip to Japan. 
               .</p>
               <a href="#" class="btn">ORDER NOW</a>
            </div>
          </div>
        </div>

        <div class=" col-sm-12 col-md-6 col-lg-4 mx-auto">
          <div class="card border-0 transform-on-hover">
            <img src="images/pro4.jpg" class="img-fluid" alt="Responsive image" >
            <div class="card-body">
              <h5> Slad SOuce</h5>
              <p class="card-text"> unlimited vacation possibilities to explore and experience an unforgettable trip to Japan. 
               .</p>
               <a href="#" class="btn">ORDER NOW</a>
            </div>
          </div>
        </div>

      </div><br><br><br>

      
   <!-- order section starts  -->
<section id="preorder" class="preorder" style="width: 100%, height:100%">
  <div class="container" style="width: 100%, height:100%">
    <div class="row">

      <div class="col-4 ">

        <div class="mt-5 ml-2 wow bounceInLeft " data-wow-duration="2s" data-wow-delay="1s">
          <img src="images/order5.png" style="height:auto ; width:auto ;"> 
        </div>
      </div>

      <div class="col-4">
       <div class="seg1 mt-5 ml-2 animated zoomIn" style="animation-delay: 2s">
         <button class="btn4" ><a href="reservation.php">Order Now</a></button>
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

    </div>
  </scection>


       <!---product end-->



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