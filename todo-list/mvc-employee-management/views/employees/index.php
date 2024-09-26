<?php include 'views/includes/header.php'; ?>

<a href="index.php?action=create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
    Tambah Karyawan
</a>

<table class="min-w-full bg-white">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="px-4 py-2">Nama</th>
            <th class="px-4 py-2">Alamat</th>
            <th class="px-4 py-2">Gaji</th>
            <th class="px-4 py-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($employees as $employee): ?>
        <tr>
            <td class="border px-4 py-2"><?= $employee['name']; ?></td>
            <td class="border px-4 py-2"><?= $employee['address']; ?></td>
            <td class="border px-4 py-2"><?= $employee['salary']; ?></td>
            <td class="border px-4 py-2 flex gap-4">
                <a href="index.php?action=edit&id=<?= $employee['id']; ?>" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                <a href="index.php?action=delete&id=<?= $employee['id']; ?>" class="bg-red-500 text-white px-2 py-1 rounded">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'views/includes/footer.php'; ?>
