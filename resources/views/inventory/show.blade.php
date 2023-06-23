@extends('layouts.app')

@section('template_title')
    {{ $inventory->name ?? "{{ __('Mostrar') Inventory" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Inventario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inventories.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Restock Day:</strong>
                            {{ $inventory->Dia_de_rebastcimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Elements In Storage:</strong>
                            {{ $inventory->elements_in_storage }}
                        </div>
                        <div class="form-group">
                            <strong>Supervisor Name:</strong>
                            {{ $inventory->supervisor_name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
