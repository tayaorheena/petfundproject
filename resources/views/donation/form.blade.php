@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="background-color: #a2ac82; border-radius: 15px;">
                <div class="card-header" style="background-color: #5d6d49; color: white; font-size: 1.5em; text-align: center; padding: 20px;">
                    Make a Donation
                </div>

                <div class="card-body" style="background-color: #2e2d1d; color: white; border-radius: 15px;">
                    <p class="text-center" style="font-size: 1.3em;">Your donation helps provide food, shelter, and medical care for animals in need.</p>

                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Donation Form -->
                    <form action="{{ route('donate.process') }}" method="POST">
                        @csrf
                        
                        <!-- Donation Amount -->
                        <div class="form-group">
                            <label for="amount" style="color: white;">Donation Amount (₱)</label>
                            <input type="number" name="amount" id="amount" class="form-control" placeholder="Enter amount" required>
                        </div>

                        <!-- Payment Method -->
                        <div class="form-group">
                            <label for="payment_method" style="color: white;">Choose Payment Method</label>
                            <select name="payment_method" id="payment_method" class="form-control" required>
                                <option value="gcash">GCash</option>
                                <option value="paymaya">PayMaya</option>
                                <option value="paypal">PayPal</option>
                                <option value="credit_card">Debit/Credit Card</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group text-center">
                            <button type="submit" class="btn" style="background-color: #5d6d49; color: white; padding: 10px 30px; font-size: 1.2em; border-radius: 15px; font-weight: bold;">
                                Donate Now
                            </button>
                        </div>
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
