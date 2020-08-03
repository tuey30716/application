
<!-- Stored in resources/views/child.blade.php -->

@extends('master')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<table class="table" id="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">First Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Age</th>
            <th class="text-center">Date of Birth</th>
            <th class="text-center">Position </th>
        </tr>
    </thead><tbody>
{{dd($employee)}}

<tr class="employee{{$employee->id}}">
    <td>{{ $employee->id }}</td>
    <td>{{$employee->fname}}</td>
    <td>{{$employee->lname}}</td>
    <td>{{$employee->age}}</td>
    <td>{{$employee->bday}}</td>
    <td>{{$employee->position}}</td>
    <td><button class="edit-modal btn btn-info"
            data-info="{{$employee->id}},{{$employee->fname}},{{$employee->lname}},{{$employee->age}},{{$employee->bday}},{{$employee->position}}">
            <span class="glyphicon glyphicon-edit"></span> Edit
        </button>
        <button class="delete-modal btn btn-danger"
            data-info="{{$employee->id}},{{$employee->fname}},{{$employee->lname}},{{$employee->age}},{{$employee->bday}},{{$employee->position}}">
            <span class="glyphicon glyphicon-trash"></span> Delete
        </button></td>
</tr>

</tbody>
</table>
@endsection


