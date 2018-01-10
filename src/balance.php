<?php
namespace Beloplotov;
class Balance
{
    private $str;

    public function __construct($str)
    {
        $this->str=$str;
    }

  public function proverka()
    {
        $massiveStr = str_split($this->str);

        for ($i = 0;
             $i <= count($massiveStr);
             $i++) {
            if ($massiveStr[$i] == "(") {

                $num = $num + 1;
            }

            if ($massiveStr[$i] == ")") {

                $num = $num - 1;
            }
            if ($num < 0) {
                echo "Неправильно стоит скобка";
                die;
            }
        }
        if ($num == 1) {
            echo "Где то не закрыта скобка!";
        } elseif ($num > 1) {
            echo "Где то не закрыты" . $num . " скобки";
        } elseif ($num == 0) {
            echo "Скобки все закрыты";
        }
    }
}