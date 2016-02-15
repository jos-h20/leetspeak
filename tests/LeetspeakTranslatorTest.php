<?php
require_once "src/LeetspeakTranslator.php";

class LeetspeakTranslatorTest extends PHPUnit_Framework_TestCase
{
    // function test_LeetspeakTranslator()
    // {
    //     //Arrange
    //     $test_LeetspeakTranslator = new LeetspeakTranslator;
    //     $input = "car";
    //
    //     //Act
    //     $result = $test_LeetspeakTranslator->translator($input);
    //
    //     //assert
    //     $this->assertEquals(["c","a","r"], $result);
    // }
    //
    // function test_replaceE()
    // {
    //     //Arrange
    //     $test_LeetspeakTranslator = new LeetspeakTranslator;
    //     $input = "Leetspeak";
    //
    //     //Act
    //     $result = $test_LeetspeakTranslator->translator($input);
    //
    //     //assert
    //     $this->assertEquals(["1","3","3","t","z","p","3","a","k"], $result);
    // }
    //
    // function test_replaceO()
    // {
    //     //Arrange
    //     $test_LeetspeakTranslator = new LeetspeakTranslator;
    //     $input = "loop";
    //
    //     //Act
    //     $result = $test_LeetspeakTranslator->translator($input);
    //
    //     //assert
    //     $this->assertEquals(["l","0","0","p"], $result);
    // }
    //
    // function test_replaceL()
    // {
    //     //Arrange
    //     $test_LeetspeakTranslator = new LeetspeakTranslator;
    //     $input = "Lip";
    //
    //     //Act
    //     $result = $test_LeetspeakTranslator->translator($input);
    //
    //     //assert
    //     $this->assertEquals(["1","i","p"], $result);
    // }

    function test_replaceS()
    {
        //Arrange
        $test_LeetspeakTranslator = new LeetspeakTranslator;
        $input = "sissy";

        //Act
        $result = $test_LeetspeakTranslator->translator($input);

        //assert
        $this->assertEquals("sizzy", $result);
    }


}
 ?>
<!-- $input = ["L","e","e","t","s","p","e","a","k"]; -->
