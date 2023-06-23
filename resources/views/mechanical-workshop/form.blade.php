<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('direction') }}
            {{ Form::text('direction', $mechanicalWorkshop->direction, ['class' => 'form-control' . ($errors->has('direction') ? ' is-invalid' : ''), 'placeholder' => 'Direction']) }}
            {!! $errors->first('direction', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opening_time') }}
            {{ Form::text('opening_time', $mechanicalWorkshop->opening_time, ['class' => 'form-control' . ($errors->has('opening_time') ? ' is-invalid' : ''), 'placeholder' => 'Opening Time']) }}
            {!! $errors->first('opening_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('closing_time') }}
            {{ Form::text('closing_time', $mechanicalWorkshop->closing_time, ['class' => 'form-control' . ($errors->has('closing_time') ? ' is-invalid' : ''), 'placeholder' => 'Closing Time']) }}
            {!! $errors->first('closing_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>