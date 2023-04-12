<!DOCTYPE html>
<html>
<head>
    <title>Packages</title>
</head>
<body>
    <h1>Packages</h1>
    <ul>
            <li>
                <strong>Package ID:</strong> {{ $packages->id }}<br>
                <strong>Name:</strong> {{ $packages->name }}<br>
                <<strong>Description:</strong> {{ $packages->description }}<br>
                <strong>Price:</strong> {{ $packages->price }}<br>
            </li>
    </ul>
</body>
</html>
