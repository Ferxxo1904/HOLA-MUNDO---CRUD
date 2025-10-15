<?php
class Mensaje{

    public static function all():array{
        $pdo = Database::getConnection();
        $st = $pdo -> query('SELECT * FROM mensajes ORDER BY id DESC');
        return $st -> fetchAll();
    }

    public static function find(int $id):?array{
        $pdo = Database::getConnection();
        $st = $pdo -> prepare('SELECT * FROM mensajes WHERE id=?');
        $st -> execute ([$id]);
        $r = $st -> fetch(PDO::FETCH_ASSOC);
        return $r ? $r : null;
    } 

    public static function create(array $d):int{
        $pdo = Database::getConnection();
        $st = $pdo -> query('UPDATE mensajes SET titulo=?, descripcion=?, imagen=?, fecha=? WHERE id=?');
        $st -> execute ([$d['titulo'], $d['descripcion'], $d['imagen'], $d['fecha']]);
        return (int)$pdo -> lastInsertId();
    }

    public static function update(int $id, array $d):bool{
        $pdo = Database::getConnection();
        $st = $pdo -> query('UPDATE mensajes SET titulo=?, descripcion=?, imagen=?, fecha=? WHERE id=?');
        $st -> execute ([$d['titulo'], $d['descripcion'], $d['imagen'], $d['fecha'], $id]);
        return $st;
    }

    public static function deleteById(int $id):bool{
        $pdo = Database::getConnection();
        $st = $pdo -> query('DELETE FROM mensajes WHERE id=?');
        $st -> execute ([$id]);
        return $st;
    }

}