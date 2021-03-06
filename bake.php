<!DOCTYPE html>
<html>
<title>Kopal Sharma-voice over n baker</title>
<meta charset="UTF-8">
<link rel="icon" href="girl.jpg" width="300px" height="300px">
<meta name="viewport" content="width=service-width, initial-scale=1">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cnp.css">
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="parallax.min.js"></script>
<link  rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"  />
<style>
 

body, h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
row-padding img {margin-bottom: 12px}

html{
		scroll-behavior:smooth;
		}

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
.sidebar{height:100%;width:300px;background-color:#fff;position:fixed!important;z-index:1;overflow:auto}

    li.cdcb {
    	 background-color:#ffb6c1;
    	 color:white;
    	 font-size:30px;
    	 font-weight:bolder;

     }
 

  .photos{
    cursor:pointer;
    opacity:1;
  }
  li{
    list-style-type:none;
  }

  *{

    font-family: 'lato',sans-serif;
    }

    nav{
    background: transparent;
    padding:0.1px;
          font-family:lato;


    }
    nav ul{
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    align-items: right;
    justify-content: center;
    color:black;
    margin-left:150px;
    font-weight:500;

    }

    nav ul li{
    padding: 1px 0;
    cursor: pointer;
    color:black;
    font-family:lato;
    }
    nav ul li.items{
    position: relative;
    width: auto;
    margin: 0 10px;
    text-align: center;
    order: 2;
    color:black;

    }



    nav ul li.items:after{
    position: absolute;
    content: '';
    left: 0;
    bottom: 10px;
    height: 4px;
    width: 100%;
    background:pink;
    opacity: 0;
    transition: all 0.2s linear;
    border-radius:25px;
    }
    nav ul li.items:hover:after{
    opacity: 0.8;
    bottom: 0px;
    }
    nav ul li.logo{
    flex: 1;
    color: #f6f6f6;
    font-size: 1.5vw;
    font-weight: 900;
    cursor: default;
    user-select: none;
    font-family:segoe print;
    opacity:1;
    margin-top:10px;
    z-index:3;
    }

    nav ul li.logos{
    flex: 1;
    color: #f6f6f6;
    font-size:3vw;
    font-weight: 900;
    cursor: default;
    user-select: none;
    font-family:segoe print;
    opacity:1;
    margin-top:10px;
    }

    nav ul li a{
    color: black;
    font-size: 18px;
    text-decoration: none;
    transition: .4s;


    }
    nav ul li:hover a{
    color: pink;
    z-index:1;
    font-size:18px;
    }
    nav ul li i{
    font-size: 50px;
    }
    nav ul li.btn{
    display: none;
    color:black;
    }
    nav ul li .btn i:before{
		  content: '\f00d';
      z-index: 3;
      margin-left:-30px;
      background-color: #000;
      opacity: 1;
		}
    @media all and (max-width: 994px){
    nav{
    padding: 5px 30px;
    margin-left:-30vw;
    float:left;
    text-align: left;
    }
    nav ul li.items{
    width: 65%;
    display: none;
    }
    nav ul li.items.show{
    display: block;
    }
    nav ul li.btn{
    display: block;
    }
    nav ul li.items:hover{
    border-radius: 5px;
    box-shadow: inset 0 0 5px pink,
          inset 0 0 10px pink;
    }
    nav ul li.items:hover:after{
    opacity: 0;
    }
    }
    .shadow{
      box-shadow:0 2px 2px 0 rgba(0,0,0,0.1);
    }
    .button{
      opacity:1;
    }

    .marqueecard {
 position: relative;
 width: 80vw;
 max-width: 100%;
 height: 400px;
overflow-y: hidden;
overflow-x: hidden;
}

.trackcard {
position: relative;
will-change: transform;
animation: marqueecard 10s linear infinite;
}

@keyframes marqueecard {
from { transform: translateY(0); }
to { transform: translateY(-50%); }
}

.track {
  position: absolute;
  white-space: nowrap;
  will-change: transform;
  animation: marquee 25s linear infinite;
}

@keyframes marquee {
  from { transform: translateX(-50%); }
  to { transform: translateX(0%); }
}

#con{
  border-radius:20px;
  height:20vw;
  color:#333;
  padding:20px;
  background: #ffb6c1;
  opacity:0.9;
  display:none;
  border: solid 15px rgba(0,0,0,0.1);

}

#conm{
  border-radius:20px;
  color:#333;
  padding:20px;
  background: #ffb6c1;
  opacity:0.9;
  display:none;
  border: solid 15px rgba(0,0,0,0.1);
  font-size: 15px;
  margin-left:-50px;

}
.d:hover{
  box-shadow: 0px 0 12px 2px rgba(0,0,0,0.2);

}

.w:hover{
  text-decoration:underline;
  color: #000;
}

.w :active{
  color:#000;
}

.inc{
  display:none;margin-left:15vw;position:absolute;margin-top:10px;
}

.inc2{
  display:none;margin-left:15vw;position:absolute;margin-top:60px;
}
.menu-txt{
  display:none;margin-left:-15vw;margin-top:2vw;
}
.dec{
  display:none;margin-left:20vw;position:absolute;margin-top:10px;
}
.dec2{
  display:none;margin-left:20vw;position:absolute;margin-top:60px;
}

.menu-input{
  width:40px;
  position:absolute;
  border-radius:10px;
  display:none;
  margin-left:11vw;
  margin-top:1.1vw;
  padding:0px 0px 0px 5px;
  border: none;
}

.menu-input2{
  scroll:hidden;
  width:40px;
  position:absolute;
  border-radius:10px;
  display:none;
  margin-left:11vw;
  margin-top:4.1vw;
  padding:0px 0px 0px 5px;
  border:none;
}

.gall-img{
  width:100%;position: relative;
  padding-bottom: 15px;
}

.contact-img{
  border:solid 10px pink ;
  padding:2px;
  cursor:pointer;
  margin-right:4vw;
  border-radius:200px;z-index:2;

}
.w{
  margin-left: 15px;
  }

.p{
  margin-top:200px;
  padding-left: 10px;
}
.cont{
  border-radius:5px;
  border-width:10px;
  z-index:1;
  margin-top:-10px;
  opacity:1;
}
.btn:hover{
    border-radius: 5px;
    box-shadow: inset 0 0 5px pink,
          inset 0 0 10px pink;

    }
    .btn{
    width: 400%;
    text-align :left;
    margin-left: -46px;

    }
    .order-btn{
      margin-right:-50px;text-align:center;width:28%;border-radius:20px;
    }
    

@media (max-width:994px){

  .gall-img{
  width:48%;position: relative;
  }

  .inc{
    margin-left: 45vw !important;
    display:none;
    position:absolute;
    margin-top:0px;
    font-size: 10px;;
  }


  .inc2{
    margin-left: 45vw !important;
    display:none;
    position:absolute;
    margin-top:30px;
    font-size: 10px;
  }

  .menu-txt{
  display:none;
  margin-left:43vw;
  margin-top:5vw;
  font-size:10px;
}

  .dec{
    display:none;
    margin-left:35vw;
    position:absolute;
    margin-top:0px;
    font-size:10px;
  }
  .dec2{
    display:none;
    margin-left:35vw;
    position:absolute;
    margin-top:30px;
    font-size:10px;
  }

  .menu-input{
  width:30px;
  position:absolute;
  border-radius:10px;
  display:none;
  margin-left:27vw;
  margin-top:2vw;
  padding:0px 0px 0px 5px;
  border: none;
  font-size:12px;
}

.menu-input2{
  scroll:hidden;
  width:30px;
  position:absolute;
  border-radius:10px;
  display:none;
  margin-left:27vw;
  margin-top:10vw;
  padding:0px 0px 0px 5px;
  font-size:12px;

}

img.contact-img{
  height:70px;
  width: 70px;
  border:solid 10px pink ;
  padding:2px;
  cursor:pointer;
  margin-right:8vw;
  border-radius:200px;
  z-index:2;

}
.cont{
  border-radius:5px;
  border-width:10px;
  z-index:1;
  margin-top:-10px;
  opacity:1;

}
.profile{
  width:180px;
  height:180px;
}

.marquee {
  position: relative;
  width: 75vw;
  height: 200px;
  overflow-x: hidden;
}
.order-btn{
  font-size:10px;
  text-align: center;
}

}

.marquee {
  position: relative;
  width: 92vw;
  max-width: 150%;
  height: 200px;
  overflow-x: hidden;
}
</style>

<body>

	<div  class="c hide-small cont large text-grey ">
	<img src="profile.png" id="contactimage" class="d contact-img " onclick="contact()" height="90px" width="90px" >
  <div class="card dim" id="con" >
    <h3 style="text-align:center">Contact Me</h3>
    <span class="w"> <img src="wa.png"  width="80px" height="40px" style="margin-left: -2vw;"> 9670150898</span><br><br>
    <span class="p"><img src="mail.png"  width="50px" height="25px" style="padding-right: 20px;"> dd@gmail.com<br><br></span>
    <span class="p"> <img src="phone.png"  width="30px" height="40px" style="margin-right: 21px;"> 9670150898</span>
  </div>
</div>
  <script>
    function contact(){
      var ele = document.getElementById("con");
      if(ele.style.display==="none"){
        ele.style.display="block";
      }
      else{
        ele.style.display="none";
      }
    }
  </script>


<div  class="c hide-large cont large text-grey " >
	<img src="profile.png" id="contactimage" class="d contact-img " onclick="contactm()" >
  <div class="card  padding-16" style="display:none;" id="conm" >
    <h3 style="text-align:center">Contact Me</h3>
    <span class="w"> <img src="wa.png"  width="80px" height="40px" style="margin-left: -5vw;"> 9670150898</span><br><br>
    <span class="p"><img src="mail.png"  width="50px" height="25px" style="padding-right: 20px;"> dd@gmail.com<br><br></span>
    <span class="p"> <img src="phone.png"  width="30px" height="40px" style="margin-right: 21px;"> 9670150898</span>
  </div>
