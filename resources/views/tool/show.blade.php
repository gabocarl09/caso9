@extends('layouts.app')

@section('template_title')
    {{ $tool->name ?? "{{ __('Show') Tool" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tool</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tools.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Keys:</strong>
                            {{ $tool->keys }}
                        </div>
                        <div class="form-group">
                            <strong>Pliers:</strong>
                            {{ $tool->pliers }}
                        </div>
                        <div class="form-group">
                            <strong>Screwdriver:</strong>
                            {{ $tool->screwdriver }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
