@extends('master')

<?php include(app_path().'/includes/modal.php');?>
@section('sidebar')
    @parent
@endsection

@section('content')
<br>
<button class="edit-modal btn btn-success" data-toggle="modal" data-target="#add_modal"
data-user-id="$key['id']">
            <span class="glyphicon glyphicon-edit"></span> Create
                </button>
                <br><br>
<table class="table" id="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">First Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Age</th>
            <th class="text-center">Date of Birth</th>
            <th class="text-center">Position </th>
            <th width="text-center">Action</th>
        </tr>
    </thead><tbody>
    @foreach (json_decode($employee, true) as $key)

        <tr class="employee{{$key['id']}}">
            <td>{{$key['id']}}</td>
            <td>{{$key['fname']}}</td>
            <td>{{$key['lname']}}</td>
            <td>{{$key['age']}}</td>
            <td>{{$key['bday']}}</td>
            <td>{{$key['position']}}</td>
            <td><button class="edit-modal btn btn-info"
                data-toggle="modal" data-target="#edit_modal"
                data-user-id="$key['id']">
                    <span class="glyphicon glyphicon-edit"></span> Edit
                </button>
                <button class="delete-modal btn btn-danger"
                    data-info="{{$key['id']}},{{$key['fname']}},{{$key['lname']}},{{$key['age']}},{{$key['bday']}},{{$key['position']}}">
                    <span class="glyphicon glyphicon-trash"></span> Delete
                </button></td>
                    </tr>
        @endforeach

    </tbody>
    </table>

    <script type="text/javascript">
        $(function () {

          var table = $('.data-table').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('employee.ajax') }}",
              columns: [
                  {data: 'id', name: 'id'},
                  {data: 'fname', name: 'fname'},
                  {data: 'laname', name: 'lname'},
                  {data: 'age', name: 'age'},
                  {data: 'bday', name: 'bday'},
                  {data: 'position', name: 'position'},
                  {data: 'action', name: 'action', orderable: false, searchable: false},
              ]
          });

        });
        var dataList = {}
    $(function(){
        /*Add*/
        dataList.addData = function(dataSend){
		$.post({{ route('add.emp') }},dataSend,function(response){
			if(response != null){
				if(response[0].error!=null || response[0].success!=null){
					var statusText = (response[0].error!=null)?response[0].error:response[0].success;
					$('#exampleModal').modal('toggle')
//					alert(statusText);
				}
				if(response[0].success!=null){
					$('#form_user')[0].reset();
					dataList.getList(0,true);
				}
			}
		});}
    }

		if(haveData==null){
			$(".show-list-data").addClass("hidden");
			$(".pagination").addClass("hidden");
		}
	}
	dataList.getList(0,true);
      </script>
@endsection


