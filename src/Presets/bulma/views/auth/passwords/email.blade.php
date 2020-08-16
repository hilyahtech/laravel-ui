@extends('layouts.app', [
    'title' => 'Reset Password'
])

@section('content')
<section class="section">
    <div class="container">
        <div class="columns is-tablet is-centered">
            <div class="column is-three-fifths-tablet is-two-fifths-desktop">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">
                            Reset Password
                        </h1>

                        @if (session('status'))
                            <div class="notification is-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <form action="{{ route('password.email') }}" method="post">
                            @csrf

                            <div class="field">
                                <label for="email" class="label">E-Mail Address</label>
                                <div class="control">
                                    <input type="email" name="email" id="email" class="input @error('email') is-danger @enderror" value="{{ old('email') }}">
                                </div>
                                @error('email')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button is-primary is-fullwidth">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
