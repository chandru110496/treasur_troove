
<?php include("include/header.php"); ?>

</div>
</div>






<style>
        body{
  color:#fff
}
.right_conatct_social_icon{
     background: linear-gradient(to top right, #1325e8 -5%, #8f10b7 100%);
}
.contact_us{
    background-color: #f1f1f1;
    padding: 120px 0px;
}

.contact_inner{
    background-color: #fff;
    position: relative;
    box-shadow: 20px 22px 44px #cccc;
    border-radius: 25px;
}
.contact_field{
    padding: 60px 340px 90px 100px;
}
.right_conatct_social_icon{
    height: 100%;
}

.contact_field h3{
   color: #000;
    font-size: 40px;
    letter-spacing: 1px;
    font-weight: 600;
    margin-bottom: 10px
}
.contact_field p{
    color: #000;
    font-size: 13px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 35px;
}
.contact_field .form-control{
    border-radius: 0px;
    border: none;
    border-bottom: 1px solid #ccc;
}
.contact_field .form-control:focus{
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #1325e8;
}
.contact_field .form-control::placeholder{
    font-size: 13px;
    letter-spacing: 1px;
}

.contact_info_sec {
    position: absolute;
    background-color: #2d2d2d;
    right: 1px;
    top: 18%;
    height: 340px;
    width: 340px;
    padding: 40px;
    border-radius: 25px 0 0 25px;
}
.contact_info_sec h4{
    letter-spacing: 1px;
    padding-bottom: 15px;
}

.info_single{
    margin: 30px 0px;
}
.info_single i{
    margin-right: 15px;
}
.info_single span{
    font-size: 14px;
    letter-spacing: 1px;
}

button.contact_form_submit {
    background: linear-gradient(to top right, #1325e8 -5%, #8f10b7 100%);
    border: none;
    color: #fff;
    padding: 10px 15px;
    width: 100%;
    margin-top: 25px;
    border-radius: 35px;
    cursor: pointer;
    font-size: 14px;
    letter-spacing: 2px;
}
.socil_item_inner li{
    list-style: none;
}
.socil_item_inner li a{
    color: #fff;
    margin: 0px 15px;
    font-size: 14px;
}
.socil_item_inner{
    padding-bottom: 10px;
}

.map_sec{
    padding: 50px 0px;
}
.map_inner h4, .map_inner p{
    color: #000;
    text-align: center
}
.map_inner p{
    font-size: 13px;
}
.map_bind{
   margin-top: 50px;
    border-radius: 30px;
    overflow: hidden;
}

/* filer button */

h1 {
            margin: 50px auto;
            text-align: center;
        }

        .d-flex {
            display: flex;
            max-width: 1000px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            margin: 20px;
        }

        .dropdown__ {
            position: relative;
            cursor: pointer;
            min-width: max-content;
            max-width: 100%;
            margin-right: 50px;
        }

        .dropdown__ .head {
            padding: 10px 102px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f1f6f8;
            border-radius: 4px;
            color: #212428;
            box-shadow: 0px 0px 3px rgb(147 147 147 / 30%);
            border: 1px solid #ececec;
        }

        .dropdown__list__ {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            min-width: 100%;
            max-width: max-content;
            z-index: 9999;
            top: calc(100% + 10px);
            background: #f1f6f8;
            border-radius: 4px;
            box-shadow: 0px 0px 3px rgb(107 118 123 / 30%);
            transition: all 0.5s ease;
        }

        .dropdown__link__ {
            display: flex;
            width: 100%;
            padding: 5px 10px;
            text-decoration: none;
            color: black;
        }

        .dropdown__item__ {
            width: 100%;
            padding: 5px 10px;
        }
 


.button-nav {
    position: relative;
    cursor: pointer;
    background: transparent;
    border: 1px solid silver;
    padding: 0.5em;
    display: inline-block;
    zoom: 1;
    border-radius: 4px;
}

.button-nav .line {
    display: block;
    background: #969696;
    height: 3px;
    width: 25px;
    margin: 3px 0;
}

.header-top {
    padding: 10px;
    background: #fff;
    border-bottom: 1px solid #dad5d5;
}

.header-top h1 {
    margin: 0;
    display: inline-block;
    font-size: 1.5em;
    vertical-align: text-bottom;
    line-height: 1;
    font-weight: 400;
}

.navigation-backdrop {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
    background: rgba(212, 212, 212, 0.36);
}

.navigation {
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    background: #fff;
    z-index: 1001;
    min-width: 250px;
    overflow: auto;
    display: none;
    box-shadow: -1px 2px 6px 1px #9e9e9e;
}

.navigation.open {
	display: block;
}

.navigation-button {
    padding: 10px;
    text-align: right;
}

.navigation-heading {
    margin: 0;
    font-weight: 400;
    color: #777777;
    padding: 10px;
}

.navigation-list {
    padding: 0;
    list-style: none;
  	margin: 0;
}

.navigation-list a {
    color: #159bfb;
    text-decoration: none;
    display: block;
    padding: 10px;
}


/* countdown */

.timer{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  
}

.time{
  box-sizing: border-box;
  margin-left: 180px;
  color: black;
  font-size:1.5em;
  font-family: 'Heebo', sans-serif;
   
}
@keyframes animate{
  from{
    transform:rotate(0deg);
  }
  to{
    transform:rotate(90deg);
  }
}


.countdown{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  
}

.time{
  box-sizing: border-box;
  margin-left: 180px;
  color: black;
  font-size:1.5em;
  font-family: 'Heebo', sans-serif;
   
}
@keyframes animate{
  from{
    transform:rotate(0deg);
  }
  to{
    transform:rotate(90deg);
  }
}
/* search */
form {
        width: 400px;
        margin: auto;
        margin-top: 50px;
        margin-left: 50px;
      }
      input {
        padding: 4px 10px;
        border: 0;
        font-size: 16px;
      }
      .search {
        width: 75%;
      }
      .search2 {
        width: 60%;
      }
      .submit {
        width: 70px;
        background-color: #1c87c9;
        color: #ffffff;
      }

      .submit2 {
        width: 150px;
        background-color: #1c87c9;
        color: #ffffff;
      }


      /* card */
      .overlay_bg {
   display: block;
   position: absolute;
   top: 0;
   width: 100%;
   height: 100%;
  
   background-size: cover;
   filter: blur(0px);
   z-index: -1;
}
.title {
   padding: 0px 0px;
}
.card {
   padding-bottom: 20px;
}
.card-title {
   font-family: "Yellowtail", cursive;
   color: #000;
}
.card-text {
   color: #777;
   font-size: 0.9rem;
}
.btn_grad_blgr {
   margin: 0 auto;
   margin-bottom: 0px;
   border: 0;
   border-radius: 1em;
   padding: 15px 15px;
   font-size: 14px;
   font-weight: 300;
   background: #1657cb;
   color: #fff;
}

.btn_grad_blgr:focus,
.btn_grad_blgr:active {
   box-shadow: none !important;
   border-color: none;
}
.shine_fx {
  width: 405px;
  height: 605px;
  position: absolute;
  top: -256px;
  left: 250px;
  transition: .5s;
  transform: rotate(40deg);
  background: linear-gradient(90deg, rgba(255,255,255, 0)50%, rgba(255,255,255,0.7)100%);
   
}
.shiny {
   position: relative;   
   overflow: hidden;
   transition: ease .3s;
}
.card:hover .shine_fx {  
  transform: rotate(0);
  left: -560px;
  top: -445px;
}


    </style>


<!-- Start Shop Area -->
<h1 class="text-center">Warehouse</h1>
<div class="row justify-content-center">
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-products-box">
            <div class="products-image">
                
                    <img src="assets/images/teamup/Construction.jpg" class="main-image" alt="image">
            </div>
            <div class="products-content">
                <h3><a href="shop-details.php " style="padding: 20px;">SS Construction</a></h3><br>
                <div class="w3-container">
                    <button  class="w3-button w3-black"> <a href="wearhouse.php "> View</a></button>
                  </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-products-box">
            <div class="products-image">
                
                    <img src="assets/images/teamup/shop.jpg" class="main-image" alt="image">
            </div>
            <div class="products-content">
                <h3><a href="shop-details.php " style="padding: 20px;">SS Shop</a></h3><br>
                <div class="w3-container">
                    <button  class="w3-button w3-black"> <a href="wearhouse.php "> View</a></button>
                  </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-products-box">
            <div class="products-image">
                
                    <img src="assets/images/teamup/driver.jpg" class="main-image" alt="image">
            </div>
            <div class="products-content">
                <h3><a href="shop-details.php " style="padding: 20px;">SS Cars</a></h3><br>
                <div class="w3-container">
                    <button  class="w3-button w3-black"> <a href="wearhouse.php "> View</a></button>
                  </div>
            </div>
        </div>
    </div>
    </div>

 


    <!-- Start Review Area -->

    
    <!-- End Review Area -->

    <!-- Start Footer Area -->
    <footer class="footer-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="widget-logo">
                            <a href="index.php "><img src="assets/images/logo.png" alt="image"></a>
                            
                        </div>
                        <p>Lorem ipsum dolor sit amet consetet ur sadipscing elitr sed diam nonumy eirmod tempor invidunt labore.</p>

                        <ul class="widget-social-links">
                            <li><span>Follow:</span></li>

                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="flaticon-facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="flaticon-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="flaticon-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="flaticon-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget ps-5">
                        <h3>Company</h3>

                        <ul class="quick-links">
                            <li><a href="about-us.php ">About-us</a></li>
                            <li><a href="job-listing-2.php ">Browse Jobs</a></li>
                            <li><a href="contact.php ">Contact Us</a></li>
                            <!-- <li><a href="candidates-dashboard.php ">Candidate Dashboard</a></li> -->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Resources</h3>

                        <ul class="quick-links">
                            <li><a href="blog.php ">Blog</a></li>
                            <li><a href="dashboard-post-job.php ">Go to Freelancer Website</a></li>
                            <li><a href="candidates-1.php ">Go to Shoping Website</a></li>
                            <!-- <li><a href="privacy-policy.php ">Privacy Policy</a></li> -->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Quick Contact</h3>

                        <ul class="widget-info">
                            <li>
                                <i class="flaticon-a"></i> 32, Wales Street, New York, USA
                            </li>

                            <li>
                                <i class="flaticon-p"></i>
                                <a href="tel:00901361246725">(009)01361246725</a>
                            </li>

                            <li>
                                <i class="flaticon-e"></i>
                                <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#a2cac7cececde2c7c7d8c38cc1cdcf"><span class="__cf_email__" data-cfemail="6e060b0202012e0b0b140f400d0103">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        
    </footer>
    <!-- End Footer Area -->

    <!-- Start Go Top Area -->
   
    <script>
        const slide = {
                    main : null,
                    elementImg : null,
                    imgSelected : 0,
                    nextSlide: function (){
                        if (this.imgSelected != null)
                        {
                            if (this.imgSelected < (this.elementImg.length - 1))
                            {
                                this.imgSelected++;
                                this.normalizeSlide();
                            }
                        }
                    },
                    prevSlide: function (){
                        if (this.imgSelected != null)
                        {
                            if (this.imgSelected > 0)
                            {
                                this.imgSelected--;
                                this.normalizeSlide();
                            }
                        }
                    },
                    normalizeSlide: function (){

                        for (num = 0; num < this.elementImg.length; num++)
                        {
                            this.elementImg[num].classList.remove("hideLeft","prevLeftSecond","prev","selected","next","nextRightSecond","hideRight");
                        }

                        this.elementImg[this.imgSelected].classList.add("selected");

                        if (this.imgSelected > 2)
                        {
                            this.elementImg[this.imgSelected-2].classList.add("hideLeft");
                            this.elementImg[this.imgSelected-2].classList.add("prevLeftSecond");
                            this.elementImg[this.imgSelected-1].classList.add("prev");
                        }
                        else if (this.imgSelected > 1)
                        {
                            this.elementImg[this.imgSelected-2].classList.add("prevLeftSecond");
                            this.elementImg[this.imgSelected-1].classList.add("prev");
                        }
                        else if (this.imgSelected > 0)
                        {
                            this.elementImg[this.imgSelected-1].classList.add("prev");
                        }

                        if ((this.imgSelected + 3) < this.elementImg.length)
                        {
                            this.elementImg[this.imgSelected+3].classList.add("hideRight");
                            this.elementImg[this.imgSelected+2].classList.add("nextRightSecond");
                            this.elementImg[this.imgSelected+1].classList.add("next");
                        }
                        else if ((this.imgSelected + 2) < this.elementImg.length)
                        {
                            this.elementImg[this.imgSelected+2].classList.add("nextRightSecond");
                            this.elementImg[this.imgSelected+1].classList.add("next");
                        }
                        else if((this.imgSelected + 1) < this.elementImg.length)
                        {
                            this.elementImg[this.imgSelected+1].classList.add("next");
                        }
                    }
                }

                window.onload = () => {

                    slide.main = document.getElementById("carousel");
                    slide.elementImg = slide.main.getElementsByClassName("slideImg");

                    for (num = 0; num < slide.elementImg.length; num++)
                    {
                        slide.elementImg[num].setAttribute("img-number", num);
                        
                        slide.elementImg[num].addEventListener("click", (event) => {
                            slide.imgSelected = parseInt(event.target.parentElement.getAttribute("img-number"));
                            slide.normalizeSlide();
                        });

                        if (slide.elementImg[num].classList.contains("selected"))
                        {
                            slide.imgSelected = num;
                        }
                    }

                    document.getElementById("prev").addEventListener("click", () => {slide.prevSlide()});
                    document.getElementById("next").addEventListener("click", () => {slide.nextSlide()});

                }
    </script>
    <script>
                const allDropdowns = document.querySelectorAll('.dropdown__')
        if (allDropdowns) {
            allDropdowns.forEach(dropdown => {
                let dropdownList = dropdown.querySelector('.dropdown__list__')
                let dropdownListHeight = dropdownList.getBoundingClientRect().height
                let compStl = window.getComputedStyle(dropdownList)
                let currentpadding = compStl.getPropertyValue('padding')
                let dropdownListPadding = currentpadding
                dropdownList.style.height = '0px';
                dropdownList.style.overflow = 'hidden';
                dropdownList.style.padding = '0px'
                dropdownList.style.display = 'none';

                dropdown.addEventListener('click', () => {
                    allDropdowns.forEach(dropdown2 => {
                        if (dropdown2.classList.contains('active') && dropdown !== dropdown2) {
                            dropdown2.classList.remove('active')
                            let dropdownList2 = dropdown2.querySelector('.dropdown__list__')
                            dropdownList2.style.height = `0px`;
                            dropdownList2.style.padding = '0px'
                            let compStyle = window.getComputedStyle(dropdownList2)
                            let currentTransition = compStyle.getPropertyValue(
                                'transition-duration')
                            setTimeout(() => {
                                dropdownList2.style.display = 'none'
                            }, currentTransition.slice(0, -1) * 1000)
                        }
                    })
                    if (dropdown.classList.contains('active')) {
                        dropdown.classList.remove('active')
                        dropdownList.style.height = `0px`;
                        dropdownList.style.padding = '0px'

                        let compStyle = window.getComputedStyle(dropdownList)
                        let currentTransition = compStyle.getPropertyValue('transition-duration')
                        setTimeout(() => {
                            dropdownList.style.display = 'none'
                        }, currentTransition.slice(0, -1) * 1000)
                    } else if (!dropdown.classList.contains('active')) {
                        dropdown.classList.add('active')
                        dropdownList.style.display = 'flex';

                        setTimeout(() => {
                            dropdownList.style.height = `${dropdownListHeight}px`;
                            dropdownList.style.padding = `${dropdownListPadding}`;

                        }, 50)
                    }
                })
                document.addEventListener('click', (e) => {
                    if (!e.target.closest('.dropdown__')) {
                        allDropdowns.forEach(dropdown2 => {
                            dropdown2.classList.remove('active')
                            let dropdownList2 = dropdown2.querySelector('.dropdown__list__')
                            dropdownList2.style.height = `0px`;
                            dropdownList2.style.padding = '0px'
                            let compStyle = window.getComputedStyle(dropdownList2)
                            let currentTransition = compStyle.getPropertyValue(
                                'transition-duration')
                            setTimeout(() => {
                                dropdownList2.style.display = 'none'
                            }, currentTransition.slice(0, -1) * 1000)
                        })
                    }
                })

            })
        }
    </script>

    <script>
        //jQuery code
$( document ).on( "click", ".button-nav, .navigation-backdrop", function () {
  
  var $nav = $( "#navigation-demo" );
  var $hasClass = $nav.hasClass( "open" );

  if ( !$hasClass ) {
      $nav.addClass( "open" );
      $( "body" ).append( "<div class='navigation-backdrop'></div>" );
  } else {
      $nav.removeClass( "open" );
      $( ".navigation-backdrop" ).remove();
  }

});
    </script>
    <script>
        var timeInSecs;
var ticker;

function startTimer(secs) {
timeInSecs = parseInt(secs);
ticker = setInterval("tick()", 1000); 
}

function tick( ) {
var secs = timeInSecs;
if (secs > 0) {
timeInSecs--; 
}
else {
clearInterval(ticker);
startTimer(5*60); // 4 minutes in seconds
}

var mins = Math.floor(secs/60);
secs %= 60;
var pretty = ( (mins < 10) ? "0" : "" ) + mins + ":" + ( (secs < 10) ? "0" : "" ) + secs;

document.getElementById("countdown").innerHTML = pretty;
}

startTimer(5*60); // 4 minutes in seconds

//Credits to Gulzaib from Pakistan
    </script>

    <script>
        window.addEventListener("load",function(event){
  x=document.querySelector('.c1'); 
  y=document.querySelector('.time');
  total=20;
  t=total;
  s=setInterval(timer,1000);
});

function timer(){
  if(t===0)
    clearInterval(s);
  sec=(t%60).toString();
  min=Math.round(t/60).toString();
  console.log(min.length);
  if(min.length===1)
    min='0'+min;
  if(sec.length===1)
    sec='0'+sec;
  y.innerHTML=min+':'+sec;
  ratio=(t/total);
  rad=parseInt(x.getAttribute('r'));
  progress=Math.ceil(rad*(22/7)*2*(1-ratio));
  t-=1;
  x.style.strokeDashoffset=progress.toString();
  console.log(progress.toString());
}
    </script>

    
</body>

<?php include("include/footer.php"); ?>
</html>