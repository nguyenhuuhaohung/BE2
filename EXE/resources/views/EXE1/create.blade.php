@extends('dashboard')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3>Create User</h3>
                    <form action="{{ route('user.postUser') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                        </div>
                        <div class="form-group mb-3">
                            <input type="phone" placeholder="Phone" id="phone" class="form-control" name="phone" required
                                autofocus>
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" placeholder="Password" id="password" class="form-control" name="password" required
                                autofocus>
                        </div>
                        <div class="d-grid mx-auto">
                           <button type="submit" class="btn btn-dark btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
