<?php include 'common/header.php'; ?>


<section id="steps" class="donate_steps section-bg">
            <div class="container">

                <h1 class="text-center section_title head-donate">Donate for Anna Daan</h1>

                <div class="row">
                    
                    	<div class="col-md-12">
                    		<p class="para-donate">Anna Daan is considered as one of the most pious activities a person can
		                        perform. Donate generously to provide nutritious wholesome meals for students of the gurukul.
		                    </p>
                    	</div>
                     

                        <div class="col-md-7">

                        	<div class="row">
	                        	<div class="col-lg-12 col-md-12 mb-3">
		                            <div class="row">
		                                <div class="col-md-9 no-padding">
		                                    <h4 class="dsply-inlnblck para-donate1">Feed 1 student for 1 month = ₹6000</h4>
		                                </div>
		                                <div class="col-md-3 no-padding">
		                                    <a href="#donate1" id="oneS1" class="btn btn-info btn-pay1">Donate Now</a>
		                                </div>
		                            </div>
		                        </div>

		                        <div class="col-lg-12 col-md-12 mb-3">
		                            <div class="row">
		                                <div class="col-md-9 no-padding">
		                                    <h4 class="dsply-inlnblck para-donate1">Feed 1 student for 2 months = ₹12,000 </h4>
		                                </div>
		                                <div class="col-md-3 no-padding">
		                                    <a href="#donate1" id="oneS2" class="btn btn-info btn-pay1">Donate Now</a>
		                                </div>
		                            </div>
		                        </div>

		                        <div class="col-lg-12 col-md-12 mb-3">
		                            <div class="row">
		                                <div class="col-md-9 no-padding">
		                                    <h4 class="dsply-inlnblck para-donate1"> Feed 1 student for 3 months = ₹18,000</h4>
		                                </div>
		                                <div class="col-md-3 no-padding">
		                                    <a href="#donate1" id="oneS3" class="btn btn-info btn-pay1">Donate Now</a>
		                                </div>
		                            </div>
		                        </div>

		                        <div class="col-lg-12 col-md-12 mb-3">
		                            <div class="row">
		                                <div class="col-md-9 no-padding">
		                                    <h4 class="dsply-inlnblck para-donate1">Feed 1 student for 6 months = ₹36,000</h4>
		                                </div>
		                                <div class="col-md-3 no-padding">
		                                    <a href="#donate1" id="oneS4" class="btn btn-info btn-pay1">Donate Now</a>
		                                </div>
		                            </div>
		                        </div>

		                        <div class="col-lg-12 col-md-12 mb-3">
		                            <div class="row">
		                                <div class="col-md-9 no-padding">
		                                    <h4 class="dsply-inlnblck para-donate1">Feed 1 student for 1 year = ₹72,000</h4>
		                                </div>
		                                <div class="col-md-3 no-padding">
		                                    <a href="#donate1" id="oneS5" class="btn btn-info btn-pay1">Donate Now</a>
		                                </div>
		                            </div>
		                        </div>

		                        <div class="col-lg-12 col-md-12 mb-3">
		                            <div class="row">
		                                <div class="col-md-9 no-padding">
		                                    <h4 class="dsply-inlnblck para-donate1">Feed 1 student for 2
		                                        years = ₹1,44,000</h4>
		                                </div>
		                                <div class="col-md-3 no-padding">
		                                    <a href="#donate1" id="oneS6" class="btn btn-info btn-pay1">Donate Now</a>
		                                </div>
		                            </div>
		                        </div>

		                        <div class="col-lg-12 col-md-12 mb-3">
		                            <div class="row">
		                                <div class="col-md-9 no-padding">
		                                    <h4 class="dsply-inlnblck para-donate1">Donate any amount
		                                    </h4> <input id="amt" type="text">
		                                </div>
		                                <div class="col-md-3 no-padding">

		                                    <a href="#donate1" id="oneS8" class="btn btn-info btn-pay1">Donate Now</a>
		                                </div>
		                            </div>
		                        </div>
	                        
	                        </div>

                        </div>
                     
                    	<div class="col-md-5">
                    	 
                    		<div class="swiper-container swiper_donation">
					            <div class="swiper-wrapper">
					                <div class="swiper-slide"><img class="img-fluid w-100 rounded" src="assets/img/donate1.jpg" alt="donate1"></div>
					                <div class="swiper-slide"><img class="img-fluid w-100 rounded" src="assets/img/donate2.jpg" alt="donate1"></div> 
					            </div>
					            <!-- Add Pagination -->
					            <!-- <div class="swiper-pagination swiper-pagination-white"></div> -->
					            <!-- Add Arrows -->
					            <!-- <div class="swiper-button-next swiper-button-white"></div> -->
					            <!-- <div class="swiper-button-prev swiper-button-white"></div> -->
					        </div>
                    	  
                    	</div>

                </div>

            </div>
        </section>

        <section id="donate1" class="features">
            <div class="container">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <form id="form" method="POST" action="#">
                                    <h2 class="head-donate">Personal Info</h2>
                                    <p class="options">Your selected amount: <span id="slectedAmt">₹ 36,000</span></p>
                                    <input type="hidden" value="36000" id="PrcA" name="student">
                                    <div class="form-row">
 
                                        <div class="col-md-12 form-group">
                                            <input type="text" name="first_name" class="form-control" id="first_name"  required autocomplete="off">
                                            <label for="first_name">Full Name*</label>
                                            <span id="errorMsgName" class="errorMsgs"></span> 
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <input type="text" name="city" class="form-control" id="city" >
									        <label for="city">City</label> 
                                            <span id="errorMsgCity" class="errorMsgs"></span> 
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="email" class="form-control" name="email" id="email">
									        <label for="email">Your Email*</label>  
                                            <span id="errorMsgEmail" class="errorMsgs"></span> 
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="mobile" id="mobile">
									        <label for="mobile">Your Mobile*</label>  
                                            <span id="errorMsgPhone" class="errorMsgs"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="address" name="address_1" rows="2" ></textarea>
                                        <label for="address">Address(optional)</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="pan_card" id="pan" data-rule="minlen:4" data-msg="Please enter at least 8 chars of pan card">
									    <label for="pan">Pan Card (optional)</label>
                                        <p>*PAN and Address are mandatory for 80G receipt. Please enter your
                                            PAN.</p>
                                    </div>

                                    <div class="text-center">
                                        <!-- <a type="submit" href="" class="btn-get-started donate-btn">Donate</a> -->
                                        <button id="submit" class="btn btn-primary donate-btn">Submit</button>
                                    </div>

                                </form>
                            </div>


                        </div>
                        <div class="col-lg-5 offset-lg-1">
                            <!-- <h2 class="head-donate">Payment Options</h2> -->
                            <p class="head-donate">Donate Through Bank</p>
                            <p class="bold-options">Bank Name: ICICI Bank</p>
                            <p class="bold-options">Account Name: ISKCON GURUKUL</p>

                            <p class="bold-options">Account No.: 402401000479</p>

                            <p class="bold-options">IFSC Code: ICIC0004024</p>

                            <p class="head-donate">Donate Through UPI</p>
                            <p class="bold-options">UPI ID: iskcon.gurukul@icici</p>
                            <p class="head-donate">Donate Through Scan(UPI)</p>
                            <img src="assets/img/scan_qr.jpg" style="width: 50%;">
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php include 'common/footer.php'; ?>
