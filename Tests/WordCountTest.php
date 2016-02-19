<?php

    require_once "src/WordCount.php";

    class WordCountTest extends PHPUnit_Framework_TestCase
    {

        function test_wordCount_oneWord()
        {
            //Arrange
            $test_WordCount = new WordCount;
            $input = "Hello";

            //Act
            $result = $test_WordCount->WordCount($input);

            //Assert
            $this->assertEquals("Beowulf", $result);
        }
    }

?>
