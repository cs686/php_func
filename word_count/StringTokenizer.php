<?php


class StringTokenizer{
    private $string;
    private $token;
    private $delim;

    public function __construct($str,$delim =" \n\r\t\0")
    {
        $this->string = $str;
        $this->delim = $delim;
        $this->token = strtok($str,$delim);
    }

    public function __destruct()
    {
        unset($this);
    }

    public function countTokens()
    {
        $count = 0;
        while($this->hasMoreTokens()){
            $count++;
            $this->nextToken();
        }
        $this->token = strtok($this->string,$this->delim);
        return $count;
    }

    public function hasModeTokens()
    {
        return ($this->token !== false);
    }

    public function nextToken()
    {
        $hold = $this->token;
        $this->token = strtok($this->delim);
        return $hold;
    }
}