<?php

    class LeetSpeakTranslator
    {
        function makeLeet($input)
        {

            $input_array = str_split($input);
            $output_array = array();

            foreach($input_array as $letter) {
                if ($letter == "e" || $letter == "E") {
                    array_push($output_array, "3");
                } elseif ($letter == "o" || $letter == "O") {
                    array_push($output_array, "0");
                } elseif ($letter == "I") {
                    array_push($output_array, "1");
                } elseif ($letter == "s" || $letter == "S") {
                    array_push($output_array, "z");
                } else {
                    array_push($output_array, $letter);
                }
                return $output_array;
            }
        }
    }

?>
