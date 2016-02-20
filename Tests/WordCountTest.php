<?php

    require_once "src/RepeatCounter.php";

    class WordCountTest extends PHPUnit_Framework_TestCase
    {

        function test_wordCount_one()
        {
            //Arrange
            $test_WordCount_one = new RepeatCounter;
            $input = "Hello";
            $input2 = "hello";

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

        function test_wordCount_phrase()
        {
            //Arrange
            $test_WordCount_phrase = new RepeatCounter;
            $input = "Hello there, I said hello";
            $input2 = "Hello";

            //Act
            $result = $test_WordCount_phrase->countWord($input, $input2);

            //Assert
            $this->assertEquals(2, $result);
        }

        function test_wordCount_punctuation()
        {
            //Arrange
            $test_WordCount_phrase = new RepeatCounter;
            $input = "Hello there, I said 'hello.'";
            $input2 = "Hello";

            //Act
            $result = $test_WordCount_phrase->countWord($input, $input2);

            //Assert
            $this->assertEquals(2, $result);
        }

        function test_wordCount_no_partial()
        {
            //Arrange
            $test_WordCount_no_partial = new RepeatCounter;
            $input = "Hello there, I said 'hello.', please say helloooo!";
            $input2 = "hello";

            //Act
            $result = $test_WordCount_no_partial->countWord($input, $input2);

            //Assert
            $this->assertEquals(2, $result);
        }





    }

?>
