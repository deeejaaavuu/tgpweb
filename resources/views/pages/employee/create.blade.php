@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card-header">
                    <h4>
                        Add Employee
                        <a href="{{url('employee')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('store-employee')}}" method="POST">
                        @csrf 
                        <div class="form-group mb-3">
                            <div class="label">Name</div>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <div class="label">Email</div>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <div class="label">Phone</div>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <div class="label">Designation</div>
                            <input type="text" name="designation" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>

@endsection