<?php

    class LeetSpeakTranslator
    {
        function makeLeet($input)
        {
            $input = str_split($input);
            $output_array = array();

            foreach($input as $letter) {
                if ($letter == "e") {
                    array_push($output_array, "3");
                } elseif ($letter == "o") {
                    array_push($output_array, "0");
                } elseif ($letter == "I") {
                    array_push($output_array, "1");
                } elseif ($letter == "s") {
                    array_push($output_array, "z");
                } else {
                    array_push($output_array, $letter);
                }
                return $output_array;
            }



        }
    }

?>
