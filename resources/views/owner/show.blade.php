@extends('layouts.app')

@section('template_title')
    {{ $owner->name ?? "{{ __('Show') Owner" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Owner</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('owners.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $owner->name }}
                        </div>
                        <div class="form-group">
                            <strong>Cellphone:</strong>
                            {{ $owner->cellphone }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $owner->age }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $owner->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Id Mechanical Workshop:</strong>
                            {{ $owner->id_mechanical_workshop }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
