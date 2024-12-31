<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <div class="table-responsive text-nowrap">
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Program Studi</th>
                    <th>Email</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @php
                    $no = 1;
                @endphp
                @foreach ($users as $user)
                    <tr>
                        <td style="white-space: wrap">{{ $no++ }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->nim }}</td>
                        <td>{{ $user->prodi }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->alamat }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
