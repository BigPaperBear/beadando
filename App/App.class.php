<?php

namespace Tulajdonos\Beadando;

class App{
    /**
     *  This variable contains options of project
     *
     * @var array
     */
    protected $options = [];
    /**
     * $_ENV variable
     *
     * @var array
     */
    protected $env = [];

    public function __construct($options=[0=>null])
    {
        foreach($options as $key => $value)
        {
            $this->options[$key]=$value;
        }
    }
}
