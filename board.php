<?php


class board
{
    public $array = array();

    function __construct()
    {
        for ($i = 1; $i < 10; $i++) {
            $this->array[$i] = $i;
        };

    }

    function __toString()
    {
        return '<table>'
        . '<tr>'
        . '<td>' . $this->array[1] . '</td>'
        . '<td>' . $this->array[2] . '</td>'
        . '<td>' . $this->array[3] . '</td>'
        . '</tr><tr>'
        . '<td>' . $this->array[4] . '</td>'
        . '<td>' . $this->array[5] . '</td>'
        . '<td>' . $this->array[6] . '</td>'
        . '</tr><tr>'
        . '<td>' . $this->array[7] . '</td>'
        . '<td>' . $this->array[8] . '</td>'
        . '<td>' . $this->array[9] . '</td>'
        . '</tr></table>';
    }


    public function winArrays($mark) {
        if (
            // across
            ($this->array[1] == $mark && $this->array[2] == $mark && $this->array[3]== $mark ) ||
            ($this->array[4] == $mark && $this->array[5] == $mark && $this->array[6]== $mark ) ||
            ($this->array[7] == $mark && $this->array[8] == $mark && $this->array[9]== $mark ) ||

            // down
            ($this->array[1] == $mark && $this->array[4]== $mark  && $this->array[7]== $mark ) ||
            ($this->array[2] == $mark && $this->array[5]== $mark  && $this->array[8]== $mark ) ||
            ($this->array[3] == $mark && $this->array[6]== $mark  && $this->array[9]== $mark ) ||

            // diagonal
            ($this->array[1] == $mark && $this->array[5]== $mark  && $this->array[9]== $mark ) ||
            ($this->array[7] == $mark && $this->array[5]== $mark  && $this->array[3]== $mark )
        )
        {
            echo '<br />' . $mark  . ' has won!<br /><a href="index.php">New Game?</a>';
        }
        else {
            return false;
        }
    }

}
?>