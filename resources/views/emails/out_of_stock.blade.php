<!DOCTYPE html>
<html>
<head>
    <title>Productos out of stock</title>
</head>
<body>
<h2>⚠️ Products out of stock</h2>
<p>Following products are out of stock</p>
<ul>
    @foreach ($products as $product)
        <li>{{ $product['title'] }} (ID: {{ $product['id'] }})</li>
    @endforeach
</ul>
</body>
</html>