</div>
  <script>
    function contactm(){
      var ele = document.getElementById("conm");
      if(ele.style.display==="none"){
        ele.style.display="block";
      }
      else{
        ele.style.display="none";
      }
    }
  </script>


  <!-- Navbar (sit on top) -->
  <div class="w3-top">
 <div class="bar" id="myNavbar" >

	 	 <nav style="margin-top:-1px;">
      <ul>
<li class="items  hide-small hide-medium"><a href="#home" ><i class="fa fa-home" style="letter-spacing:2px;"></i>HOME</a></a></li>
<li class="items  hide-small hide-medium"><a href="#about "><i class="fa fa-user" style="letter-spacing:2px;"></i>MENU</a></a></li>
<li class="items  hide-small hide-medium"><a href="#portfolio "><i class="fa fa-th" style="letter-spacing:2px;"></i>GALLERY</a></a></li>
<li class="items  hide-small hide-medium"><a href="#contact " ><i class="fa fa-envelope" style="letter-spacing:2px;"></i>CONTACT</a></li>


  <div class=" hide-large"  id="myNavbar">
    <a class="  hide-large hover-text-pink  " style="margin-left: -60px;text-decoration:none;margin-top:-9px;" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      Home <i class="fa fa-caret-down hide-large hide-medium" ></i>
    </a>
    <a href="#home" class="bar-item  hide-small" >HOME</a>
    <a href="#about" class="bar-item button hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#portfolio" class="bar-item button hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
    <a href="#contact" class="bar-item button hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" style="margin-left: -60px;" class="margin bar-block hide hide-large hide-medium">
    <a href="#about"  class=" btn hover-text-pink" style="margin-top:20px" onclick="toggleFunction()">ABOUT</a><br>
    <a href="#portfolio"  class=" btn hover-text-pink" onclick="toggleFunction()">PORTFOLIO</a><br>
    <a href="#contact" class=" btn hover-text-pink" onclick="toggleFunction()">CONTACT</a>
 
</div>
</div>  
  </div>

 

  <!-- Sidebar with image
   --><nav class="sidebar hide-medium hide-small" style="width:40%;overflow:hidden;">
