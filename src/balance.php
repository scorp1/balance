<?php
namespace Beloplotov;

class Balance
{
   public function balanceBrackets($string)
  {
      try {
          preg_match_all('/[^()0-9\r\n\t\s]/', $string, $value, PREG_SET_ORDER, 0);
          if (!isset($value)) {
              throw new \InvalidArgumentException('Недопустимые символы');
          }
          $arrayString = str_split($string);

            $amountBrackets=0;
          for ($i = 0;
               $i <= count($arrayString);
               $i++) {
              if ($arrayString[$i] == '(') {

                  $amountBrackets++;
              }

              if ($arrayString[$i] == ')') {

                  $amountBrackets--;
              }
              if ($amountBrackets < 0) {
                  throw new \Exception("Неправильно стоит скобка");
              }
          }
          if ($amountBrackets == 1) {
              throw new \Exception("Где то не закрыта скобка!");
          }
          if ($amountBrackets > 1) {
                throw new \Exception("Где то не закрыты" . $amountBrackets . " скобки");
          }
          if ($amountBrackets == 0) {
              throw new \Exception("Выражение составленно верно, скобки все закрыты!");
          }
      }catch (\InvalidArgumentException $e){
         echo $e->getMessage();
      }catch (\Exception $e){
          echo $e->getMessage();
      }
      return true;
  }

}