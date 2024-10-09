<!DOCTYPE html>
<html>
<head>
    <title>Occasions List</title>
</head>
<body>
    <h1>Occasions</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($occasions as $occasion)
                <tr>
                    <td>{{ $occasion->id }}</td>
                    <td>{{ $occasion->title }}</td>
                    <td>
                        <form action="{{ route('occasions.select', $occasion->id) }}" method="POST">
                            @csrf
                            <button type="submit">Select</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
