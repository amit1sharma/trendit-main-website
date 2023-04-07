<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
    header('Location: https://trenditapp.com/');
    exit;
} 
?>
<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Trendit App</title>


    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="title" content="Trendit – ¬Book Beautician at Home, Salon Services">
<meta name="description" content="Trendit offers powerful business tools for beauty and barber professionals, it gives clients an easy way to discover, and book services .">
<meta name="keywords" content="makeup appointment, salon appointment, salon booking, salon at home, beauty parlor services at home, appointment salon, book beauty services, hair salon appointment booking app, hair stylist app, makeup appointment, salon appointment, salon bookings, salon locator, styleseat, barbershop software, beauty appointments, beauty services, home services, home expert, Household service, Service finder, Top home service app, salon at home, salon finder, hair 411 by the knot, hair master hd, salon locator, be u salons hair, supercuts, salon booking, affinity hair, hair salon appointment booking app, salon bookings, salon booking app, salon on the go, istashi, hair salon app, salon software, hairshow, salon appointment, Makup beauty service, makup video, makup videos, makup tips, beautition, makup advice app, salon booking app, free appointment scheduler, booking organizer, hair salon appointment booking app, appointment scheduler, salon booking, salon iris, management appointment organizer, saison manager, appointment checker, business appointment organizer, salon bookings, appointment booking app, salon bookings, salon booking app, salon booking, talabat, booking.com hotel reservations, booking com, hair stylist app, makeup appointment, salon appointment, salon locator, salon booking, home expert, salon at home, beauty parlour services at home, salon booking, salon finder, salon locator">
<meta name="robots" content="index, follow">
<meta name="language" content="English">
<meta property="og:title" content="Trendit – ¬Book Beautician at Home, Salon Services">
<meta property="og:image" content="https://trenditapp.com/assets/images/logo.png">
    <link rel="shortcut icon" href="assets\images\favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets\images\favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets\css\bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets\css\font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="assets\css\jarallax.css">

    <link rel="stylesheet" type="text/css" href="assets\css\owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="assets\css\magnific-popup.css">

    <link rel="stylesheet" type="text/css" href="assets\css\jquery.mCustomScrollbar.css">

    <link rel="stylesheet" type="text/css" href="assets\css\animate.min.css">

    <link rel="stylesheet" type="text/css" href="assets\css\waves.css">

    <link rel="stylesheet" type="text/css" href="assets\css\style.css">

    <link rel="stylesheet" type="text/css" href="assets\css\responsive.css">

    <link rel="stylesheet" type="text/css" href="assets/css/colors.css" id="color">
    
    <style>
        
        .white-space-pre {
    white-space: pre-wrap;
    font-weight:400;
    text-align:left;
}

    .circle-txt2 {
    font-size: 16px;
    font-weight: 600;
    left: 0;
    line-height: 40px;
    position: absolute;
    text-align: center;
    top: 5px;
    width: 100%;
    opacity: 1;
    color:#ed1c24;
    }
    .custom_form {
    text-align: center;
    box-shadow:1px 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    border-radius: 4px;
    max-width: 637px;
    padding-top: 25px;
    padding-bottom: 25px;
}
form.set-submit-input .form-group {
    text-align: left;
}

