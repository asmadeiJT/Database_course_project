<?php
include_once 'DataBase.php';

class Main {
    protected $dataBase;
    function __construct() {
        $this->dataBase = new DataBase();
    }
    public function show_students_table() {
        $students = $this->dataBase->selectAll();
        include_template('students_table', $students);
    }
}