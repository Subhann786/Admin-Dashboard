<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>User Login </title>


  <link rel="stylesheet" href="{{asset ('assets/css/reset.css')}}">
{{-- 
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" /> --}}
    <link rel="stylesheet" href="{{asset ('assets/css/ustyle.css')}}">
    <form method="POST" action="{{ route('login') }}">

    
            
            
</head>

<body>

  <div class="wrap">
		<div class="avatar">
      <img src="http://cdn.ialireza.me/avatar.png">
		</div>
		<input type="text" placeholder="username" required>
		<div class="bar">
			<i></i>
		</div>
		<input type="password" placeholder="password" required>
		<a href="" class="forgot_link">forgot ?</a>
		
        <x-primary-button class="ml-3">
            {{ __('Log in') }}
        </x-primary-button>

        {{-- <button>Sign in</button> --}}
	</div>

  <script src="{{asset ('js/index.js')}}"></script>

</body>

</html>