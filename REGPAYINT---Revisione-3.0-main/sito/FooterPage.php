<?php
  for ($i=0; $i< 20; $i++ ){
    echo '<br></br>';
}
?>
<footer class="footer">
<br></br><br></br>
  <h2>Dove siamo? <br></br>
<div class="mapcss"><center>
  <iframe id='map'src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12553.863091645839!2d13.347177995989037!3d38.12936126270902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1319ef543f5dea8b%3A0x98f53c9158a90418!2sIstituto%20Tecnico%20Industriale%20Vittorio%20Emanuele%20III!5e0!3m2!1sit!2sit!4v1713628088955!5m2!1sit!2sit!" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <br><br>
    <b>Vittorio Emanuele III</b>
    <br></br>
    <img class='Img' src="img/VittorioEmanueleIII.jpg" width="600" height="auto">
  </div></center>
  
    <br></br>
      <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
    <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-youtube"></ion-icon>
        </a></li>
    <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-tiktok"></ion-icon>
        </a></li>
    <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitch"></ion-icon>
        </a></li>
    <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-whatsapp"></ion-icon>
        </a></li>
    <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
    <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>

      

      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>  
    </ul>
    <br>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="HomePage.php">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="#">About</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>
    </ul>
    <br>
      <p> &copy; Realizzato da Francesco Amore e Alessandro Puglia | Tutti i diritti riservati</p>
    </footer>
</body>

<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

.footer {
  position: relative;
  width: 100%;
  background: #3586ff;
  min-height: 100px;
  padding: 20px 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-icon__link:hover {
  transform: translateY(-10px);
}

.menu__link {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menu__link:hover {
  opacity: 1;
}

.footer p {
  color: #fff;
  margin: 15px 0 10px 0;
  font-size: 1rem;
  font-weight: 300;
}
/* https://i.ibb.co/wQZVxxk/wave.png */
.wave {
  position: absolute;
  top: -100px;
  left: 0;
  width: 100%;
  height: 100px;
  background: url("https://i.ibb.co/wQZVxxk/wave.png");
  background-size: 1000px 100px;
}

.wave#wave1 {
  z-index: 1000;
  opacity: 1;
  bottom: 0;
  animation: animateWaves 4s linear infinite;
}

.wave#wave2 {
  z-index: 999;
  opacity: 0.5;
  bottom: 10px;
  animation: animate 4s linear infinite !important;
}

.wave#wave3 {
  z-index: 1000;
  opacity: 0.2;
  bottom: 15px;
  animation: animateWaves 3s linear infinite;
}

.wave#wave4 {
  z-index: 999;
  opacity: 0.7;
  bottom: 20px;
  animation: animate 3s linear infinite;
}

