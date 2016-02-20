<?php
    class RepeatCounter
    {
        function countWord($sentence, $word_search)
        {
          $count = 0;
          $sentence_lower = strtolower($sentence);
          
          $word_search_lower = strtolower($word_search);
          $sentence_array = explode(' ', $sentence_clean);

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
