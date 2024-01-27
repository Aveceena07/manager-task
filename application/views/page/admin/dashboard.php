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
    <title>Task Manager</title>
</head>

<body>
    <?php $this->load->view('component/sidebar_admin'); ?>
    <div class="lg:w-full mt-12 lg:ml-48 px-6 py-8">


        <div class="lg:flex gap-4 items-stretch">
            <div class="bg-white md:p-2 p-6 rounded-lg border border-gray-200 mb-4 lg:mb-0 shadow-md lg:w-[35%]">
                <div class="flex justify-center items-center space-x-5 h-full">
                    <div>
                        <p>Jumlah Tugas</p>
                        <h2 class="text-4xl font-bold text-center text-gray-600"><?= $jumlah_task ?></h2>
                    </div>
                    <img src="https://cdn-icons-png.flaticon.com/512/4345/4345573.png" alt="wallet"
                        class="h-24 md:h-20 w-38">
                </div>
            </div>

            <div class="bg-white p-4 rounded-lg xs:mb-4 max-w-full shadow-md lg:flex-1">
                <div class="flex flex-wrap justify-between w-full h-full">
                    <div
                        class="flex-1 bg-gradient-to-r from-cyan-400 to-cyan-600 rounded-lg flex flex-col items-center justify-center p-4 space-y-2 border border-gray-200 m-2">
                        <i class="fa-solid fa-x text-4xl"></i>
                        <p class="text-xl text-black "><?= $jumlah_belum_selesai ?></p>
                    </div>

                    <div
                        class="flex-1 bg-gradient-to-r from-cyan-400 to-cyan-600 rounded-lg flex flex-col items-center justify-center p-4 space-y-2 border border-gray-200 m-2">
                        <i class="fas fa-hourglass text-4xl"></i>
                        <p class="text-xl text-black "><?= $jumlah_dikerjakan ?></p>
                    </div>

                    <div
                        class="flex-1 bg-gradient-to-r from-cyan-400 to-cyan-600 rounded-lg flex flex-col items-center justify-center p-4 space-y-2 border border-gray-200 m-2">
                        <i class="fas fa-check text-4xl"></i>
                        <p class="text-xl text-black "><?= $jumlah_selesai ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg p-4 shadow-md my-4">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left border-b-2 w-full">
                            <h1 class="text-ml font-bold text-gray-600">Tugas</h1>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tasks as $task) { ?>
                    <tr class="border-b w-full">
                        <td class="px-4 py-2 text-left align-top w-2/3">
                            <div>
                                <h2 class="text-lg font-bold"><?= $task[
                                    'nama_task'
                                ] ?></h2>
                                <p><?= convDate($task['deadline']) ?></p>
                            </div>
                        </td>
                        <td class="px-2 py-2 text-left w-1/3">
                            <?php if ($task['status'] == 'belum selesai') { ?>
                            <!-- Menampilkan icon "X" jika status belum selesai -->
                            <i class="fa-solid fa-x text-red-500 fa-xl" style="margin-left: -40px;"></i>
                            <?php } elseif (
                                $task['status'] == 'dikerjakan'
                            ) { ?>
                            <!-- Menampilkan icon jam pasir jika status sedang dikerjakan -->
                            <i class="fas fa-hourglass text-blue-500 fa-xl" style="margin-left: -40px;"></i>
                            <?php } elseif ($task['status'] == 'selesai') { ?>
                            <!-- Menampilkan icon centang jika status selesai -->
                            <i class="fas fa-check text-green-500 fa-xl" style="margin-left: -40px;"></i>
                            <?php } else { ?>
                            <!-- Menampilkan status jika tidak termasuk dalam kondisi di atas -->
                            <span><?= $task['status'] ?></span>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
</body>

</html>