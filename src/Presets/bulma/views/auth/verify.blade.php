@extends('layouts.app', [
    'title' => 'Verify Your Email Address'
])

@section('content')
<section class="section">
    <div class="container">
        <div class="columns is-tablet is-centered">
            <div class="column is-three-fifths-tablet is-two-fifths-desktop">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">
                            Verify Your Email Address
                        </h1>

                        @if (session('resent'))
                            <div class="notification is-success">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
                        <div class="content">
                            Before proceeding, please check your email for a verification link. 
                            If you did not receive the email, 
                            <a href="{{ route('verification.resend') }}"
                                onclick="event.preventDefault();document.getElementById('verify-form').submit();">
                                click here to request another.
                            </a>
                        </div>
                        <form id="verify-form" action="{{ route('verification.resend') }}" method="POST" style="display:none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
