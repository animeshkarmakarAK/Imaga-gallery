<!DOCTYPE html>
<html>
<head>
    <title>chitrokor</title>
</head>
<body>
<h1>My {{ $foo }} chitrokor</h1>
<ul>
    @foreach($tasks as $task)
    <li>{{$task}}</li>
    @endforeach 
</ul>
</body>
</html>