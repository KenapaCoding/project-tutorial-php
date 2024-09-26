<?php 
    require_once '../config/database.php';
    include '../includes/header.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM employees WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $employee = $stmt->fetch(PDO::FETCH_ASSOC);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];

        // insert data to database
        $sql = "UPDATE employees SET name = :name, address = :address, salary = :salary WHERE id =:id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['name' => $name, 'address' => $address, 'salary'=>$salary, 'id' =>$id]);

        header("Location: index.php");
    }


?>

<h1 class="text-2xl mb-4">Edit Karyawan</h1>
<form action="update.php?id=<?php echo $id?>" method="POST">
    <div class="mb-4">
        <label for="name" class="block text-gray-700">Nama : </label>
        <input value="<?= $employee['name'] ?>" type="text" name="name" id="name" class="border rounded w-full py-2 px-3 text-gray-700">
    </div>
    <div class="mb-4">
        <label for="address" class="block text-gray-700">Alamat : </label>
        <input value="<?= $employee['address'] ?>" type="text" name="address" id="address" class="border rounded w-full py-2 px-3 text-gray-700">
    </div>
    <div class="mb-4">
        <label for="salary" class="block text-gray-700">Gaji</label>
        <input value="<?= $employee['salary'] ?>" type="text" name="salary" id="salary" class="border rounded w-full py-2 px-3 text-gray-700">
    </div>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Update
    </button>
</form>

<?php include '../includes/footer.php' ?>