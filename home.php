<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewellery Website Landing Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  font-family: 'Montserrat', sans-serif;
  overflow-y: scroll;
  overflow-x: hidden;
}

h1, h2, h3{
  letter-spacing: 2px;
}

header{
  background: #000;
  color: #fff;
}

.container{
  max-width: 960px;
  margin: 0 auto;
}

.brand{
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 40px;
}

.brand img{
  margin-bottom: 20px;
}

nav.nav-sticky{
  width: 100%;
  position: fixed;
  top: 0;
  background: #222;
  padding-top: 8px;
  padding-bottom: 8px;
  z-index: 10;
  transition: all 1s;
}

nav ul{
  list-style: none;
  text-align: center;
  padding: 10px;
  border: 1px solid #222;
}

nav ul li a.active{
  color: #fcbe32;
}

nav ul li{
  display: inline;
  padding: 20px;
}

nav ul li a{
  text-decoration: none;
  text-transform: uppercase;
  font-size: 14px;
  letter-spacing: 1px;
  color: #999;
}

nav ul li a:hover{
  color: #fcbe32;
}

/*========== GENERAL ==========*/

.section{
  padding-top: 80px;
  text-align: center;
  overflow: hidden;
}

.section-head h2{
  font-weight: 400;
  padding-bottom: 5px;
  text-transform: uppercase;
}

.section-head p{
  color: #fcbe32;
  font-weight: 500;
  letter-spacing: 2px;
  margin-bottom: 20px;
}

.list-head h3{
  padding-bottom: 14px;
  text-transform: uppercase;
  font-weight: 400;
}

.list-head span{
  color: #999;
  font-weight: 100;
  font-size: 14px;
  word-wrap: break-word;
}

/*========== MAIN CONTENT ==========*/

