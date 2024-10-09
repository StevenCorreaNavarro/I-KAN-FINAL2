<!DOCTYPE html>
<html>
<head>
    <title>Occasion Details</title>
</head>
<body>
    <h1>Occasion Details</h1>
    <p>ID: {{ $occasion->id }}</p>
    <p>Title: {{ $occasion->ocasion }}</p>
    <a href="{{ route('occasions.index') }}">Back to List</a>
</body>
</html>
