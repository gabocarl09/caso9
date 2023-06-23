@extends('layouts.app')

@section('template_title')
    {{ $itemsBuyed->name ?? "{{ __('Show') Items Buyed" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Items Buyed</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('items-buyeds.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $itemsBuyed->name }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $itemsBuyed->type }}
                        </div>
                        <div class="form-group">
                            <strong>Amount:</strong>
                            {{ $itemsBuyed->amount }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
