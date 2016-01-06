@extends('crud_layout.master')

@section('content')
    <h1 class="page-header">
        People
        <a href="{!! route('admin.person.create') !!}" class="btn btn-sm pull-right btn-success">Create new Person</a>
    </h1>

    <div class="table table-responsive">
        <table class="table">
            <thead>
            <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Active</th>
                <th style="width: 20%">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($people as $person)
            <tr>
                    <td>{{ $person->first_name }}</td>
                    <td>{{ $person->last_name }}</td>
                    <td>{{ $person->email }}</td>
                    <td>{{ $person->password }}</td>
                    <td>{{ $person->address }}</td>
                    <td>{{ $person->age }}</td>
                    <td>{{ $person->active }}</td>
                <td>
                    <a href="{!! route('admin.person.show', $person) !!}" class="btn btn-xs btn-default">Show</a>
                    <a href="{!! route('admin.person.edit', $person) !!}" class="btn btn-xs btn-primary">Edit</a>
                    {!! Form::open(['route' => ['admin.person.destroy', $person], 'method' => 'DELETE', 'style' => 'display: inline;']) !!}
                        <button type="button" onclick="deleteperson(this)" class="btn btn-xs btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {!! $people->render() !!}
@endsection

@section('scripts')
    @include('admin.resources.person.scripts')
@endsection