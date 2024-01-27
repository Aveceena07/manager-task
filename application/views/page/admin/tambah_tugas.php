<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(
        'assets/css/tambah_karyawan.css'
    ) ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon"
        href="https://cdn.iconscout.com/icon/premium/png-256-thumb/task-manager-5320178-4452647.png?f=webp"
        type="image/x-icon">
</head>

<body>
    <?php $this->load->view('component/sidebar_admin'); ?>

    <div class="custom-card">
        <div class="custom-form-container">
            <h1>Beri Tugas</h1>
            <hr>
            <br>
            <!-- Form -->
            <form action="<?= base_url(
                'admin/aksi_tambah_tugas'
            ) ?>" method="post">
                <div class="form-group">
                    <label for="judul">Judul Tugas</label>
                    <input type="text" name="nama_task" class="border rounded-md">
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi Tugas</label>
                    <textarea name="deskripsi" rows="3" class="border rounded-md"></textarea>
                </div>

                <div class="form-group">
                    <label for="deadline">Deadline</label>
                    <input type="date" name="deadline" class="border rounded-md">
                </div>
                <br>
                <div class="form-group form-group-right">
                    <button type="submit">Tambah Tugas</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>