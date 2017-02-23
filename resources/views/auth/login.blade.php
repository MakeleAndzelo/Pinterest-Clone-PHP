<form role="form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <label for="email" class="label">E-mail</label>
    <p class="control">
        <input type="email" id="email" name="email" class="input" required autofocus>
    </p>

    <label for="password" class="label">Password</label>
    <p class="control">
        <input type="password" name="password" id="password" class="input" required>
    </p>

    <p class="control">
        <label class="checkbox">
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
            Remember Me
        </label>
    </p>

    <div class="control is-grouped">
        <p class="control">
            <button type="submit" class="button is-primary">Submit</button>
        </p>
        <div class="control">
            <a href="{{ route('password.request') }}" class="button is-link">Forgot Your Password?</a>
        </div>
    </div>
</form>
