<?php
    class RepeatCounter
    {
        function countWord($sentence, $word_search)
        {
          $count = 0;
          $sentence_lower = strtolower($sentence);
          $sentence_clean = preg_replace('/[^a-z]/i', ' ', $sentence_lower);
          $sentence_array = explode(" ", $sentence_clean);
          $word_search_lower = strtolower($word_search);

          foreach($sentence_array as $word)
          {
            if ($word == $word_search_lower) {
                $count ++;
            }
          }

          return $count;
        }
      }
?>
