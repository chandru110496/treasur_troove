<?php  
session_start();

include("../include/database.php");

if(isset($_POST['submit'])){
    $page=$_POST['page'];
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];  
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $rcode=$_POST['rcode'];
    // $en_ps = base64_encode($passcode);
     $sql="INSERT INTO `register`( `user_name`, `last_name`, `email`, `phone`, `password`, `cpassword`, `rcode`) VALUES ('$firstname','$lastname','$email','$phone','$password','$cpassword','$rcode')";
    $result=$db->query($sql);
    if($result==TRUE){

        $to = "development2@teckzy.com";
$subject = "Taaza Meat New Registration!";

$message = "<html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta name='x-apple-disable-message-reformatting'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title></title>
  <style type='text/css'>
    @media only screen and (min-width: 620px) {
      .u-row {
        width: 600px !important;
      }
      .u-row .u-col {
        vertical-align: top;
      }
      .u-row .u-col-100 {
        width: 600px !important;
      }
    }
    
    @media (max-width: 620px) {
      .u-row-container {
        max-width: 100% !important;
        padding-left: 0px !important;
        padding-right: 0px !important;
      }
      .u-row .u-col {
        min-width: 320px !important;
        max-width: 100% !important;
        display: block !important;
      }
      .u-row {
        width: 100% !important;
      }
      .u-col {
        width: 100% !important;
      }
      .u-col>div {
        margin: 0 auto;
      }
    }
    
    a[x-apple-data-detectors='true'] {
      color: inherit !important;
      text-decoration: none !important;
    }
  </style>
  <link href='https://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>
</head>
<body class='clean-body u_body' style='margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #f9f9f9;color: #000000'>
  <table style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #f9f9f9;width:100%' cellpadding='0' cellspacing='0'>
    <tbody>
      <tr style='vertical-align: top'>
        <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
          
          <div class='u-row-container' style='padding: 0px;background-color: transparent'>
            <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;'>
              <div style='border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;'>
                <div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
                  <div style='height: 100%;width: 100% !important;'>
                    <div style='box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;'>
                      <table style='font-family:'Cabin',sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                        <tbody>
                          <tr>
                            <td style='overflow-wrap:break-word;word-break:break-word;padding:20px;font-family:'Cabin',sans-serif;' align='left'>

                              <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                <tr>
                                  <td style='padding-right: 0px;padding-left: 0px;' align='center'>

                                    <img align='center' border='0' src='https://www.taazameatonline.com/img/taza_logo.png' alt='Image' title='Image' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 32%;max-width: 179.2px;'
                                      width='179.2' />

                                  </td>
                                </tr>
                              </table>

                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class='u-row-container' style='padding: 0px;background-color: transparent'>
            <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ed2a7c;'>
              <div style='border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;'>
                <div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
                  <div style='height: 100%;width: 100% !important;'>
                    <div style='box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;'>
                      <table style='font-family:'Cabin',sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                        <tbody>
                          <tr>
                            <td style='overflow-wrap:break-word;word-break:break-word;padding:40px 10px 10px;font-family:'Cabin',sans-serif;' align='left'>

                              <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                <tr>
                                  <td style='padding-right: 0px;padding-left: 0px;' align='center'>

                                    <img align='center' border='0' src='https://cdn.templates.unlayer.com/assets/1597218650916-xxxxc.png' alt='Image' title='Image' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 26%;max-width: 150.8px;'
                                      width='150.8' />

                                  </td>
                                </tr>
                              </table>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <table style='font-family:'Cabin',sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                        <tbody>
                          <tr>
                            <td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Cabin',sans-serif;' align='left'>

                              <div style='color: #e5eaf5; line-height: 140%; text-align: center; word-wrap: break-word;'>
                                <p style='font-size: 14px; line-height: 140%;'><strong>New User Registration</strong></p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <table style='font-family:'Cabin',sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                        <tbody>
                          <tr>
                            <td style='overflow-wrap:break-word;word-break:break-word;padding:0px 10px 31px;font-family:'Cabin',sans-serif;' align='left'>

                              <div style='color: #e5eaf5; line-height: 140%; text-align: center; word-wrap: break-word;'>
                                <p style='font-size: 14px; line-height: 140%;'><span style='font-size: 28px; line-height: 39.2px;'><strong><span style='line-height: 39.2px; font-size: 28px;'>New Registration - {".$firstname." ".$lastname."}! </span></strong>
                                  </span>
                                </p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class='u-row-container' style='padding: 0px;background-color: transparent'>
            <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #e5eaf5;'>
              <div style='border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;'>
                
                <div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
                  <div style='height: 100%;width: 100% !important;'>
                    <div style='box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;'>
                      <!--<![endif]-->

                      <table style='font-family:'Cabin',sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                        <tbody>
                          <tr>
                            <td style='overflow-wrap:break-word;word-break:break-word;padding:41px 55px 18px;font-family:'Cabin',sans-serif;' align='left'>

                              <div style='color: #003399; line-height: 160%; text-align: center; word-wrap: break-word;'>
                                <p style='font-size: 14px; line-height: 160%;'><span style='font-size: 20px; line-height: 32px;'><strong>Get in touch</strong></span></p>
                                <p style='font-size: 14px; line-height: 160%;'><span style='font-size: 16px; line-height: 25.6px; color: #000000;'>+91 733-066-5650</span></p>
                                <p style='font-size: 14px; line-height: 160%;'><span style='font-size: 16px; line-height: 25.6px; color: #000000;'>taazameatonline1@gmail.com</span></p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class='u-row-container' style='padding: 0px;background-color: transparent'>
            <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ed2a7c;'>
              <div style='border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;'>
               <div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
                  <div style='height: 100%;width: 100% !important;'>
                    <div style='box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;'>
                      <table style='font-family:'Cabin',sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
                        <tbody>
                          <tr>
                            <td style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Cabin',sans-serif;' align='left'>

                              <div style='color: #fafafa; line-height: 180%; text-align: center; word-wrap: break-word;'>
                                <p style='font-size: 14px; line-height: 180%;'><span style='font-size: 16px; line-height: 28.8px;'>Copyrights &copy; 2023 All Rights Reserved</span></p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <sudipli799@gmail.com>' . "\r\n";
$headers .= 'Cc: development1@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);

        $sql = "SELECT * FROM `register` WHERE  email = '$email' AND  password = '$password'";
         $result = $db->query($sql);
        //  echo '<pre>'.print_r($result).'</pre>';
         $user_details = mysqli_fetch_assoc($result);
         $_SESSION['user_details'] = $user_details;
        //  echo '<pre>'.print_r($_SESSION).'</pre>';
         if($result->num_rows==1){  
             if($page == ''){
                 header("Location: ../index.php?reg_status=1");
             } else{
                 header("Location: ../shoping-cart.php?reg_status=1");
             }
          
            
           }
         else {
            header("Location: ../login.php?status=1&page=$page");
        }
    }
        else{
            header("Location: ../index.php?reg_status=2");
        }
}
?>