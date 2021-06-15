@extends('layouts.menu_footer')

@section('content')


          <!-- ========================= hero-section start ========================= -->
          <section id="home" class="hero-section">
            
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="hero-img">
                            <img src="{{ asset('img/feature-1.svg') }}" width="200px" alt="" class="wow fadeInRight"  data-wow-delay=".5s">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="hero-content-wrapper">
                            <h1 class="text-white wow fadeInDown" data-wow-delay=".2s">Register Now</h1>
                            <a href="{{ route('welcome') }}" class="theme-btn wow fadeInUp"  data-wow-delay=".6s">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= hero-section end ========================= -->
    
        <!-- ========================= contact-section start ========================= -->
        <section id="contact" class="contact-section pt-50 pb-105">
            <div class="container">
                <div class="row align-items-end">
             
                    <div class="col-xl-6 col-lg-7">
                         <!-- Message derreurs -->
                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <!-- Fin message errreurs -->
                        <div class="contact-wrapper mb-30">
                            <form action="{{ route('sendMail') }}" method="POST" id="contact-form" class="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-8 col-md-6">
                                        <input type="text" id="name" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username">
                                    </div>
                                    <div class="col-lg-8 col-md-6">
                                        <input type="text" id="wallet" value="{{ old('wallet') }}" name="wallet" placeholder="Wallet Adress">
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <input type="text" id="amount" value="{{ old('amount') }}" name="amount" placeholder="Amount">
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <input type="email" id="email" value="{{ old('email') }}" name="email" placeholder="Email Adress">
                                    </div>
                                    
                                </div>                                
                                <button type="submit" class="theme-btn theme-btn-2">Register</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <img src="{{ asset('img/countdown-img.svg') }}" width="400px" alt="" class="wow fadeInRight"  data-wow-delay=".5s">
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= contact-section end ========================= -->

@endsection