<div id="slider" class="bgimg-11 hide-small">


  <figure id="top">
  <img src="mike.jpeg"   id="home" alt="text" style="background-attachment:fixed";>
  <img src="full.jpg"   id="home"  alt="design" style="background-attachment:fixed";>
  <img src="gems.jpg"   id="home" alt="design" style="background-attachment:fixed";>
  <img src="choco.jpg"   id="home" alt="design" style="background-attachment:fixed";>
  <img src="mike.jpeg"   id="home" alt="design" style="background-attachment:fixed";>
  </figure>

   </div>


   <div><hr style="z-index:6"></div>




  <div class="display-middle">
   <div class="card padding black right card-animation opacity" style="opacity:0.8;height:90px;width:300px;border-radius:8px;color:white;font-size:12px;overflow:hidden;">
    <a href="https://www.syfy.com/syfywire/master-po-full-sensei-kung-fu-panda-paws-of-destiny-trailer" target="blank"><p><img src="orange.jpg" height="70px" width="70px" style="float:left;margin-left:-10px;margin-top:-10px;margin-right:15px">Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt<br>ut labore et dolore magna aliqua. <br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p></a>
  </div>
   </div>

   <div class="display-middle" >
   <div class="card padding  black right card-animation2 opacity" style="opacity:0.8;height:90px;width:300px;border-radius:8px;color:white;font-size:12px;overflow:hidden;">
     <a href="https://www.syfy.com/syfywire/master-po-full-sensei-kung-fu-panda-paws-of-destiny-trailer" target="blank"><p><img src="mike.jpeg" height="70px" width="70px" style="float:left;margin-left:-10px;margin-top:-10px;margin-right:15px">Some2 text2 about2 me2. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p></a>
   </div>
   </div>

   <div class="display-middle" >
   <div class="card padding  black right card-animation3 opacity" style="opacity:0.8;height:90px;width:300px;border-radius:8px;color:white;font-size:12px;overflow:hidden;">
     <a href="https://www.syfy.com/syfywire/master-po-full-sensei-kung-fu-panda-paws-of-destiny-trailer" target="blank"><p><img src="orange.jpg" height="70px" width="70px" style="float:left;margin-left:-10px;margin-top:-10px;margin-right:15px">Some2 text2 about2 me2. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<p></a>
   </div>
   </div>

   <div class="display-middle" >
   <div class="card padding  black right card-animation4 opacity" style="opacity:0.8;height:90px;width:300px;border-radius:8px;color:white;font-size:12px;overflow:hidden;">
     <a href="https://www.syfy.com/syfywire/master-po-full-sensei-kung-fu-panda-paws-of-destiny-trailer" target="blank"><p><img src="mike.jpeg" height="70px" width="70px" style="float:left;margin-left:-10px;margin-top:-10px;margin-right:15px">Some2 text2 about2 me2. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p></a>
   </div>
   </div>



   <div class="display-middle">

     <script>
     $(document).ready(function(){
     $("button").click(function(){
      $("p").removeClass("card-animation-vertical");

     });
     });
     </script>





   <div class="card padding stop black opacity" id="stop" style="height:400px;width:550px;overflow:hidden;margin-top:-150px;">


   <input class="stopanimate" type="submit" value="Click to stop" style="color:#f6f6f6;cursor:pointer;border-radius:20px;background-color:#000000;padding:2px;height:25px;width:100px;margin-left:400px;font-size:12px;"> 
  <script>
    $(document).ready(function(){
      $("input").click(function(){
        $("div").removeClass("trackcard");

      });
    });
  </script>

  <div class="marqueecard " style="overflow:hidden">
    <div class="trackcard" style="overflow:hidden">

  	<p ><img src="arrow.png"  style="float:left" height="40px" width="40px" >Some textabout m.Some2 text2 about2 me2. Some text about commodo .Some text about commodotext2 about2 me2.Some2 text2 about2 me2. Some  commodo</img></p><br>
  	<p><img src="arrow.png" style="float:left"  height="40px" width="40px" >Some2 text2 about2 me2.Some2 text2 about2 me2. Some text about commodo .Some text about commodo</img></p><br>
  	<p ><img src="arrow.png" style="float:left"  height="40px" width="40px" >Some2 text2 about2 me2.Some2 text2 about2 me2. Some text about commodo .Some text about commodo</img></p><br>
  	<p ><img src="arrow.png" style="float:left" height="40px" width="40px" >Some2 text2 about2 me2.Some2 text2 about2 me2. Some text about commodo .Some text about commodo</img></p><br>
  	<p ><img src="arrow.png" style="float:left"  height="40px" width="40px" >Some2 text2 about2 me2.Some2 text2 about2 me2. Some text about commodo .Some text about commodo</img></p><br>
  	<p ><img src="arrow.png"  style="float:left"  height="40px" width="40px" >Some2 text2 about2 me2.Some2 text2 about2 me2. Some text about commodo .Some text about commodo</img></p><br>
    

  </div>
  </div>

  </div>

  </div>

    </nav>

  <!-- Hidden Sidebar (reveals when clicked on menu icon)-->
  <nav class="sidebar  animate-left xxlarge" style="margin-right:60%;display:none;padding-top:150px;right:0;z-index:2;background-color:#ffe4e1" id="mySidebar">
    <a href="javascript:void(0)" onclick="closeNav()" id="remove" class="button  xlarge display-topright" style="padding:0 12px;background-color:#ffe4e1">
      <i class="fa fa-remove" ></i>
    </a>

    <div class="bar-block left  " style="margin-top:-4vw;margin-left:100px;">
      <a href="bake n play.html" target="post" style="text-decoration: none;"> 	<img src="girl.jpg" height="200vw" width="300vw" class=" hover-shadow center margin-top hide-small hide-medium " ><img src="girl.jpg" height="100vw" width="150vw" class="  hide-large  " style="margin-left: -20vw;margin-top:-10vw" ><h4 style="color:grey" class="w hide-small hide-medium">Kopal Sharma Voiceover Artist</h4><p style="font-size:10px;color:grey;text-align: center;margin-left: -20vw;" class="hide-large">Kopal Sharma Voiceover Artist</p></img></a>
  </div><br>
  <div class=" bar-block  m6 hide-medium hide-small " style="margin-top:-4vw;margin-left:4vw;">
      <a href="#home" class=" hide-small hide-medium button text-grey side" >Home</a><br>
      <a href="#portfolio" class=" hide-small hide-medium button text-grey side">Portfolio</a><br>
      <a href="#contact" class=" hide-small hide-medium button text-grey side" >Contact</a><br>

    </div>

 

  <hr style="margin-top:5vw" class="hide-small hide-medium">
  <hr class="hide-large"  style="margin-top:15vw">


    <div class="bar-block left hide-small " style="margin-top:1vw;margin-left:100px;">
    <a href="bake.html" target="post" style="text-decoration: none;" class=""> 	<img src="bk.jpg" height="200vw" width="300vw" class=" hover-shadow hide-small hide-medium center card margin-top" ><h4 style="color:grey" class="w hide-small hide-medium" >Kopal Sharma Home Baker</h4><img src="bk.jpg" height="100vw" width="150vw" class="  hide-large  " style="margin-left: -20vw;margin-top:10vw" ><p style="font-size:10px;color:grey;text-align: center;margin-left: -20vw;" class="hide-large">Kopal Sharma Voiceover Artist</p></img></a></img></a>
  </div><br>
  <div class=" bar-block hide-medium hide-small m6 " style="margin-top:1vw;">
      <a href="#portfolio" class=" button text-grey side" >Home</a><br>
      <a href="#portfolio" class=" button text-grey side" >Menu</a><br>
      <a href="#contact" class="button text-grey side" >Order</a><br>


    </div>
  </nav>



  <nav class="sidebar  animate-left " style="margin-right:0%;display:none;right:0;z-index:2;background-color:#ffe4e1" id="mySidebar2">

    <a href="javascript:void(0)" onclick="closeNav2()" id="remove" class="  xlarge display-topright" style="background-color:#ffe4e1">
      <i class=" fa fa-remove margin-right btn" style="width:50px"></i>
    </a>


    <div class="bar-block left  " style="margin-left:100px;margin-top:10vw">
      <a href="bake n play.html" target="post" style="text-decoration: none;" class=""><img src="girl.jpg" height="120vw" width="150vw" class="  hide-large margin-right " style="margin-top:15vw;margin-left:-15vw" ><p style="font-size:10px;color:grey;text-align: center;margin-left: -20vw;" class="hide-large">Kopal Sharma Voiceover Artist</p></img></a>
    <div class=" bar-block m6 " style="font-size:20px; margin-top: -42.5vw;z-index: -1;">
        <a href="#portfolio" class=" button text-grey medium side"  style="margin-left: 29vw;">Home</a><br>
        <a href="#portfolio" class=" button text-grey medium side" style="margin-left: 29vw;">Demo</a><br>
        <a href="#contact" class="  button text-grey side medium" style="margin-left: 29vw;">Contact</a><br>
  
      </div>

      </div>
  
      

  <div class="bar-block left  " style="margin-left:100px;margin-top:26vw">
    <a href="bake.php" target="post" style="text-decoration: none;" class=""> <img src="bk.jpg" height="120vw" width="150vw" class="  hide-large margin-right " style="margin-top:-5vw;margin-left:-15vw" ><p style="font-size:10px;color:grey;text-align: center;margin-left: -20vw;" class="hide-large">Kopal Sharma Home Baker</p></img></a>
  <div class=" bar-block m6 " style="font-size:20px; margin-top: -42.5vw;z-index: -1;margin-left: 29vw;">
      <a href="#portfolio" class=" button text-grey medium side"  >Home</a><br>
      <a href="#portfolio" class=" button text-grey medium side" >Menu</a><br>
      <a href="#contact" class="  button text-grey side medium" >Order</a><br>


    </div>
  </nav>


  <!-- Page Content -->
  <div class="main " style="margin-left:40%;" id="main">

    <!-- Menu icon to open sidebar -->
    <span class=" items w3-top  text-black  hide-small hide-medium"  style="right:0;width: auto;" onclick="openNav()"><i class="fa fa-bars hover-text-pink  margin-right margin-top" style="color:black" ></i></span>
    <span class=" items w3-top  text-black  hide-large" style="right:0%;width:50px;top:3%" onclick="openNav2()"><i class="fa fa-bars hover-text-pink hide-large" style="cursor:pointer;font-size:15px;margin-top:-10px;color:black" ></i></span>
    <!-- Header -->

    <div class="about" id="mySidenav"style="z-index: 0;">
  	<div class="fixed hide-small " >

  	<a href="https://www.facebook.com/webkitjockey-101988874891432" target="_blank"><img alt="design" src="fb.png" height="30px" width="30px" style="border-radius:5px" ></a>

  	</div>
  	<div class="fixeda hide-small ">
  	<a href="https://www.instagram.com/?hl=en" target="_blank"><img  src="insta2.jpg" alt="design" width="30px" height="30px" style="border-radius:10px"></a>
  	</div>
  	<div class="fixedb hide-small ">
  	 <a href="https://twitter.com/Divyans84773603" target="_blank"><img  src="tweet.png" alt="design" width="30px" height="30px" style="border-radius:10px"></a>
  	</div>
  	<div class="fixedc hide-small ">
  		<a href="snapcodeBitmoji.svg" target="blank"><img  src="snapchat.png" width="30px" alt="design" height="30px" style="border-radius:10px"></a>





  	</div>
  	</div>
  	<script>

  	$(document).ready(function() {
  	  $(window).scroll(function() {
  		if ($(document).scrollTop() > 300) {
  		  $('.about').addClass('left');
  		}else {
        $('.about').removeClass('left');
      }
  	  });
  	});
  	</script>

    <header class="container center" style="padding:120px 10px;font-family:segoe-print" >
    	<img src="bk.jpg" height="200vw" width="300vw" class="card" style="border-radius:5px" id="home" >

      <h1 class="jumbo hide-small hide-medium" ><b style="font-family:segoe print">Kopal Sharma</b></h1>
      <h2 class=" hide-large" ><b style="font-family:segoe print">Kopal Sharma</b></h2>

      <p class="large wide" style="margin-top:-10px;">Voice Over Artist & Home Baker</p>
  	 <div class="">

      <span class="center  padding-large  small "  style="font-size:100%;color:#00008b"><b><a href="https://www.facebook.com/webkitjockey-101988874891432" target="_blank"><i class="fa fa-facebook-official ani hover-opacity photos hover-size " id="id"  style="font-size:2vw"></i></a> </b></span>
      <span class="center  padding-large  large " style="font-size:100%;color:pink;"><b><a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fa fa-instagram hover-opacity photos " id="left " style="font-size:2vw"></i></a> </b></span>
      <span class="center  padding-large  large " style="font-size:100%;color:#1e90ff;"><b> <a href="https://twitter.com/Divyans84773603" target="_blank"> <i class="fa fa-twitter hover-opacity photos " id="zoom " style="font-size:2vw"></i></a></b></span>
      <span class="center  padding-large  large " style="font-size:100%;color:yellow;"><b> <a href="snapcodeBitmoji.svg" target="_blank"> <i class="fa fa-snapchat hover-opacity photos " id="right " style="font-size:2vw"></i></a></b></span>
      <span class="center padding-large  small " style="font-size:100%;color:darkblue;"><b> <a href="https://www.linkedin.com/in/divyansh-singh-64550a190?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B6MwMS1B7QpO2KjGgJbPZAw%3D%3D" target="_blank"> <i class="fa fa-linkedin hover-opacity photos " id="right " style="font-size:2vw"></i></a></b></span>
     </div> <hr>


     	<div class="marquee hide-small hide-medium"><div class="track"><img src="arrow.png">Enjoy 20% discount on first order <img src="arrow.png">Enjoy 20% discount on first order <img src="arrow.png">Enjoy 20% discount on first order <img src="arrow.png">Enjoy 20% discount on first order<img src="arrow.png">Enjoy 20% discount on first order<img src="arrow.png">Enjoy 20% discount on first order<img src="arrow.png">Enjoy 20% discount on first order<img src="arrow.png">Enjoy 20% discount on first order<img src="arrow.png">Enjoy 20% discount on first order </div></div>
     	<div class=" marquee hide-large" ><div class="track"><img src="arrow.png">Enjoy 20% discount on first order <img src="arrow.png">Enjoy 20% discount on first order <img src="arrow.png">Enjoy 20% discount on first order <img src="arrow.png">Enjoy 20% discount on first order<img src="arrow.png">Enjoy 20% discount on first order<img src="arrow.png">Enjoy 20% discount on first order<img src="arrow.png">Enjoy 20% discount on first order<img src="arrow.png">Enjoy 20% discount on first order<img src="arrow.png">Enjoy 20% discount on first order </div></div>

    </header>

    <!-- Portfolio Section -->

    <div class="padding content" id="portfolio" style="margin-top:-200px">
    </div>

    <!-- About Section -->
    <div class="content justify text-black padding" id="about">
    <div class="card padding-large" style="background-color:#ffe4e1;">
      <h2>Idea</h2>
      <hr>
     

  	  <div class="row">
      <div class="col m6 center  padding-large">
        <p><b><i class="fa fa-user  margin-left"></i>Kopal Sharma</b></p><br>

  	  <img src="profile.png" class="round hover-opacity profile photos "  alt="Photo of Me" width="300px" height="300px">
      </div>
  	<div class="col m6 large padding-large">

        <p style="font-size:15px;">
  	  A Website is the most essential part of a business .A simple well made website guarantees a professional online presence for your business and
  		helps you reach out to your audience.I am Divyansh Singh ,an aspiring Web Designer and Developer .I believe that small
  		helps you reach out to your audience.I am Divyansh Singh ,an aspiring Web Designer and Developer .I believe that small
  		steps lead to bigger goals. a website is your first step towards making your business the talk of the town.<br><br></p>
  	<p style="font-size:15px;">	In today' s tech savy
  		world people prefer to GOOGLE everything rather than searching anywhere else. To register on the World Wide Web, the most basic
  		requirment is a Website.The next step  </p><br><br>


  	</div>
    
  </div>
   
	  </div>
