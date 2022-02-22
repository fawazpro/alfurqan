	<!-- banner -->
	<div class="banner_inner_content_agile_w3l">
		<p>Sign Up</p>
	</div>
	<!--//banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb_w3ls">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li><a href="index.html">Home</a><span>|</span></li>
				<li>Sign Up</li>
			</ul>
		</div>
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="banner-bottom">
		<div class="container">
			<div class="tittle_head_w3layouts">
				<h3 class="tittle three">Sign Up <span>Now </span></h3>
			</div>
			<div class="inner_sec_info_agileits_w3">
				<div class="signin-form">
					<div class="login-form-rec">
						<form action="register" method="post" class="form-inputs" enctype="multipart/form-data">
							<input type="text" name="fname" value="<?=$fname?>" placeholder="First Name" required="">
							<input type="text" name="lname" value="<?=$lname?>" placeholder="Last Name" required="">
							<input type="text" name="pphone" placeholder="Personal Phone Number" required="" maxlength="13">
							<input type="date" class="form-control" name="dob" placeholder="Date of Birth" required="">
                            <hr>
                            <div class="form-group">
                                <label for="passport">Passport Photo</label>
                                <input type="file" name="passport" required="">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" class="form-control" rows="3"></textarea>
                            </div>
                            <select name="gender" required>
								<option value="">Gender</option>
								<option value="m">Male</option>
								<option value="f">Female</option>
                            </select>
							<select name="doc" required>
								<option value="">Programme of choice</option>
								<option value="Arabic Class Children">Arabic & Memorization Class for children (Ibtidaa'iyyah and I'daadiyyah)</option>
								<option value="Arabic Class Adult">Arabic Class for adults (I'daadiyyah only)</option>
								<option value="Tahfeedh Adults">Tahfeedh  programme for adults</option>
								<option value="Qiraa'at class">Qiraa'at class for Huffaadh</option>
                            </select>
							<select name="juz" required>
								<option value="">Juz'u Memorised</option>
								<option value="None">None</option>
								<option value="One Juzu">One Juz'u</option>
								<option value="Less than five Juzu">Less than five Juz'u</option>
								<option value="Five Juzu">Five Juz'u</option>
								<option value="More than five Juzu">More than five Juz'u</option>
                            </select>
                            <hr class="border-top">

                            <p class="text-center" style="color: #000;">Parent/Guardian Details</p>
							<input type="text" name="pfname" placeholder="First Name" required="">
							<input type="text" name="plname" placeholder="Last Name" required="">
							<input type="text" name="phone" placeholder="Phone Number" required="" maxlength="13">
							<input type="email" name="email" value="<?=$email?>" placeholder="Email" required="">
							
							<input type="submit" name="register" value="Sign Up">
						</form>
					</div>
					<p class="reg"><a href="#"> By clicking Signup, I agree to your terms</a></p>

				</div>
			</div>
		</div>
	</div>