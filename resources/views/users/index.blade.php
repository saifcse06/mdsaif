@extends('layouts.backend_master')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">User Manage</li>
@endsection
@section('content')
<!-- order table -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User Lists
                    <div class="pull-right text-right">
                        <a class="btn btn-success" href="{{ route('users.create') }}"> <i class="mdi mdi-account-plus"></i> Create User</a>
                    </div>
                </h4>
                @include('layouts.backend.flash-message')
                <div class="table-responsive">
                    <table id="default_order" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $user)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $v)
                                    <label class="badge badge-success">{{ $v }}</label>
                                    @endforeach
                                    @endif
                                </td>
                                <td>
                                    <a title="Show" class="btn btn-info" href="{{ route('users.show',$user->id) }}"><i class="mdi mdi-eye"></i> </a>
                                    <a title="Edit" class="btn btn-primary" href="{{ route('users.edit',$user->id) }}"><i class="mdi mdi-lead-pencil"></i></a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                    <button title="Delete" type="submit" class="btn btn-danger"><i class="mdi mdi-delete"></i> </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection