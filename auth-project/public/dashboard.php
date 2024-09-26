<?php
    session_start();

    if(!isset($_SESSION['user_id'])){
        header('Location: login.php');
        exit();
    }


?>

<?php include '../includes/header.php' ?>

    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold text-center mb-6">
            Welcome to Dashboard!
        </h2>
        <p class="text-center text-gray-700 mb-4">
            You are logged in successfully
        </p>
        <a href="logout.php" class="w-full bg-red-600 text-white rounded-lg py-2 text-center hover:bg-red-800 transition">Logout</a>
    </div>

<?php include '../includes/footer.php' ?>

