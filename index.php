<?php

require 'Mahasiswa.php';

$name = '';

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $name = $_POST['name'];
    $college = $_POST['college'];
    $subject = $_POST['subject'];
    $point = $_POST['point'];
}

$student = new Mahasiswa($nim, $name, $college, $subject, $point);

// var_dump(empty($student->getName()));

?>

<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card border-light mx-auto">
                    <div class="card-header text-end">
                        <a href="create.html" class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover">Tambah +</a>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <h3 class="card-title">Daftar Mahasiswa</h3>
                        </div>
                        <div class="mb-3">
                            <table class="table table-hover table-bordered border-light">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">NIM</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Kampus</th>
                                        <th scope="col">Mata Kuliah</th>
                                        <th scope="col">Nilai</th>
                                        <th scope="col">Grade</th>
                                        <th scope="col">Predikat</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php if (!empty($student->getName())) : ?>
                                            <th scope="row" class="text-center"><?= $student->getNim(); ?></th>
                                            <td><?= $student->getName(); ?></td>
                                            <td><?= $student->getCollege(); ?></td>
                                            <td><?= $student->getSubject(); ?></td>
                                            <td class="text-center"><?= $student->getPoint(); ?></td>
                                            <td class="text-center"><?= $student->getGrade(); ?></td>
                                            <td class="text-center"><?= $student->getPredicate(); ?></td>
                                            <td class="text-center"><?= $student->getStatus(); ?></td>
                                        <?php else : ?>
                                            <td colspan="8" class="text-center text-muted">Mahasiswa Belum Terdaftar</td>
                                        <?php endif ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>