<br><br><br><br>



    <!-- Grid for pricing tables -->
    <h2 class="padding-16 text-grey ">Menu</h2>
    <hr style="height:1px">
    <div class="row-padding" style="margin:0 -16px">
      <h6 style="font-size: 10px;">Tap on the image to order</h6>
      <div class="half margin-bottom">
        <ul class="ul center card hover-shadow"  title="CLick on image to order">
        <form action="order.php" method="POST">

          <li class=" xlarge  padding-16" style="background-color:#ffb6c1;color:#555"><b>COOKIES</b><br>
          <h6>Pack of 6 - ???150/-</h6><h6>Pack of 12 - ???300/-</h6></li>
          <li class="z  padding-16 menu ">
            <img src="dbc.jpg" class="hover-opacity photos "  width="70px" height="50px" onclick="myMenudbc()" style="cursor:pointer;float:left" ><h5>Dark Brownie Cookies</h5>
            <i  class=" fa fa-remove  hover-opacity photos" id="closedbc" style="float:right;display:none;margin-top:-3vw;" onclick="myClosedbc()" type="button" ></i>           
            <button id="orderdbc"  type="button"  class="inc button round " onclick="myIncrementdbc()" >+  </button>
            <button id="order2dbc"  type="button"  class="inc2 button round " onclick="myIncrement2dbc()" >+</button>            
            <button id="orderdbcdec"  type="button"  class="button round dec" onclick="myDecrementdbc()" >-  </button>
            <button id="order2dbcdec"  type="button"  class="button round dec2" onclick="myDecrement2dbc()" >-  </button>
          
            <input type="number" class="menu-input" id="incrementdbc" name="dbc_6" />
            <input type="number" class="menu-input2" id="increment2dbc"  name="dbc_12" />
            
            <span id="dbc" class="menu-txt"  ><b>Pack of 6<br><br>Pack of 12 </b></span>
          </li>  <!--DBC-->


          <li class="zz padding-16 menu ">
             <img src="cfc.jpg"  class="hover-opacity photos" onclick="myMenucf()"  width="70px" height="50px" style="float:left" ><h5>Centre Filled</h5>
             <i  class=" fa fa-remove  hover-opacity photos" id="closecf" style="float:right;display:none;margin-top:-3vw;" onclick="myClosecf()" type="button" ></i>
             <button id="ordercf"  type="button"  class="inc button round " onclick="myIncrementcf()">+  </button>
             <button id="ordercfdec"  type="button"  class="dec button round " onclick="myDecrementcf()" >-  </button>
             <button id="order2cfdec"  type="button"  class="button dec2 round " onclick="myDecrement2cf()" >-  </button>
             <button id="order2cf"  type="button"  class="button round inc2" onclick="myIncrement2cf()" >+</button>
             <input type="number" id="incrementcf" class="menu-input" name="cfc_6" />
             <input type="number" size="9" id="increment2cf" class="menu-input2" name="cfc_12" />
            <span id="cf" class="menu-txt"  ><b>Pack of 6<br><br>Pack of 12 </b></span>


          </li>

		      <li class="zzz padding-16 menu">
            <img src="chip.jpg" class="hover-opacity photos"  width="70px" height="50px" onclick="myMenuccc()" style="float:left" ><h5>Choco Chips Cookies</h5>
            <i  class=" fa fa-remove  hover-opacity photos" id="closeccc" style="float:right;display:none;margin-top:-3vw;" onclick="myCloseccc()" type="button" ></i>
             <button id="orderccc" type="button"   class="button round inc" onclick="myIncrementccc()" >+</button>
              <button id="order2ccc"  type="button"  class="button round inc2" onclick="myIncrement2ccc()" >+</button>
              <button id="ordercccdec"  type="button"  class="button round dec" onclick="myDecrementccc()" >-  </button>
              <button id="order2cccdec"  type="button"  class="button round dec2" onclick="myDecrement2ccc()" >-  </button>
              <input type="number" id="incrementccc" class="menu-input" name="ccc_6" ></input>
             <input type="number" size="9" id="increment2ccc" class="menu-input2" name="ccc_12" ></input>
              <span id="ccc"  class="menu-txt"><b>Pack of 6<br><br>Pack of 12 </b></span>
          </li>

          <li class="zzzzz padding-16 menu">
            <img src="mgc.jpg" class="hover-opacity photos" width="70px" height="50px" onclick="myMenumgc()" style="float:left" ><h5>Multi Grain Cookies</h5>
            <i  class=" fa fa-remove  hover-opacity photos" id="closemgc" style="float:right;display:none;margin-top:-3vw;" onclick="myClosemgc()" type="button" ></i>
             <button id="ordermgc"  type="button"  class="button round inc" onclick="myIncrementmgc()">+</button>
              <button id="order2mgc"  type="button"  class="button round inc2" onclick="myIncrement2mgc()" >+</button>
              <button id="ordermgcdec"  type="button"  class="button round dec" onclick="myDecrementmgc()" >-  </button>
              <button id="order2mgcdec"  type="button"  class="button round dec2" onclick="myDecrement2mgc()" >-  </button>
              <input type="number" class="menu-input" id="incrementmgc" name="mgc_6" ></input>
             <input type="number" size="9" class="menu-input2" id="increment2mgc" name="mgc_12" ></input>

              <span id="mgc" class="menu-txt" ><b>Pack of 6<br><br>Pack of 12 </b></span>
          </li>


          <li class="light-grey padding-24">            
          <input type="submit" value="ORDER" onclick="popupck()" class="white padding-large btn text-grey shadow order-btn" />

          </li>
          </form>

        </ul>
      </div>
      <script>
        function popupck(){
            window.open('order.php','popup','width=500,height=500');
            blur();
            return false;
        }
      </script>

      <script>
        $(document).ready(function(){
          $("li.z").click(function(){
            $("li.z").toggleClass("pink ");

          });
        });

      $(document).ready(function(){
      $("li.zz").click(function() {
          $('li.zz').toggleClass('pink');
    });
    });

      $(document).ready(function(){
      $("li.zzz").click(function() {
          $('li.zzz').toggleClass('pink');
      });
      });

      $(document).ready(function(){
      $("li.zzzzz").click(function() {
          $('li.zzzzz').toggleClass('pink');
      });
      });

      function myIncrementcf(){
        document.getElementById("incrementcf").stepUp(1);
        document.getElementById("incrementcf").style.display="block";

      }
      function myIncrement2cf(){
        document.getElementById("increment2cf").stepUp(1);
        document.getElementById("increment2cf").style.display="block";

      }
      function myDecrementcf(){
        document.getElementById("incrementcf").stepDown(1);
        document.getElementById("incrementcf").style.display="block";

      }

      function myDecrement2cf(){
        document.getElementById("increment2cf").stepDown(1);
        document.getElementById("increment2cf").style.display="block";

      }
      function myIncrementdbc(){
        document.getElementById("incrementdbc").stepUp(1);
        document.getElementById("incrementdbc").style.display="block";

      }
      function myIncrement2dbc(){
        document.getElementById("increment2dbc").stepUp(1);
        document.getElementById("increment2dbc").style.display="block";

      }

      function myDecrementdbc(){
        document.getElementById("incrementdbc").stepDown(1);
        document.getElementById("incrementdbc").style.display="block";

      }

      function myDecrement2dbc(){
        document.getElementById("increment2dbc").stepDown(1);
        document.getElementById("increment2dbc").style.display="block";

      }

      function myIncrementccc(){
        document.getElementById("incrementccc").stepUp(1);
        document.getElementById("incrementccc").style.display="block";

      }
      function myIncrement2ccc(){
        document.getElementById("increment2ccc").stepUp(1);
        document.getElementById("increment2ccc").style.display="block";

      }
      function myDecrementccc(){
        document.getElementById("incrementccc").stepDown(1);
        document.getElementById("incrementccc").style.display="block";

      }

      function myDecrement2ccc(){
        document.getElementById("increment2ccc").stepDown(1);
        document.getElementById("increment2ccc").style.display="block";

      }

      function myIncrementmgc(){
        document.getElementById("incrementmgc").stepUp(1);
        document.getElementById("incrementmgc").style.display="block";

      }
      function myIncrement2mgc(){
        document.getElementById("increment2mgc").stepUp(1);
        document.getElementById("increment2mgc").style.display="block";

      }
      function myDecrementmgc(){
        document.getElementById("incrementmgc").stepDown(1);
        document.getElementById("incrementmgc").style.display="block";

      }

      function myDecrement2mgc(){
        document.getElementById("increment2mgc").stepDown(1);
        document.getElementById("increment2mgc").style.display="block";

      }
      function myMenudbc(){
              document.getElementById("dbc").style.display="block";
              document.getElementById("closedbc").style.display="block";
              document.getElementById("orderdbc").style.display="block";
              document.getElementById("order2dbc").style.display="block";
              document.getElementById("incrementdbc").style.display="block";
              document.getElementById("increment2dbc").style.display="block";
              document.getElementById("orderdbcdec").style.display="block";
              document.getElementById("order2dbcdec").style.display="block";

      }

      function myClosedbc(){
            document.getElementById("dbc").style.display="none";
            document.getElementById('closedbc').style.display="none";
            document.getElementById("orderdbc").style.display="none";
            document.getElementById("order2dbc").style.display="none";
            document.getElementById("incrementdbc").style.display="none";
            document.getElementById("increment2dbc").style.display="none";
            document.getElementById("orderdbcdec").style.display="none";
            document.getElementById("order2dbcdec").style.display="none";
        }

      function myMenucf(){
              document.getElementById("cf").style.display="block";
              document.getElementById("closecf").style.display="block";
              document.getElementById("ordercf").style.display="block";
              document.getElementById("order2cf").style.display="block";
              document.getElementById("incrementcf").style.display="block";
              document.getElementById("increment2cf").style.display="block";
              document.getElementById("ordercfdec").style.display="block";
              document.getElementById("order2cfdec").style.display="block";


      }

      function myClosecf(){
            document.getElementById("cf").style.display="none";
            document.getElementById('closecf').style.display="none";
            document.getElementById("ordercf").style.display="none";
            document.getElementById("order2cf").style.display="none";
            document.getElementById("incrementcf").style.display="none";
            document.getElementById("increment2cf").style.display="none";
            document.getElementById("ordercfdec").style.display="none";
            document.getElementById("order2cfdec").style.display="none";


      }

      function myMenuccc(){
              document.getElementById("ccc").style.display="block";
              document.getElementById("closeccc").style.display="block";
              document.getElementById("orderccc").style.display="block";
              document.getElementById("order2ccc").style.display="block";
              document.getElementById("incrementccc").style.display="block";
              document.getElementById("increment2ccc").style.display="block";
              document.getElementById("ordercccdec").style.display="block";
              document.getElementById("order2cccdec").style.display="block";

      }

      function myCloseccc(){
            document.getElementById("ccc").style.display="none";
            document.getElementById('closeccc').style.display="none";
            document.getElementById("orderccc").style.display="none";
            document.getElementById("order2ccc").style.display="none";
            document.getElementById("incrementccc").style.display="none";
            document.getElementById("increment2ccc").style.display="none";
            document.getElementById("ordercccdec").style.display="none";
            document.getElementById("order2cccdec").style.display="none";

      }

      function myMenumgc(){
              document.getElementById("mgc").style.display="block";
              document.getElementById("closemgc").style.display="block";
              document.getElementById("ordermgc").style.display="block";
              document.getElementById("order2mgc").style.display="block";
              document.getElementById("incrementmgc").style.display="block";
              document.getElementById("increment2mgc").style.display="block";
              document.getElementById("ordermgcdec").style.display="block";
              document.getElementById("order2mgcdec").style.display="block";
      }

      function myClosemgc(){
            document.getElementById("mgc").style.display="none";
            document.getElementById('closemgc').style.display="none";
            document.getElementById("ordermgc").style.display="none";
            document.getElementById("order2mgc").style.display="none";
            document.getElementById("incrementmgc").style.display="none";
            document.getElementById("increment2mgc").style.display="none";
            document.getElementById("ordermgcdec").style.display="none";
            document.getElementById("order2mgcdec").style.display="none";
      }
      </script>





      <div class="half margin-bottom">
        <form action="order2.php" method="POST">
        <ul class="ul center card hover-shadow "  title="CLick on image to order" >
        <li class=" xlarge  padding-16" style="background-color:#ffb6c1;color:#555"><b>BROWNIES</b><br>
          <h6>Pack of 6 - ???150/-</h6><h6>Pack of 12 - ???300/-</h6></li>

          <li class="a padding-16 menu ">
            <img src="dcb.jpg"  class="hover-opacity photos" width="70px" height="50px" onclick="myMenucdcb()" style="float:left" ><h5>Cinamon Dark Chocolate Brownie</h5>
            <i  class="  fa fa-remove  hover-opacity photos hover-opacity photos" id="closecdcb" style="float:right;display:none;margin-top:-3vw;" onclick="myClosecdcb()" type="button" ></i>
             <button id="ordercdcb"  type="button"  class="button round inc" onclick="myIncrementdcb()">+</button>
              <button id="order2cdcb"  type="button"  class="button round inc2 " onclick="myIncrement2dcb()" >+</button>

              <button id="orderdcbdec"  type="button"  class="button round dec " onclick="myDecrementdcb()" >-  </button>
              <button id="order2dcbdec"  type="button"  class="button round dec2 " onclick="myDecrement2dcb()" >-  </button>
              <input type="number" class="menu-input" id="incrementdcb" name="cdcb_6" ></input>
             <input type="number" class="menu-input2" size="9" id="increment2dcb" name="cdcb_12" ></input>

              <span id="cdcb" class="menu-txt" ><b>Pack of 6<br><br>Pack of 12 </b></span>
           </li>

          <li class="aa transform padding-16 menu ">
            <img src="cb.jpg" class="hover-opacity photos"  width="70px" height="50px" onclick="myMenucd()" style="float:left" ><h5 name="chocolate brownie cs">Chocolate Brownie </h5>
            <i  class=" fa fa-remove  hover-opacity photos" id="closecd" style="float:right;display:none;margin-top:-3vw;" onclick="myClosecd()" type="button" ></i>
             <button id="ordercd"  type="button"  class="button round inc " onclick="myIncrementcd()">+</button>
              <button id="order2cd"  type="button"  class="button round inc2  " onclick="myIncrement2cd()" >+</button>

              <button id="ordercddec"  type="button"  class="button round dec " onclick="myDecrementcd()" >-  </button>
              <button id="order2cddec"  type="button"  class="button round dec2 " onclick="myDecrement2cd()" >-  </button>
              <input type="number" class="menu-input" id="incrementcd" name="cb_6"></input>
             <input type="number" class="menu-input2" size="9" id="increment2cd" name="cb_12"></input>

              <span id="cd" class="menu-txt" ><b>Pack of 6<br><br>Pack of 12 </b></span>
          </li>

          <li class="aaa padding-16 menu ">
            <img src="cfb.jpg" class="hover-opacity photos" width="70px" height="50px" onclick="myMenucfb()" style="float:left" ><h5>Center Filled Brownie</h5>
            <i  class=" fa fa-remove  hover-opacity photos" id="closecfb" style="float:right;display:none;margin-top:-3vw;" onclick="myClosecfb()" type="button" ></i>
             <button id="ordercfb"  type="button"  class="button round inc " onclick="myIncrementcfb()">+</button>
              <button id="order2cfb"  type="button"  class="button round inc2 " onclick="myIncrement2cfb()" >+</button>

              <button id="ordercfbdec"  type="button"   class="button round dec " onclick="myDecrementcfb()" >-  </button>
              <button id="order2cfbdec"  type="button"  class="button round dec2 " onclick="myDecrement2cfb()" >-  </button>
              <input type="number" class="menu-input" id="incrementcfb" name="cfb_6"></input>
             <input type="number" class="menu-input2" size="9" id="increment2cfb" name="cfb_12"></input>

              <span id="cfb" class="menu-txt" ><b>Pack of 6<br><br>Pack of 12 </b></span>
          </li>

        <li class="aaaa padding-16 menu ">
          <img src="ccb.jpg" class="hover-opacity photos"  width="70px" height="50px" onclick="myMenuccb()" style="float:left" ><h5>Choco Chips Brownie</h5>
          <i  class=" fa fa-remove  hover-opacity photos" id="closeccb" style="float:right;display:none;margin-top:-3vw;" onclick="myCloseccb()" type="button" ></i>
          <button id="orderccb"  type="button"  class="button round inc " onclick="myIncrementccb()">+</button>
          <button id="order2ccb"  type="button"  class="button round inc2 "  onclick="myIncrement2ccb()" >+</button>

          <button id="orderccbdec"  type="button"  class="button round dec " onclick="myDecrementccb()" >-  </button>
          <button id="order2ccbdec"  type="button"  class="button round dec2 " onclick="myDecrement2ccb()" >-  </button>
          <input type="number" class="menu-input" id="incrementccb" name="ccb_6"></input>
          <input type="number" class="menu-input2" size="9" id="increment2ccb" name="ccb_12"></input>

          <span id="ccb" class="menu-txt" ><b>Pack of 6<br><br>Pack of 12 </b></span>
        </li>


          <li class="light-grey padding-24">
          <input type="submit" value="ORDER" onclick="popup()" class="white padding-large btn text-grey shadow order-btn" />
          </li>


        </ul><br><br>
    </form>
      </div>

      <script>
        function popup(){
            window.open('order2.php','popup','width=500,height=500');
            blur();
            return false;
        }
      </script>

      <script>
        $(document).ready(function(){
          $("li.a").click(function(){
            $("li.a").toggleClass("pink ");

          });
        });

      $(document).ready(function(){
      $("li.aa").click(function() {
          $('li.aa').toggleClass('pink');
});
});

      $(document).ready(function(){
      $("li.aaa").click(function() {
          $('li.aaa').toggleClass('pink');
      });
      });

      $(document).ready(function(){
      $("li.aaaa").click(function() {
          $('li.aaaa').toggleClass('pink');
      });
      });


      function myIncrementdcb(){
        document.getElementById("incrementdcb").stepUp(1);
        document.getElementById("incrementdcb").style.display="block";

      }
      function myIncrement2dcb(){
        document.getElementById("increment2dcb").stepUp(1);
        document.getElementById("increment2dcb").style.display="block";

      }
      function myDecrementdcb(){
        document.getElementById("incrementdcb").stepDown(1);
        document.getElementById("incrementdcb").style.display="block";

      }

      function myDecrement2dcb(){
        document.getElementById("increment2dcb").stepDown(1);
        document.getElementById("increment2dcb").style.display="block";

      }

      function myIncrementcd(){
        document.getElementById("incrementcd").stepUp(1);
        document.getElementById("incrementcd").style.display="block";

      }
      function myIncrement2cd(){
        document.getElementById("increment2cd").stepUp(1);
        document.getElementById("increment2cd").style.display="block";

      }
      function myDecrementcd(){
        document.getElementById("incrementcd").stepDown(1);
        document.getElementById("incrementcd").style.display="block";

      }

      function myDecrement2cd(){
        document.getElementById("increment2cd").stepDown(1);
        document.getElementById("increment2cd").style.display="block";

      }

      function myIncrementcfb(){
        document.getElementById("incrementcfb").stepUp(1);
        document.getElementById("incrementcfb").style.display="block";

      }
      function myIncrement2cfb(){
        document.getElementById("increment2cfb").stepUp(1);
        document.getElementById("increment2cfb").style.display="block";

      }
      function myDecrementcfb(){
        document.getElementById("incrementcfb").stepDown(1);
        document.getElementById("incrementcfb").style.display="block";

      }

      function myDecrement2cfb(){
        document.getElementById("increment2cfb").stepDown(1);
        document.getElementById("increment2cfb").style.display="block";

      }
      function myIncrementccb(){
        document.getElementById("incrementccb").stepUp(1);
        document.getElementById("incrementccb").style.display="block";

      }
      function myIncrement2ccb(){
        document.getElementById("increment2ccb").stepUp(1);
        document.getElementById("increment2ccb").style.display="block";

      }
      function myDecrementccb(){
        document.getElementById("incrementccb").stepDown(1);
        document.getElementById("incrementccb").style.display="block";

      }

      function myDecrement2ccb(){
        document.getElementById("increment2ccb").stepDown(1);
        document.getElementById("increment2ccb").style.display="block";

      }
      function myMenucdcb(){
              document.getElementById("cdcb").style.display="block";
              document.getElementById("closecdcb").style.display="block";
              document.getElementById("ordercdcb").style.display="block";
              document.getElementById("order2cdcb").style.display="block";
              document.getElementById("incrementdcb").style.display="block";
              document.getElementById("increment2dcb").style.display="block";
              document.getElementById("orderdcbdec").style.display="block";
              document.getElementById("order2dcbdec").style.display="block";

      }

      function myClosecdcb(){
            document.getElementById("cdcb").style.display="none";
            document.getElementById('closecdcb').style.display="none";
            document.getElementById("ordercdcb").style.display="none";
            document.getElementById("order2cdcb").style.display="none";
            document.getElementById("incrementdcb").style.display="none";
            document.getElementById("increment2dcb").style.display="none";
            document.getElementById("orderdcbdec").style.display="none";
            document.getElementById("order2dcbdec").style.display="none";

      }

      function myMenucd(){
              document.getElementById("cd").style.display="block";
              document.getElementById("closecd").style.display="block";
              document.getElementById("ordercd").style.display="block";
              document.getElementById("order2cd").style.display="block";
              document.getElementById("incrementcd").style.display="block";
              document.getElementById("increment2cd").style.display="block";
              document.getElementById("ordercddec").style.display="block";
              document.getElementById("order2cddec").style.display="block";

      }

      function myClosecd(){
            document.getElementById("cd").style.display="none";
            document.getElementById('closecd').style.display="none";
            document.getElementById("ordercd").style.display="none";
            document.getElementById("order2cd").style.display="none";
            document.getElementById("incrementcd").style.display="none";
            document.getElementById("increment2cd").style.display="none";
            document.getElementById("ordercddec").style.display="none";
            document.getElementById("order2cddec").style.display="none";
      }

      function myMenucfb(){
              document.getElementById("cfb").style.display="block";
              document.getElementById("closecfb").style.display="block";
              document.getElementById("ordercfb").style.display="block";
              document.getElementById("order2cfb").style.display="block";
              document.getElementById("incrementcfb").style.display="block";
              document.getElementById("increment2cfb").style.display="block";
              document.getElementById("ordercfbdec").style.display="block";
              document.getElementById("order2cfbdec").style.display="block";
      }

      function myClosecfb(){
            document.getElementById("cfb").style.display="none";
            document.getElementById('closecfb').style.display="none";
            document.getElementById("ordercfb").style.display="none";
            document.getElementById("order2cfb").style.display="none";
            document.getElementById("incrementcfb").style.display="none";
            document.getElementById("increment2cfb").style.display="none";
            document.getElementById("ordercfbdec").style.display="none";
            document.getElementById("order2cfbdec").style.display="none";
      }
      function myMenuccb(){
              document.getElementById("ccb").style.display="block";
              document.getElementById("closeccb").style.display="block";
              document.getElementById("orderccb").style.display="block";
              document.getElementById("order2ccb").style.display="block";
              document.getElementById("incrementccb").style.display="block";
              document.getElementById("increment2ccb").style.display="block";
              document.getElementById("orderccbdec").style.display="block";
              document.getElementById("order2ccbdec").style.display="block";
      }

      function myCloseccb(){
            document.getElementById("ccb").style.display="none";
            document.getElementById('closeccb').style.display="none";
            document.getElementById("orderccb").style.display="none";
            document.getElementById("order2ccb").style.display="none";
            document.getElementById("incrementccb").style.display="none";
            document.getElementById("increment2ccb").style.display="none";
            document.getElementById("orderccbdec").style.display="none";
            document.getElementById("order2ccbdec").style.display="none";
      }


      </script>


      <div class="half margin-bottom">
        <form action="order3.php" method="POST">
        <ul class="ul center card hover-shadow " title="CLick on image to order"  >
        <li class=" xlarge  padding-16" style="background-color:#ffb6c1;color:#555"><b>CHEESECAKES</b><br>
          <h6>Pack of 500g- ???200/-</h6><h6>Pack of 1kg - ???420/-</h6></li>
          <li class="b padding-16 menu" >
            <img src="cheese.jpg" class="hover-opacity photos"  width="70px" height="50px" onclick="myMenuvan()" style="float:left" ><h5>Vanilla </h5>
            <i  class=" fa fa-remove  hover-opacity photos" id="closevan" style="float:right;display:none;margin-top:-3vw;" onclick="myClosevan()" type="button" ></i>
             <button id="ordervan" type="button" class="button round inc " onclick="myIncrementvan()">+</button>
              <button id="order2van"   type="button" class="button round inc2 " onclick="myIncrement2van()">+</button>

              <button id="ordervandec"   type="button" class="button round dec " onclick="myDecrementvan()" >-  </button>
              <button id="order2vandec"  type="button"  class="button round dec2 " onclick="myDecrement2van()" >-  </button>
              <input type="number" class="menu-input" id="incrementvan" name="vch" ></input>
              <input type="number" class="menu-input2" size="9" id="increment2van" nam="vch_1" >


              <span id="van" class="menu-txt" ><b>Pack of 500g<br><br>Pack of 1kg </b></span>
          </li>

          <li class=" bb padding-16 menu">
            <img src="choche.jpg" class="hover-opacity photos" width="70px" height="50px" onclick="myMenucho()" style="float:left" ><h5>Chocolate  </h5>
            <i  class=" fa fa-remove  hover-opacity photos" id="closecho" style="float:right;display:none;margin-top:-3vw;" onclick="myClosecho()" type="button" ></i>
             <button id="ordercho"  type="button"  class="button round inc " onclick="myIncrementcho()"style="display:none;margin-left:15vw;position:absolute;margin-top:10px;">+</button>
              <button id="order2cho"  type="button"  class="button round inc2 " onclick="myIncrement2cho()" >+</button>

              <button id="orderchodec"  type="button"   class="button round dec " onclick="myDecrementcho()" >-  </button>
              <button id="order2chodec"  type="button"  class="button round dec2 " onclick="myDecrement2cho()" >-  </button>
              <input type="number" class="menu-input" id="incrementcho" name="choch" ></input>
              <input type="number" class="menu-input2" size="9" id="increment2cho" name="choch_1" ></input>


              <span id="cho" class="menu-txt" ><b>Pack of 500g<br><br>Pack of 1kg </b></span>
          </li>


          <li class="bbb padding-16 menu">
            <img src="straw.jpg"  width="70px" height="50px" class="hover-opacity photos" style="float:left" onclick="myMenustr()"><h5>Strawberry</h5>
            <i  class=" fa fa-remove  hover-opacity photos" id="closestr" style="float:right;display:none;margin-top:-3vw;" onclick="myClosestr()" type="button" ></i>
             <button id="orderstr"  type="button"  class="button round inc " onclick="myIncrementstr()">+</button>
              <button id="order2str"  type="button"  class="button round inc2 " onclick="myIncrement2str()">+</button>

              <button id="orderstrdec"  type="button"  class="button round dec " onclick="myDecrementstr()" >-  </button>
              <button id="order2strdec"  type="button"  class="button round dec2 " onclick="myDecrement2str()" >-  </button>
              <input type="number" class="menu-input" id="incrementstr" name="sch" ></input>
              <input type="number" class="menu-input2" size="9" id="increment2str" name="sch_1" ></input>


              <span id="str" class="menu-txt" ><b>Pack of 500g<br><br>Pack of 1kg </b></span>
          </li>

          <li class="bbbb padding-16 menu">
            <img src="red.jpg" class="hover-opacity photos"  width="70px" height="50px" style="float:left" onclick="myMenurv()"><h5>Red Velvet</h5>
            <i  class=" fa fa-remove  hover-opacity photos" id="closerv" style="float:right;display:none;margin-top:-3vw;" onclick="myCloserv()" type="button" ></i>
             <button type="none" id="orderrv"  type="button"  class="button round inc " onclick="myIncrementrv()">+</button>
              <button id="order2rv"  type="button"  class="button round inc2 " onclick="myIncrement2rv()" >+</button>

              <button id="orderrvdec"  type="button"  class="button round dec " onclick="myDecrementrv()" >-  </button>
              <button id="order2rvdec"  type="button"  class="button round dec2 " onclick="myDecrement2rv()" >-  </button>
              <input type="number" class="menu-input" id="incrementrv" name="rvch" ></input>
              <input type="number" class="menu-input2" size="9" id="increment2rv" name="rvch_1" ></input>


              <span id="rv"  class="menu-txt"><b>Pack of 500g<br><br>Pack of 1kg </b></span>

          </li>


          <li class="light-grey padding-24">
          <input type="submit" value="ORDER" onclick="popupch()" class="white padding-large btn text-grey shadow order-btn" />
          </li>
        </ul>
    </form>
      </div>
      <script>
        function popupch(){
            window.open('order3.php','popup','width=500,height=500');
            blur();
            return false;
        }
      </script>
      
      <script>
        $(document).ready(function(){
          $("li.b").click(function(){
            $("li.b").toggleClass("pink + b2");

          });
        });

      $(document).ready(function(){
      $("li.bb").click(function() {
          $('li.bb').toggleClass('pink');
    });
    });

      $(document).ready(function(){
      $("li.bbb").click(function() {
          $('li.bbb').toggleClass('pink');
      });
      });

      $(document).ready(function(){
      $("li.bbbb").click(function() {
          $('li.bbbb').toggleClass('pink');
      });
      });

      function myIncrementvan(){
        document.getElementById("incrementvan").stepUp(1);
        document.getElementById("incrementvan").style.display="block";

      }
      function myIncrement2van(){
        document.getElementById("increment2van").stepUp(1);
        document.getElementById("increment2van").style.display="block";

      }
      function myDecrementvan(){
        document.getElementById("incrementvan").stepDown(1);
        document.getElementById("incrementvan").style.display="block";

      }

      function myDecrement2van(){
        document.getElementById("increment2van").stepDown(1);
        document.getElementById("increment2van").style.display="block";

      }

      function myIncrementcho(){
        document.getElementById("incrementcho").stepUp(1);
        document.getElementById("incrementcho").style.display="block";

      }
      function myIncrement2cho(){
        document.getElementById("increment2cho").stepUp(1);
        document.getElementById("increment2cho").style.display="block";

      }
      function myDecrementcho(){
        document.getElementById("incrementcho").stepDown(1);
        document.getElementById("incrementcho").style.display="block";

      }

      function myDecrement2cho(){
        document.getElementById("increment2cho").stepDown(1);
        document.getElementById("increment2cho").style.display="block";

      }

      function myIncrementstr(){
        document.getElementById("incrementstr").stepUp(1);
        document.getElementById("incrementstr").style.display="block";

      }
      function myIncrement2str(){
        document.getElementById("increment2str").stepUp(1);
        document.getElementById("increment2str").style.display="block";

      }
      function myDecrementstr(){
        document.getElementById("incrementstr").stepDown(1);
        document.getElementById("incrementstr").style.display="block";

      }

      function myDecrement2str(){
        document.getElementById("increment2str").stepDown(1);
        document.getElementById("increment2str").style.display="block";

      }

      function myIncrementrv(){
        document.getElementById("incrementrv").stepUp(1);
        document.getElementById("incrementrv").style.display="block";

      }
      function myIncrement2rv(){
        document.getElementById("increment2rv").stepUp(1);
        document.getElementById("increment2rv").style.display="block";

      }
      function myDecrementrv(){
        document.getElementById("incrementrv").stepDown(1);
        document.getElementById("incrementrv").style.display="block";

      }

      function myDecrement2rv(){
        document.getElementById("increment2rv").stepDown(1);
        document.getElementById("increment2rv").style.display="block";

      }


      function myMenuvan(){
              document.getElementById("van").style.display="block";
              document.getElementById("closevan").style.display="block";
              document.getElementById("ordervan").style.display="block";
              document.getElementById("order2van").style.display="block";
              document.getElementById("incrementvan").style.display="block";
              document.getElementById("increment2van").style.display="block";
              document.getElementById("ordervandec").style.display="block";
              document.getElementById("order2vandec").style.display="block";

      }

      function myClosevan(){
            document.getElementById("van").style.display="none";
            document.getElementById('closevan').style.display="none";
            document.getElementById("ordervan").style.display="none";
            document.getElementById("order2van").style.display="none";
            document.getElementById("incrementvan").style.display="none";
            document.getElementById("increment2van").style.display="none";
            document.getElementById("ordervandec").style.display="none";
            document.getElementById("order2vandec").style.display="none";

      }

      function myMenucho(){
              document.getElementById("cho").style.display="block";
              document.getElementById("closecho").style.display="block";
              document.getElementById("ordercho").style.display="block";
              document.getElementById("order2cho").style.display="block";
              document.getElementById("incrementcho").style.display="block";
              document.getElementById("increment2cho").style.display="block";
              document.getElementById("orderchodec").style.display="block";
              document.getElementById("order2chodec").style.display="block";

      }

      function myClosecho(){
            document.getElementById("cho").style.display="none";
            document.getElementById('closecho').style.display="none";
            document.getElementById("ordercho").style.display="none";
            document.getElementById("order2cho").style.display="none";
            document.getElementById("incrementcho").style.display="none";
            document.getElementById("increment2cho").style.display="none";
            document.getElementById("orderchodec").style.display="none";
            document.getElementById("order2chodec").style.display="none";


      }

      function myMenustr(){
              document.getElementById("str").style.display="block";
              document.getElementById("closestr").style.display="block";
              document.getElementById("orderstr").style.display="block";
              document.getElementById("order2str").style.display="block";
              document.getElementById("incrementstr").style.display="block";
              document.getElementById("increment2str").style.display="block";
              document.getElementById("orderstrdec").style.display="block";
              document.getElementById("order2strdec").style.display="block";

      }

      function myClosestr(){
            document.getElementById("str").style.display="none";
            document.getElementById('closestr').style.display="none";
            document.getElementById("orderstr").style.display="none";
            document.getElementById("order2str").style.display="none";
            document.getElementById("incrementstr").style.display="none";
            document.getElementById("increment2str").style.display="none";
            document.getElementById("orderstrdec").style.display="none";
            document.getElementById("order2strdec").style.display="none";

      }

      function myMenurv(){
              document.getElementById("rv").style.display="block";
              document.getElementById("closerv").style.display="block";
              document.getElementById("orderrv").style.display="block";
              document.getElementById("order2rv").style.display="block";
              document.getElementById("incrementrv").style.display="block";
              document.getElementById("increment2rv").style.display="block";
              document.getElementById("orderrvdec").style.display="block";
              document.getElementById("order2rvdec").style.display="block";

      }

      function myCloserv(){
            document.getElementById("rv").style.display="none";
            document.getElementById('closerv').style.display="none";
            document.getElementById("orderrv").style.display="none";
            document.getElementById("order2rv").style.display="none";
            document.getElementById("incrementrv").style.display="none";
            document.getElementById("increment2rv").style.display="none";
            document.getElementById("orderrvdec").style.display="none";
            document.getElementById("order2rvdec").style.display="none";

      }
      </script>


      <div class="half">
        <form action="order4.php" method="POST" > 
        <ul class="ul center card hover-shadow "  title="CLick on image to order" >
        <li class=" xlarge  padding-16" style="background-color:#ffb6c1;color:#555"><b>OTHERS</b><br>
          <h6>Pack of 6 - ???150/-</h6><h6>Pack of 12 - ???300/-</h6></li>


          <li class="cccc padding-16 menu">
            <img src="apple.jpg" class="hover-opacity photos" width="70px" height="50px" onclick="myMenuap()" style="float:left"><h5>Apple Pie</h5>
            <i  class=" fa fa-remove  hover-opacity photos" id="closeap" style="float:right;display:none;margin-top:-3vw;" onclick="myCloseap()" type="button" ></i>
             <button id="orderap" type="button" class="button round inc " onclick="myIncrementap()">+</button>
              <button id="order2ap" type="button" class="button round inc2 " onclick="myIncrement2ap()">+</button>

              <button id="orderapdec" type="button" class="button round dec " onclick="myDecrementap()" >-  </button>
              <button id="order2apdec" type="button" class="button round dec2 " onclick="myDecrement2ap()" >-  </button>
              <input type="number" class="menu-input" id="incrementap" name="appi" ></input>
              <input type="number" class="menu-input2" size="9" id="increment2ap" name="appi_1" ></input>


              <span id="ap" class="menu-txt" ><b>Pack of 500g<br><br>Pack of 1kg </b></span>
           </li>


          <li class="cc padding-16 menu">
              <img src="sand.jpg" class="hover-opacity photos" width="70px" height="50px" style="float:left" onclick="myMenusc() " ><h5>Cookie Sandwich</h5>
            <i  class=" fa fa-remove  hover-opacity photos" id="closesc" style="float:right;display:none;margin-top:-3vw;" onclick="myClosesc()" type="button" ></i>
             <button id="ordersc" type="button" class="button round inc " onclick="myIncrementsc()">+</button>
              <button id="order2sc" type="button" class="button round inc2 " onclick="myIncrement2sc()" >+</button>

              <button id="orderscdec" type="button"  class="button round dec " onclick="myDecrementsc()" >-  </button>
              <button id="order2scdec" type="button" class="button round dec2 " onclick="myDecrement2sc()" >-  </button>
              <input type="number" class="menu-input" id="incrementsc" name="cs_6" ></input>
              <input type="number" class="menu-input2" size="9" id="increment2sc" name="cs_12" ></input>


              <span id="sc" class="menu-txt" ><b>Pack of 6<br><br>Pack of 12 </b></span>
          </li>

          <li class="ccc padding-16 menu">
            <img src="pump.jpg"  width="70px" height="50px" class="hover-opacity photos" style="float:left"  type="button" onclick="myMenu()"><h5>Pumpkin Pie</h5>
           <i  class=" fa fa-remove  hover-opacity photos" id="close" style="float:right;display:none;margin-top:-3vw;" onclick="myClose()" type="button" ></i>
            <button id="order" type="button" class="button round inc " onclick="myIncrementpp()">+</button>
             <button id="order2" type="button" class="button round inc2 " onclick="myIncrement2pp()" >+</button>

             <button id="orderppdec" type="button"  class="button round dec " onclick="myDecrementpp()" >-  </button>
             <button id="order2ppdec" type="button" class="button round dec2 " onclick="myDecrement2pp()" >-  </button>
             <input type="number" class="menu-input" id="incrementpp" name="pupi" ></input>
             <input type="number" class="menu-input2" size="9" id="increment2pp" name="pupi_1" ></input>


             <span id="haha" class="menu-txt" ><b>Pack of 500g<br><br>Pack of 1kg</b></span>
           </li>


          <li class="light-grey padding-24 ">
          <input type="submit" value="ORDER" onclick="popupot()" class="white padding-large btn text-grey shadow order-btn" />
          </li>
        </ul>
    </form>
      </div>

      <script>
        function popupot(){
            window.open('order4.php','popup','width=500,height=500');
            blur();
            return false;
        }
      </script>

      <script>
        $(document).ready(function(){
          $("li.cccc").click(function(){
            $("li.cccc").toggleClass("pink ");

          });
        });

      $(document).ready(function(){
      $("li.cc").click(function() {
          $('li.cc').toggleClass('pink');
});
});

      $(document).ready(function(){
      $("li.ccc").click(function() {
          $('li.ccc').toggleClass('pink');
      });
      });

      function myIncrementap(){
        document.getElementById("incrementap").stepUp(1);
        document.getElementById("incrementap").style.display="block";

      }
      function myIncrement2ap(){
        document.getElementById("increment2ap").stepUp(1);
        document.getElementById("increment2ap").style.display="block";

      }
      function myDecrementap(){
        document.getElementById("incrementap").stepDown(1);
        document.getElementById("incrementap").style.display="block";

      }

      function myDecrement2ap(){
        document.getElementById("increment2ap").stepDown(1);
        document.getElementById("increment2ap").style.display="block";

      }

      function myIncrementsc(){
        document.getElementById("incrementsc").stepUp(1);
        document.getElementById("incrementsc").style.display="block";

      }
      function myIncrement2sc(){
        document.getElementById("increment2sc").stepUp(1);
        document.getElementById("increment2sc").style.display="block";

      }
      function myDecrementsc(){
        document.getElementById("incrementsc").stepDown(1);
        document.getElementById("incrementsc").style.display="block";

      }

      function myDecrement2sc(){
        document.getElementById("increment2sc").stepDown(1);
        document.getElementById("increment2sc").style.display="block";

      }

      function myIncrementpp(){
        document.getElementById("incrementpp").stepUp(1);
        document.getElementById("incrementpp").style.display="block";

      }
      function myIncrement2pp(){
        document.getElementById("increment2pp").stepUp(1);
        document.getElementById("increment2pp").style.display="block";

      }
      function myDecrementpp(){
        document.getElementById("incrementpp").stepDown(1);
        document.getElementById("incrementpp").style.display="block";

      }

      function myDecrement2pp(){
        document.getElementById("increment2pp").stepDown(1);
        document.getElementById("increment2pp").style.display="block";

      }

