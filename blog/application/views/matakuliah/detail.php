<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Matakuliah</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Detail Matakuliah</h3>
    <table class="table table-striped table-hover table-bordered">
        <thead  class="table-primary">
            <tr>
                <th>Id</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Dosen Pembimbing</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $siswa -> id ?></td>
                <td><?php echo $siswa -> nim ?> </td>
                <td><?php echo $siswa -> nama ?></td>
                <td><?php echo $siswa -> sks ?></td>
                <td><?php echo $siswa -> kode ?></td>
                <td><?php echo $siswa -> dosen_pembimbing ?></td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>