<?php
include("header.php");
if(isset($_POST['submit']))
{
	include("phpmailer.php");
	$mailmsg = "Email : ".$_POST['email'] . "<br>Contact No." . $_POST['contactno'] . "<br>Message." . $_POST['message'];
	sendmail($_POST['name'],"prarthanaachraya301997@gmail.com", "Mail from Tell Me..", $mailmsg);
	echo "<script>alert('Mail sent successfully');</script>";
}
?>
	<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<div class="contact-grid-agiles-w3l">
				<div class="col-md-7 contact-grid-agile">
					<h3 class="tittle-w3l">Contact Us
						<span class="heading-style">
							<i></i>
							<i></i>
							<i></i>
						</span>
					</h3>
					<form action="" method="post">
						<input type="text" placeholder="Name" name="name" required="">
						<input type="email" placeholder="Email" name="email" required="">
						<input type="text" placeholder="Contact No." name="contactno" required="">
						<textarea placeholder="Message.." name="message" required=""></textarea>
						<input type="submit" name="submit" value="Send Now">
					</form>
				</div>
				<div class="col-md-5 contact-grid-agile">
					<div class="contact-right1">
						<img src="images/con-img.jpg" alt="" />
					</div>
					<div class="contact-right2">
						<div class="call ">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Call us :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
								<ul>
									<li><?php echo $_SESSION['collegecontactno'] ; ?></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="call">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Locate us :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
								<ul>
									<li>
										<a href="https://www.google.com/maps/place/Vimal+Tormal+Poddar+BCA+%26+Commerce+College/@21.146407,72.850178,16z/data=!4m5!3m4!1s0x0:0x3312b11c699e47fe!8m2!3d21.1464072!4d72.8501783?hl=en" >VT Poddar Bca College</a> 
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="call">
							<div class="col-xs-4 contact-grdr-w3l">
								<h3>Mail us :</h3>
							</div>
							<div class="col-xs-8 contact-grdr-w3l">
								<ul>
									<li>
										<a href="mailto:<?php echo $_SESSION['collegeemail'] ; ?>"><?php echo $_SESSION['collegeemail'] ; ?></a>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->

	
<?php
include("footer.php");
?>