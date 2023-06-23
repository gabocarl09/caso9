<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('keys') }}
            {{ Form::text('keys', $tool->keys, ['class' => 'form-control' . ($errors->has('keys') ? ' is-invalid' : ''), 'placeholder' => 'Keys']) }}
            {!! $errors->first('keys', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pliers') }}
            {{ Form::text('pliers', $tool->pliers, ['class' => 'form-control' . ($errors->has('pliers') ? ' is-invalid' : ''), 'placeholder' => 'Pliers']) }}
            {!! $errors->first('pliers', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('screwdriver') }}
            {{ Form::text('screwdriver', $tool->screwdriver, ['class' => 'form-control' . ($errors->has('screwdriver') ? ' is-invalid' : ''), 'placeholder' => 'Screwdriver']) }}
            {!! $errors->first('screwdriver', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>