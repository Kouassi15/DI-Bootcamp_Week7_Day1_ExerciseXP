<?php

//  class Calculate{

//     protected $number;

//   public function __construct($nInt)
//    {
//      if(!is_int($nInt))
//        {
//              throw new InvalidArgumentException('Not a valid integer');
//      }

//       $this->number = $nInt;
//     }
//    public function Factorial()
  
//    {

//     $fact = 1;

//      for($i = 1; $i<=$this->number ; $i++);
//    {
//       $fact = $fact*$i;
//      }
//       return $fact;
//      }
//  } 
 
//  $calculate = New Calculate(6);
//   echo $calculate->Factorial();
 Class calculate
{

   protected $integer;

   public function __construct($passedInt)
  {
     if(!is_int($passedInt))
       {
             throw new InvalidArgumentException('Not a valid integer');
       }

       $this->integer = $passedInt;  
     }
   public function myFactorial()
   {
     $factorial = 1;
     for($i = 1; $i<= $this->integer; $i++) 
     {
        $factorial = $factorial *$i;
     }
    return $factorial;
  }
 }

 //Instantiation de la classe,

 $Twofact = New calculate(5);

 echo $Twofact->myFactorial();
?>