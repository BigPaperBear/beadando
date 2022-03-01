<?php

namespace Tulajdonos\Beadando;

class App{
    
    protected const options = [];
    
    protected const env = [];

    public function __construct($options=[0=>null])
    {
        foreach($options as $key => $value)
        {
            $this->options[$key]=$value;
        }
    }
}
