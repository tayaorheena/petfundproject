@extends('layouts.app')

@section('content')
<div class="container mt-5" style="background-color: #f1f2ed; padding: 40px; border-radius: 10px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #a2ac82; border-radius: 15px;">
                <div class="card-header text-center" style="background-color: #5b6d49; color: white; font-size: 1.8em; padding: 20px;">
                    Donation Successful!
                </div>

                <div class="card-body" style="background-color: #2e2d1d; color: white; border-radius: 15px; padding: 30px;">
                    <h3 style="text-align: center; color: #f1f2ed; font-size: 1.5em;">
                        Thank you for your generous donation!
                    </h3>
                    <p style="text-align: center; font-size: 1.2em; color: #f1f2ed;">
                        Your contribution will help us provide food, shelter, and medical care for animals in need. Every little bit helps, and we're incredibly grateful for your support.
                    </p>

                    <div class="text-center mt-4">
                        <a href="{{ route('home') }}" style="background-color: #5b6d49; color: white; padding: 12px 40px; font-size: 1.2em; border-radius: 8px; text-decoration: none;">
                            Back to Homepage
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

