@extends('layouts.app')

@section('content')
    <!-- Page Content with Inline Styles -->

    <header style="background-color: #0C3C01; color: white; padding: 1em;">
        <h1 style="margin: 0; display: inline-block;">Pet Donation Fund</h1>
    </header>

    <main>
        <section style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); grid-gap: 5px; padding: 20px; grid-template-columns: repeat(4, 1fr); grid-template-rows: repeat(3, 1fr);">
            <div style="background-color: #eee;  font-size: 18px; padding: 4.1em; text-align: center; border: 1px solid #ccc; border-radius: 50px; margin: 10px; height: 20px; width: 290px; transition: background-color 0.3s ease; display: flex; justify-content: center; align-items: center;" onmouseover="this.style.backgroundColor='#586D49'" onmouseout="this.style.backgroundColor='#eee'">Rescues</div>
            <div style="background-color: #eee; font-size: 18px; padding: 4.1em; text-align: center; border: 1px solid #ccc; border-radius: 50px; margin: 10px; height: 55px; width: 290px; transition: background-color 0.3s ease; display: flex; justify-content: center; align-items: center;" onmouseover="this.style.backgroundColor='#586D49'" onmouseout="this.style.backgroundColor='#eee'">Shelter</div>
            <div style="background-color: #eee; font-size: 18px; padding: 4.1em; text-align: center; border: 1px solid #ccc; border-radius: 50px; margin: 10px; height: 55px; width: 290px; transition: background-color 0.3s ease; display: flex; justify-content: center; align-items: center;" onmouseover="this.style.backgroundColor='#586D49'" onmouseout="this.style.backgroundColor='#eee'">Wildlife</div>
            <div style="background-color: #eee; font-size: 18px; padding: 4.1em; text-align: center; border: 1px solid #ccc; border-radius: 50px; margin: 10px; height: 55px; width: 290px; transition: background-color 0.3s ease; display: flex; justify-content: center; align-items: center;" onmouseover="this.style.backgroundColor='#586D49'" onmouseout="this.style.backgroundColor='#eee'">Foster</div>
            <div style="background-color: #eee; font-size: 18px; padding: 4.1em; text-align: center; border: 1px solid #ccc; border-radius: 50px; margin: 10px; height: 55px; width: 290px; transition: background-color 0.3s ease; display: flex; justify-content: center; align-items: center;" onmouseover="this.style.backgroundColor='#586D49'" onmouseout="this.style.backgroundColor='#eee'">Adoption</div>
            <div style="background-color: #eee; font-size: 18px; padding: 4.1em; text-align: center; border: 1px solid #ccc; border-radius: 50px; margin: 10px; height: 55px; width: 290px; transition: background-color 0.3s ease; display: flex; justify-content: center; align-items: center;" onmouseover="this.style.backgroundColor='#586D49'" onmouseout="this.style.backgroundColor='#eee'">Emergency Care</div>
            <div style="background-color: #eee; font-size: 18px; padding: 4.1em; text-align: center; border: 1px solid #ccc; border-radius: 50px; margin: 10px; height: 55px; width: 290px; transition: background-color 0.3s ease; display: flex; justify-content: center; align-items: center;" onmouseover="this.style.backgroundColor='#586D49'" onmouseout="this.style.backgroundColor='#eee'">Service Animals</div>
            <div style="background-color: #eee; font-size: 18px; padding: 4.1em; text-align: center; border: 1px solid #ccc; border-radius: 50px; margin: 10px; height: 55px; width: 290px; transition: background-color 0.3s ease; display: flex; justify-content: center; align-items: center;" onmouseover="this.style.backgroundColor='#586D49'" onmouseout="this.style.backgroundColor='#eee'">Vet Care</div>
            <div style="background-color: #eee; font-size: 18px; padding: 4.1em; text-align: center; border: 1px solid #ccc; border-radius: 50px; margin: 10px; height: 55px; width: 290px; transition: background-color 0.3s ease; display: flex; justify-content: center; align-items: center;" onmouseover="this.style.backgroundColor='#586D49'" onmouseout="this.style.backgroundColor='#eee'">Pet Products</div>
            <div style="background-color: #eee; font-size: 18px; padding: 4.1em; text-align: center; border: 1px solid #ccc; border-radius: 50px; margin: 10px; height: 55px; width: 290px; transition: background-color 0.3s ease; display: flex; justify-content: center; align-items: center;" onmouseover="this.style.backgroundColor='#586D49'" onmouseout="this.style.backgroundColor='#eee'">Transportation</div>
            <div style="background-color: #eee; font-size: 18px; padding: 4.1em; text-align: center; border: 1px solid #ccc; border-radius: 50px; margin: 10px; height: 55px; width: 290px; transition: background-color 0.3s ease; display: flex; justify-content: center; align-items: center;" onmouseover="this.style.backgroundColor='#586D49'" onmouseout="this.style.backgroundColor='#eee'">Training</div>
            <div style="background-color: #eee; font-size: 18px; padding: 4.1em; text-align: center; border: 1px solid #ccc; border-radius: 50px; margin: 10px; height: 55px; width: 290px; transition: background-color 0.3s ease; display: flex; justify-content: center; align-items: center;" onmouseover="this.style.backgroundColor='#586D49'" onmouseout="this.style.backgroundColor='#eee'">Animal Protection</div>
        </section>
    </main>
    

    <div class="text-center mt-3">
                        <a href="{{ route('home') }}" style="background-color: #5b6d49; color: white; padding: 12px 40px; font-size: 1.2em; border-radius: 8px; text-decoration: none;">
                            Back to Homepage
                        </a>
                    </div>
<br>
    <footer style="background-color: #333; color: white; text-align: center; padding: 1em;">
        &copy; 2024 Pet Donation
    </footer>
@endsection
