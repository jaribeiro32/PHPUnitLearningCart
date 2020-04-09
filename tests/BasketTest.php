<?php

use LojaVirtual\Basket\Basket;
use LojaVirtual\Products\Game;
use Symfony\Component\HttpFoundation\Session\Session;
// use Symfony\Component\HttpFoundation\Session\Storage\MockArraySessionStorage;

class BasketTest extends PHPUnit\Framework\TestCase
{
    // Implementar tests de Basket
    
    // Função de apoio para ter os dados de games
    protected function getGameArrayProvider()
    {
        $games[0] = new Game;
        $games[0]->setName('Gears Of Wars');
        $games[0]->setPrice(160.99);

        $games[1] = new Game;
        $games[1]->setName('Grand Theft Auto');
        $games[1]->setPrice(180.99);

        $games[2] = new Game;
        $games[2]->setName('Resident Evil 7');
        $games[2]->setPrice(239.99);
        
        // Total em valor 581.97
        
        return $games; 
    }
    
    public function tearDown() 
    {
        \Mockery::close();
    }
}

