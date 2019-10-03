<?php


class QueryBuilder {
    private $db;

    public function __construct(PDO $pdo) {
        $this->db = $pdo;
    }

    public function select($table) {
        $statement = $this->db->query("SELECT * FROM $table");
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}