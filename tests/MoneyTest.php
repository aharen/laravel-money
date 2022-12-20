<?php

namespace Aharen\Tests;

use Aharen\Money\MoneyManager;
use Aharen\Money\MoneyManagerFacade as Money;

class MoneyTest extends TestCase
{
    /** @test */
    public function it_can_instantiate_a_rufiyaa()
    {
        $this->assertInstanceOf(MoneyManager::class, Money::fromRufiyaa(10));
        $this->assertEquals(10, Money::fromRufiyaa(10)->inRufiyaa());
    }

    /** @test */
    public function it_can_add_rufiyaa()
    {

        $rufiyaa = Money::fromRufiyaa(20)
            ->add(100) // 1 rufiyaa
            ->inRufiyaa();

        $this->assertEquals(21, $rufiyaa);
    }

    /** @test */
    public function it_can_subtract_rufiyaa()
    {

        $rufiyaa = Money::fromRufiyaa(20)
            ->subtract(100) // 1 rufiyaa
            ->inRufiyaa();

        $this->assertEquals(19, $rufiyaa);
    }

     /** @test */
     public function it_can_multiply_rufiyaa()
     {
 
         $rufiyaa = Money::fromRufiyaa(2)
             ->multiply(200) // 2 rufiyaa
             ->inRufiyaa();
 
         $this->assertEquals(4, $rufiyaa);
     }

       /** @test */
       public function it_can_divide_rufiyaa()
       {
   
           $rufiyaa = Money::fromRufiyaa(4)
               ->divide(200) // 2 rufiyaa
               ->inRufiyaa();
   
           $this->assertEquals(2, $rufiyaa);
       }

    /** @test */
    public function it_can_add_and_subtract_rufiyaa()
    {

        $rufiyaa = Money::fromRufiyaa(20)
            ->add(200) // 2 rufiyaa
            ->subtract(100) // 1 rufiyaa
            ->inRufiyaa();

        $this->assertEquals(21, $rufiyaa);
    }

    /** @test */
    public function it_can_add_other_money_objects()
    {

        $rufiyaa = Money::fromRufiyaa(20)
            ->add(Money::fromRufiyaa(20.5))
            ->inRufiyaa();

        $this->assertEquals(40.5, $rufiyaa);
    }

     /** @test */
     public function it_can_subtract_other_money_objects()
     {
 
         $rufiyaa = Money::fromRufiyaa(40)
             ->subtract(Money::fromRufiyaa(20))
             ->inRufiyaa();
 
         $this->assertEquals(20, $rufiyaa);
     }

      /** @test */
      public function it_can_multiply_other_money_objects()
      {
  
          $rufiyaa = Money::fromRufiyaa(2)
              ->multiply(Money::fromRufiyaa(2)) // 2 rufiyaa
              ->inRufiyaa();
  
          $this->assertEquals(4, $rufiyaa);
      }

       /** @test */
       public function it_can_divide_other_money_objects()
       {
   
           $rufiyaa = Money::fromRufiyaa(4)
               ->divide(Money::fromRufiyaa(2)) // 2 rufiyaa
               ->inRufiyaa();
   
           $this->assertEquals(2, $rufiyaa);
       }
}
