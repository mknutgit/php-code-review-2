<?php

    require_once "src/RepeatCounter.php";

    class WordCountTest extends PHPUnit_Framework_TestCase
    {

        function test_wordCount_one()
        {
            //Arrange
            $test_WordCount_one = new RepeatCounter;
            $input = "Hello";
            $input2 = "Hello";

            //Act
            $result = $test_WordCount_one->countWord($input, $input2);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_wordCount_zero()
        {
            //Arrange
            $test_WordCount_zero = new RepeatCounter;
            $input = "Hello";
            $input2 = "Hell";

            //Act
            $result = $test_WordCount_zero->countWord($input, $input2);

            //Assert
            $this->assertEquals(0, $result);
        }





    }

?>
