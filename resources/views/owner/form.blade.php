<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $owner->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cellphone') }}
            {{ Form::text('cellphone', $owner->cellphone, ['class' => 'form-control' . ($errors->has('cellphone') ? ' is-invalid' : ''), 'placeholder' => 'Cellphone']) }}
            {!! $errors->first('cellphone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('age') }}
            {{ Form::text('age', $owner->age, ['class' => 'form-control' . ($errors->has('age') ? ' is-invalid' : ''), 'placeholder' => 'Age']) }}
            {!! $errors->first('age', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gender') }}
            {{ Form::text('gender', $owner->gender, ['class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'Gender']) }}
            {!! $errors->first('gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_mechanical_workshop') }}
            {{ Form::text('id_mechanical_workshop', $owner->id_mechanical_workshop, ['class' => 'form-control' . ($errors->has('id_mechanical_workshop') ? ' is-invalid' : ''), 'placeholder' => 'Id Mechanical Workshop']) }}
            {!! $errors->first('id_mechanical_workshop', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>