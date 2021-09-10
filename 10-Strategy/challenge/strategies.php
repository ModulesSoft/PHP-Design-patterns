<?php 
class EvenStrategy{
    public function output(int $param = null)
    {
        if($param%2 ==0){
            echo $param.'<br>';
        }
    }
}
class NumberFilter{
    protected $strategy = null;
    public function __construct($strategy)
    {
        $this->strategy = $strategy;
    }
    public function filter(int $param)
    {
        return $this->strategy->output($param);
    }
}
class OddStrategy{
    public function output(int $param = null)
    {
        if($param%2 !=0){
            echo $param.'<br>';
        }
    }
}
?>