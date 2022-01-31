@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card-header">
                    <h4>
                        Edit Employee
                        <a href="{{url('employee')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('update-employee',$employee->id)}}" method="POST">
                        @csrf 
                        @method('PUT')
                        <div class="form-group mb-3">
                            <div class="label">Name</div>
                            <input type="text" name="name" value="{{ $employee->name }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <div class="label">Email</div>
                            <input type="text" name="email" value="{{ $employee->email }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <div class="label">Phone</div>
                            <input type="text" name="phone" value="{{ $employee->phone }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <div class="label">Designation</div>
                            <input type="text" name="designation" value="{{ $employee->designation }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <div class="label">Status</div>
                            <input type="checkbox" name="status" {{ $employee->status == 1 ? 'checked':'' }}> Unactive-1/ Active-0
                        </div>
                        <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>

@endsection