<?php


class DataBase {
    protected $pdo;

    public function __construct(){
        $this->pdo = new PDO('mysql:host=localhost;dbname=autotest', 'root', '');
    }

    public function selectAll() {
        $select = $this->pdo->query('SELECT * FROM students');

        return $select;
    }

    public function addRow($data) {
        $add = $this->pdo->prepare('INSERT INTO students (name, last_name, date_of_birth, gpa) values (:name, :last_name, :date_of_birth, :gpa)');
        if (!$add->execute($data)) {
            $error = $add->errorInfo();
            var_dump($error);die;
        };
    }
}