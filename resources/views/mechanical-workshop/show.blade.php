@extends('layouts.app')

@section('template_title')
    {{ $mechanicalWorkshop->name ?? "{{ __('Show') Mechanical Workshop" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Mechanical Workshop</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mechanical-workshops.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Direction:</strong>
                            {{ $mechanicalWorkshop->direction }}
                        </div>
                        <div class="form-group">
                            <strong>Opening Time:</strong>
                            {{ $mechanicalWorkshop->opening_time }}
                        </div>
                        <div class="form-group">
                            <strong>Closing Time:</strong>
                            {{ $mechanicalWorkshop->closing_time }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
