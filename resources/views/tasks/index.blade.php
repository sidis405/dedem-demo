<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Demo</title>
</head>
<body>
    <ul>
        {{-- Iteriamo l'oggetto dati --}}
        @foreach($tasks as $task)
            {{-- Stampiamo il singolo task --}}
            <li>
                <a href="/tasks/{{ $task->id }}">{{ $task->body }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