function myMenuap(){
        document.getElementById("ap").style.display="block";
        document.getElementById("closeap").style.display="block";
        document.getElementById("orderap").style.display="block";
        document.getElementById("order2ap").style.display="block";
        document.getElementById("incrementap").style.display="block";
        document.getElementById("increment2ap").style.display="block";
        document.getElementById("orderapdec").style.display="block";
        document.getElementById("order2apdec").style.display="block";

}

function myCloseap(){
      document.getElementById("ap").style.display="none";
      document.getElementById('closeap').style.display="none";
      document.getElementById("orderap").style.display="none";
      document.getElementById("order2ap").style.display="none";
      document.getElementById("incrementap").style.display="none";
      document.getElementById("increment2ap").style.display="none";
      document.getElementById("orderapdec").style.display="none";
      document.getElementById("order2apdec").style.display="none";

}

function myMenusc(){
        document.getElementById("sc").style.display="block";
        document.getElementById("closesc").style.display="block";
        document.getElementById("ordersc").style.display="block";
        document.getElementById("order2sc").style.display="block";
        document.getElementById("incrementsc").style.display="block";
        document.getElementById("increment2sc").style.display="block";
        document.getElementById("orderscdec").style.display="block";
        document.getElementById("order2scdec").style.display="block";


}