.main-background{
  background: url('./Image/newproduct1.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  height: 100vh;
}

.main-content{
  text-align: right;
}

.main-content h1{
  font-size: 4vw;
  margin-bottom: 20px;
  font-weight: 300;
  padding-bottom: 20px;
}

.main-content h2{
  font-size: 3vw;
  color: #fcbe32;
  padding-bottom: 5px;
  font-weight: 400;
}

.main-content p{
  font-size: 2.5vw;
  margin-bottom: 40px;
}

.main-content a{
  color: #fcbe32;
  text-decoration: none;
}

.main-content a:hover{
  color: #eee;
}

/*==========  CUSTOM COLLECTION ==========*/

.collection-list ul{
  list-style: none;
}

.collection-list ul li{
  display: inline-block;
  padding: 14px;
}

/*==========  NEW COLLECTION ==========*/

.new-collection{
  position: absolute;
  width: 100%;
}

.new-collection .left{
  float: left;
  background: url('https://media.angieslist.com/s3fs-public/styles/widescreen_large/public/jewelry.jpeg?itok=ymeE9NXz');
  background-repeat: no-repeat;
  background-position: right;
  background-size: cover;
  height: 350px;
  width: 50%;
}

.new-collection .right{
  float: left;
  background: url('http://static.boredpanda.com/blog/wp-content/uploads/2016/03/terrarium-jewelry-microcosm-ruby-robin-boutique-10.jpg');
  background-repeat: no-repeat;
  background-position: left;
  background-size: cover;
  height: 350px;
  width: 50%;
}

.new-collection .middle{
  position: absolute;
  background-color: #fcbe32;
  height: 250px;
  width: 350px;
  left: 50%;
  top: 50%;
  margin-left: -175px;
  margin-top: -125px;
  text-align: center;
}

.new-collection .mid-title{
  text-transform: uppercase;
  position: absolute;
  left: 50%;
  top: 50%;
  margin-left: -80px;
  margin-top: -60px;
}

.new-collection .mid-title h2{
  font-weight: 400;
  padding-bottom: 20px;
  color: #eee;
}

.new-collection .mid-title a{
  text-decoration: none;
  letter-spacing: 1px;
  color: #555;
  border: 1px solid #555;
  padding: 10px 20px;
  font-size: 14px;
}

.new-collection .mid-title a:hover,
.new-collection .mid-title a:focus{
  color: #fff;
  border: 1px solid #fff;
}

/*==========  DESIGNER COLLECTION ==========*/

.designer-collection .section-head {
  padding-top: 340px;
}

/*==========  SECTION CARDS ==========*/

.card-wrapper section{
  float: left;
  background: #985d8d;
  width: 50%;
  height: auto;
  text-align: center;
}

.card-wrapper section .card-title{
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-transform: uppercase;
  line-height: 2em;
}

.card-wrapper section .card-title a{
  color: #fff;
  text-decoration: none;
}

.card-wrapper section .card-title a:hover,
.card-wrapper section .card-title a:focus{
  color: #333;
}


.card-wrapper .card-one{
  background: url('https://static.pexels.com/photos/356148/pexels-photo-356148.jpeg');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  height: 350px;
}

.card-wrapper .card-two{
  background: #985d8d;
  height: 350px;
  color: #eee;
}

.card-wrapper .card-three{
  background: #fcbe32;
  height: 350px;
}

.card-wrapper .card-four{
  background: url('http://findmyrock.com/wp-content/uploads/2013/04/best-photography-6.jpg');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  height: 350px;
}

/*==========  DESIGNER GALLERY ==========*/


.gallery .section-head{
  text-align: center;
  padding-bottom: 40px;
  padding-top: -50px;
}

.gallery-showcase{
  list-style: none;
}

.gallery-showcase li{
  display: block;
  width: 33.33%;
  float: left;
  padding: 4px;
}

.gallery-showcase figure{
  overflow: hidden;
}

.gallery-showcase img{
  width: 100%;
  height: auto;
  transform: scale(1.15);
  transition: all 0.5s;
  cursor: pointer;
}

.gallery-showcase img:hover{
  transform: scale(1.05);
}

/*==========  ABOUT US ==========*/

.about .wrapper{
  padding-top: 80px;
}

.about .left{
  width:50%;
  height: 300px;
  background: url('http://maxpixel.freegreatpicture.com/static/photo/1x/Diamond-Luxury-Jewelry-Gold-Shiny-Precious-888286.jpg');
  background-size: cover;
  background-position: center top;
  background-repeat: no-repeat;
  float: left;
}

.about .right{
  width: 50%;
  height: 300px;
  float: left;
  background: #fcbe32;
}

.about .right .text{
  max-height: 300px;
  color: #555;
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 10px 80px 10px 80px;
  line-height: 1.5;
}

/*==========  CONTACT US ==========*/

form{
  padding-top: 40px;
  padding-bottom: 40px;
}

input[type=text], input[type=button], textarea{
  width: 50%;
  padding: 10px;
  border: 1px solid #985d8d;
  border-radius: 4px;
  margin: 6px;
  resize: vertical;
}

input[type=button]{
  background: #bb8eb3;
  color: #fff;
  text-transform: uppercase;
  border: none;
  cursor: pointer;
}

input[type=button]:hover{
  background: #985d8d;
}

/*==========  FOOTER ==========*/

.bottom-links ul{
  list-style: none;
  text-align: center;
  padding: 40px;
}

.bottom-links li{
  display: inline;
  padding: 12px;
}

.bottom-links ul li a{
  text-decoration: none;
  color: #888;
  font-size: 12px;
}

.bottom-links ul li a:hover,
.buttom-links ul li a:focus{
  color: #985d8d;
}

footer{
  padding: 20px;
  background: #222;
  color: #fcbe32;
  text-align: center;
}
.user-options {
    position: absolute;
    top: 20px;
    right: 20px;
    display: flex;
    gap: 10px;
}

.user-options a {
    text-decoration: none;
    color: white;
    background-color: #333;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 14px;
    transition: background-color 0.3s ease;
}

.user-options a:hover {
    background-color: #555;
}
    </style>
</head>
<body>
    <header id="home">
        <div class="container">
            <div class="brand">
              <div class="user-options">
                <a href="add_product.php" class="add-btn">Add Product</a>
                <a href="profile.php" class="add-btn">Profile</a>
                <a href="login.php" class="logout-btn">Logout</a>

            </div>
            
              <img src="Image/logo.jfif" style="width: 40px"/>
              <p>My Gems Jewelry</p>
            </div>
         </div>
         
            <nav>
              <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="#custom-sec">Custom Jewelry</a></li>
                <li><a href="#designer-sec">Design</a></li>
                <li><a href="#about">Learn More</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </nav>

          <div class="main-background">
            <div class="container">
              <div class="main-content">
                <h1>My Gems Jewelry</h1>
                <h2>4-Carat Gold Bracelet</h2>
                <p>Shop the latest designs</p>
                <a href="#custom-sec">- Xem sản phẩm</a>
              </div>
            </div>
          </div>
        </header>

        <section class="section" id="custom-sec">
          <div class="container">
            <div class="section-head">
              <h2>Custom Jewelry</h2>
              <p>Recent Designs</p>
            </div>

            <div class="collection-list">
              <ul>
                <li><img src="http://www.thomassabo.com/dw/image/v2/AAQY_PRD/on/demandware.static/-/Sites-ts-master-catalog/default/dwbb260100/productimages/LBA0102-415-12.png?sw=310&sfrm=png" style="width: 180px"/>
                  <div class="list-head">
                    <h3>Pandora Bracelet</h3>
                    <a href="brand_pandora.php">View Details</a>
                    </div>
                </li>


                <li><img src="https://s-media-cache-ak0.pinimg.com/originals/27/41/69/274169b4444ccf7448d4133c13dd05c1.png" style="width: 180px"/>
                  <div class="list-head">
                    <h3>Ring</h3>
                    <a href="brand_pandora.php">View Details</a>
                  </div>
                </li>


                <li><img src="https://s-media-cache-ak0.pinimg.com/originals/c9/89/55/c98955bbb6331b4aa98cf33bdc84a84a.png" style="width: 180px"/>
                  <div class="list-head">
                    <h3>Earrings</h3>
                    <a href="brand_pandora.php">View Details</a>
                  </div>
               </li>

                <li><img src="https://images.unsplash.com/photo-1588444837495-c6cfeb53f32d?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="width: 180px"/>
                  <div class="list-head">
                    <h3>Necklace</h3>
                    <a href="brand_pandora.php">View Details</a>
                  </div>
               </li>
              </ul>
            </div>
          </div>
        </section>

        <section class="section" id="new-sec">
            <div class="new-collection">

                <div class="left"></div>

                <div class="right"></div>

                <div class="middle">
                  <div class="mid-title">
                    <h2>New Collection</h2>
                    <a href="#home">View Products</a>
                  </div>
                </div>
            </div>
        </section>

        <section class="section designer-collection clearfix" id="designer-sec">
          <div class="container">
            <div class="section-head">
                <h2>Custom Design</h2>
                <p>Explore Designs
                </p>
            </div>

            <div class="collection-list clearfix">
              <ul>
                <li><img src="https://cdn0.rubylane.com/shops/2heartsjewelry/TRI369.1L.jpg" style="width: 180px"/>
                  <div class="list-head">
                    <h3>Bracelet</h3>
                    <span>Various styles and materials</span>
                  </div>
                </li>


                <li><img src="http://www.pngmart.com/files/1/Jewellery-Ring-PNG-Clipart.png" style="width: 180px"/>
                  <div class="list-head">
                    <h3>Ring</h3>
                    <span>Rings for all occasions</span>
                  </div>
                </li>


                <li><img src="https://s-media-cache-ak0.pinimg.com/originals/c9/89/55/c98955bbb6331b4aa98cf33bdc84a84a.png" style="width: 180px"/>
                  <div class="list-head">
                    <h3>Earrings</h3>
                    <span>Wide range of colors and styles</span>
                  </div>
               </li>

              </ul>

            </div>

          </div>
        </section>

        <section class="section card-wrapper">

          <section class="card-one">
          </section>

          <section class="card-two">
            <div class="card-title">
              <h3>Italygo Designer</h3>
              <p>Detailed information available here.</p>
              <a href="#home">Learn More.</a>
            </div>
          </section>

          <section class="card-three">
             <div class="card-title">
              <h3>Backowy Designer</h3>
              <p>Detailed information available here.</p>
              <a href="#home">Learn More.</a>
            </div>
          </section>

          <section class="card-four">
          </section>

        </section>

        <section class="section gallery cleafix">

          <div class="container">
              <div class="section-head">
                  <h2>Featured Designs</h2>
                  <p>Explore Designs</p>
              </div>
              <ul class="gallery-showcase">

                <li>
                  <figure>
                    <img src="https://static.pexels.com/photos/265856/pexels-photo-265856.jpeg" alt=""/>
                  </figure>
                </li>

                <li>
                  <figure>
                    <img src="https://static.pexels.com/photos/230290/pexels-photo-230290.jpeg" alt=""/>
                  </figure>
                </li>

                <li>
                  <figure>
                    <img src="https://static.pexels.com/photos/248077/pexels-photo-248077.jpeg" alt=""/>
                  </figure>
                </li>

              </ul>
          </div>

        </section>

        <section class="section about" id="about">
            <div class="section-head">
                <h2>About Us</h2>
                <p>Learn more about us and quality of our products</p>
            </div>


              <div class="wrapper clearfix">

                <div class="left">
                </div>

                <div class="right">
                  <div class="text">
                    <h3>Who we are</h3>
                    <br/>
                    <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <br/> <br/> The point of using Lorem Ipsum is that it has a more-or-less normal distribution.
                    </p>
                  </div>
                </div>
              </div>
        </section>

        <section class="section contact" id="contact">
          <div class="container">
            <div class="section-head">
                <h2>Contact Us</h2>
                <p>Contact Us for More Details</p>
            </div>

            <form>
              <input type='text' name="firstname" placeholder="Your First Name">

              <input type="text" name="lastname" placeholder="Your Last Name">

              <input type="text" name="phone" placeholder="Your Phone Number">

              <input type="text" name="email" placeholder="Your Email Address">

              <textarea name="message" rows="8" placeholder="Your Message"></textarea>
              <br/>
              <input type="button" value="Send">
            </form>
          </div>
        </section>

        <div class="bottom-links">
          <div class="container">
            <ul>
                <li><a href="#home">Support</a></li>
                <li><a href="#home">FAQ</a></li>
                <li><a href="#home">Designers</a></li>
                <li><a href="#home">Terms of Use</a></li>
              </ul>
          </div>
        </div>

        <footer>
          <div class="container">
            <small>Trang Web My Gems Jewelry</small>
          </div>
        </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>