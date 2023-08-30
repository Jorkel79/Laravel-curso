@extends('layouts.app')

@section('template_title')
    {{ $taco->name ?? "{{ __('Show') Taco" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Taco</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tacos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Taco:</strong>
                            {{ $taco->taco }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $taco->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $taco->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
