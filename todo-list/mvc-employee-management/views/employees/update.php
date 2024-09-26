<?php include 'views/includes/header.php'; ?>


<h1 class="text-2xl mb-4">Edit Karyawan</h1>
<form action="index.php?action=update&id=<?php echo $employee['id']; ?>" method="POST">
    <div class="mb-4">
        <label for="name" class="block text-gray-700">Nama:</label>
        <input type="text" name="name" value="<?php echo $employee['name']; ?>" class="border rounded w-full py-2 px-3 text-gray-700" required>
    </div>
    <div class="mb-4">
        <label for="address" class="block text-gray-700">Alamat:</label>
        <input type="text" name="address" value="<?php echo $employee['address']; ?>" class="border rounded w-full py-2 px-3 text-gray-700" required>
    </div>
    <div class="mb-4">
        <label for="salary" class="block text-gray-700">Gaji:</label>
        <input type="number" name="salary" value="<?php echo $employee['salary']; ?>" class="border rounded w-full py-2 px-3 text-gray-700" required>
    </div>
    <button name="" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Update
    </button>
</form>



<?php include 'views/includes/footer.php'; ?>