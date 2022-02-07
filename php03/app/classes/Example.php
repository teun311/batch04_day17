<?php


namespace App\classes;


class Example
{
    public $i;
    public function index()
    {

        /*repeated
          *FOR
         * WHILE
         * D
         */
        for ($this->i = 45; $this->i > 22; $this->i--)
        {
            echo $this->i. '<br/>';


        }
        echo '<br/>';
        $this->i =10;
        while ($this->i<=20)
        {
            echo $this->i. '<br/>';
            $this->i++;
        }
        echo '<br/>';
        $this->i =10;
        do{
            echo $this->i,'<br/>';
            $this->i++;
        } while ($this->i<20);
    }
}