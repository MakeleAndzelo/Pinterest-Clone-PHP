<form role="form" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    
    <label for="name" class="label">Name</label>
    <p class="control">
        <input type="text" class="input" name="name" value="{{ old('name') }}" required autofocus>
    </p>

    <label for="email" class="label">E-mail</label>
    <p class="control">
        <input type="email" id="email" name="email" class="input" value="{{ old('email') }}" required>
    </p>

    <label for="password" class="label">Password</label>
    <p class="control">
        <input type="password" class="input" name="password" id="password" required>
    </p>

    <label for="password-confirm" class="label">Confirm Password</label>
    <p class="control">
        <input type="password" class="input" name="password_confirmation" id="password-confirm" required>
    </p>

    <div class="control">
        <button type="submit" class="button is-primary">Register</button>
    </div>
</form>