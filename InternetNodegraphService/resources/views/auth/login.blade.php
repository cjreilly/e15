
@extends('master')

@section('no-options')
  <h1>Login</h1>

  <a href='/register'>Register here</a> if you don't have an account.

  <form method="POST" action='{{ route('login') }}'>
      {{ csrf_field() }}
      <p>
      <label for='email'>E-mail Address</label>
      <input id='email' type='email' name='email' value='{{ old('email') }}' required autofocus>
      </p>

      <p>
      <label for='password'>Password</label>
      <input id='password' type='password' name='password' required>

      </p>

      <p>
          <button type='submit' class='btn btn-primary'>Login</button>
      </p>

  </form>
@endsection

