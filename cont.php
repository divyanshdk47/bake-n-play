
          <!DOCTYPE html>
          <html>
          <title>BAKE n PLAY</title>
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
    
              font-family: "lato",sans-serif;
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
              content: "";
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
    
            <body class="center margin-left margin-top" style="color:#444;font-size:10px" >
    
            <h3>Enter your details</h3>

          <form action="cust.php" class="padding-16 row-padding " method="POST" target="_self">
            <input class="message input  border "  name="a" style="border-radius:40px;color:black;width:80%;" type="text" placeholder="Name..." />

            <input class=" message input  border  half padding-16 "   name="b" style=" border-radius:40px;width:37%;" type="phone" placeholder="Phone No...." />
            
            <input class="message input  half  border margin-left padding-16" style="border-radius:40px;width:40%;" type="phone" placeholder="Whatsapp No. ..."  name="c"/><br><br>

            <input class="message input border " style="border-radius:40px;width:80%;" type="email" placeholder="Email..."  name="d"/>

            <textarea class="message input round border " style="width:80%;height:80px;" type="text" placeholder="Address..."  name="e"></textarea>

            <input class="button padding-large text-white" style="border-radius:40px;background-color:#ffb6c1;color:white;box-shadow:1px 3px 0px 0px rgba(255,193,202,0.6)" value="Send" type="submit">
      
          </form>
          
  </body>
</html>