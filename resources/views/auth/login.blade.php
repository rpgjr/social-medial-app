@extends('layouts.auth')
@section('page-title', 'Welcome to WeConnect')
@section('content')

    <section class="p-10">
        <div class="flex justify-end">
            <div class="auth-box">
                <p class="font-bold text-4xl">Login</p>
                <p class="text-sm">WeConnect to everybody worldwide.</p>

                <form class="my-10">
                    <div class="mb-5">
                        <label class="auth-label text-sm">Email</label>
                        <input type="email" class="auth-input" placeholder="your@email.com">
                    </div>
                    <div class="mb-5">
                        <label class="auth-label text-sm">Password</label>
                        <input type="password" class="auth-input" placeholder="********">
                    </div>

                    <div>
                        <button class="btn-signin">Sign In</button>
                    </div>
                </form>

                <p class="text-sm">Not yet registered? Sign up <a href="{{ route('getRegisterPage') }}" class="text-orange-700 font-bold">here.</a></p>
                <a href="" class="text-sm text-orange-700 font-bold">Forgot Password.</a>
            </div>
        </div>
    </section>

@endsection
