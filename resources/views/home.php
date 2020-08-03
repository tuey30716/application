
<html>
<head>
<title>Employee</title>

</head>
<body>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>


<table class="table" id="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">First Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Age</th>
            <th class="text-center">Date of Birth</th>
            <th class="text-center">Position <?php echo 1; ?></th>
        </tr>
    </thead><tbody>
    @foreach(5)
    <p>Kuy<p>
    @endforeach
{{dd($employee)}}
@foreach($employee as $item)
<tr class="item{{$item->id}}">
    <td>{{ $item->id }}</td>
    <td>{{$item->fname}}</td>
    <td>{{$item->lname}}</td>
    <td>{{$item->age}}</td>
    <td>{{$item->bday}}</td>
    <td>{{$item->position}}</td>
    <td><button class="edit-modal btn btn-info"
            data-info="{{$item->id}},{{$item->fname}},{{$item->lname}},{{$item->age}},{{$item->bday}},{{$item->position}}">
            <span class="glyphicon glyphicon-edit"></span> Edit
        </button>
        <button class="delete-modal btn btn-danger"
            data-info="{{$item->id}},{{$item->fname}},{{$item->lname}},{{$item->age}},{{$item->bday}},{{$item->position}}">
            <span class="glyphicon glyphicon-trash"></span> Delete
        </button></td>
</tr>
@endforeach
</tbody>
</table>


<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>
</body>
</html>