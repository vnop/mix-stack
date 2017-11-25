<!DOCTYPE html>
<html>
<head>
    <title>Todo with Laravel</title>
</head>
<body>
    <h1>Todo</h1>
    @foreach ($tasks as $task)
        <li>{{ $task->body }}</li>
    @endforeach
</body>
</html>