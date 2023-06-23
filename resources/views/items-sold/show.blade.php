@extends('layouts.app')

@section('template_title')
    {{ $itemsSold->name ?? "{{ __('Show') Items Sold" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Items Sold</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('items-solds.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $itemsSold->name }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $itemsSold->type }}
                        </div>
                        <div class="form-group">
                            <strong>Amount:</strong>
                            {{ $itemsSold->amount }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
