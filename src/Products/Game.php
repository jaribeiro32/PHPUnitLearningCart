<?php

namespace LojaVirtual\Products;

class Game extends Product
{
    protected $platform;
    
    public function setPlatform($value)
    {
        $this->platform = $value;
    }
    
    public function getPlatform()
    {
        return $this->platform;
    }
            
}

