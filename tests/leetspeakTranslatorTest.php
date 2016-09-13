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




    }

?>
