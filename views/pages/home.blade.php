 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<h3>
  <span>B</span>
  <span>I</span>
  <span>B</span>
  <span>E</span>
  <span>K</span>
</br>
  <span>D</span>
  <span>E</span>
  <span>U</span>
  <span>L</span>
  <span>A</span>

</h3>

  <style>
 
  @import url("https://fonts.googleapis.com/css?family=Luckiest+Guy");
/* BODY */
body {
  
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background-color: skyblue;
  background-image: -webkit-linear-gradient(90deg, skyblue 0%, steelblue 100%);
  background-attachment: fixed;
  background-size: 100% 100%;
  
  font-family: "Luckiest Guy", cursive;
  -webkit-font-smoothing: antialiased;
}


::selection {
  background: transparent;
}

/* CLOUDS */
body:before {
  content: "";
  position: absolute;
  top: 0;
  left:0;
  right: 0;
  width: 0;
  height: 0;
  margin: auto;
  border-radius: 100%;
  background: transparent;
  display: block;
  box-shadow: 0 0 150px 100px rgba(255, 255, 255, 0.6),
    200px 0 200px 150px rgba(255, 255, 255, 0.6),
    -250px 0 300px 150px rgba(255, 255, 255, 0.6),
    550px 0 300px 200px rgba(255, 255, 255, 0.6),
    -550px 0 300px 200px rgba(255, 255, 255, 0.6);
}
/* JUMP */
h3 {
  cursor: default;
  position: absolute;
  top: 0;
  left: -500;
  right: 0;
  bottom: 650;
  width: 50%;
  height: 10px;
  margin: auto;
  display: block;
  text-align: left;
}

h3 span {
  position: relative;
  top:20px;
  display: inline-block;
  -webkit-animation: bounce 0.3s ease infinite alternate;
  font-size: 100px;
  color: #fff;
  text-shadow: 0 1px 0 #ccc, 0 2px 0 #ccc, 0 3px 0 #ccc, 0 4px 0 #ccc,
    0 5px 0 #ccc, 0 6px 0 transparent, 0 7px 0 transparent, 0 8px 0 transparent,
    0 9px 0 transparent, 0 10px 10px rgba(0, 0, 0, 0.4);
}

h3 span:nth-child(2) {
  -webkit-animation-delay: 0.1s;
}

h3 span:nth-child(3) {
  -webkit-animation-delay: 0.2s;
}

h3 span:nth-child(4) {
  -webkit-animation-delay: 0.3s;
}

h3 span:nth-child(5) {
  -webkit-animation-delay: 0.4s;
}

h3 span:nth-child(6) {
  -webkit-animation-delay: 0.5s;
}

h3 span:nth-child(7) {
  -webkit-animation-delay: 0.6s;
}

h3 span:nth-child(8) {
  -webkit-animation-delay: 0.2s;
}

h3 span:nth-child(9) {
  -webkit-animation-delay: 0.3s;
}

h3 span:nth-child(10) {
  -webkit-animation-delay: 0.4s;
}

h3 span:nth-child(11) {
  -webkit-animation-delay: 0.5s;
}

h3 span:nth-child(12) {
  -webkit-animation-delay: 0.6s;
}

h3 span:nth-child(13) {
  -webkit-animation-delay: 0.7s;
}

h3 span:nth-child(14) {
  -webkit-animation-delay: 0.8s;
}

/* ANIMATION */
@-webkit-keyframes bounce {
  100% {
    top: -20px;
    text-shadow: 0 1px 0 #ccc, 0 2px 0 #ccc, 0 3px 0 #ccc, 0 4px 0 #ccc,
      0 5px 0 #ccc, 0 6px 0 #ccc, 0 7px 0 #ccc, 0 8px 0 #ccc, 0 9px 0 #ccc,
      0 50px 25px rgba(0, 0, 0, 0.2);
  }
}
</style>

@extends('layouts.default')
@section('title', 'Laravel Developer')

@section('content')

