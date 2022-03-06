<!DOCTYPE html>
<html lang="en">
<title>Port Pure</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #04AA6D;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Pure<br>Natnicha</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">About Me</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Skills</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Education</a>
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Activities</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Pure Natnicha</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Natnicha Chuenchitpisaikul</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Software Engineering</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="/image/cat.jpeg" style="width:100%" onclick="onClick(this)" alt="Natnicha Chuenchitpisaikul">
    </div>

    <div class="w3-half">
        <h3 class="about-me"><b>I am software developer who's knowledge of testing including performance, functional , system and coding. Seeking a Software Engineering internship where I can apply my software skills, eagerness to learn, and passion for software engineering. Extremely motivated to constantly develop my skill, learn something new and grow professionally.
        </b></h3>
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Skills -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Skills.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>

  <div class="w3-row-padding">
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">Soft Skills</li>
        <li class="w3-padding-16">Exceptional communication skills</li>
        <li class="w3-padding-16">Work well with others</li>
        <li class="w3-padding-16">The ability to work pressure and multi-task</li>
        <li class="w3-padding-16">The ability to follow instructions and deliver quality results</li>
        <li class="w3-padding-16">Leader in project group work</li>
        <li class="w3-padding-16">Keen to learn new technology</li>
      </ul>
    </div>
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Hard Skills</li>
        <li class="w3-padding-16">Programming languages such as Python, HTML, Java, JavaScript, SQL, PHP , Swift UI and C</li>
        <li class="w3-padding-16">Experienced in mobile application using React Native and Xcode for development</li>
        <li class="w3-padding-16">Experienced in using software development tools such as Firebase , Stack overflow , Github and Laravel</li>
        <li class="w3-padding-16">Object oriented analysis and design and Software pattern</li>
        <li class="w3-padding-16">Basic knowledge of Computer Server Configuration, Cloud Computing and Data Science</li>
        <li class="w3-padding-16">Experienced in Software testing and audit quality assurance for software document</li>
        <li class="w3-padding-16">Good knowledge of Photoshop and Premiere Pro</li>
      </ul>
    </div>
  </div>

  
  <!-- Education -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Education.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <h2><b>Software Engineering at Thammasat University</b></h2>
    <h3><b>3rd year student</b></h3>
    <h3><b>GPA: 3.11</b></h3>
  </div>

  
  <!-- Activities -->
  <div class="w3-container" id="packages" style="margin-top:75px">
        <div class="w3-row-padding">
        <div class="w3-half">
            <h1 class="w3-xxxlarge w3-text-red w3-margin-bottom"><b>Activities.</b></h1>
            <hr style="width:50px;border:5px solid red" class="w3-round">
        </div>
        <div class="w3-half w3-margin-bottom w3-padding-48">
            <a href="/posts/create" class="button ">Add Activities</a>
        </div>
        @foreach($posts as $post)
            <article class="mb-2">
                <a href="/posts/{{ $post->id }}/edit" class="w3-xlarge font-bold text-blue-500">{{ $post->title }}</a>
                <p class="w3-large text-gray-600">{!! nl2br(e($post->content))!!}</p>

                <hr class="mt-2">
            </article>
        @endforeach
    </div>



  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p><i class="fa fa-home fa-fw w3-xxlarge w3-margin-right"> </i>20/19 Village No.1 Vichitsongkarm Road, Kathu Sub-district, Kathu District, Phuket, 83120</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"> </i>083-395-4960</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i>natnicha.ccpsk@gmail.com</p>
    <p><i class="fa fa-comment fa-fw w3-xxlarge w3-margin-right"> </i>ID : 083-395-4960</p>
    <p><i class="fa fa-linkedin-square fa-fw w3-xxlarge w3-margin-right"> </i>www.linkedin.com/in/ NatnichaChuenchit</p>
  </div>

    
<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a title="Natnicha" target="_blank" class="w3-hover-opacity">Natnicha Chuenchitpisaikul</a></p></div>


<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}  

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>

</body>
</html>
