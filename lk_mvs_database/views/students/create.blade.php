<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create student</title>
</head>
<body>
    <h1>Create New student</h1>
    <form action="{{ route('student.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="prodi" placeholder="Prodi" required>
    <button type="submit">Submit</button>
    </form>
</body>
</html>