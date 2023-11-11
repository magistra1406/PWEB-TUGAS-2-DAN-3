<?php
require_once 'config/config.php';
require_once 'controller/functions.php';
require_once 'model/models.php';
require_once 'controller/student_controller.php';
require_once 'controller/role_controller.php';



abstract class Controller {
    abstract static function index(); // SHOW ALL
    abstract static function show($data); // SHOW SPECIFIC
    abstract static function add(); // ADD DATA FORM
    abstract static function save(); // SAVE DATA
    abstract static function edit($data); // EDIT SPECIFIC
    abstract static function update($data); // UPDATE DATA
    abstract static function remove($data);
}

interface CustomFunctions {
    static function purge();
    static function restore();
}

abstract class AbstractStudents {
    abstract static function select(); // Ambil semua data dari student
    abstract static function insert($id, $name, $email, $role_fk); // Masukkan data ke tabel student
    abstract static function delete(); // Menghapus data student
    abstract static function joinRoles($clauseAddition = ""); // join roles
    abstract static function fresh(); // Mengembalikan data
    abstract static function selectById($id); // Ambil/Select data berdasarkan id
    abstract static function selectWhere($clause); // Select data berdasarkan kondisi
    abstract static function updateById($id, $name, $email, $role_fk); // Memperbarui data/update data berdasarkan id
    abstract static function updateWhere($clause, $name, $email, $role_fk); // Memperbarui data/update data berdasarkan kondisi
    abstract static function deleteById($id);  //delete/menghapus data berdasarkan id
    abstract static function deleteWhere($clause); //delete/menghapus data berdasarkan kondisi
}

