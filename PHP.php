<?php
// 1. Can PHP variable start with a number?
	//NO

// 2. What is the difference between single and double codes in PHP strings?

	//double codes("") for representing all strings including words with apostrophs(' , example: "don't") whereas
	//single codes(' ') do not print words with apostrophs.
       
    // echo "Yes, '$email' contains '$substr'"; we can only archieve this with single codes('')

//3. How do you convert a string to lower Case in PHP?
	
    $my_string = "This is my String";
	strtolower($my_string);

// 4. Write a code snippet in PHP to declare a variable named "name" and assign the value "Tasah" to it.

	$name = "Tasah";

// 5. Write a PHP code to concatenate two strings "Tasah" and "Ashley" and store the result in a variable named "classmates".

	$tasah = "Tasah";
	$ashly = "Ashley";
	$classmates = $tasah.$ashly;

// 6. Write a PHP code to display the length of a string stored in a variable name "text".

    $string = "I love to code!";
	strlen($string);

// 7. Write a PHP code to convert a string stored in variable named "Software Engingineering" to upperCase.

	$Software_engineering = "Lanmsa";
    echo strtoupper($Software_engineering);

// 8. Write a PHP code to check if a variable named "email" contains the sub-string "@gmail.com".
	
	$email = "random@gmail.com";
	$substr = "@gmail.com";
	if (strpos($email, $substr) !== false)
    {
        echo "Yes, '$email' contains '$substr'";
    }
    else
    {
        echo "No, '$email' does not contain '$substr'";
    }

// 9. Write a code to extract the first three characters stored in a variable named software.

        $software = "Software Engineering!";
        $firstThreeCharacters = substr($software, 0, 3);
        echo $firstThreeCharacters;

// 10. Write a PHP to replace all the occurence of the word "blue" with "red" in a string stored in a variable called "color".


        $color = "blue";
        echo str_replace("blue", "red", $color);

// 11. Write a PHP code to concatenate the values of two variables named "num1" and "num2" and store the results in a variable called "sum".

		$num1;
		$num2;
		$sum;
			$sum = $num1.$num2;

// 12. Write a PHP code to display the last character of a string stored in a variable named "text".

		$text = "boy";
        $lastchar = substr($text, -1);
        echo $lastchar;
		?>