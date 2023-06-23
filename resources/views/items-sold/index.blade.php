@extends('layouts.app')

@section('template_title')
    Items Sold
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Items Sold') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('items-solds.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Type</th>
										<th>Amount</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($itemsSolds as $itemsSold)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $itemsSold->name }}</td>
											<td>{{ $itemsSold->type }}</td>
											<td>{{ $itemsSold->amount }}</td>

                                            <td>
                                                <form action="{{ route('items-solds.destroy',$itemsSold->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('items-solds.show',$itemsSold->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('items-solds.edit',$itemsSold->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $itemsSolds->links() !!}
            </div>
        </div>
    </div>
@endsection
