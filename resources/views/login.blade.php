@extends('layouts.default')

@section('styles')

    <link rel = 'stylesheet' href = '{{asset("styles/components/navigation.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/components/footer.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/contact.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/login.css")}}'>
@endsection

@section('contents')


    <form class="login-box" method="post" action="/login">
        @if (session('message'))
            <div class="error text-center">{{ session('message') }}</div>
        @endif
        
        @csrf
         <div class="single-input flex-col">
            <label for="first_name">Email</label>
            <input type="email" name="email" placeholder="eg. myemail@gmail.com">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="single-input flex-col">
            <label for="first_name">Password</label>
            <input type="password" name="password" placeholder="****************">
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button>Login</button>
    </form>



@endsection