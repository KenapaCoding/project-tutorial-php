<?php
    require_once '../config/database.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];

        // insert data to database
        $sql = "INSERT INTO employees (name, address, salary) VALUES (:name, :address, :salary)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['name' => $name, 'address' => $address, 'salary'=>$salary]);

        header("Location: index.php");
    }
?>


<?php include '../includes/header.php' ?>

<h1 class="text-2xl mb-4">Tambah Karyawan</h1>
<form action="create.php" method="POST">
    <div class="mb-4">
        <label for="name" class="block text-gray-700">Nama : </label>
        <input type="text" name="name" id="name" class="border rounded w-full py-2 px-3 text-gray-700">
    </div>
    <div class="mb-4">
        <label for="address" class="block text-gray-700">Alamat : </label>
        <input type="text" name="address" id="address" class="border rounded w-full py-2 px-3 text-gray-700">
    </div>
    <div class="mb-4">
        <label for="salary" class="block text-gray-700">Gaji</label>
        <input type="text" name="salary" id="salary" class="border rounded w-full py-2 px-3 text-gray-700">
    </div>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Simpan
    </button>
</form>

<?php include '../includes/footer.php' ?>


