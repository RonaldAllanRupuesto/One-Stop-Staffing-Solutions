 <!-- Edit User -->
 <div class="modal fade" id="Edituser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">\
            <form id="edituser" method="post">
              <div class="modal-dialog modal-s" role="document">
                <div class="modal-content">
                  <div class="modal-header bg-info1">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Staff</h5>
                    <input type="hidden" class="form-control user_edit_id" name="user_edit_id" value="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="firstname">First Name:</label>
                            <input type="text" class="form-control" name="firstname" value="">
                            <span class="err"></span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="lastname">Last Name: </label>
                            <input type="text" class="form-control" name="lastname" value="">
                            <span class="err"></span>
                          </div>
                        </div>
                      </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group">
                              <label for="username">Username:</label>
                              <input type="text" class="form-control" name="username" value="">
                              <span class="err"></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group">
                              <label for="password">Password: </label>
                              <input type="text" class="form-control" name="password" value="">
                              <span class="err"></span>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary add">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <!-- End User -->