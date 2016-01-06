@extends('crud_layout.master')

@section('content')
    <h1 class="page-header">
        Person
        {!! Form::open(['route' => ['admin.person.destroy', $person], 'method' => 'DELETE', 'style' => 'display: inline;']) !!}
            <button type="button" onclick="deleteperson(this)" class="btn btn-sm btn-danger pull-right" style="margin-left: 10px;">Delete</button>
        {!! Form::close() !!}
        <a href="{{ route('admin.person.edit', $person) }}" style="margin-left: 10px;" class="btn btn-sm btn-primary pull-right">Edit</a>
        <a href="{{ route('admin.person.index') }}" class="btn btn-sm btn-default pull-right">All People</a>
    </h1>

    <div class="table table-responsive">
        <table class="table">
            <tbody>
                <tr>
                    <td>First Name</td>
                    <td>{{ $person->first_name }}</td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>{{ $person->last_name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $person->email }}</td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>{{ $person->password }}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>{{ $person->address }}</td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td>{{ $person->age }}</td>
                </tr>
                <tr>
                    <td>Active</td>
                    <td>{{ $person->active }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    @include('admin.resources.person.scripts')
@endsection