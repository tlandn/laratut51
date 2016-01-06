@extends('crud_layout.master')

@section('content')
    <h1 class="page-header">
        Create New Person
    </h1>
    {!! Form::open(['route' => 'admin.person.store', 'class' => 'form form-horizontal', 'files' => 'true']) !!}

        @include('admin.resources.person.form')

        <div class="row">
            <div class="col-sm-3 col-sm-offset-3">
                <button type="submit" class="btn btn-block btn-success">Create</button>
            </div>
        </div>
    {!! Form::close() !!}
@endsection

@section('scripts')
    @include('admin.resources.person.scripts')
@endsection