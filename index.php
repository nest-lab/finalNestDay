<?php
/**
 * @Author
 * Falua Temitope Oyewole.
 * faluatemitopeo@gmail.com
 * Web Developer
 * Date: 8/26/2017
 */

/**
 * Question Number  3
 */


function missing_number() {
    $first_array = array(1,2,3,4,5);
    $second_array = array(2,3,1,0,5);

    $searchArray = array_diff($first_array,$second_array);
    //return $searchArray;

    print_r($first_array); echo "<br>";
    print_r($second_array); echo "<br>";

    print_r("The missing number is : ");
    print_r($searchArray);
    //print_r($second_array);
}

echo missing_number();

/**
 * Question 7
 * In an array 1-100, exactly one number is duplicate. How do u find it
*/

function find_duplicate() {
    $i = 0;
    for($i = 0; $i <= 100; $i++) {
       print_r('<ul><li>'. $i . '</li></ul>');
    }
    $array_list = array();
}

echo find_duplicate();