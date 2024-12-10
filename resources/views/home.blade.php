@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: #f1f2ed; height: 100vh;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- Main Dashboard Section -->
            <div class="card" style="background-color: #a2ac82; border-radius: 15px;">
                <div class="card-header" style="background-color: #5d6d49; color: white; font-size: 1.5em; text-align: center; padding: 20px;">
                    {{ __('Welcome to Your Dashboard') }}
                </div>

                <div class="card-body" style="background-color: #2e2d1d; color: white; border-radius: 15px;">
                    <p style="text-align: center; font-size: 1.3em;">Welcome to your account dashboard! Here you can learn more about our mission, manage your profile, get in touch with us, and contribute to our donation fund.</p>

                    <!-- Dashboard Navigation Links -->
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-3">
                            <div class="card" style="background-color: #5d6d49; color: white; border-radius: 15px; text-align: center; padding: 20px;">
                                <i class="fas fa-info-circle" style="font-size: 2em;"></i>
                                <h3>About</h3>
                                <p>Learn about our mission to help pets in need.</p>
                                <a href="{{ route('about.show') }}" class="btn" style="background-color: white; color: #5d6d49; font-weight: bold; padding: 10px 20px; border-radius: 8px;">Learn More</a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card" style="background-color: #5d6d49; color: white; border-radius: 15px; text-align: center; padding: 20px;">
                                <i class="fas fa-user-circle" style="font-size: 2em;"></i>
                                <h3>Profile</h3>
                                <p>Update your personal information and settings.</p>
                                <a href="{{ route('profile.show') }}" class="btn" style="background-color: white; color: #5d6d49; font-weight: bold; padding: 10px 20px; border-radius: 8px;">Go to Profile</a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card" style="background-color: #5d6d49; color: white; border-radius: 15px; text-align: center; padding: 20px;">
                                <i class="fas fa-phone-alt" style="font-size: 2em;"></i>
                                <h3>Contact</h3>
                                <p>Get in touch with us for any inquiries or support.</p>
                                <a href="{{ route('contact.show') }}" class="btn" style="background-color: white; color: #5d6d49; font-weight: bold; padding: 10px 20px; border-radius: 8px;">Contact Us</a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card" style="background-color: #5d6d49; color: white; border-radius: 15px; text-align: center; padding: 20px;">
                                <i class="fas fa-heart" style="font-size: 2em;"></i>
                                <h3>Donation</h3>
                                <p>Support our cause by making a donation.</p>
                                <a href="{{ route('donate.show') }}" class="btn" style="background-color: white; color: #5d6d49; font-weight: bold; padding: 10px 20px; border-radius: 8px;">Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section: Donation -->
    <div id="donation" class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2 style="font-size: 2.5em; color: #5d6d49;">Make a Donation</h2>
                <p style="font-size: 1.3em; color: #333;">Your donations help provide food, medical care, and shelter for animals in need. Your support is appreciated!</p>
                <a href="{{ route('donate.show') }}" class="btn" style="background-color: #5d6d49; color: white; padding: 20px 30px; font-size: 1.2em; border-radius: 15px; font-weight: bold;">Donate Now</a>
            </div>
        </div>
    </div>
</div>

<footer style="background-color: #333; color: white; text-align: center; padding: 1em;">
        &copy; 2024 Pet Donation
    </footer>
@endsection

<!-- Font Awesome for Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>



