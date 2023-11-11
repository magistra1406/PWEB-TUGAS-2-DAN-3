<?php 

class DataModel 
{
    public static function getAllData()
    {
        global $conn;

        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);
        $users = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }

        return $users;
    }

    public static function createData($nama, $nim, $email, $alamat)
    {
        global $conn;

        $sql = "INSERT INTO user(nama, nim, email, alamat) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        $stmt->bind_param('ssss', $nama, $nim, $email, $alamat);
        $stmt->execute();
    }

    public static function getDataById($id)
    {
        global $conn;

        $sql = "SELECT * FROM user WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    public static function updateData($id, $nama, $nim, $email, $alamat) 
    {
        global $conn;
        $sql = "UPDATE user SET nama = ?, nim = ?, email = ?, alamat = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);

        $stmt->bind_param('ssssi', $nama, $nim, $email, $alamat, $id);
        $stmt->execute();
    }

    public static function deleteData($id)
    {
        global $conn;
        $sql = "DELETE FROM user WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    } 
}