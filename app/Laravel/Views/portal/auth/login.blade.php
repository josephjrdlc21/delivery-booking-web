@extends('portal._layouts.auth')

@section('content')
<form method="POST" action="">
    {!!csrf_field()!!}
    <h3 class="text-center">Sign In</h3>
    <div class="login-form mb-4 mx-2">
        <div class="form-sub">
            <div class="form-floating form-floating-custom mb-3">
                <input id="email" name="email" type="text" class="form-control" placeholder="email">
                <label for="email">Email</label>
            </div>
            <div class="form-floating form-floating-custom mb-3">
                <input id="password" name="password" type="password" class="form-control" placeholder="password">
                <label for="password">Password</label>
            </div>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="rememberme">
            <label class="form-check-label" for="rememberme">Remember Me</label>
        </div>
        <div class="form-action mb-3">
            <button type="submit" class="btn btn-primary w-100 btn-login">Sign In</button>
        </div>
        <div class="login-account mt-5">
            <span class="msg">Have forgot your password ?</span>
            <a href="#" class="link">Reset It</a>
        </div>
    </div>
</form>
@stop