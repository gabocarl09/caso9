@extends('layouts.app')

@section('template_title')
    Mechanical Workshop
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Mechanical Workshop') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('mechanical-workshops.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Direction</th>
										<th>Opening Time</th>
										<th>Closing Time</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mechanicalWorkshops as $mechanicalWorkshop)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $mechanicalWorkshop->direction }}</td>
											<td>{{ $mechanicalWorkshop->opening_time }}</td>
											<td>{{ $mechanicalWorkshop->closing_time }}</td>

                                            <td>
                                                <form action="{{ route('mechanical-workshops.destroy',$mechanicalWorkshop->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mechanical-workshops.show',$mechanicalWorkshop->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('mechanical-workshops.edit',$mechanicalWorkshop->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $mechanicalWorkshops->links() !!}
            </div>
        </div>
    </div>
@endsection
