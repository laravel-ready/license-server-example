<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>License Key</th>
                <th>Status</th>
                <th>Expiration</th>
                <th>Is Trial</th>
                <th>Is Lifetime</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($licenses as $license)
                <tr>
                    <td>#{{ $license->id }}</td>
                    <td>{{ $license->license_key }}</td>
                    <td>{{ $license->status }}</td>
                    <td>{{ $license->expiration_date }}</td>
                    <td>{{ $license->is_trial ? 'Yes' : 'No' }}</td>
                    <td>{{ $license->is_lifetime ? 'Yes' : 'No' }}</td>
                    <td>{{ $license->created_at }}</td>
                    <td>{{ $license->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
