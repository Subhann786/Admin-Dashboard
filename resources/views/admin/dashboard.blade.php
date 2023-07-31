<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>admin dashboard</h1>

    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <button type='submit' class='btn btn-sm'>Logot</button>
    </form>
</body>
</html>