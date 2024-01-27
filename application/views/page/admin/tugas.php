<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon"
        href="https://cdn.iconscout.com/icon/premium/png-256-thumb/task-manager-5320178-4452647.png?f=webp"
        type="image/x-icon">
    <title>Document</title>
    <style>
    .card {
        margin-left: 150px;
    }
    </style>
</head>

<body>
    <?php $this->load->view('component/sidebar_admin'); ?>
    <div class="lg:w-full  px-3">
        <div class="card bg-white mr-1 rounded-lg p-4 shadow-md my-4">
            <!-- Menambahkan margin kanan dan kiri -->
            <table class="min-w-full divide-y divide-gray-400 mt-4">
                <thead class="text-center">
                    <tr class="text-center">
                        <th
                            class="text-center px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Tugas
                        </th>
                        <th
                            class="text-center px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Deskripsi
                        </th>
                        <th
                            class="text-center px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Deadline
                        </th>
                        <th
                            class="text-center px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th
                            class="text-center px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Tanggal Tugas
                        </th>
                        <th
                            class="text-center px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Loop through your tasks data and generate rows -->
                    <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $task[
                            'nama_task'
                        ] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $task[
                            'deskripsi'
                        ] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $task[
                            'deadline'
                        ] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $task[
                            'status'
                        ] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $task[
                            'tanggal_tugas'
                        ] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <!-- Add your action buttons here -->
                            <!-- Example: -->
                            <button class="text-indigo-600 hover:text-indigo-900">Edit</button>
                            <button class="text-red-600 hover:text-red-900">Delete</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- End Table -->

        </div>
    </div>

</body>
</div>
</body>

</html>