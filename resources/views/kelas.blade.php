<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 20px;
        }
        .container {
            max-width: 1200px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Daftar Kelas, Siswa, Mata Pelajaran, dan Pamong</h1>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nama Kelas</th>
                                <th>Nama Siswa</th>
                                <th>Mata Pelajaran</th>
                                <th>Pamong</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kelas as $item)
                            <tr>
                                <td>{{ $item['nama_kelas'] }}</td>
                                <td>
                                    <ul>
                                        @foreach($item['siswa'] as $siswa)
                                        <li>{{ $siswa }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        @foreach($item['mata_pelajaran'] as $mapel)
                                        <li>{{ $mapel }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>{{ $item['pamong'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
