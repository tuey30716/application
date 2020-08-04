<div id="addModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">

          <h4 class="modal-title">Add New Employee</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <span id="form_result"></span>
         <form method="post" id="employee_form" class="form-horizontal">
        <div class="form-group">
            <label for="fname" class="control-label">First Name:</label>
            <input type="text" class="form-control" id="fname" name="fname" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="lname" class="control-label">Last Name:</label>
            <input type="text" class="form-control" id="lname" name="lname" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="age" class="control-label">Age:</label>
            <input type="number" class="form-control" id="age" name="age" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="bday" class="control-label">Date of Birth:</label>
            <input type="date" class="form-control" id="bday" name="bday" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="position" class="control-label">Position:</label>
            <input type="text" class="form-control" id="position" name="position" autocomplete="off">
        </div>
        <br />
                <div class="form-group" align="center">
                 <input type="hidden" name="action" id="action" value="Add" />
                 <input type="hidden" name="hidden_id" id="hidden_id" />
                 <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Add" />
                </div>
         </form>
        </div>
     </div>
     </div>
    </div>


    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">

        <h4 class="modal-title">Edit Employee</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <span id="form_result"></span>
                <form method="post" id="employee_form" class="form-horizontal">
                <div class="form-group">
                    <label for="fname" class="control-label">First Name:</label>
                    <input type="text" class="form-control" id="fname" name="fname" value="{{$key['id']}}">
                </div>
                <div class="form-group">
                    <label for="lname" class="control-label">Last Name:</label>
                    <input type="text" class="form-control" id="lname" name="lname" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="age" class="control-label">Age:</label>
                    <input type="number" class="form-control" id="age" name="age" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="bday" class="control-label">Date of Birth:</label>
                    <input type="date" class="form-control" id="bday" name="bday" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="position" class="control-label">Position:</label>
                    <input type="text" class="form-control" id="position" name="position" autocomplete="off">
                </div>
                <br />
                        <div class="form-group" align="center">
                        <input type="hidden" name="action" id="action" value="Edit" />
                        <input type="hidden" name="hidden_id" id="hidden_id" />
                        <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Edit" />
                        </div>
                </form>
                </div>
            </div>
            </div>
        </div>

    <div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
