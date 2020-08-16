@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-8">
                <div class="card">
                    <div class="card-header">
                        <p class="card-header-title">
                            Dashboard
                        </p>
                    </div>
                    <div class="card-content">
                        @if (session('status'))
                            <div class="notification is-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p class="content">You are logged in!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection