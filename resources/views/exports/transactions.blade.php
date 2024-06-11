<!DOCTYPE html>
<html>
<head>
    <title>Transactions PDF</title>
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
    <h2>Transactions List</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Date</th>
                <th>Id Transaksi</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nilai Rp</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->code_transaksi }}</td>
                <td>{{ $item->nama_customer }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->total_harga }}</td>
                <td>
                    <span class="{{ $item->status === 'Paid' ? 'badge bg-success text-white' : 'badge bg-danger text-white' }}">
                        {{ $item->status }}
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
