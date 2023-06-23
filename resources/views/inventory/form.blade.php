<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Dia_de_Rebastecimiento') }}
            {{ Form::text('restock_day', $inventory->restock_day, ['class' => 'form-control' . ($errors->has('restock_day') ? ' is-invalid' : ''), 'placeholder' => 'Dia de Rebastecimiento']) }}
            {!! $errors->first('restock_day', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Elementos_en_Almacen') }}
            {{ Form::text('elements_in_storage', $inventory->elements_in_storage, ['class' => 'form-control' . ($errors->has('elements_in_storage') ? ' is-invalid' : ''), 'placeholder' => 'Elementos en Almacen']) }}
            {!! $errors->first('elements_in_storage', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombres_Del_Supervisor') }}
            {{ Form::text('supervisor_name', $inventory->supervisor_name, ['class' => 'form-control' . ($errors->has('supervisor_name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del Supervisor']) }}
            {!! $errors->first('supervisor_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>