@endsection
<div class="cat">
  <div class="cat-main">
      <div class="info"></div>
     <a href="{{url('contact')}}" class="portfolio-link"><div class="petal portfolio"></div></a>
      <a href="{{url('resume')}}" class="contact-link"><div class="petal contact"></div></a>
      <a href="#" class="socialmedia-link"><div class="petal socialmedia"></div></a>
      <a href="#" class="inspiration-link"><div class="petal inspiration"></div></a>
      <a href="#" class="mystery-link"><div class="petal mystery"></div></a>
  </div>

</div>

<style>

  
a {
  color:black;
  display: block;
}

.cat {
  width: 200px;
  height: 200px;
  margin: 100px auto 0 auto;
  color: black;
}

.cat-main {
  width: 200px;
  height: 200px;
}

.info {
  width: 200px;
  height: 200px;
  background: #def68a url("{{asset('pictures/bbk.jpg.jpg')}}") 47% 50% no-repeat;
  border-radius: 100%;
  z-index: 20;
  position: absolute;
  background-size: 100% 100%;

 
}

.petal {

  width: 150px;
  height: 150px;
  border-radius: 100%;
  margin-top: 100px;
  margin-left: 100px;
  z-index: 5;
  position: absolute;
  -webkit-transform-origin: 0 0;
  -ms-transform-origin: 0 0;
  transform-origin: 0 0;
  opacity: 0;
  -webkit-backface-visibility:hidden;
   -moz-backface-visibility:hidden;
    -ms-backface-visibility:hidden;
     -o-backface-visibility:hidden;
        backface-visibility:hidden;
  -webkit-transform:translate3d(0,0,0);
   -moz-transform:translate3d(0,0,0);
    -ms-transform:translate3d(0,0,0);
     -o-transform:translate3d(0,0,0);
        transform:translate3d(0,0,0);


}

.cat-main .portfolio {
  -webkit-transform:rotate(0deg);-ms-transform:rotate(0deg);transform:rotate(0deg);
  background:black url("{{asset('pictures/contact.png')}}") 47% 50% no-repeat;
  background-size: 100% 100%;
  background-color:black;
}

.cat-main:hover .portfolio {
  -webkit-transform:rotate(-72deg);-ms-transform:rotate(-72deg);transform:rotate(-72deg);
  opacity: 100;
  transition: opacity .5s ease-out, -ms-transform .5s ease-out, transform .5s ease-out;
  -webkit-transition: opacity .5s ease-out, -webkit-transform .5s ease-out;
}

.contact {
  -webkit-transform:rotate(-72deg);-ms-transform:rotate(-72deg);transform:rotate(-72deg);
   background:black url("{{asset('pictures/resume.png')}}") 50% 50% no-repeat;
  background-size: 100% 100%;


}


.cat-main:hover .contact {
  -webkit-transform:rotate(-144deg);-ms-transform:rotate(-144deg);transform:rotate(-144deg);
  opacity: 100;
  transition: opacity .5s ease-out .3s, -ms-transform .5s ease-out .3s, transform .5s ease-out .3s;
  -webkit-transition: opacity .5s ease-out .3s, -webkit-transform .5s ease-out .3s;


  

 
}

.socialmedia {
  -webkit-transform:rotate(-144deg);-ms-transform:rotate(-144deg);transform:rotate(-144deg);
  background: #e6ff8d url('http://leejan.com/menu/socialmedia.png') 65% 65% no-repeat;
}

.cat-main:hover .socialmedia {
  -webkit-transform:rotate(-216deg);-ms-transform:rotate(-216deg);transform:rotate(-216deg);
  opacity: 100;
  transition: opacity .5s ease-out .6s, -ms-transform .5s ease-out .6s, transform .5s ease-out .6s;
  -webkit-transition: opacity .5s ease-out .6s, -webkit-transform .5s ease-out .6s;
}

.inspiration {
  -webkit-transform:rotate(-216deg);-ms-transform:rotate(-216deg);transform:rotate(-216deg);
  background: #e6ff8d url('http://leejan.com/menu/inspiration.png') 65% 65% no-repeat;
}

