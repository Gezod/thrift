<!DOCTYPE html>
<html>
<head>
    <title>Products PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Products List</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Date In</th>
                <th>SKU</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $index => $product)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><img src="{{ storage_path('app/public/product/' . $product->foto) }}" style="width:100px;"></td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->sku }}</td>
                <td>{{ $product->nama_product }}</td>
                <td>{{ $product->type . ' ' . $product->kategory }}</td>
                <td>{{ $product->harga }}</td>
                <td>{{ $product->quantity }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
