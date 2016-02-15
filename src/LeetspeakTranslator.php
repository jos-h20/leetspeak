<?php
class LeetspeakTranslator
{
    function translator($input)
    {
        $input_phrase = explode(" ", $input);


        $input_array = str_split($input, 1);
        $output_array = array();

        $first_letter = $input_array[0];

        if ($first_letter == "s" || $first_letter == "S") {
            array_push($output_array, $first_letter);
            array_shift($input_array);
        }

        foreach ($input_array as $letter) {
            if (($letter == "s" || $letter == "S"))  {
                array_push($output_array, "z");
            } elseif ($letter == "e" || $letter == "E") {
                array_push($output_array, "3");
            } elseif ($letter == "o" || $letter == "O") {
                array_push($output_array, "0");
            } elseif ($letter[0] == "L") {
                array_push($output_array, "1");
            } else {
                array_push($output_array, $letter);
            }
        }
        return implode($output_array);
    }
}
 ?>
