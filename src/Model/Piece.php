<?php

namespace App\Model;

class Piece
{
    private $id;
    private $nom;
    private $description;

    public function __construct($id, $nom, $description)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public static function findAll($pdo)
    {
        $stmt = $pdo->query("SELECT * FROM pieces");
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'App\\Model\\Piece');
    }

    public static function create($pdo, $nom, $description)
    {
        $stmt = $pdo->prepare("INSERT INTO pieces (nom, description) VALUES (?, ?)");
        return $stmt->execute([$nom, $description]);
    }
}
