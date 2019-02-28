<div class="form-group {{ $errors->has('no_invoice') ? 'has-error' : ''}}">
    <label for="no_invoice" class="control-label">{{ 'No Invoice' }}</label>
    <input class="form-control" name="no_invoice" type="text" id="no_invoice" value="{{ $invoice->no_invoice or ''}}" required>
    {!! $errors->first('no_invoice', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('order_id') ? 'has-error' : ''}}">
    <label for="order_id" class="control-label">{{ 'Order Id' }}</label>
    <input class="form-control" name="order_id" type="number" id="order_id" value="{{ $invoice->order_id or ''}}" required>
    {!! $errors->first('order_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status_id') ? 'has-error' : ''}}">
    <label for="status_id" class="control-label">{{ 'Status Id' }}</label>
    <input class="form-control" name="status_id" type="number" id="status_id" value="{{ $invoice->status_id or ''}}" required>
    {!! $errors->first('status_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
