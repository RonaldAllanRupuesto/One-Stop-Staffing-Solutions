<div class="container-fluid">
    <!-- update profle start -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h2 class="update-txt-crl">Update Account</h2>
            </div>
            <hr>
          </div>
          <form id="update-profile-admin">
          <div class="card-body">
              <div class="display-flex-update">
              <div class="container-fluid">
                  <div class="error-update-message-ctrl">
                  </div>
                  <div class="row">
                    <div class="col-sm">
                      <input type="text" class="form-control admin-field" name="adminfname" id="adminfname" placeholder="First Name" value="<?php echo $first_name; ?>" required="">
                    </div>
                    <div class="col-sm">
                      <input type="text" class="form-control admin-field" name="adminlname" id="adminlname" placeholder="Last Name" value="<?php echo $last_name; ?>" required="">
                    </div>
                  </div>
                  <div class="row">
                    <!-- <div class="col-sm">
                      <input type="text" class="form-control admin-field" name="adminusername" id="adminusername" placeholder="Username" required="">
                    </div> -->
                    <div class="col-sm">
                      <input type="email" class="form-control admin-field" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="andminemail" id="andminemail" placeholder="Email" value="<?php echo $email; ?>"  required="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm">
                      <input type="password" class="form-control admin-field" name="adminpassword" id="adminpassword" placeholder="Password" required="">
                    </div>
                    <div class="col-sm">
                      <input type="password" class="form-control admin-field" name="cadminpassword" id="cadminpassword" placeholder="Confirm Password" required="">
                    </div>
                  </div>
                </div>
            </div>
            <div class="display-flex-2-save-changes-change-btn">
                <div class="save-changes-btn">
                  <button type="submit" class="btn btn-primary submit-update-account">Submit</button>
                </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
</div>
