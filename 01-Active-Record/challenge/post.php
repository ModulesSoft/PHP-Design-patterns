<?php

use Illuminate\Database\Eloquent\Model;
use Zend\Db\Sql\Ddl\Constraint\PrimaryKey;

require_once "./bootstrap.php";

class Post extends Model{
    protected $primaryKey = 'id' ;
    protected $table = 'posts';
    protected $fillable = ['title','body','create_date'];
    public $timestamps = false;
}