.cat-main:hover .inspiration {
  -webkit-transform:rotate(-288deg);-ms-transform:rotate(-288deg);transform:rotate(-288deg);
  opacity: 100;
  transition: opacity .5s ease-out .9s, -ms-transform .5s ease-out .9s, transform .5s ease-out .9s;
  -webkit-transition: opacity .5s ease-out .9s, -webkit-transform .5s ease-out .9s;
}


.mystery {
  -webkit-transform:rotate(-288deg);-ms-transform:rotate(-288deg);transform:rotate(-288deg);
  background: #e6ff8d url('http://leejan.com/menu/mystery.png') 65% 65% no-repeat;
}

.cat-main:hover .mystery {
  -webkit-transform:rotate(-360deg);-ms-transform:rotate(-360deg);transform:rotate(-360deg);
  opacity: 100;
  transition: opacity .5s ease-out 1.2s, -ms-transform .5s ease-out 1.2s, transform .5s ease-out 1.2s;
  -webkit-transition: opacity .5s ease-out 1.2s, -webkit-transform .5s ease-out 1.2s;
}

.cat-main .portfolio, .cat-main .contact, .cat-main .socialmedia, .cat-main .inspiration, .cat-main .mystery {
  transition-property: opacity, -webkit-transform, -ms-transform, transform;
  transition-duration: .2s, .2s, .2s, .2s;
  transition-delay: 0s, 0s, 0s, 0s;
  -webkit-transition-property: -webkit-transform;
  -webkit-transition-duration: .2s, .2s, .2s, .2s;
  -webkit-transition-delay: 0s, 0s, 0s, 0s;
}

.portfolio, .contact, .socialmedia, .inspiration, .mystery {
  -webkit-box-shadow: inset 0px 0px 30px 10px rgba(204, 228, 89, 1);
  box-shadow: inset 0px 0px 30px 10px rgba(204, 228, 89, 1);
}

.portfolio:hover, .contact:hover, .socialmedia:hover, .inspiration:hover, .mystery:hover {
  -webkit-box-shadow: inset 0px 0px 30px 20px rgba(204, 228, 89, 1);
  box-shadow: inset 0px 0px 30px 20px rgba(204, 228, 89, 1);
  z-index: 19;
}
</style>


  <div id="centeralign">

    <h1 style="color: black;">Hey!!!</h1>

  <img src="{{asset('pictures/hat.gif.gif')}}"width="20%"height="45%">  <p>

        I am a laravel Developer I specialize in creating fully responsive Websites, Blog, Applications.
   I am currently studying Bsc(CSIT) at Texas Int'l College . I have done few projects related to web developing using laravel.
   If you would like to consult with me about your upcoming or existing website or project.Please take a look at my portfolio.
    </p>
      </div>
</div>
<style>
  body, html {
  margin: 0;
  height: 100%;
  text-align: center;
  font-family: 'Oxygen Mono', monospace;
  

}

h1 {
  text-transform: uppercase;
  letter-spacing: 1pt;
  font-size: 30pt;
  margin-bottom: 15px;


}

p {
  text-align: left;
  margin: 0;
 
  font-size: 10pt;
  font-weight: 900;
  width: 50%;
  display: none;
}



#centeralign {
  
  vertical-align: middle;


}
</style>
<script>
  function typeEffect(element, speed) {
  var text = element.innerHTML;
  element.innerHTML = "";
  
  var i = 0;
  var timer = setInterval(function() {
    if (i < text.length) {
      element.append(text.charAt(i));
      i++;
    } else {
      clearInterval(timer);
    }
  }, speed);
}


// application
var speed = 50;
var h1 = document.querySelector('h1');
var p = document.querySelector('p');
var delay = h1.innerHTML.length * speed + speed;

// type affect to header
typeEffect(h1, speed);


// type affect to body
setTimeout(function(){
  p.style.display = "inline-block";
  typeEffect(p, speed);
}, delay);

</script>