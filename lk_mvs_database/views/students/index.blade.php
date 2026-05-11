<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>students</title>
</head>
<body>
    <h1>List of students</h1>
    <a href="{{ route('student.create') }}">Add New student</a>
    <ul>
    @foreach ($students as $student)
    <li>{{ $student->name }} ({{ $student->prodi }})</li>
    @endforeach
    </ul>
</body>
</html>