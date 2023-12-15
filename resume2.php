<head>
    <!--*****************LEVIOOSA RESUME******************-->
    <!DOCTYPE html>
    <html>
    <head>
    
    <!--TITLE-->
    <title>Make a RESUME</title>
    
    <!--ICON-->
    <link rel="shortcut icon" href="images/logo.png">
    
    <!--META TAGS-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Mahesh">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="LEVIOOSA RESUME" />
    
    
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&family=Ubuntu&display=swap" rel="stylesheet"> 
    <style>
        *,html{
scroll-behavior: smooth;
}
*, *:after, *:before {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
:root{
scrollbar-color: rgb(210,210,210) rgb(46,54,69) !important;
scrollbar-width: thin !important;
}
::-webkit-scrollbar {
height: 12px;
width: 8px;
background: #000;
}
::-webkit-scrollbar-thumb {
background: gray;
-webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.75);
}
::-webkit-scrollbar-corner {
background: #000;
}

/*DEFAULT*/
body{
margin:0;
font-family: 'Exo 2', sans-serif;
}
a{
text-decoration:none;
}
ul{
position:relative;
left:-40px;
width:100%;
}
i{
color:#3399ff;
margin:0 5px;
}
li{
list-style:none;
margin:20px 0;
width:100%;
line-height:1.4em;
}
a,li,button{
transition:0.5s;
}
a{
cursor:pointer;
}
b,strong{
font-weight:700;
}
p,li{
line-height:1.4em;
letter-spacing:0.08em;
}
em{
color:#3399ff;
font-weight:700;
font-size:0.8em;
display:block;
font-style:normal;
}
label{
color:#3399ff;
font-weight:700;
font-size:0.8em;
display:block;
margin:10px 0;
}
img{
width:90%;
height:90%;
margin:auto;
}
.title{
font-size:2em;
font-family: 'Ubuntu', sans-serif;
font-weight:700;
}
.sub-title{
font-size:1em;
font-weight:400;
color:gray;
line-height:1em;
}

/*CONTAINER*/
.container{
width:100%;
position:relative;
}

.container .section_left{
width:25%;
padding:20px;
background: #1b2631 ;
color:#fff;
}

.container .section_left img{
width:80px;
height:80px;
border-radius:50%;
margin:auto;
}

.container .progress_container{
width:90%;
height:10px;
border-radius:20px;
background:#1e1e1e;
}

.container .progress_container .progress_bar{
background:#3399ff;
border-radius:20px;
height:10px;
}

.container .section_right{
padding:30px;
width:75%;
float:right;
position:absolute;
top:0;
right:0;
}

.container .section_right table{
width:100%;
}

.container .section_right table td{
padding:10px;
}

.container .section_right table td:nth-child(1){
width:20%;
font-weight:bold;
}

@media (max-width:920px){
.container .section_left{
width:100%;
display:block;
}
.container .section_right{
width:100%;
position:static;
display:block;
}
}
    </style>
    <!--PLUGIN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--EXTERNAL CSS-->
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <div class="container">
    <section class="section_left">
    <center>
    <img src="https://source.unsplash.com/weekly?person" alt="AUTHOR">
    <h1 class="title">LEVIOOSA</h1>
    </center>
    <hr></hr>
    <h5 class="sub-title">CONTACT INFO</h5>
    <ul>
    <li><i class="fa fa-phone"></i> +xx-xxxxx-xxxxx</li>
    <li><i class="fa fa-envelope"></i> Levioosa@mail.com</li>
    <li><i class="fa fa-globe"></i> www.Levioosa.tech</li>
    <li><i class="fa fa-map-marker"></i> Street, Province, State, Country</li>
    <ul>
    <h5 class="sub-title">EDUCATION</h5>
    <em>Primary</em>
    <p>School name - year to year</p>
    <em>College</em>
    <p>College name - year to year</p>
    <em>Graduation</em>
    <p>Collage name - year to year</p>
    <h5 class="sub-title">LANGUAGE</h5>
    <label>Language-1</label>
    <div class="progress_container">
    <div class="progress_bar" style="width:25%"></div>
    </div>
    <label>Language-2</label>
    <div class="progress_container">
    <div class="progress_bar" style="width:25%"></div>
    </div>
    <label>Language-3</label>
    <div class="progress_container">
    <div class="progress_bar" style="width:90%"></div>
    </div>
    </section>
    <section class="section_right">
    <h1 class="title">PROFILE</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
    <h1 class="title">EXPERIENCE</h1>
    <h5 class="sub-title">Web developer & designer</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    <em style="float:right;">Period Of Work</em>
    <h5 class="sub-title">Web developer & designer</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    <em style="float:right;">Period Of Work</em>
    <h5 class="sub-title">Web developer & designer</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    <em style="float:right;">Period Of Work</em>
    <h1 class="title">PROFESSIONAL SKILLS</h1>
    <table>
    <tr>
    <td>
    HTML
    </td>
    <td>
    <div class="progress_container">
    <div class="progress_bar" style="width:90%"></div>
    </div>
    </td>
    </tr>
    <tr>
    <td>
    HTML
    </td>
    <td>
    <div class="progress_container">
    <div class="progress_bar" style="width:90%"></div>
    </div>
    </td>
    </tr>
    <tr>
    <td>
    HTML
    </td>
    <td>
    <div class="progress_container">
    <div class="progress_bar" style="width:90%"></div>
    </div>
    </td>
    </tr>
    <tr>
    <td>
    HTML
    </td>
    <td>
    <div class="progress_container">
    <div class="progress_bar" style="width:90%"></div>
    </div>
    </td>
    </tr>
    </table>
    </section>
    </div>
    