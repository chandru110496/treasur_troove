
<?php include("include/head.php"); ?>  
<style>.bid{justify-content:center;align-items:center;z-index:-1;}</style>
<nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom bid">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="container" style="justify-content:stretch;" >
    <!-- <input type="search" style="border-radius:15px;width:234px;" placeholder="Search ..."><i class="fa fa-search search" style="cursor:pointer;" aria-hidden="true"></i> -->
    <div class="div"> <h5 onclick="show()" style="margin-top:1px;"> <img title="Filter" src="assets/images/products/filter.png" alt="Filter" style="width: 20px;
    height: 22px;
    margin-left: 10px;margin-top:1px;"> </h5></div>
        </div>
     </div>
     
     <h1 style="margin-right: 600px;font-size:px;">Catalog</h1>
    <!-- <div class="collapse navbar-collapse" id="navbarColor">
        <ul class="navbar-nav">                          
            <li class="nav-item "><a class="nav-link" style="font-size: 50px; padding-left: 9.5rem; color: black;">Bid</a> </li>          
        </ul>        
    </div> -->
    </div>    
</nav>


<div class="product-con">
    <nav id="menuu">
        <section class=containers id="showw" style="display: none;" onclick="expand()">
            <div class="rows">
                <aside class="col-lg-11">
                    <div class="accordion">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion_a000">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_b000" aria-expanded="true"
                                    aria-controls="accordion_b000">Modules</button>
                            </h2>

                <div id="accordion_b000"
                     class="accordion-collapse collapse show"
                     aria-labelledby="accordion_a000"
                     data-bs-parent="#accordion_a000">
                   <div class="accordion-body pt-1">
                     
                      <ul class="list-unstyled mb-0">
                         <li><a href="#">All/Any</a></li>
                         <li><a href="#">Bid</a></li>
            <li><a href="#">Buy</a></li>
            <li><a href="#">Deal</a></li>
            <li><a href="#">Catalog</a></li>
            <li><a href="#">Invest</a></li>
                      </ul>

                   </div>
                </div>
             </div>
             <div class="accordion-item" >
                <h2 class="accordion-header"
                    id="accordion_a001">
                   <button class="accordion-button"
                           type="button"
                           data-bs-toggle="collapse"
                           data-bs-target="#accordion_b001"
                           aria-expanded="true"
                           aria-controls="accordion_b001">Hot Deals</button>
                </h2>

                <div id="accordion_b001"
                     class="accordion-collapse collapse show"
                     aria-labelledby="accordion_a001"
                     data-bs-parent="#accordion_a001">
                   <div class="accordion-body pt-1">
                     
                      <ul class="list-unstyled mb-0">
                         
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Team Up</a></li>
            <li><a href="savelife.php">Save a Life</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Cart Now</a></li>
            <li><a href="wearhouse.php">Vendor</a></li>
            <li><a href="#">Daily Deal</a></li>
                      </ul>

                   </div>
                </div>
             </div>

             <div class="accordion-item mt-0">
                <h2 class="accordion-header"
                    id="accordion_a001">
                   <button class="accordion-button"
                           type="button"
                           data-bs-toggle="collapse"
                           data-bs-target="#accordion_b001"
                           aria-expanded="true"
                           aria-controls="accordion_b001">Price</button>
                </h2>
                <div id="accordion_b001"
                     class="accordion-collapse collapse show"
                     aria-labelledby="accordion_a001"
                     data-bs-parent="#accordion_a001">
                   <div class="accordion-body pt-1">

                      <input type="range"
                             class="form-range" />

                      <div class="row row-cols-md-2 g-2 mb-3">
                         <div class="col">
                            <label>Min</label>
                            <input class="form-control px-1"
                                   placeholder="0"
                                   type="number" />
                         </div>
                         <div class="col text-end">
                            <label>Max</label>
                            <input
                                   class="form-control px-1"
                                   placeholder="10000"
                                   type="number" />
                         </div>
                      </div>

                      <button class="btn btn-primary w-100">Apply</button>
                   </div>
                </div>
             </div>
          </div>
       </aside>  
 </section>
    </nav>
  </nav>         
  <section id="products" class="pro-con">
        <div class="list-pro">
                <?php
                // print_r($_SESSION['currency_type']);
                
                if($currency!="" || $currency==NULL ||$currency=="INR"){
                    $currency=1;
                }else{
                    // $currency=$_SESSION['currency_type']; 
                } 
                    ?>
    <?php
    
                    $sql="SELECT * FROM `largecards`";
                    //    echo $sql;
                    $result = $db->query($sql);
                       
                    while($row=mysqli_fetch_assoc($result)){
                        // print_r($result);
                        $product_image1 = $row['image'];
                        
                        $product_name = $row['product_name'];
                        $pdf = $row['pdf'];
                       
                        
                ?>
       
            <div class="card" style="margin-bottom: 30px;">
           <script>  echo $product=<?php echo $product_id;?></script>
           <img  style="    border-radius: 15px 15px 0 0;width: 188px;height: 210px;" src="./upload/largecards/<?php echo $product_image1; ?>" alt="Card image cap">
                <!-- The Modal -->
                <div class="card-body">
                  <p class="card-text"><?php echo $product_name; ?></p>
                  <!-- <button  style="border-radius:15px;" onclick="document.getElementById('id01').style.display='block'" class="w3-button">View</button>                     -->
                  <button  style="border-radius:15px;"  class="w3-button"><a href="./upload/largecards/<?php echo $pdf?>" target="_blank">VIEW</a></button>                    
                </div>
              </div>
        
        <?php } ?>
    </div>
</div>
</div>
</div>
</div>
</section>

<style>
    .w3-button{
        color: #fff!important;
    background-color: #0d6efd!important;
  text-transform: uppercase!important;
  font-size:12px;
    
    }
    .w3-button:hover{
        color: #fff!important;
        background:#043fa9!important;
    }
</style>

<script>
    function show() {
    var x = document.getElementById("showw");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  
  function expand() {
    var y = document.getElementById("show-list");
  
    if (y.style.display === "none") {
      y.style.display = "block";
  
    } else {
      y.style.display = "none";
    }
  }
</script>

<section id="products">
<div class="container">
    <div class="row">
                    <div id="id01" class="w3-modal">
                      <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>                       
                         <div class="elect-modal row">
                          <div class="col-md-6">  
                            <h3>Catalog</h3><br>
                            
                          </div>
                          <iframe src="<?php echo $pdf?>" width="70%" height="800" style="border: none;" allowFullScreen>
                        </iframe>                               
                         </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                         
                </div>
              </div>
        </div>

    </div>
</div>

</section>


 


    <!-- Start Review Area -->

    
    <!-- End Review Area -->

    <!-- Start Footer Area -->
 
    <!-- End Footer Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="ri-arrow-up-line"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Links of JS files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/fancybox.min.js"></script>
    <script src="assets/js/selectize.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/simplebar.min.js"></script>
    <script src="assets/js/dropzone.min.js"></script>
    <script src="assets/js/sticky-sidebar.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
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






<style>
    .product-con{
        display:flex;
        width:100%;
    }
    .pro-con{
        margin: 10px;
        padding: 10px;
        width:100%;
    }
    .list-pro{
        display:flex;
        justify-content:space-between;
        flex-wrap:wrap;
        margin: 0 20px;
    }
</style>











  <?php include("include/footer.php"); ?>


