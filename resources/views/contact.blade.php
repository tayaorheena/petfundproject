@extends('layouts.app')

@section('content')
<div class="contact" id="contact" style="text-align: center; padding-top: 20px; background-color: #a2ac82; height: 95vh;">
    <div class="contact-content">
        <h1 class="contact-h1" style="font-size: 3.5rem; color: #0c3c01;">Contact Us!</h1>
    </div>

    <!-- SOCIAL MEDIA -->
    <div id="cards" style="margin-left: 12.5rem;  width: 70%; padding-inline: 20px; display: flex; flex-wrap: wrap; gap: 30px; justify-content: center; align-items: center; height: calc(100vh - 140px);">
        <!-- Instagram Card -->
        <div class="card" style="min-width: 200px; height: 350px; flex: 1 1 250px; background-color: rgba(255, 255, 255, 0.15); border-radius: 12px; position: relative;">
            <div class="card-content" style="position: absolute; inset: 1px; background-color: #5b6d49; border-radius: inherit; display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 18px;">
                <i class="fa-brands fa-instagram" style="font-size: 10rem; color: #f1f2ed;"></i>
                <h2 style="color: #f1f2ed;">Instagram</h2>
                <p style="color: #f1f2ed;">Username: <span style="color: #f1f2ed;">The Pet Fund</span></p>
                <a href="https://www.instagram.com/thepetfund/?hl=en" style="all: unset; cursor: pointer; width: 90%; padding-block: 0.8rem; background-color: #2e2d1d; border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 6px; display: flex; justify-content: center; align-items: center; gap: 8px; z-index: 10; color: #f1f2ed; transition: background-color 0.3s, color 0.3s;">
                    <i class="fa-solid fa-link" style="color: #f1f2ed;"></i>
                    <span>Follow us</span>
                </a>
            </div>
        </div>

        <!-- Twitter Card -->
        <div class="card" style="min-width: 200px; height: 350px; flex: 1 1 250px; background-color: rgba(255, 255, 255, 0.15); border-radius: 12px; position: relative;">
            <div class="card-content" style="position: absolute; inset: 1px; background-color: #5b6d49; border-radius: inherit; display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 18px;">
                <i class="fa-brands fa-github" style="font-size: 10rem; color: #f1f2ed;"></i>
                <h2 style="color: #f1f2ed;">Twitter</h2>
                <p style="color: #f1f2ed;">Username: <span style="color: #f1f2ed;">The Pet Fund</span></p>
                <a href="https://x.com/i/flow/login?redirect_after_login=%2Fthepetfund" style="all: unset; cursor: pointer; width: 90%; padding-block: 0.8rem; background-color: #2e2d1d; border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 6px; display: flex; justify-content: center; align-items: center; gap: 8px; z-index: 10; color: #f1f2ed; transition: background-color 0.3s, color 0.3s;">
                    <i class="fa-solid fa-link" style="color: #f1f2ed;"></i>
                    <span>Follow us</span>
                </a>
            </div>
        </div>

        <!-- Facebook Card -->
        <div class="card" style="min-width: 200px; height: 350px; flex: 1 1 250px; background-color: rgba(255, 255, 255, 0.15); border-radius: 12px; position: relative;">
            <div class="card-content" style="position: absolute; inset: 1px; background-color: #5b6d49; border-radius: inherit; display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 18px;">
                <i class="fa-brands fa-facebook" style="font-size: 10rem; color: #f1f2ed;"></i>
                <h2 style="color: #f1f2ed;">Facebook</h2>
                <p style="color: #f1f2ed;">Username: <span style="color: #f1f2ed;">The Pet Fund</span></p>
                <a href="https://www.facebook.com/petfund/" style="all: unset; cursor: pointer; width: 90%; padding-block: 0.8rem; background-color: #2e2d1d; border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 6px; display: flex; justify-content: center; align-items: center; gap: 8px; z-index: 10; color: #f1f2ed; transition: background-color 0.3s, color 0.3s;">
                    <i class="fa-solid fa-link" style="color: #f1f2ed;"></i>
                    <span>Follow us</span>
                </a>
            </div>
        </div>
    </div> <!-- END OF SOCIAL MEDIA -->
 


    <!-- Return to Homepage Button -->
    <div style="position: absolute; bottom: 30px; width: 100%; text-align: center;">
        <a href="{{ route('home') }}" style="background-color: #0c3c01; color: #f1f2ed; padding: 1rem 2rem; text-decoration: none; border-radius: 6px; font-size: 1.2rem; transition: background-color 0.3s;">
            Back to Homepage
        </a>
    </div>
</div>

<footer style="background-color: #333; color: white; text-align: center; padding: 1em;">
        &copy; 2024 Pet Donation
    </footer>
@endsection

