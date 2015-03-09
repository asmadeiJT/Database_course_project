<?php
include_once '../functions.php';
include_once 'Main.php';

class Ajax extends Main {
    function __construct() {
        $this->dataBase = new DataBase();
        if (isset($_POST['action']) && !empty($_POST['action'])) {
            switch ($_POST['action']) {
                case 'insert':
                    $this->addAction();
                    break;
                case 'delete':

            }
        }
    }

    protected function addAction () {
        $data['name'] = $_POST['data']['name'];
        $data['last_name'] = $_POST['data']['last_name'];
        $data['date_of_birth'] = $_POST['data']['date_of_birth'];
        $data['gpa'] = $_POST['data']['gpa'];

        $this->dataBase->addRow($data);
        $this->show_students_table();
        die;
    }
}

$Ajax = new Ajax();