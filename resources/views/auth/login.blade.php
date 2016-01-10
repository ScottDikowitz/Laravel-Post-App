<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
