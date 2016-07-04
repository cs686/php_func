<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: shunpingqi
 * Date: 16/7/4
 * Time: 下午12:40
 */
class Node{
    public $data;
    public $frequency;
    public $next;
    function __construct($data,$next = null,$frequency = 1)
    {
        $this->data = $data;
        $this->next = $next;
        $this->frequency = $frequency;
    }
}

class LinkedList{
    private $head;
    function __construct()
    {
        $this->head = new Node("dummy SS");
        $this->first = null;
    }
    function isEmpty(){
        return ($this->head->next == null);
    }
    function orderInsert($data){
        $p = new Node($data);
        if ($this->isEmpty()){
            $this->head->next = $p;
        } else {
            $node = $this->find($data);
            if (!$node){
                $q = $this->head;
                while ($q->next != NULL && strcmp($data,$q->next->data)>0){
                    $q = $q->next;
                }
                $p->next = $q->next;
                $q->next = $p;
            } else {
                $node->frequency++;
            }
        }


        
    }

}