@keyframes animateWaves {
  0% {
    background-position-x: 1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

@keyframes animate {
  0% {
    background-position-x: -1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

.mapcss {
  font-family: 'Montserrat', sans-serif;
  font-weight: 400;
  font-size: 2rem;
  color: #ffffff;
  background-color: #0011ff21;
  padding: 10px 10px;
  border-radius: 10px;
  margin-top: 10;
  margin-bottom: 10px;
  animation: zoom-rotazione 2s ease-in-out;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2); /* Adjust shadow parameters */
}











/* CSS Document */

#wrap
{
	width: 100%;
	height: 100%;
	position: relative;
	margin: 0 auto 0 auto;
	overflow: hidden;
}

#lightings
{
	bottom: -60px;
	position: absolute;
	width: 100%;
}

section
{
	/*border-radius*/
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	height: 20px;
	width: 100%;
	position: relative;
	margin: auto;

}

#one
{
	/*animation*/
	-webkit-animation: one 5s ease-in-out infinite alternate;
	-moz-animation: one 5s ease-in-out infinite alternate;
	-ms-animation: one 5s ease-in-out infinite alternate;
	-o-animation: one 5s ease-in-out infinite alternate;
	animation: one 5s ease-in-out infinite alternate;
}
@-webkit-keyframes 
one { from {
-webkit-box-shadow: 0 0 250px 20px #473C78;
}

to { -webkit-box-shadow: 0 0 100px 15px #F72A3B; }
}
@-moz-keyframes 
one { from {
-moz-box-shadow: 0 0 250px 20px #473C78;
}

to { -moz-box-shadow: 0 0 100px 15px #F72A3B; }
}
@-o-keyframes 
one { from {
-o-box-shadow: 0 0 250px 20px #473C78;
}

to { -o-box-shadow: 0 0 100px 15px #F72A3B; }
}

@keyframes 
one { from {
box-shadow: 0 0 250px 20px #473C78;
}

to {box-shadow: 0 0 100px 15px #F72A3B; }
}

#two
{
	width: 90%;
	/*animation*/
	-webkit-animation: two 4s ease-in-out infinite alternate;
	-moz-animation: two 4s ease-in-out infinite alternate;
	-ms-animation: two 4s ease-in-out infinite alternate;
	-o-animation: two 4s ease-in-out infinite alternate;
	animation: two 4s ease-in-out infinite alternate;
}
@-webkit-keyframes 
two { from {
-webkit-box-shadow: 0 0 250px 20px #18C499;
}

to { -webkit-box-shadow: 0 0 100px 15px #D8F05E; }
}
@-moz-keyframes 
two { from {
-moz-box-shadow: 0 0 250px 20px #18C499;
}

to { -moz-box-shadow: 0 0 100px 15px #D8F05E; }
}
@-o-keyframes 
two { from {
-o-box-shadow: 0 0 250px 20px #18C499;
}

to { -o-box-shadow: 0 0 100px 15px #D8F05E; }
}

@keyframes 
two { from {
box-shadow: 0 0 250px 20px #18C499;
}

to { box-shadow: 0 0 100px 15px #D8F05E; }
}

#three
{
	width: 80%;
	/*animation*/
	-webkit-animation: three 3s ease-in-out infinite alternate;
	-moz-animation: three 3s ease-in-out infinite alternate;
	-ms-animation: three 3s ease-in-out infinite alternate;
	-o-animation: three 3s ease-in-out infinite alternate;
	animation: three 3s ease-in-out infinite alternate;
}
@-webkit-keyframes 
three { from {
-webkit-box-shadow: 0 0 250px 20px #FFDD00;
}

to { -webkit-box-shadow: 0 0 100px 15px #3E33FF; }
}
@-moz-keyframes 
three { from {
-moz-box-shadow: 0 0 250px 20px #FFDD00;
}

to { -moz-box-shadow: 0 0 100px 15px #3E33FF }
}
@-o-keyframes 
three { from {
-o-box-shadow: 0 0 250px 20px #FFDD00;
}

to { -o-box-shadow: 0 0 100px 15px #3E33FF }
}

@keyframes 
three { from {
box-shadow: 0 0 250px 20px #FFDD00;
}

to { box-shadow: 0 0 100px 15px #3E33FF }
}

#four
{
	width: 70%;
	/*animation*/
	-webkit-animation: four 2s ease-in-out infinite alternate;
	-moz-animation: four 2s ease-in-out infinite alternate;
	-ms-animation: four 2s ease-in-out infinite alternate;
	-o-animation: four 2s ease-in-out infinite alternate;
	animation: four 2s ease-in-out infinite alternate;
}
@-webkit-keyframes 
four { from {
-webkit-box-shadow: 0 0 250px 20px #781848;
}

to { -webkit-box-shadow: 0 0 100px 15px #F2BBE9; }
}
@-moz-keyframes 
four { from {
-moz-box-shadow: 0 0 250px 20px #781848;
}

to { -moz-box-shadow: 0 0 100px 15px #F2BBE9; }
}
@-o-keyframes 
four { from {
-o-box-shadow: 0 0 250px 20px #781848;
}

to { -o-box-shadow: 0 0 100px 15px #F2BBE9; }
}

@keyframes 
four { from {
shadow: 0 0 250px 20px #781848;
}

to { shadow: 0 0 100px 15px #F2BBE9; }
}

#five
{
	width: 60%;
	/*animation*/
	-webkit-animation: five 1s ease-in-out infinite alternate;
	-moz-animation: five 1s ease-in-out infinite alternate;
	-ms-animation: five 1s ease-in-out infinite alternate;
	-o-animation: five 1s ease-in-out infinite alternate;
	animation: five 1s ease-in-out infinite alternate;
}
@-webkit-keyframes 
five { from {
-webkit-box-shadow: 0 0 250px 20px #42F2A1;
}

to { -webkit-box-shadow: 0 0 100px 15px #F4F6AD; }
}
@-moz-keyframes 
five { from {
-moz-box-shadow: 0 0 250px 20px #42F2A1;
}

to { -moz-box-shadow: 0 0 100px 15px #F4F6AD; }
}
@-o-keyframes 
five { from {
-o-box-shadow: 0 0 250px 20px #42F2A1;
}

to { -o-box-shadow: 0 0 100px 15px #F4F6AD; }
}

@keyframes 
five { from {
box-shadow: 0 0 250px 20px #42F2A1;
}

to { box-shadow: 0 0 100px 15px #F4F6AD; }
}


</style>

</html>



