<div class="form-group {{ $errors->has('no_order') ? 'has-error' : ''}}">
    <label for="no_order" class="control-label">{{ 'No Order' }}</label>
    <input class="form-control" name="no_order" type="text" id="no_order" value="{{ $order->no_order or ''}}" required>
    {!! $errors->first('no_order', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('subtotal') ? 'has-error' : ''}}">
    <label for="subtotal" class="control-label">{{ 'Subtotal' }}</label>
    <input class="form-control" name="subtotal" type="number" id="subtotal" value="{{ $order->subtotal or ''}}" required>
    {!! $errors->first('subtotal', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tax') ? 'has-error' : ''}}">
    <label for="tax" class="control-label">{{ 'Tax' }}</label>
    <input class="form-control" name="tax" type="number" id="tax" value="{{ $order->tax or ''}}" required>
    {!! $errors->first('tax', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
    <label for="total" class="control-label">{{ 'Total' }}</label>
    <input class="form-control" name="total" type="number" id="total" value="{{ $order->total or ''}}" required>
    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ $order->user_id or ''}}" required>
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status_id') ? 'has-error' : ''}}">
    <label for="status_id" class="control-label">{{ 'Status Id' }}</label>
    <input class="form-control" name="status_id" type="number" id="status_id" value="{{ $order->status_id or ''}}" required>
    {!! $errors->first('status_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
