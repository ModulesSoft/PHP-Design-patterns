<?php 
class Posts{
    protected $connection;
    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=php_design_patterns", 'developer', 'password');
    }
    public function fetchAll()
    {
        $sql = 'SELECT * FROM posts';
        return $this->connection->query($sql);
    }
    public function fetchById(int $id){
        $sql = 'SELECT * FROM posts WHERE id = 1';
        return $this->connection->query($sql);
    }
}

?>