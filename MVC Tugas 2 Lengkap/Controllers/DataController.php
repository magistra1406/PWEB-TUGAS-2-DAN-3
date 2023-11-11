<?php 

require_once('config/config.php');
require_once('Models/DataModel.php');

class DataController {
    public function index()
    {
        $users = DataModel::getAllData();
        include('public/views/index.php');
    }

    public function show($id)
    {
        $user = DataModel::getDataById($id);
        include('public/views/show.php');
    }
    
    public function create()
    {
        include('public/views/create.php');
    }
    
    public function store()
    {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nim = $_POST['nim'];
        $alamat = $_POST['alamat'];

        DataModel::createData($nama, $nim, $email, $alamat);
        header('Location: /PWEB2');
    }
    public function edit($id) 
    {
        $user = DataModel::getDataById($id);
        include('public/views/edit.php');
    }

    public function update($id)
    {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nim = $_POST['nim'];
        $alamat = $_POST['alamat'];

        DataModel::updateData($id, $nama, $nim, $email, $alamat);
        header('Location: /PWEB2');
    }
    
    public function delete($id)
    {
        DataModel::deleteData($id);
        header('Location: /PWEB2');
    }
}