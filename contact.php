			<!-- Start contact-page Area -->

			<section class="contact-page-area section-gap" id="contact">

				<div class="topHead"><h2 class="">Let's Talk Golf</h2></div>

				<div class="container">

					<div class="row">

						<!-- <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div> -->

						<div class="col-lg-4 d-flex flex-column address-wrap">
<!--
							<div class="single-contact-address d-flex flex-row">

								<div class="icon">

									<span class="lnr lnr-phone-handset"></span>

								</div>

								<div class="contact-details">

									<h5>+234 841 7645 872</h5>

									<p>Mon to Fri 9am to 6 pm</p>

								</div>

							</div>
-->
							<div class="single-contact-address d-flex flex-row">

								<div class="icon">

									<span class="lnr lnr-envelope"></span>

								</div>

								<div class="contact-details">

									<h5>info@francisepegolf.com</h5>

									<p>Send us your query anytime!</p>

								</div>

							</div>														

						</div>

						<div class="col-lg-8">

							<form class="form-area " id="myForm" action="" method="post" class="contact-form text-right">
								<div class="row">	
									<div class="col-lg-6 form-group">

										<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

									

										<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">



										<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">

									</div>

									<div class="col-lg-6 form-group">

										<textarea class="common-textarea form-control" rows="6" name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>				

									</div>

									<div class="col-lg-12">

										<div class="alert-msg" style="text-align: left;">
											<?php
												if(isset($_POST['sender'])){
													
												    $to = 'info@francisepegolf.com';
												    $firstname = $_POST["name"];
												    $email = $_POST["email"];
												    $subject = $_POST["subject"];
												    $text = $_POST["message"];
												    

												    $headers = 'MIME-Version: 1.0' . "\r\n";
												    $headers .= "From: " . $firstname . "\r\n"; // Sender's E-mail
												    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

												    $message ='<table style="width:100%">
												        <tr>
												            <td>From: '.$firstname.'</td>
												        </tr>
												        <tr><td>Email: '.$email.'</td></tr>
												        <tr><td>Subject: '.$subject.'</td></tr>
												        <tr><td>Text: '.$text.'</td></tr>
												        
												    </table>';

												    if (@mail($to, $email, $message, $headers))
												    {
												        $responsy = '<p>The message has been sent.</p>';
												        echo $responsy;
												    }else{
												        $responsy = '<p>Could not send your message.</p>';
												        echo $responsy;
												    }

												}
											?>
										</div>

										<button name="sender" class="genric-btn primary circle" style="float: right;">Send Message</button>											

									</div>

								</div>

							</form>	

						</div>

					</div>

				</div>	

			</section>

			<!-- End contact-page Area -->



			