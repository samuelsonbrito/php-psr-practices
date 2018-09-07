<?php 

namespace Tambaqui;

trait GetterSetter{

    public function __set($prop, $value)
    {
        $method = 'set'.ucfirst($prop);

        if(method_exists($this, $method)){
            $this->$method($value);
        }

        $this->$prop = $value;
    }

    public function __get($prop)
    {
        $method = 'get'.ucfirst($prop);

        if(method_exists($this, $method)){
           return $this->$method();
        }

        return $this->$prop;
    }

} 