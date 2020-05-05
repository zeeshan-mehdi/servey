<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Hitch a Ride</title>

    <style>
        body {
  background: rgba(0, 0, 0, 0.9);
  margin: 0;
  color: #fff;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.showcase::after {
  content: '';
  height: 100vh;
  width: 100%;
  background-image: url(images/home3.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  display: block;
  filter: blur(0px);
  -webkit-filter: blur(0px);
  transition: all 1000ms;
}

.showcase:hover::after {
  filter: blur(10px);
  -webkit-filter: blur(10px);
}

.showcase:hover .content {
  filter: blur(0px);
  -webkit-filter: blur(0px);
}


.content::after {
  position: absolute;
  z-index: 1;
  top: 10%;
  left: 50%;
  margin-top: 105px;
  margin-left: -175px;
  width: 400px;
  height: 350px;
  text-align: center;
  transition: all 1000ms;
}

.content .text {
  line-height: 1.7;
  margin-top: 1rem;
  font-size: 20px;
}



.container {
  max-width: 960px;
  margin: auto;
  overflow: hidden;
  padding: 4rem 1rem;
}

.linkbtn button{
    width: 150px;
    height: 40px;
    cursor: pointer;
    border: 2px solid white;
    background-color: transparent;
    border-radius: 20px;
    color: white;
    margin-top: 60px;
}

.linkbtn button:hover{
    background-color: dodgerblue;
}

.grid-3 {
  display: grid;
  grid-gap: 20px;
  grid-template-columns: repeat(3, 1fr);
}


.grid-2 {
  display: grid;
  grid-gap: 20px;
  grid-template-columns: repeat(2, 1fr);
}

.center {
  text-align: center;
  margin: auto;
}

.bg-light {
  background: #f4f4f4;
  color: #333;
}

.bg-dark {
  background: #333;
  color: #f4f4f4;
}

.services .text{
  width: 100%;
  height: 40px;
  text-align: center;
}

.testimonials{
  margin: 50px auto 50px;
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
  grid-gap: 20px;

}

.testimonials .card{
  position: relative;
  height: 350px;
  width: 350px;
  margin: 0 auto;
  background: #333333;
  box-sizing: border-box;
  text-align: center;
  box-shadow: 0 10px 40px rgba(0, 0, 0,.5);
  overflow: hidden;
  line-height: 40px;
}

.testimonials .card .layer {

  z-index: 1;
  position: absolute;
  top: calc(100% - 2px);
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(#03a9f4, #e91ee3);
  transition: 0.5s;

}


.testimonials .card:hover .layer {

  top: 0;

}

.testimonials .card .contents {
  position: relative;
  z-index: 2;
}



hr{
  width: 100%;
  color: lightgray;
}


footer {
  padding: 2.2rem;
}

footer p {
  margin: 0;
}

/* Small Screens */
@media (max-width: 560px) {
  .showcase::after {
    height: 50vh;
  }

  .content {
    top: 5%;
    margin-top: 5px;
  }

  .content .logo {
    height: 140px;
    width: 140px;
  }

  .content .text {
    display: none;
  }

  .grid-3,
  .grid-2 {
    grid-template-columns: 1fr;
  }

  .services div {
    border-bottom: #333 dashed 1px;
    padding: 1.2rem 1rem;
  }
}

/* Landscape */
@media (max-height: 500px) {
  .content .text {
    display: none;
  }

  .content {
    top: 0;
  }
}
    </style>
</head>
<body>
	<header class="showcase">
   <div class="content">
     <label style="font-size: 65px;border: 5px solid white;border-radius: 20px;padding-left: 10px;padding-right: 10px">Hitch a Ride</label>

     <div class="text">
       Let's move together.
     </div>

       <div class="linkbtn">
           <a href="survey.php">
               <button>Take Survey</button>
           </a>
       </div>
   </div>
 </header>

 <!-- Services -->
 <section class="services">
   <h1 class="text">Main Features</h1>
   <div class="container grid-3 center">
     <div>
       <img src="images/cost.jpg" style="width: 60px;height: 60px">
       <h3>Cost Minimization</h3>
       <p>Reduce the amount of your daily commute in half by sharing rides and daily commute with others.</p>
     </div>
     <div>
       <img src="images/match.png" style="width: 60px;height: 60px">
       <h3>Match Making</h3>
       <p>Saving your time and expanses by matching people who are heading towards same destination or on same route.</p>
     </div>
     <div>
       <img src="images/users.png" style="width: 60px;height: 60px">
       <h3>Role Flexibility</h3>
       <p>Person can be a driver as well as passenger at a same time.</p>
     </div>
   </div>
 </section>

    <br>
<h1 style="width: 100%;text-align: center;top: 10px;">Packages</h1>
 <section class="testimonials">
   <div class="card">
     <div class="layer"></div>
     <div class="contents">
       <h1 style="margin-top: 10px">Weekly Packages</h1>
       <hr>
       <p>
         100km for 10 rides<br>
         200km for 15 rides<br>
         300km for 20 rides<br>
         400km for 25 rides<br>
         500km for 30 rides
       </p>
     </div>
   </div>

   <div class="card">
     <div class="layer"></div>
     <div class="contents">
       <h1 style="margin-top: 10px">Monthly Packages</h1>
       <hr>
       <p>
         300km for 25 rides<br>
         400km for 30 rides<br>
         500km for 35 rides<br>
         600km for 40 rides<br>
         700km for 45 rides
       </p>
     </div>
   </div>

   <div class="card">
     <div class="layer"></div>
     <div class="contents">
       <h1 style="margin-top: 10px">Premium Packages</h1>
       <hr>
       <p>
         600km for 50 rides<br>
         700km for 55 rides<br>
         800km for 60 rides<br>
         900km for 65 rides<br>
         Unlimited rides for more then 1000km
       </p>
     </div>
   </div>
 </section>

 <section class="survey">
   <div class="linkbtn center">
      <a href="survey.php">
         <button style="margin-top: 50px;margin-bottom: 60px">Take Survey</button>
      </a>
   </div>
 </section>

 <!-- About -->
 <section class="about bg-light">
   <div class="container">
     <div class="grid-2">
       <div class="center">
         <img src="images/about.png">
       </div>
       <div>
         <h3>About Us</h3>
         <p>We are offering a technology-based solution to group passengers going in similar direction.<br> Our mission is to reduce the number of
           cars on the road to help save the environment, economy and the hassle people are
           facing due to transportation. It is going to be a panacea for millions of consumers in Pakistan who have a dire need for transportation.</p>
       </div>
     </div>
   </div>
 </section>

 <footer class="center bg-dark">
   <p>Hitch a Ride &copy; 2020</p>
 </footer>


</body>
</html>