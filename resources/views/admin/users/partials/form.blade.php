<div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ $user->name or ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
{{--
<div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
    <label for="username" class="control-label">{{ 'Username' }}</label>
    <input class="form-control" name="username" type="text" id="username" value="{{ $user->username or ''}}" required>
    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
</div>
--}}
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ $user->email or ''}}" required>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('role_id') ? 'has-error' : ''}}">
    <label for="role" class="control-label">{{ 'Roles' }}</label>
    <ul class="list-unstyled">
        @foreach($roles as $role)
            <li>
                <label>
                    {{ Form::checkbox('roles[]', $role->id, null)  }}
                    {{ $role->name }}
                    <em>({{$role->description ?: 'N/A'}})</em>
                </label>
            </li>
        @endforeach
    </ul>
    {!! $errors->first('role_id', '<p class="help-block">:message</p>') !!}
</div>
{{--
<div class="form-group {{ $errors->has('status_id') ? 'has-error' : ''}}">
    <label for="status_id" class="control-label">{{ 'Status' }}</label>
    {!! Form::select('status_id', $statuses, old('status_id'), ['class' => 'form-control', 'required']) !!}
    {!! $errors->first('status_id', '<p class="help-block">:message</p>') !!}
</div>
--}}

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
