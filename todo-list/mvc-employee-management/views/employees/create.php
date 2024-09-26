<?php include 'views/includes/header.php'; ?>

<h1 class="text-2xl mb-4">Tambah Karyawan</h1>
<form action="index.php?action=store" method="POST">
    <div class="mb-4">
        <label for="name" class="block">Nama:</label>
        <input type="text" name="name" class="border rounded w-full py-2 px-3" required>
    </div>
    <div class="mb-4">
        <label for="address" class="block">Alamat:</label>
        <input type="text" name="address" class="border rounded w-full py-2 px-3" required>
    </div>
    <div class="mb-4">
        <label for="salary" class="block">Gaji:</label>
        <input type="number" name="salary" class="border rounded w-full py-2 px-3" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Simpan</button>
</form>

<?php include 'views/includes/footer.php'; ?>
