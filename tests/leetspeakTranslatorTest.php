<?php

    require_once "src/LeetSpeakTranslator.php";

    class LeetSpeakTranslatorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeLeet_e()
        {
            //Arrange
            $test_LeetSpeakTranslator = new LeetSpeakTranslator;
            $input = "e";

            //Act
            $result = $test_LeetSpeakTranslator->makeLeet($input);

            //Assert
            $this->assertEquals(array("3"), $result);
        }

        function test_makeLeet_o()
        {
            //Arrange
            $test_LeetSpeakTranslator = new LeetSpeakTranslator;
            $input = "o";

            //Act
            $result = $test_LeetSpeakTranslator->makeLeet($input);

            //Assert
            $this->assertEquals(array("0"), $result);
        }

        function test_makeLeet_I()
        {
            //Arrange
            $test_LeetSpeakTranslator = new LeetSpeakTranslator;
            $input = "I";

            //Act
            $result = $test_LeetSpeakTranslator->makeLeet($input);

            //Assert
            $this->assertEquals(array("1"), $result);
        }

        function test_makeLeet_S()
        {
            //Arrange
            $test_LeetSpeakTranslator = new LeetSpeakTranslator;
            $input = "sees bees";

            //Act
            $result = $test_LeetSpeakTranslator->makeLeet($input);

            //Assert
            $this->assertEquals(array("s", "3", "3", "z"), $result);
        }


    }

?>