form.set-submit-input {
    padding-left: 15px;
    padding-right: 15px;
}

    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <div id="btry-loader">
        <div class="btry inner">
            <div class="btry-charge"></div>
        </div>
    </div>
    <div id="outdated">
        <h6>Your browser is out-of-date!</h6>
        <p>Update your browser to view this website correctly. <a id="btnUpdateBrowser"
                href="http://outdatedbrowser.com/">Update
                my browser now </a></p>
        <p class="last"><a href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p>
    </div>


    <nav class="navbar default" style="z-index:10000000">
        <div class="container mob-logo nav-custom">
            <div class="navbar-header col-sm-2 tablet-logo">
                <button type="button" class="navbar-toggle mob-menu" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="mobile-sidebar">
                    <span class="sidebar-btn btn fa-bar-hide" data-action="toggle" data-side="right">
                        <i class="fa fa-bars"></i>
                    </span>
                </div>
                <a href="index.html" class="brand-logo">
                    <img src="assets\images\logo1.png" alt="Trendit logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active navbar-border mr40">
                        <a href="#home">Home</a>
                    </li>
                    <li class="mr40">
                        <a href="#feature-desc">Services</a>
                    </li>
                    <li class="mr40">
                        <a href="#providers">Providers</a>
                    </li>
                    <li class="mr40">
                        <a href="#why_us">Users</a>
                    </li>
                    <li class="mr40">
                        <a href="#questions">FAQ</a>
                    </li>
                    <li class="mr40">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<section id="testimonials" class="jarallax testimonial-jarallax" data-jarallax='{"speed": 0.2}'
        style="background-image: url(assets/images/image2.png);">
        <div class="container">
            <div class="row" style="min-height: 20em;">

            </div>
        </div>
    </section> 
    <section id="questions">
        <div class="container-fluid">
            <div class="row" id="contact">
                <div class="col-sm-12" style="display:flex; flex-direction:column; align-items: center;">
                    <div class="custom_form">
                    <i class="fa fa-envelope fa-5x icon-color mb20" aria-hidden="true"></i>
                    <h2><strong>Push Notification</strong></h2>
                    <form class=" set-submit-input" action="#" method="post" enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Title</label>
                                  <input type="text" name="title" class="form-control" id="title" required="">
                        
                               </div>
                              
                          </div>
						  <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Usertype</label>
                                  <select name="user_type" class="form-control" id="user_type" required="">
                                    <option value="">Select</option>  
									<option value="">Both</option>
									<option value="u">User</option>
									<option value="p">Provider</option>
								  </select>
                        
                               </div>
                              
                          </div>
						  <div class="col-md-12">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Message</label>
                                  <textarea name="contact_message" id="contact_message" class="form-control" required=""></textarea>
                        
                               </div>
                              
                          </div>
						  <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Gender</label><br>
                                  <input type="radio" name="gender" value="m"/> Male
                                  <input type="radio" name="gender" value="f"/> Female
                                  <input type="radio" name="gender" value="o"/> Other
                        
                               </div>
                              
                          </div>
						  <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">City</label>
                                  <input type="text" name="city" class="form-control" id="city" required="">
                        
                               </div>
                              
                          </div>
						  
						  <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Country</label>
                                  <select name="country" class="form-control" id="country" required="">
                                    <option value="">Select</option>  
									<option value="1">Afghanistan</option>
									<option value="2">Albania</option>
									<option value="3">Algeria</option>
									<option value="4">American Samoa</option>
									<option value="5">Andorra</option>
									<option value="6">Angola</option>
									<option value="7">Anguilla</option>
									<option value="8">Antarctica</option>
									<option value="9">Antigua and Barbuda</option>
									<option value="10">Argentina</option>
									<option value="11">Armenia</option>
									<option value="12">Aruba</option>
									<option value="13">Australia</option>
									<option value="14">Austria</option>
									<option value="15">Azerbaijan</option>
									<option value="16">Bahamas</option>
									<option value="17">Bahrain</option>
									<option value="18">Bangladesh</option>
									<option value="19">Barbados</option>
									<option value="20">BY</option>
									<option value="21">Belgium</option>
									<option value="22">Belize</option>
									<option value="23">Benin</option>
									<option value="24">Bermuda</option>
									<option value="25">Bhutan</option>
									<option value="26">Bolivia</option>
									<option value="27">Bosnia and Herzegovina</option>
									<option value="28">Botswana</option>
									<option value="29">Brazil</option>
									<option value="30">Brunei Darussalam</option>
									<option value="31">Bulgaria</option>
									<option value="32">Burkina Faso</option>
									<option value="33">Burundi</option>
									<option value="34">Cambodia</option>
									<option value="35">Cameroon</option>
									<option value="36">Canada</option>
									<option value="37">Cape Verde</option>
									<option value="38">Cayman Islands</option>
									<option value="39">Central African Republic</option>
									<option value="40">Chad</option>
									<option value="41">Chile</option>
									<option value="42">China</option>
									<option value="43">Christmas Island</option>
									<option value="44">Cocos (Keeling) Islands</option>
									<option value="45">Colombia</option>
									<option value="46">Comoros</option>
									<option value="47">Democratic Republic of the Congo</option>
									<option value="48">Congo</option>
									<option value="49">Cook Islands</option>
									<option value="50">Costa Rica</option>
									<option value="51">Cote D'Ivoire (Ivory Coast)</option>
									<option value="52">Croatia (Hrvatska)</option>
									<option value="53">Cuba</option>
									<option value="54">Cyprus</option>
									<option value="55">Czech Republic</option>
									<option value="56">Denmark</option>
									<option value="57">Djibouti</option>
									<option value="58">Dominica</option>
									<option value="59">Dominican Republic</option>
									<option value="60">East Timor</option>
									<option value="61">Ecuador</option>
									<option value="62">Egypt</option>
									<option value="63">El Salvador</option>
									<option value="64">Equatorial Guinea</option>
									<option value="65">Eritrea</option>
									<option value="66">Estonia</option>
									<option value="67">Ethiopia</option>
									<option value="68">Falkland Islands (Malvinas)</option>
									<option value="69">Faroe Islands</option>
									<option value="70">Fiji</option>
									<option value="71">Finland</option>
									<option value="72">France</option>
									<option value="73">French Guiana</option>
									<option value="74">French Polynesia</option>
									<option value="75">Gabon</option>
									<option value="76">Gambia</option>
									<option value="77">Georgia</option>
									<option value="78">Germany</option>
									<option value="79">Ghana</option>
									<option value="80">Gibraltar</option>
									<option value="81">Greece</option>
									<option value="82">Greenland</option>
									<option value="83">Grenada</option>
									<option value="84">Guadeloupe</option>
									<option value="85">Guam</option>
									<option value="86">Guatemala</option>
									<option value="87">Guinea</option>
									<option value="88">Guinea-Bissau</option>
									<option value="89">Guyana</option>
									<option value="90">Haiti</option>
									<option value="91">Honduras</option>
									<option value="92">Hong Kong</option>
									<option value="93">Hungary</option>
									<option value="94">IS</option>
									<option value="95">India</option>
									<option value="96">Indonesia</option>
									<option value="97">Iran (Islamic Republic Of)</option>
									<option value="98">Iraq</option>
									<option value="99">Ireland</option>
									<option value="100">Israel</option>
									<option value="101">Italy</option>
									<option value="102">Jamaica</option>
									<option value="103">Japan</option>
									<option value="104">Jordan</option>
									<option value="105">Kazakhstan</option>
									<option value="106">Kenya</option>
									<option value="107">Kiribati</option>
									<option value="108">KP</option>
									<option value="109">Republic of Korea</option>
									<option value="110">Kuwait</option>
									<option value="111">Kyrgyzstan</option>
									<option value="112">Laos</option>
									<option value="113">Latvia</option>
									<option value="114">Lebanon</option>
									<option value="115">Lesotho</option>
									<option value="116">Liberia</option>
									<option value="117">Libya</option>
									<option value="118">Liechtenstein</option>
									<option value="119">Lithuania</option>
									<option value="120">Luxembourg</option>
									<option value="121">Macao</option>
									<option value="122">Macedonia</option>
									<option value="123">Madagascar</option>
									<option value="124">Malawi</option>
									<option value="125">Malaysia</option>
									<option value="126">Maldives</option>
									<option value="127">Mali</option>
									<option value="128">Malta</option>
									<option value="129">Marshall Islands</option>
									<option value="130">Martinique</option>
									<option value="131">Mauritania</option>
									<option value="132">Mauritius</option>
									<option value="133">Mayotte</option>
									<option value="134">Mexico</option>
									<option value="135">Micronesia, Federated States Of</option>
									<option value="136">Moldova</option>
									<option value="137">Monaco</option>
									<option value="138">Mongolia</option>
									<option value="139">Montserrat</option>
									<option value="140">Morocco</option>
									<option value="141">Mozambique</option>
									<option value="142">Myanmar</option>
									<option value="143">Namibia</option>
									<option value="144">Nauru</option>
									<option value="145">Nepal</option>
									<option value="146">Netherlands</option>
									<option value="147">Antilles - Netherlands</option>
									<option value="148">New Caledonia</option>
									<option value="149">New Zealand</option>
									<option value="150">Nicaragua</option>
									<option value="151">Niger</option>
									<option value="152">Nigeria</option>
									<option value="153">Niue</option>
									<option value="154">Norfolk Island</option>
									<option value="155">Northern Mariana Islands</option>
									<option value="156">Norway</option>
									<option value="157">Oman</option>
									<option value="158">Pakistan</option>
									<option value="159">Palau</option>
									<option value="160">Palestinian Territory</option>
									<option value="161">Panama</option>
									<option value="162">Papua New Guinea</option>
									<option value="163">Paraguay</option>
									<option value="164">Peru</option>
									<option value="165">Philippines</option>
									<option value="166">Pitcairn</option>
									<option value="167">Poland</option>
									<option value="168">Portugal</option>
									<option value="169">Portugal</option>
									<option value="170">Qatar</option>
									<option value="171">Reunion</option>
									<option value="172">Romania</option>
									<option value="173">Russian Federation</option>
									<option value="174">Rwanda</option>
									<option value="175">Saint Helena</option>
									<option value="176">Saint Kitts and Nevis</option>
									<option value="177">Saint Lucia</option>
									<option value="178">Saint Pierre and Miquelon</option>
									<option value="179">Saint Vincent and the Grenadines</option>
									<option value="180">Samoa</option>
									<option value="181">San Marino</option>
									<option value="182">Sao Tome and Principe</option>
									<option value="183">Saudi Arabia</option>
									<option value="184">Senegal</option>
									<option value="185">Seychelles</option>
									<option value="186">Sierra Leone</option>
									<option value="187">Singapore</option>
									<option value="188">Slovakia</option>
									<option value="189">Slovenia</option>
									<option value="190">Solomon Islands</option>
									<option value="191">Somalia</option>
									<option value="192">South Africa</option>
									<option value="193">Spain</option>
									<option value="194">Sri Lanka</option>
									<option value="195">Sudan</option>
									<option value="196">Suriname</option>
									<option value="197">Swaziland</option>
									<option value="198">Sweden</option>
									<option value="199">Switzerland</option>
									<option value="200">Syria</option>
									<option value="201">Taiwan</option>
									<option value="202">Tajikistan</option>
									<option value="203">Tanzania, United Republic Of</option>
									<option value="204">Thailand</option>
									<option value="205">Tokelau</option>
									<option value="206">Tonga</option>
									<option value="207">Trinidad and Tobago</option>
									<option value="208">Tunisia</option>
									<option value="209">Turkey</option>
									<option value="210">Turkmenistan</option>
									<option value="211">Turks and Caicos Islands</option>
									<option value="212">Tuvalu</option>
									<option value="213">Uganda</option>
									<option value="214">Ukraine</option>
									<option value="215">United Arab Emirates</option>
									<option value="216">Great Britain (UK)</option>
									<option value="217">United States</option>
									<option value="218">Uruguay</option>
									<option value="219">Uzbekistan</option>
									<option value="220">Vanuatu</option>
									<option value="221">Vatican City State</option>
									<option value="222">Venezuela</option>
									<option value="223">Vietnam</option>
									<option value="224">Virgin Islands (U.S.)</option>
									<option value="225">VQ</option>
									<option value="226">Wallis and Futuna</option>
									<option value="227">Yemen</option>
									<option value="228">Zambia</option>
									<option value="229">Zimbabwe</option>
									<option value="230">Swaziland</option>
									<option value="231">SS</option>
									<option value="232">Togo</option>
								  </select>
                        
                               </div>
                              
                          </div>
						  <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">State</label>
                                  <input type="text" name="state" class="form-control" id="state" required="">
                        
                               </div>
                              
                          </div>
						  <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Category</label>
									<select class="form-control" id="category" required="">
									 <option value="">Select</option>   
									 <option value="6">Barber</option>
									 <option value="2">Beauty / Cosmetic</option>
									 <option value="17">Electrologist</option>
									 <option value="1">Esthetic</option>
									 <option value="4">Hair Braid / Style</option>
									 <option value="9">Makeup</option>
									 <option value="15">Massage / Chiropractic</option>
									 <option value="16">Others</option>
									 <option value="18">Photography</option>
									 <option value="12">SPA / Lashes / Nail</option>
									 <option value="14">Tattoo / Piercing</option>
									 <option value="13">Waxer</option>
									</select>
                               </div>
                              
                          </div>
						  <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Service type</label>
                                  <select class="form-control" id="service_type" required="" name="service_type">
                                    <option value="">Select</option>
                                    <option value="1">Shop Services</option>
                                    <option value="2">Mobile Services</option>
                                  </select>
                                  
                        
                               </div>
                              
                          </div>
						  <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="text" name="email" class="form-control" id="email" required="">
                        
                               </div>
                              
                          </div>
						  <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Image</label>
                                  <input type="text" name="image" class="form-control" id="image" required="">
                        
                               </div>
                              
                          </div>
						  <div class="clearfix"></div>
						  <div class="col-md-12">
                              <button type="submit" class="btn btn-primary submit_pushnot common-btn colored-button float-button-light  pull-right waves-effect waves-button waves-float waves-light">Submit
                                <i class="fa fa-paper-plane ml5" aria-hidden="true"></i></button>
                              
                          </div>
                      </div>  
                      </form>
                    <div>
                        

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<footer>
        <section id="footer">
            <div class="container text-center">
                <div class="row">

                    <div class="col-md-4">
                        <img style="max-width:100px;" src="assets/images/logo1.png" alt="">
                    </div>

                    <div class="col-md-4 text-left " style="display:flex; flex-direction:column;">

                        <a href="" target="blank" class="mb20 title-para">
                            Careers
                        </a>
                        <a href="https://www.facebook.com/Trendit-App-102512217890327/" target="blank"
                            class="mb20 title-para">
                            Facebook
                        </a>
                        <a href="https://www.youtube.com/channel/UCVTKao4SjIHvDT58kGEnenQ" target="blank" class="mb20 title-para">
                            YouTube
                        </a>
                        <a href="#" data-toggle="modal" data-target="#signin-page" data-modal-form="sign-in" class="mb20 title-para" data-ng-click="openLoginModel()">Login</a>
                        <!--Modals Start-->
                        <div class="modal fade" id="signin-page" style="display: none;">
    <div class="modal-dialog">
        <div>
            <button type="button" id="btn-close-modal" data-dismiss="modal">
                <i class="fa fa-times icon-color"></i>
            </button>
            <div class="modal-center">
                <div class="tab-content">
                    <!-- Sign in form -->
                    <form class="modal-background form-material tab-pane transition scale fade in active ng-pristine ng-invalid ng-invalid-required" id="signin-form" autocomplete="off">
                        <div class="modal-heading">
                            <h2 class="icon-color">Login</h2>
                        </div>
                        <div class="form-group mt20">
                            <input type="text" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" required="" data-ng-model="lUname" id="txtuname">
                            <span class="form-bar"></span>
                            <label class="float-label" for="txtuname">Enter User-name</label>
                        </div>
                        <div class="form-group mt20">
                            <input type="password" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" required="" data-ng-model="lPsw" id="txtpassword">
                            <span class="form-bar"></span>
                            <label class="float-label" for="txtpassword">Enter Password</label>
                        </div>
                        <!--<div class="form-group text-right">
                            <a href="#">Forgot Password?</a>
                        </div>-->
                        <div class="clearfix">

                            <div class="col-md-12 col-xs-12 login-modal-btn colored-button button btn btn-primary common-btn float-button-light mob-login-modal-btn mb20 my_login">
                                <h3 class="text-center">LOGIN NOW</h3>
                            </div>
                        </div>
                        <!-- Switching forms (Fake nav tab) -->
                        <!--<div class="row mr0 ml0">
                            <div class="form-switch pull-right">Do you wish to register for a <a href="#form-1"> New account? </a></div>
                        </div>-->
                    </form>
                    <!-- Sign up form -->
                    <form class="modal-background form-material tab-pane transition scale fade ng-pristine ng-invalid ng-invalid-required" id="signup-form">
                        <div class="modal-heading">
                            <h2 class="icon-color">Sign Up</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mt20">
                                    <input type="text" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" required="" data-ng-model="SUname" id="txtname">
                                    <span class="form-bar"></span>
                                    <label class="float-label" for="txtname">Enter User-Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mt20">
                                    <input type="text" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" required="" data-ng-model="SEmail" id="txtemail">
                                    <span class="form-bar"></span>
                                    <label class="float-label" for="txtemail">Enter E-mail_ID</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group sign-pw">
                            <input type="password" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" required="" data-ng-model="SPsw" id="txtpass">
                            <span class="form-bar"></span>
                            <label class="float-label" for="txtpass">Enter Password</label>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" required="" data-ng-model="SCPsw" id="txtconfirmpass">
                            <span class="form-bar"></span>
                            <label class="float-label" for="txtconfirmpass">Confirm Password</label>
                        </div>
                        <div class="clearfix">

                            <div class="col-md-12 col-xs-12 login-modal-btn colored-button button btn btn-primary common-btn float-button-light mob-login-modal-btn mb20">
                                <h3 class="text-center">CREATE ACCOUNT</h3>
                            </div>
                        </div>
                        <!-- Switching forms (Fake nav tab) -->
                        <div class="row mr0 ml0">
                            <div class="form-switch pull-right">Already have an account? <a href="#form-2">Sign in</a></div>
                        </div>

                    </form>
                </div>
                <!-- Hidden real nav tabs -->
                <ul class="nav-tabs hidden">
                    <li id="form-1"><a data-ng-click="OpenForm1()" href="#signup-form" data-toggle="tab">Sign up</a></li>
                    <li id="form-2"><a data-ng-click="OpenForm2()" href="#signin-form" data-toggle="tab">Sign in</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Modals End-->
                        <a href="terms.html" target = "blank" class="mb20 title-para">
                            Terms & Conditions
                        </a>
                        <a href="" target="blank" class="mb20 title-para">
                            Privacy Policy
                        </a>
                        <a href="" target="blank" class="mb20 title-para">
                            Copyright
                        </a>
                    </div>
                    <div class="mb20 hidden-sm hidden-xs">

                        <a href = "https://apps.apple.com/us/app/trendit-app/id1468840934?ls=1" class="btn default_color available-btn colored-button float-button-light">
                            <i class="fa fa-mobile"></i>
                            <em> Available on </em>
                            App store
                        </a>
                        <a href = "https://play.google.com/store/apps/details?id=com.trenditapp.trendit" class="btn default_color available-btn colored-button float-button-light">
                            <i class="fa fa-android"></i>
                            <em> Available on </em>
                            Google Play
                        </a>
                    </div>
                    <p class="footer-copyright mb0"> L&L8 GROUP LLC &copy; <span id="copyright-year">2019</span>. All
                        rights
                        reserved </p>
                </div>
            </div>
        </section>
    </footer>


    <a class="btn btn-lg waves-effect waves-light scrollup"><i class="fa fa-arrow-up"></i></a>




    <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="assets/images/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="assets/images/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="assets/images/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="assets/images/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="assets/images/ie.png" alt="">
                                <div>IE (9 & above)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>   
        <![endif]-->


    <script src="assets\js\jquery.2.2.3.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>

    <script src="assets\js\jarallax.min.js"></script>

    <script src="assets\js\jquery.sidebar.min.js"></script>

    <script src="assets\js\owl.carousel.min.js"></script>

    <script src="assets\js\jquery.magnific-popup.min.js"></script>

    <script src="assets\js\jquery.counterup.js"></script>

    <script src="assets\js\waypoints.min.js"></script>

    <script src="assets\js\mCustomScrollbar.min.js"></script>

    <script src="assets\js\tweetie.min.js"></script>

    <script src="assets\js\waves.min.js"></script>

    <script src="assets\js\custom.js"></script>
    <script src="assets\js\outdatedbrowser.js"></script>
    <script>
        // Plain Javascript
        //event listener: DOM ready
        function addLoadEvent(func) {
            var oldonload = window.onload;
            if (typeof window.onload != 'function') {
                window.onload = func;
            } else {
                window.onload = function () {
                    if (oldonload) {
                        oldonload();
                    }
                    func();
                }
            }
        }
        //call plugin function after DOM ready
        addLoadEvent(function () {
            window.scrollTo(0, 0);
            outdatedBrowser({
                bgColor: '#f25648',
                color: '#ffffff',
                lowerThan: 'js:Promise',
                languagePath: ''
            })
        });
        
        $('.my_login ').on('click',function() {
            $.ajax({
                type: "POST",
                url: 'admin/login.php',
                dataType: 'JSON',
                data: {
                    username: $("#txtuname").val(),
                    password: $("#txtpassword").val()
                },
                success: function(data)
                {
                    if (data.status === 'Sucess') {
                        window.location.replace('/push-notification.php');
                    }
                    else {
                        alert(data.msg);
                    }
                }
            });
            
           
        //this is mandatory other wise your from will be submitted.
        return false; 
    });
    
    $('.submit_pushnot ').on('click',function(e) {
        e.preventDefault();
       /* $.ajax({
            type: "POST",
            url: 'http://3.209.82.129:8080/trendit/trendit-api/push',
            //dataType: 'JSON',
            data: {
                title: $("#title").val(),
                message: $("#contact_message").val()
            },
            success: function(data)
            {
                if (data.status === 'Sucess') {
                    window.location.replace('/push-notification.php');
                }
                else {
                    alert(data.msg);
                }
            }
        });*/
        var title = $("#title").val();
        var message = $("#contact_message").val();
        var userType = $("#user_type").val();
        var email = $("#email").val();
        var gender = $("input[name='gender']:checked").val();
        var city = $("#city").val();
        var country = $("#country").val();
        var state = $("#state").val();
        var category = $("#category").val();
        var serviceType = $("#service_type").val(); 
        var image = $("#image").val();
        
        if(!title){
            alert("Please enter title");
            return false;
        }
        if(!message){
            alert("Please enter message");
            return false;
        }
        //var url = 'http://3.209.82.129:8080/trendit/trendit-api/push';
        //var url = 'https://secureapp.com/trendit/trendit-api/push';
        var url = 'https://secureapp.trenditapp.com/trendit/trendit-api/push';
         $.ajax({
            type: "POST",
            //crossDomain: true,
            crossOrigin: true,
           // headers: {  'Access-Control-Allow-Origin': '*' },
           headers: {
              'Accept': 'application/json',
              'Content-Type': 'application/json'
            },
            url: url,
            dataType: "json",
            //contentType: 'application/json; charset=utf-8',
            async:false,
            data: JSON.stringify({
                
                "title":title,
                "message": message,
                "userType":userType,
                "email":email,
                "gender":gender,     
                "city":city,
                "country":country, 
                "state":state,
                "category":category,    
                "serviceType":serviceType,
                "image": image
                
            }),
            success: function(data){  
                //console.log(data);
                //console.log(data.provider-status);
                //console.log(data['provider-status']);
                if ((data['provider-status'] == 'success') || (data['provider-status'] == 'success')) {
                    alert("Success");
                    //location.reload();
                    $("form").trigger("reset");
                }
                else {
                    alert('something went wrong');
                } 
        },
        error: function(xhr) { 
            //alert('something went wrong2'); 
            alert('Request Status: ' + xhr.status + ' Status Text: ' + xhr.statusText + ' ' + xhr.responseText);
        }       
            /*success: function(data)
            {
                //console.log(data);
                if (data.status == 'success') {
                    alert("Success");
                    //location.reload();
                    //$("form").trigger("reset");
                }
                else {
                    alert('somthing went wrong');
                }
            }*/
        });
        //this is mandatory other wise your from will be submitted.
        /* data: {
                title: "abc",
                message: "aaaaaaaa"
            },*/
        return false; 
    });
    </script>

    <script>

    </script>
</body>

</html>    
