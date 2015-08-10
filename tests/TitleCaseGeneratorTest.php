<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeTitleCase_oneLetter()
        {
            /* TCG takes a single lower-case letter as input ("a") and capitalizes it, returning "A". */

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "a";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("A", $result);
        }

        function test_makeTitleCase_oneWord()
        {
            /*TCG takes a word ("beowulf") in all lower-case and capitalizes the first letter, returning "Beowulf." */

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf", $result);
        }

        function test_makeTitleCase_multipleWords()
        {
            /* TCG takes multiple word string ("the little mermaid") and capitalizes first letter of each word, returning "The Little Mermaid". */

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the little mermaid";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Little Mermaid", $result);
        }


        function test_makeTitleCase_exceptions()
        {
            /* TCG takes multi-word string ("beowulf from brighton beach") and capitalizes first letter of each word, except for words like, 'the,' 'and,' 'of'... */

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf from brighton beach";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf from Brighton Beach", $result);
        }

        function test_makeTitleCase_firstWord()
        {
            /* TCG always capitalizes the first word of a title, including excepted words.*/

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "from beowulf to the hulk";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("From Beowulf to the Hulk", $result);
        }

        function test_makeTitleCase_nonLetter()
        {
            /* TCG handles non-letter characters. */

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "57 beowulf alternative endings!!";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("57 Beowulf Alternative Endings!!", $result);
        }

        function test_makeTitleCase_allUpper()
        {
            /* TCG takes a string of all upper-case words and returns a properly capitalized title. */

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "BEOWULF ON THE ROCKS";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf on the Rocks", $result);
        }

        function test_makeTitleCase_mixedCase()
        {
            /* TCG takes a string of mixed-case words and returns a properly capitalized title. */
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "BeoWulf aNd mE";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf and Me", $result);
        }

        function test_makeTitleCase_uniqueCase()
        {
            /* TCG takes unique case entires (e.g. McDuff and O'Malley), and returns properly formatted title. */
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "here's to beowulf and McDuff and O'Malley";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Here's to Beowulf and McDuff and O'Malley", $result);

        }

    }




?>
