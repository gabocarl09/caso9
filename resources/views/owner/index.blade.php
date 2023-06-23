@extends('layouts.app')

@section('template_title')
    Owner
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Owner') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('owners.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Cellphone</th>
										<th>Age</th>
										<th>Gender</th>
										<th>Id Mechanical Workshop</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($owners as $owner)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $owner->name }}</td>
											<td>{{ $owner->cellphone }}</td>
											<td>{{ $owner->age }}</td>
											<td>{{ $owner->gender }}</td>
											<td>{{ $owner->id_mechanical_workshop }}</td>

                                            <td>
                                                <form action="{{ route('owners.destroy',$owner->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('owners.show',$owner->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('owners.edit',$owner->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $owners->links() !!}
            </div>
        </div>
    </div>
@endsection
