<?php

class Mahasiswa_model {
    private $dbh; // database handler
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }
//    private $mhs = [
//        [
//            "nama" => "Adji Pratama",
//            "nrp" => "193040101",
//            "email" => "adji28@gmail.com",
//            "jurusan" => "Teknik Informatika"
//        ],
//        [
//            "nama" => "Adi Haryadi",
//            "nrp" => "193040102",
//            "email" => "adi13@gmail.com",
//            "jurusan" => "Teknik Elektro"
//        ],
//        [
//            "nama" => "Dika Kurniawan",
//            "nrp" => "193040103",
//            "email" => "dika9@gmail.com",
//            "jurusan" => "Teknik Mesin"
//        ]
//    ];

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}