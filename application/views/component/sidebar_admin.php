<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="shortcut icon"
        href="https://cdn.iconscout.com/icon/premium/png-256-thumb/task-manager-5320178-4452647.png?f=webp"
        type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-200 lg:flex">
    <nav class="bg-white border-b border-gray-300">
        <div class="flex justify-between items-center px-9">
            <button id="menu-button" class="lg:hidden">
                <i class="fas fa-bars text-cyan-500 text-lg"></i>
            </button>

            <!-- Profil Lingkaran di Kanan Atas -->
            <div class="flex items-center space-x-4">
                <div class="bg-gray-300 w-8 h-8 rounded-full flex items-center justify-center">
                    <i class="fas fa-user text-gray-600"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Barra lateral -->
    <div id="sidebar" class="lg:block hidden bg-white w-64 h-screen fixed rounded-none border-none">
        <!-- Items -->
        <div class="p-4 space-y-4">
            <!-- Inicio -->
            <a href="#" aria-label="dashboard"
                class="relative px-4 py-3 flex items-center space-x-4 rounded-lg text-white bg-gradient-to-r from-sky-600 to-cyan-400">
                <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/task-manager-5320178-4452647.png?f=webp"
                    alt="" width="50px">
                <span class="text-black font-medium">Task Manager</span>
            </a>
            <a href="<?php echo base_url('admin'); ?>"
                class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
            <a href="<?php echo base_url('admin/tambah_tugas'); ?>"
                class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group">
                <i class="fas fa-tasks"></i>
                <span>Tambah Tugas</span>
            </a>

            <a href="<?php echo base_url('admin/tugas'); ?>"
                class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group">
                <i class="fa-solid fa-list-check"></i>
                <span>Tugas</span>
            </a>
            <!-- <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group">
                <i class="fas fa-exchange-alt"></i>
                <span>Transacciones</span>
            </a>
            <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group">
                <i class="fas fa-user"></i>
                <span>Mi cuenta</span>
            </a> -->
            <a onclick="confirmLogout();" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group">
                <i class="fas fa-sign-out-alt"></i>
                <span>Log Out</span>
            </a>
        </div>
    </div>

    <!-- Isi Konten -->

</body>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var menuButton = document.getElementById('menu-button');
    var sidebar = document.getElementById('sidebar');

    menuButton.addEventListener('click', function() {
        sidebar.classList.toggle('hidden');
        sidebar.classList.toggle('lg:block');
    });
});
</script>

<script>
function confirmLogout() {
    Swal.fire({
        title: 'Yakin ingin logout?',
        text: "Anda akan keluar dari akun Anda.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Logout',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "<?php echo base_url('auth/logout'); ?>";
        }
    });
}
</script>

</html>