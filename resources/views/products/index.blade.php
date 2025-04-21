<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
</div>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Products</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <ul class="flex">
        @foreach($products as $id => $product)
        <li><a href="{{ url('/product/' . $id) }}">
                {{ $product['name'] }} - Rp{{ number_format($product['price'], 0, ',','.' )}}
            </a>
        </li>
            
        @endforeach
    </ul>
</body>
</html>