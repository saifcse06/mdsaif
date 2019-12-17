@extends('layouts.backend_master')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{route('users.index')}}">User Manage</a></li>
<li class="breadcrumb-item active" aria-current="page">Create New User</li>
@endsection
@section('content')
<!-- Row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white">Create New User</h4>
            </div>
            @if (count($errors) > 0)
            @include('layouts.backend.flash-message')
            @endif
            {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
            <div class="form-body">
                <div class="card-body">
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control','require')) !!}
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control','require')) !!}
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control','require')) !!}
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Confirm Password</label>
                                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control','require')) !!}
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group has-danger">
                                <label class="control-label">Role</label>
                                <div class="form-group"> 
                                <select require name="roles[]" class="select2 form-control select-new" multiple="multiple" style="color:black; height: 36px;width: 100%!;">
                                @foreach($roles as $role)
                                <option value="{{$role}}">{{$role}}</option>
                                @endforeach
                                </select>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                </div> 
                <div class="card-body">
                    <div class="form-group m-b-0 text-left">
                     
                    </div>
                    <div class="form-group m-b-0 text-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}"> <i class="mdi mdi-arrow-left"></i>Back</a>
                        <button type="submit" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-check"></i>Save</button>
                        <button type="button" class="btn btn-dark waves-effect waves-light">Cancel</button>
                    </div>
                </div> 
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- Row -->
@endsection
@section('custom-css') 
@endsection