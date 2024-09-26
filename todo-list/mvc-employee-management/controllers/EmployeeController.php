<?php
require_once 'models/Employee.php';

class EmployeeController {
    
    // Menampilkan daftar karyawan
    public function index() {
        $employees = Employee::all();
        include 'views/employees/index.php';
    }

    // Menampilkan form tambah karyawan
    public function create() {
        include 'views/employees/create.php';
    }

    // Menyimpan data karyawan baru
    public function store() {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];
        Employee::create($name, $address, $salary);
        header('Location: index.php');
    }

    // Menampilkan form edit karyawan
    public function edit($id) {
        $employee = Employee::find($id);
        include 'views/employees/update.php';
    }

    // Mengupdate data karyawan
    public function update($id) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];
        Employee::update($id, $name, $address, $salary);
        header('Location: index.php');
    }

    // Menghapus karyawan
    public function delete($id) {
        Employee::delete($id);
        header('Location: index.php');
    }
}
?>
