@extends('crud_layout.master')

@section('content')
    <h1 class="page-header">
        Edit Person
    </h1>
    {!! Form::model($person, ['route' => ['admin.person.update', $person], 'method' => 'PATCH', 'class' => 'form form-horizontal', 'files' => 'true']) !!}

        @include('admin.resources.person.form')

        <div class="row">
            <div class="col-sm-3 col-sm-offset-3">
                <button type="submit" class="btn btn-block btn-primary">Update</button>
            </div>
        </div>
    {!! Form::close() !!}
@endsection

@section('scripts')
    @include('admin.resources.person.scripts')
@endsection