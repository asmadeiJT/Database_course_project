<?php
include_once 'Main.php';

class Ajax extends Main {
    function __construct() {
        $this->dataBase = new DataBase();
        if (isset($_POST['action']) && !empty($_POST['action'])) {
            switch ($_POST['action']) {
                case 'insert':
                    $this->dataBase->addRow($_POST['data']);
            }
        }
    }
}