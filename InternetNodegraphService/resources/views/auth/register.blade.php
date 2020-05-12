@extends('master')

@section('no-options')
    <h1>Register</h1>
    <p>
        <a href="/login">Login here</a> if you already have an account.
    </p>
    <form method='POST' action='{{ route('register') }} '>
        {{ csrf_field() }}
        <p>
        <label for='name'>Name</label>
        <input id='name' type='text' name='name' value='{{ old('name') }}' required autofocus>
        </p>

        <p>
        <label for='email'>E-Mail Address</label>
        <input id='email' type='email' name='email' value='{{ old('email') }}' required>
        </p>

        <p>
        <label for='email'>E-Mail Address</label>
        <input id='email' type='email' name='email' value='{{ old('email') }}' required>
        </p>

        <p>
        <label for='password'>Password (min:8)</label>
        <input id='password' type='password' name='password' required>
        </p>
        
        <p>
        <label for='password-confirm'>Confirm Password</label>
        <input id='password-confirm' type='password' name='password_confirmation' required>
        </p>


        <button type='submit' class='btn btn-primary'>Register</button>
    </form>
@endsection

