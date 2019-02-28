<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ $role->name or ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
    <label for="slug" class="control-label">{{ 'Slug' }}</label>
    <input class="form-control" name="slug" type="text" id="slug" value="{{ $role->slug or ''}}" required>
    {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="slug" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" required>{{ $role->description or ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('special') ? 'has-error' : ''}}">
    <h3>Lista de Permisos</h3>
    <label>{{Form::radio('special', 'all-access')}} Acceso total</label>
    <label>{{Form::radio('special', 'no-access')}} Ningun acceso</label>
    {!! $errors->first('special', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('permission_id') ? 'has-error' : ''}}">
    <h3>Lista de Permisos</h3>
    <ul class="list-unstyled">
        @foreach($permissions as $permission)
            <li>
                <label>
                    {{ Form::checkbox('permissions[]', $permission->id, null)  }}
                    {{ $permission->name }}
                    <em>({{$permission->description ?: 'N/A'}})</em>
                </label>
            </li>
        @endforeach
    </ul>
    {!! $errors->first('permission_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
