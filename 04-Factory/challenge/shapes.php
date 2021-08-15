<?php 
class Shape{
    private static String $type;
    private static int $base;
    public static function getShape(String $type,int $base ) {
        self::$type = $type;
        self::$base = $base;
        switch($type){
            case "circle": 
                return new Circle($base);
                break;
            default :
                return new Square($base);
                break;
        }
    }
}

class Circle extends Shape{
    private int $radius;
    function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getArea() : int{
            return pi()*($this->radius)**2;
    }
}

class Square extends Shape{
    private int $side;
    function __construct($side)
    {
        $this->side = $side;
    }
    public function getArea() : int{
        return ($this->side)**2;
}
}