@include('admin.resources.person.errors')
<div class="form-group">
    <label for="first_name" class="col-sm-3 control-label">First Name</label>
    <div class="col-sm-6">
        {!! Form::input('text', 'first_name', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <label for="last_name" class="col-sm-3 control-label">Last Name</label>
    <div class="col-sm-6">
        {!! Form::input('text', 'last_name', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <label for="email" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-6">
        {!! Form::input('email', 'email', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <label for="password" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-6">
        {!! Form::input('password', 'password', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <label for="address" class="col-sm-3 control-label">Address</label>
    <div class="col-sm-6">
        {!! Form::input('text', 'address', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <label for="age" class="col-sm-3 control-label">Age</label>
    <div class="col-sm-6">
        {!! Form::input('number', 'age', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <label for="active" class="col-sm-3 control-label">Active</label>
    <div class="col-sm-6">
        <div class="radio">
            <label>
                {!! Form::radio('active', '1', null) !!} Yes
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio('active', '0', null) !!} No
            </label>
        </div>
    </div>
</div>
