<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $contacto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ape_pat') }}
            {{ Form::text('ape_pat', $contacto->ape_pat, ['class' => 'form-control' . ($errors->has('ape_pat') ? ' is-invalid' : ''), 'placeholder' => 'Ape Pat']) }}
            {!! $errors->first('ape_pat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ape_mat') }}
            {{ Form::text('ape_mat', $contacto->ape_mat, ['class' => 'form-control' . ($errors->has('ape_mat') ? ' is-invalid' : ''), 'placeholder' => 'Ape Mat']) }}
            {!! $errors->first('ape_mat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $contacto->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $contacto->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tel_casa') }}
            {{ Form::text('tel_casa', $contacto->tel_casa, ['class' => 'form-control' . ($errors->has('tel_casa') ? ' is-invalid' : ''), 'placeholder' => 'Tel Casa']) }}
            {!! $errors->first('tel_casa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tel_movil') }}
            {{ Form::text('tel_movil', $contacto->tel_movil, ['class' => 'form-control' . ($errors->has('tel_movil') ? ' is-invalid' : ''), 'placeholder' => 'Tel Movil']) }}
            {!! $errors->first('tel_movil', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>