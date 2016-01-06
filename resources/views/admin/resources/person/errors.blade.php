@if($errors->any())
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="alert alert-danger">
                <strong>There were some errors with your input:</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif