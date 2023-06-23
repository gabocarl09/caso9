@extends('layouts.app')

@section('template_title')
    {{ $piece->name ?? "{{ __('Show') Piece" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Piece</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pieces.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Filters:</strong>
                            {{ $piece->filters }}
                        </div>
                        <div class="form-group">
                            <strong>Light Bulls:</strong>
                            {{ $piece->light_bulls }}
                        </div>
                        <div class="form-group">
                            <strong>Straps:</strong>
                            {{ $piece->straps }}
                        </div>
                        <div class="form-group">
                            <strong>Oil:</strong>
                            {{ $piece->oil }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
