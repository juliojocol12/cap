<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombrest') }}
            {{ Form::text('nombrest', $establecimiento->nombrest, ['class' => 'form-control' . ($errors->has('nombrest') ? ' is-invalid' : ''), 'placeholder' => 'Nombrest']) }}
            {!! $errors->first('nombrest', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccionest') }}
            {{ Form::text('direccionest', $establecimiento->direccionest, ['class' => 'form-control' . ($errors->has('direccionest') ? ' is-invalid' : ''), 'placeholder' => 'Direccionest']) }}
            {!! $errors->first('direccionest', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefonoest') }}
            {{ Form::text('telefonoest', $establecimiento->telefonoest, ['class' => 'form-control' . ($errors->has('telefonoest') ? ' is-invalid' : ''), 'placeholder' => 'Telefonoest']) }}
            {!! $errors->first('telefonoest', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>