<?php 
    class Employee {
        public static function all(){
            global $pdo;
            $sql = "SELECT * FROM employees";
            $stmt = $pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function find($id){
            global $pdo;
            $sql = "SELECT * FROM employees WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public static function create($name, $address, $salary){
            global $pdo;
            // insert data to database
            $sql = "INSERT INTO employees (name, address, salary) VALUES (:name, :address, :salary)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['name' => $name, 'address' => $address, 'salary'=>$salary]);
        }

        public static function update($id,$name, $address, $salary){
            global $pdo;
            $sql = "UPDATE employees SET name = :name, address = :address, salary = :salary WHERE id =:id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['name' => $name, 'address' => $address, 'salary'=>$salary, 'id' =>$id]);
        }

        public static function delete($id){
            global $pdo;
            $sql = "DELETE FROM employees WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['id' => $id]);

        }
    }



?>