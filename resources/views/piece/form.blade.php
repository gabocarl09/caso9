<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('filters') }}
            {{ Form::text('filters', $piece->filters, ['class' => 'form-control' . ($errors->has('filters') ? ' is-invalid' : ''), 'placeholder' => 'Filters']) }}
            {!! $errors->first('filters', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('light_bulls') }}
            {{ Form::text('light_bulls', $piece->light_bulls, ['class' => 'form-control' . ($errors->has('light_bulls') ? ' is-invalid' : ''), 'placeholder' => 'Light Bulls']) }}
            {!! $errors->first('light_bulls', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('straps') }}
            {{ Form::text('straps', $piece->straps, ['class' => 'form-control' . ($errors->has('straps') ? ' is-invalid' : ''), 'placeholder' => 'Straps']) }}
            {!! $errors->first('straps', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('oil') }}
            {{ Form::text('oil', $piece->oil, ['class' => 'form-control' . ($errors->has('oil') ? ' is-invalid' : ''), 'placeholder' => 'Oil']) }}
            {!! $errors->first('oil', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>