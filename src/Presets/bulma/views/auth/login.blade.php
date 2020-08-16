@extends('layouts.app', [
    'title' => 'Login'
])

@section('content')
<section class="section">
    <div class="container">
        <div class="columns is-tablet is-centered">
            <div class="column is-three-fifths-tablet is-two-fifths-desktop">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">
                            Login
                        </h1>

                        <form action="{{ route('login') }}" method="post">
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
                                <label for="password" class="label">Password</label>
                                <div class="control">
                                    <input type="password" name="password" id="password" class="input @error('password') is-danger @enderror">
                                </div>
                                @error('password')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="field">
                                <div class="control">
                                    <a href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <label class="checkbox">
                                        <input type="checkbox"> Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button is-primary is-fullwidth">
                                        Login
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
