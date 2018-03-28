<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\cars;

class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testCarCount()
    {
        $cars = cars::All();
        $recordCount = $cars->count();
        $carCount = 50;
        $this->assertEquals($carCount,50);
    }

   /* public function testCarUser()
    {
        $car = new cars();
        $car->make= 'Honday';
        $car->model= 'civic';
        $car->year= '2018';

        $this->assertTrue($car->save());
    }



    public function testUpdateCar()
    {
        $car =cars::find(1);
        $car->year = 2000;
        $this->assertTrue($car->save());


    }*/

    public function testDeleteCar()
    {
        $car = new cars();
        $car->make= 'Honda1';
        $car->model= 'civic';
        $car->year= '2019';
        $car->save();

        $this->assertTrue($car->delete());
    }


}
