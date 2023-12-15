<?php include("include/head.php");
$user = $_SESSION['user_details']['user_id'] ?>
</div>
        </div>
      <style>
        .newsletter-content .news .form-group .input-newsletter {
    display: inline-block;
    background-color: var(--white-color);
    border: 1px solid #80DCFF;
    border-radius: 5px;
    height: 60px;
    width: 100%;
    padding: 15px 20px;
    outline: 0;
}
.newsletter-content .news {
    margin-top: 25px;
  }
.container input {
    border: 1px solid grey;
    position: relative;
}


.newsletter-content .news {
    margin-top: 35px;
}

.newsletter-content .news .form-group {
    margin-bottom: 15px;
}

.newsletter-content .news .form-group .input-newsletter {
    display: inline-block;
    background-color: var(--white-color);
    border: 1px solid #80DCFF;
    border-radius: 5px;
    height: 60px;
    width: 100%;
    padding: 15px 20px;
    outline: 0;
}

.newsletter-content .news .form-group .input-newsletter::-webkit-input-placeholder {
    color: var(--paragraph-color);
    -webkit-transition: var(--transition);
    transition: var(--transition);
}

.newsletter-content .news .form-group .input-newsletter:-ms-input-placeholder {
    color: var(--paragraph-color);
    -webkit-transition: var(--transition);
    transition: var(--transition);
}

.newsletter-content .news .form-group .input-newsletter::-ms-input-placeholder {
    color: var(--paragraph-color);
    -webkit-transition: var(--transition);
    transition: var(--transition);
}

.newsletter-content .news .form-group .input-newsletter::placeholder {
    color: var(--paragraph-color);
    -webkit-transition: var(--transition);
    transition: var(--transition);
}

.newsletter-content .news .form-group .input-newsletter:focus {
    -webkit-box-shadow: none;
    box-shadow: none;
}

.newsletter-content .news .form-group .input-newsletter:focus::-webkit-input-placeholder {
    color: transparent;
}

.newsletter-content .news .form-group .input-newsletter:focus:-ms-input-placeholder {
    color: transparent;
}

.newsletter-content .news .form-group .input-newsletter:focus::-ms-input-placeholder {
    color: transparent;
}

.newsletter-content .news .form-group .input-newsletter:focus::placeholder {
    color: transparent;
}

.newsletter-content .news .default-btn {
    border: none;
    width: 100%;
}

.newsletter-content .news .default-btn::before {
    width: 1050px;
    height: 1050px;
}

.newsletter-content .news .validation-danger {
    color: red;
    margin-top: 10px;
}





      </style>

        <!-- Start FAQ Area -->
        <div class="faq-area ptb-100" style="padding-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="faq-box-content">
                            <h3>Frequently Asked Questions</h3>
                            <!-- <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt.</p> -->

                            <!-- <form class="faq-search-form">
                                <div class="form-group">
                                    <label><i class="flaticon-edit"></i></label>
                                    <input class="form-control" type="text" placeholder="Keywords">
                                </div>
                                
                                <div class="search-btn">
                                    <button type="submit"><i class="ri-search-line"></i></button>
                                </div>
                            </form> -->
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <div class="faq-accordion">
                            <?php 
                              $sql = "SELECT * FROM `faq` WHERE `ans` !='' ";
                              
                              $result = $db->query($sql);
                              
                   
                              $serial=0;
                  
                              while ($row = mysqli_fetch_assoc($result)) {
                                $serial++;
                                  // print_r($result);
                                  $question = $row['ques'];
                                  $answer = $row['ans'];
                                 
                                  
                              ?>
                            <div class="accordion" id="FaqAccordion">
                                <div class="accordion-item">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <?php echo $serial ?>. <?php echo $question ?>
                                    </button>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#FaqAccordion">
                                        <div class="accordion-body">
                                            <p><?php echo $answer ?></p>
                                        </div>
                                    </div>
                                </div>
<?php 

} ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start FAQ Area -->

        <!-- Start Newsletter Area -->
        <div class="newsletter-area-without-color pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="newsletter-content">
                            <h3>Subscribe Our Newsletter & Post Your First Job For Free</h3>
                            <!-- <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p> -->

                            <form class="news" data-bs-toggle="validator" method="POST">
                                <div class="form-group">
                                    <input type="text" class="input-newsletter" placeholder="Ask  any question" name="ask_question" required autocomplete="off">
                                    <input type="hidden" class="" value="<?php echo $user;?>" name="user">
                                </div>

                                <button type="submit"  name="submit" class="default-btn">Send<i class="flaticon-send"></i></button>
                                <!-- <div id="validator-newsletter" class="form-result"></div> -->
                            </form>
                            <?php 
                                  if(isset($_POST['submit'])){ 
                                      $question=$_POST['ask_question'];
                                      $user_ins=$_POST['user'];
                                     

                                      $sql="INSERT INTO `faq`( `ques`,`user_id`) VALUES ('$question','$user_ins')";
                                    //   print_r($sql);
                                        $res=$db->query($sql);
                                        //    print_r($res);
                                        if($res){
                                            // echo "<script>alert('Question Send Successfully');</script>";
                                        }else{
                                          echo "insert error".$conn->error;
                                        }
                                  }
                                  ?>


                            <div class="layer-shape">
                                <img src="assets/images/newsletter/layer.png" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="newsletter-image">
                            <img src="assets/images/newsletter/newsletter-1.png" data-aos="fade-left" data-aos-delay="50" data-aos-duration="500" alt="image">

                            <div class="circle-pattern" data-aos="fade-down" data-aos-delay="70" data-aos-duration="700"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
        <!-- End Newsletter Area -->

        <?php include("include/footer.php"); ?>