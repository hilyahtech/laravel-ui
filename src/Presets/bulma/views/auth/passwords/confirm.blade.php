@extends('layouts.app', [
    'title' => 'Confirm Password'
])

@section('content')
<section class="section">
    <div class="container">
        <div class="columns is-tablet is-centered">
            <div class="column is-three-fifths-tablet is-two-fifths-desktop">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">
                            Confirm Password
                        </h1>

                        <p class="content">Please confirm your password before continuing.</p>

                        <form action="{{ route('password.confirm') }}" method="post">
                            @csrf

                            <div class="field">
                                <label for="password" class="label">Password</label>
                                <div class="control">
                                    <input type="password" name="password" id="password" class="input @error('password') is-danger @enderror">
                                </div>
                                @error('password')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            @if (Route::has('password.request'))
                                <div class="field">
                                    <div class="control">
                                        <a href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            @endif

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
