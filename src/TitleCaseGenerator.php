<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_array_of_words = explode(" ", $input_title);
            $output_titlecased = array();

            $stop_words = array('from', 'a', 'an', 'the', 'at', 'by', 'for', 'in', 'of', 'on', 'to', 'up', 'and', 'as', 'but', 'or', 'nor');

            foreach ($input_array_of_words as $word) {
                $word = strtolower($word);

                if (in_array($word, $stop_words))
                {
                    array_push($output_titlecased, $word);
                } else {
                    array_push($output_titlecased, ucfirst($word));
                }
            }
            $output_titlecased[0] = ucfirst($output_titlecased[0]);
            return implode(" ", $output_titlecased);
        }
    }

?>
