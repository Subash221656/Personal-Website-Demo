<!-- MyHouse.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    
/* Reset some default styles */
body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background-image: linear-gradient(to right, #d7d2cc 0%, #304352 100%);
    color: #333;
}

/* Header Styles */
header {
    text-align: center;
    padding: 20px;
    background-color: #d7d7d7;
    background-image: linear-gradient(147deg, #d7d7d7 0%, #353535 74%);
}

/* Horizontal Menu Styles */
.horizontal-menu {
    background-color: #4d4855;
    background-image: linear-gradient(147deg, #d7d7d7 0%, #353535 74%);
}

.horizontal-menu ul {
    list-style-type: none;
    overflow: hidden;
}

.horizontal-menu li {
    float: left;
}

.horizontal-menu a {
    display: block;
    background: #F6F8F9;
    background: radial-gradient(circle farthest-corner at center center, #F6F8F9 0%, #E5EBEE 30%, #D7DEE3 60%, #F5F7F9 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-align: center;
    margin-right: 20px;
    padding: 15px 17px;
    text-decoration: none;
    transition: background-color 0.3s, transform 0.3s;
}

.horizontal-menu a:hover {
    background-color: #d7d7d7;
    background-image: linear-gradient(147deg, #d7d7d7 0%, #353535 74%);
    transform: scale(1.1);
}

/* Footer Styles */
footer {
    background-color: #4d4855;
    background-image: linear-gradient(147deg, #d7d7d7 0%, #353535 74%);
    color: #fff;
    padding: 10px 0;
    text-align: center;

}
.footer-content {
    display: flex;
    justify-content: space-around;
    max-width: 1200px;
    margin: 0 auto;
}
.footer-content h4 {
    margin-bottom: 20px;
}
.footer-content p, .footer-content a {
    margin-bottom: 10px;
}
.footer-content a {
    color: #fff;
    text-decoration: none;
}
.footer-content img {
    width: 35px;
    height: 30px;
}

.smediaanim {  
  position: relative;
  bottom: 0;
  animation: bounce 2s infinite;
}

@keyframes bounce {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-20px); }
}




/* MyHouse.css */
.intdesign {
  position: relative;
  width: 100%;
  height: 400px;
  overflow: hidden;
}

.intdesign video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover; 
  
}

.intblock {

  text-align: center;
  color: #333;
   font-family: 'Times New Roman', serif; 
   font-size: 25px;
   word-spacing: 10px;
   margin: 35px 35%;
   
}
.intblock h1 {
	padding-bottom: 20px;
}

/* Additional Styles for My House Page */
.content-housevideo {
    width: 100%;
    margin: 0px;
 

    
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}
.content-house {
    max-width: 80%;
    margin: 15px 100px;
  margin-top: 50px;
  padding: 50px;
    background-image: linear-gradient(to right, #b8d3fe 0%, #e3d7ff 100%);
    color: #333;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}

.house-overview
 {
    margin: 50px 75px;
	font-size: 22px;
}

.house-info{
margin: 5% 35%;
text-align: center;	
	
}
.house-info h3{
	margin: 25px;
	font-size: 22px;
}


/* Styles for Virtual Tour */
.virtual-tour{
	margin: 100px;
	display: flex; 
	align-items: center; 
	justify-content: center;
}
.virtual-tour video{
	 border-radius: 15px;
	border: 3px solid #bdc3c7;
	transform: scale(1.2);
}
	
        .flip-card {
            background-color: transparent;
            width: 375px;
            height: 300px;
            perspective: 1000px;
            margin: 20px 13px;
            display: inline-block;
        }
        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }
        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }
        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }
        .flip-card-front {
           background-image: url('Images/cardimg.jpg');
		   background-size: contain;
            color: black;
        }
		
		        .flip-card-front h1{margin-top: 35%;
				color: #8e9eab;  
color: -webkit-linear-gradient(to right, #eef2f3, #8e9eab);  
color: linear-gradient(to right, #eef2f3, #8e9eab);}
		
        .flip-card-back {
            background-color: #2980b9;
            color: white;
            transform: rotateY(180deg);
        }
 
/* Styles for Flip Card */
    .flip-card-back video {
  width: 100%;
  height: 100%;
  object-fit: cover;
}


/* Styles for House Information Table */
.house-info table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.house-info td {
    padding: 10px;
    border: 1px solid #ddd;
}

/* Additional Styles for My House Page */




    </style>
    
    <title>My House</title>
	<link rel="icon" type="images/x-icon" href="Images/logo.png" />
</head>
<body>

    <header>
        <nav class="horizontal-menu">
            <ul>
                <li><a href="index.html"><img src="Images/logo.png" alt="logo" width="50" height="40"></a></li>
                <li><a href="index.html">Home</a></li>
                <li><a href="MyStudy.html">My Study Subject</a></li>
                <li><a href="MyMusic.html">My Music</a></li>
                <li><a href="MyHobbies.html">My Hobbies</a></li>
                <li><a href="MyHouse.php">My House</a></li>
            </ul>
        </nav>
    </header>
	
    <section class="content-housevideo">
        
<div class="intdesign">
   	<video width="320" height="240" autoplay loop muted>
			
  <source src="https://v.ftcdn.net/04/16/73/00/700_F_416730097_0yR7tuNYmpKBfmcBPGcaAqXxTs7zq2Sg_ST.mp4" type="video/mp4">

</video>
</div>
<div class="intblock">
  <h1>Make Yourself Comfortable</h1>
  </div>    
  </section>
    <!-- House Overview Section -->
        <div class="house-overview">
            <h3>House Overview</h3><br>
            <p>Welcome to my cozy abode! My house is a modern style home with 4 bedrooms and 2 bathrooms. It features a unique architectural design that combines comfort and style. Explore the various aspects of my home below!</p>
       </div>
	   

	   <!-- House Information Section -->
        <div class="house-info">
           <u> <h3>House Information</h3></u>
           <?php
                // PHP script to create an associative array with house information
                $houseInfo = array(
                    "Number of Bedrooms" => 4,
                    "Number of Bathrooms" => 2,
                    "Street Address" => "98 southern street"
                );

                // Loop to output the information in a well-formatted table
                echo "<table>";
                foreach ($houseInfo as $key => $value) {
                    echo "<tr><td>$key</td><td>$value</td></tr>";
                }
                echo "</table>";
            ?>
        </div>
	   
	  
<section class="content-house">
    <h3 style="margin: 1% 4%; font-family: 'Times New Roman', serif; font-size: 32px;">Virtual Tour</h3>
        <!-- Virtual Tour Section -->
        <div class="virtual-tour">
            
			
			 <!-- creating a virtual tour using videos -->
			<video width="560" height="315" frameborder="0" autoplay loop muted>
			
  <source src="https://static.videezy.com/system/resources/previews/000/011/112/original/House_to_Lines_v2_01.mp4" type="video/mp4">

</video>


			 
         </div>

<div class="flip-card">
  <div class="flip-card-inner" onclick="reloadVideo('video1')">
    <div class="flip-card-front">
	
          <h1>Kitchen</h1> 
    </div>
    <div class="flip-card-back">
	 <video width="320" height="240" autoplay loop muted>
   <source src="https://cdn.create.vista.com/api/media/small/448969062/stock-video-modern-living-room-interior-rooms-in-the-apartment?token=" type="video/mp4">
    </video>
	</div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner" onclick="reloadVideo('video1')">
    <div class="flip-card-front">
      <h1>Living Room</h1> 
    </div>
    <div class="flip-card-back">
     <video width="320" height="240" autoplay loop muted>
			
  <source src="https://cdn.create.vista.com/api/media/medium/448650618/stock-video-dining-and-living-room-of-new-house-big-gray-sofa-in-vacation-home-or-holiday?token=" type="video/mp4">

</video>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner" onclick="reloadVideo('video1')">
    <div class="flip-card-front">
      <h1>Master BedRoom</h1> 
    </div>
    <div class="flip-card-back">
      <video width="320" height="240" autoplay loop muted>
			
  <source src="https://cdn.create.vista.com/api/media/small/67493695/stock-video-master-bedroom?token=" type="video/mp4">

</video>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner" onclick="reloadVideo('video1')">
    <div class="flip-card-front">
      <h1>Bathroom</h1> 
    </div>
    <div class="flip-card-back">
	<video width="320" height="240" autoplay loop muted>
      <source src="https://cdn.create.vista.com/api/media/small/345739756/stock-video-interior-modern-stylish-bathroom-black-tiled-walls-curtain-shower-place?token=" type="video/mp4">
	  </video>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner" onclick="reloadVideo('video1')">
    <div class="flip-card-front">
      <h1>BackYard</h1> 
    </div>
    <div class="flip-card-back">
	<video width="320" height="240" autoplay loop muted>
     <source src="https://cdn.coverr.co/videos/coverr-statue-in-a-yard-6645/1080p.mp4" type="video/mp4">
	 </video>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner" onclick="reloadVideo('video1')">
    <div class="flip-card-front">
      <h1>FrontHouse</h1> 
	  
    </div>
    <div class="flip-card-back">
	<video width="320" height="240" autoplay loop muted>
      <source src="https://cdn.create.vista.com/api/media/medium/160570586/stock-video-exterior-house-view?token=" type="video/mp4">
	  </video>
    </div>
  </div>
</div>


    </section>

    <!-- Footer Section -->
<footer>
    <div class="footer-content">
        <div class="contact-info">
            <h4>Contact Information</h4>
            <p>Email: terabaakagulla@yahoo.com</p>
            <p>Phone: +61 234 567 890</p>
        </div>
        <div class="smediaanim">
            <h4>Follow Us</h4>
            <a href="https://www.facebook.com/profile.php?id=100072409145754"><img src="Images/f1logo.png" style="width: 45px;" alt="Facebook"></a>
            <a href="https://twitter.com/subu_6996"><img src="Images/f2logo.png" alt="Twitter"></a>
            <a href="https://www.instagram.com/iamgodofmylife/"><img src="Images/f3logo.png" style="width: 30px;" alt="Instagram"></a>
        </div>
        <div class="copyright">
            <p>© 2023 Subash Joshi. All rights reserved.</p>
            <p>Website created on January 1, 2024</p>
        </div>
    </div>
</footer>


   
    <script src="scripts.js"></script>

</body>
</html>
