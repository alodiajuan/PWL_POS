<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            border: 4px solid blue;
            padding: 20px;
            width: 250px;
            margin: 20px auto;
        }
        h1 {
            font-size: 24px;
            text-align: center;
        }
        table {
            width: 100%;
            border: 1px solid black;
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data User</h1>
        <table>
            <tr>
                <td>Jumlah Pengguna</td>
            </tr>
            <tr>
                <td>{{ $userCount }}</td> <!-- Menampilkan jumlah pengguna -->
            </tr>
        </table>
    </div>
</body>
</html>
