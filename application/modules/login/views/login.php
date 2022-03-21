<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" >
        <!-- <div class="login-left">
  				<div class="login100-pic js-tilt" data-tilt>
  					<img src="<?php echo base_url('assets/dist/img/logo-ipad.png'); ?>" alt="IMG">
  				</div>
      </div> -->

        <div class="login-right">
            <?php echo form_open('auth',array('class' => 'login100-form validate-form')); ?>
          <span class="login100-form-title1">
            <img src="<?php echo base_url('assets/dist/img/logo-ipad.png'); ?>"
            class="logo-login" alt="Cloud Panda Logo">
          </span>
					<!-- <div class="login-left">
						<div class="login100-pic js-tilt" data-tilt>
							<img src="<?php echo base_url('assets/dist/img/logo-ipad.png'); ?>" alt="IMG">
						</div>
				</div> -->
			
          <div class="loginset">
		  <div class="login100-form-title2">
            <img src="<?php echo base_url('assets/dist/img/logo-ipad.png'); ?>"
            class="logo-login" alt="Cloud Panda Logo">
          </div>
            <h1>ENTER YOUR USERNAME AND PASSWORD</h1>
          </div>

            <?php if(!empty($success)){ ?>
                 <div class="success" style="border: 1px solid rgba(0,0,0,0.2);border-radius: 1px;padding: 12px;width: 100%;margin-bottom: 15px;background-color: #fff;border-left: 9px solid #09691d;background-color: #85ca68;color: white;">
                      <?php echo $success; ?>
                 </div>
            <?php } ?>
           <?php if(!empty($msg)): ?>
                <div class="response-div">
                     <?php echo $msg; ?>
                </div>
           <?php endif; ?>
          <br>
		  <div class= "input-login">
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" id="username" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" id="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
					<div class="container-login100-form-btn">
						<button type="button" class="login100-form-btn" data-toggle="modal" data-target="#register-modal" >Register</button>
					</div>
					</div>

					<!-- <div class="text-center p-t-12">
					</div> -->

					<div class="text-center p-t-50">
					</div>
				</form>
      </div>
			</div>
		</div>
	</div>


<!-- Modal -->
<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form action="#" method="post" id="RegisterForm">
      <div class="modal-body">
		
			<div class="form-row">
				<div class="col-md-6 mb-3">
				<label for="First_Name">First Name</label>
				<div class="input-group">
					<input type="text" name="First_Name" class="form-control form-control-lg registerField" required id="First_Name" placeholder="First Name">
				</div>
				</div>
				<div class="col-md-6 mb-3">
				<label for="Last_Name">Last Name</label>
				<div class="input-group">
					<input type="text" name="Last_Name" class="form-control form-control-lg registerField" required id="Last_Name" placeholder="Last Name">
				</div>
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-6 mb-3">
				<label for="Email">Email</label>
				<div class="input-group">
					<input type="email" name="Email" class="form-control form-control-lg registerField" required id="Email" placeholder="Email">
				</div>
				</div>
				<div class="col-md-6 mb-3">
				<label for="Phone">Phone Number</label>
				<div class="input-group">

					<input type="tel" name="Phone" class="form-control form-control-lg registerField"  required id="Phone" placeholder="Phone">
				</div>
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-6 mb-3">
				<label for="Username">Username</label>
				<div class="input-group">
					<input type="text" name="Username" class="form-control form-control-lg registerField" required id="Username" placeholder="Username">
				</div>
				</div>
				<div class="col-md-6 mb-3">
				<label for="Password">Password</label>
				<div class="input-group">
					<input type="password" name="Password" class="form-control form-control-lg registerField"  required id="Password" placeholder="Password">
				</div>
				</div>
			</div>
			
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<div id="submit-edited-homework" class="col-md-6">
        <button type="submit" class="btn btn-primary">Submit</button>
		   </div>
      </div>
	  </form>
    </div>
  </div>
</div>
