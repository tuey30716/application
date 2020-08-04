<div class="modal fade" id="add_modal" tabindex="-1" role="dialog" aria-labelledby="add_modal_label">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="add_modal_label">New User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form id="employee_form">
                <div class="form-group">
                  <label for="emp-fname" class="control-label">First Name:</label>
                  <input type="text" class="form-control" id="emp-fname" name="fname" >
                </div>
                <div class="form-group">
                  <label for="emp-lname" class="control-label">Last Name:</label>
                  <input type="text" class="form-control" id="emp-lname" name="fname" >
                </div>
                <div class="form-group">
                  <label for="user-fullname" class="control-label">Age:</label>
                  <input type="number" class="form-control" id="emp-age" name="age" >
                </div>
                <div class="form-group">
                  <label for="emp-bday" class="control-label">Date of Birth:</label>
                  <input type="date" class="form-control" id="emp-bday" name="bday" >
                </div>
                <div class="form-group">
                  <label for="emp-position" class="control-label">Position:</label>
                  <input type="text" class="form-control" id="emp-position" name="position" >
                </div>

              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary btn-add" onClick="dataList.addData($('#employee_form').serializeArray())">Add User</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="edit_modal_label">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="edit_modal_label">Edit User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form id="employee_form">
                <div class="form-group">
                  <label for="user-name" class="control-label">Username:</label>
                  <input type="text" class="form-control" id="user-name" name="username" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="user-pass" class="control-label">Password:</label>
                  <input type="password" class="form-control" id="user-pass" name="password" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="user-fullname" class="control-label">Fullrname:</label>
                  <input type="text" class="form-control" id="user-fullname" name="fullname" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="user-type" class="control-label">Type:</label>
                  <select class="form-control"  id="user-type" name="usertype">
                    <option value="1">Type 1</option>
                    <option value="2">Type 2</option>
                  </select>
                  <input type="hidden" id="user-id" name="userid" value="">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-warning hidden btn-edit" onClick="dataList.editData($('#employee_form').serializeArray())" >Edit User</button>
            </div>
          </div>
        </div>
      </div>
