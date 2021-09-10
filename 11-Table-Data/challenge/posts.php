<?php 

use Zend\Db\TableGateway\TableGateway as TableGateway;
use Zend\Db\Adapter\Adapter;

class PostsGateway extends TableGateway{
    // protected $connection;
    public function __construct()
    {
        $configArray = array(
            'driver' => 'Mysqli',
            'database' => 'php_design_patterns',
            'username' => 'developer',
            'password' => 'password',
            'options' => array('buffer_results' => true)
        );

        $adapter = new Adapter($configArray);

        parent::__construct('posts', $adapter);
    }
    public function fetchAll()
    {
        return $this->select();
    }
    public function fetchById(int $id){
        return $this->select(array('id' => $id));
    }
}

?>