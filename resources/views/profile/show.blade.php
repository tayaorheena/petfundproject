@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: #f1f2ed; height: 100vh;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- Profile Section -->
            <div class="card" style="background-color: #a2ac82; border-radius: 15px;">
                <div class="card-header" style="background-color: #5d6d49; color: white; font-size: 1.5em; text-align: center; padding: 20px;">
                    {{ __('Your Profile') }}
                </div>

                <div class="card-body" style="background-color: #2e2d1d; color: white; border-radius: 15px;">
                    <!-- Display success message -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Profile Information Form -->
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="text-white">Name</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="text-white">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="text-white">Password (Leave empty if you don't want to change)</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation" class="text-white">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary" style="background-color: #5d6d49;">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="position: absolute; bottom: 30px; width: 100%; text-align: center;">
        <a href="{{ route('home') }}" style="background-color: #0c3c01; color: #f1f2ed; padding: 1rem 2rem; text-decoration: none; border-radius: 6px; font-size: 1.2rem; transition: background-color 0.3s;">
            Back to Homepage
        </a>
    </div>
@endsection
