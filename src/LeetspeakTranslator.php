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
                } else {
                    array_push($output_array, $letter);
                }
                return $output_array;
            }



        }
    }

?>