function myClosesc(){
      document.getElementById("sc").style.display="none";
      document.getElementById('closesc').style.display="none";
      document.getElementById("ordersc").style.display="none";
      document.getElementById("order2sc").style.display="none";
      document.getElementById("incrementsc").style.display="none";
      document.getElementById("increment2sc").style.display="none";
      document.getElementById("orderscdec").style.display="none";
      document.getElementById("order2scdec").style.display="none";

}

function myMenu(){
        document.getElementById("haha").style.display="block";
        document.getElementById("close").style.display="block";
        document.getElementById("order").style.display="block";
        document.getElementById("order2").style.display="block";
        document.getElementById("incrementpp").style.display="block";
        document.getElementById("increment2pp").style.display="block";
        document.getElementById("orderppdec").style.display="block";
        document.getElementById("order2ppdec").style.display="block";

}

function myClose(){
      document.getElementById("haha").style.display="none";
      document.getElementById('close').style.display="none";
      document.getElementById("order").style.display="none";
      document.getElementById("order2").style.display="none";
      document.getElementById("incrementpp").style.display="none";
      document.getElementById("increment2pp").style.display="none";
      document.getElementById("orderppdec").style.display="none";
      document.getElementById("order2ppdec").style.display="none";


}
      </script>

    <!-- End Grid/Pricing tables -->
    </div>

  <!-- End About Section -->
  </div>

  <!-- About Section -->
  <div class="content justify text-black padding" id="about">




      <h2 class="text-grey">Gallery</h2>
    <hr>

    <!-- Grid for photos -->
    <div syle="position:relative" >

      <div class="half" style="padding:10px;position: relative; " >
        <img src="pie.jpg" class="gall-img">
        <img src="choco.jpg" class="gall-img">
        <img src="berry.jpg" class="gall-img">
        <img src="brown.jpg" class="gall-img hide-large">
      </div>

        <div class="half" style="padding-bottom:10px;position: relative;">
        <img src="cheese.jpg"  class="gall-img">
        <img src="straw.jpg" class="gall-img">
        <img src="cfb.jpg" class="gall-img">
        <img src="choche.jpg" class="hide-large gall-img"><br><br><br><br>
        <img src="brown.jpg" class="hide-small hide-medium gall-img"><br><br><br><br>


      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->



  <!-- Contact Section -->
  <div class=" content text-grey" id="contact" style="margin-bottom:64px;padding:50px">
    <h2>Contact Me</h2>
    <hr class="opacity">

    <div class="section">
      <p><i class="fa fa-map-marker fa-fw xlarge margin-right"></i> Gomti Nagar , Lucknow</p>
      <p><i class="fa fa-whatsapp fa-fw xlarge margin-right"></i>999999999999</p>
      <p><i class="fa fa-phone fa-fw xlarge margin-right"></i> Phone: 91111119110</p>
      <p><i class="fa fa-envelope fa-fw xlarge margin-right"> </i> Email: mail@mail.com</p>
    </div>

    <!-- Image of location/map -->
    <img src="/w3images/map.jpg" class="image greyscale" style="width:100%;margin:32px 0">

    <p>Lets get in touch. Send me a message:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="message input hide-medium hide-small  border  " style="border-radius:40px;color:black;width:40%;" type="text" placeholder="Name..." required name="Name"></p>
      <p><input class="message input  border hide-large " style="border-radius:40px;color:black;width:100%;" type="text" placeholder="Name..." required name="Name"></p>

      <p><input class=" message input  border   hide-medium hide-small   " style=" border-radius:40px;width:40%;" type="text" placeholder="Phone  No...." required name="Phone"></p>
      <p><input class=" message input  border    hide-large  " style=" border-radius:40px;width:80%;" type="text" placeholder="Phone No...." required name="Phone"></p>

      <p><input class="message input  border " style="border-radius:40px;width:100%;" type="text" placeholder="Email..." required name="Email"></p>
      <p><textarea class="input message border" style="border-radius:10px;width:100%;" type="text" placeholder="Feedback..." required name="Feedback"></textarea></p>
      <p>
        <button class="button padding-large text-white" style="border-radius:40px;background-color:#ffb6c1;color:white;box-shadow:1px 3px 0px 0px rgba(255,193,202,0.6)" type="submit">
         <b> SEND</b>
        </button>
      </p>
    </form>
  </div>

  <!-- Footer -->
  <footer class="container padding-64  center  xlarge" style="margin:-24px;background-color:#ffe1e1">
    <button class="pink btn round" style="text-align:center;font-size: 10px;width:20%;margin-right:-40px">Top</button><br>
    <i class="fa fa-facebook-official hover-opacity photos " style="color:grey"></i>
    <i class="fa fa-instagram hover-opacity photos" style="color:grey"></i>
    <i class="fa fa-snapchat hover-opacity photos" style="color:grey"></i>
    <i class="fa fa-pinterest-p hover-opacity photos" style="color:grey"></i>
    <i class="fa fa-twitter hover-opacity photos" style="color:grey"></i>
    <i class="fa fa-linkedin hover-opacity photos" style="color:grey"></i>
  </footer>

<!-- END PAGE CONTENT -->
</div>

<script>
// Open and close sidebar
function openNav() {
  document.getElementById("mySidebar").style.width = "40%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("about").style.display = "none";
  document.getElementById("contact").style.display = "none";
  document.getElementById("home").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("about").style.display = "block";
  document.getElementById("contact").style.display = "block";

}

function openNav2() {
  document.getElementById("mySidebar2").style.width = "100%";
  document.getElementById("mySidebar2").style.display = "block";
  document.getElementById("about").style.display = "none";
  document.getElementById("contact").style.display = "none";
  document.getElementById("home").style.display = "block";
}

function closeNav2() {
  document.getElementById("mySidebar2").style.display = "none";
  document.getElementById("mySidebar2").addClass = "right";
  document.getElementById("about").style.display = "block";
  document.getElementById("contact").style.display = "block";

}


window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "bar" + " card" + " animate-top" + " white" ;
    } else {
        navbar.className = navbar.className.replace(" card animate-top white", "");
    }
}

function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show ") == -1) {
        x.className += " w3-show ";
    } else {
        x.className = x.className.replace(" w3-show ", "");
    }
}


</script>

</body>
</html>
