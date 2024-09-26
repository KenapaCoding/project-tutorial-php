<?php 
    require_once 'models/Employee.php';

    class EmployeeController {
        // menampilkan daftar karyawan
        public function index(){
            $employees = Employee::all();
            include 'views/employees/index.php';
        }

        // menampilkan form tambah karyawan
        public function create(){
            include 'views/employees/create.php';
        }

        // menyimpan data karyawan baru
        public function save(){
            $name = $_POST['name'];
            $address = $_POST['address'];
            $salary = $_POST['salary'];
            Employee::create($name, $address,$salary);
            header("Location: index.php");
        }

        // menampilkan form edit
        public function edit($id){
            $employee = Employee::find($id);
            include 'views/employees/update.php';
        }

        // mengupdate data karyawan
        public function update($id){
            $name = $_POST['name'];
            $address = $_POST['address'];
            $salary = $_POST['salary'];
            Employee::update($id,$name,$address,$salary);
            header("Location: index.php");
        }

        // menghapus karyawan
        public function delete($id){
            Employee::delete($id);
            header("Location: index.php");
        }
    }


?>