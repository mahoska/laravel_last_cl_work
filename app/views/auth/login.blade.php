<html>
<body>
<form method ='post' action="{{URL::to('auth/login')}}">
<input name='email' />
<input type='password' name='password'/>
<button type='submit'>Login</button>
</form>
<p>or <a href="{{URL::to('auth/register')}}">Register</a><p>
</body>
</html>
