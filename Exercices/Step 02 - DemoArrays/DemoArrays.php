<?php
/**
 * Created by PhpStorm.
 * User: David Gomes
 * Date: 09.12.2019
 * Time: 14:43
 * Title : DemoArrays.php
 */

/* Help:    https://www.w3schools.com/php/php_arrays.asp
            http://php.net/manual/en/function.array.php
*/

//<editor-fold desc="Indexed Array">
// each Element of this array content a name of a Web Browser
$browsers = array('Safari','Edge','Chrome','Firefox');

// assign 'Chrome' to $mostUsedBrowser
$mostUsedBrowser = $browsers[2];

// Replaces 'Edge' with 'Opera'
//TODO - il vous faut coder ici
$browsers[1] = 'Opera';

// Loop through an Indexed Array
$arrLength = count($browsers); // Assign the number of Elements of the Array '$browsers'
$browsersList = "Safari-Opera-Chrome-Firefox";
//TODO - il vous faut coder ici
for ($i = 0; $i <= 3; $i++) {
    echo $browsers[$i];
    echo "<br>";


}

//</editor-fold>

//<editor-fold desc="Associated Array">
// each Element of this associated array contains a part of the contact information
$contactInfo= array(
    'name'      => 'John Doe',
    'address'   => 'Rue de Lausanne 25',
    'NPA'       => 1400,
    'City'      => 'Yverdon'
);

// assign the city ("Yverdon") to $Home
//TODO - il vous faut coder ici
$Home = $contactInfo['City'];
// Test pour vérifier que $Home = Yverdon
// echo $Home;


// Replaces 'John Doe' with 'Jane Doe'
//TODO - il vous faut coder ici
$contactInfo['name'] = 'Jane Doe';
// Test pour vérifier que sa a changer
// echo $contactInfo['name'];

// Loop through an Associated Array
$completedContact="";
// foreach ($contactInfo as $element){
    //TODO - il vous faut coder ici
foreach ($contactInfo as $element){
    echo "<br>";
    echo $element;

}

//</editor-fold>

//<editor-fold desc="Two-dimensional Array">
// Each Element of this Two-dimensional array contains a name of a person
$people= array(
    array('Perceval','Arthur','Lancelot','Leodagan'),
    array('Marge','Homer','Bart','Maggie'),
    array('Joe','Jack','William','Averell'),
);

// assign "Joe" to $person
//TODO - il vous faut coder ici
$person = $people[2][0];
/* Test valeur
echo "<br>";
echo "<br>";
echo $person;
*/

// Replaces 'Bart' with 'Lisa'
//TODO - il vous faut coder ici
$people [1][2] = 'Lise';
/* Test valeur
echo "<br>";
echo "<br>";
echo $people [1][2];
*/


// Loop through an Two-dimensional Array
$rowLength = count($people);        //Assign the number of rows of the array "People"
$colLength = count($people[0]);     //Assign the number of Elements (columns) of the of the array "People"
$personList="";                     // Initialise the string $PersonList

//TODO - il vous faut coder ici
//tant qu'il n'aura pas prit toute les ligne du tableau $people il ne s'aretera pas
for($i=0;$i<$rowLength;$i++){
    echo "<br>";
    //tant qu'il n'aura pas prit chaque valeur d'une ligne du tableau $people il ne s'aretera pas
    for( $j=0;$j<$colLength;$j++){
        $personList=$personList.$people[$i][$j].' / ';//$personList va est egale a chaque valeur d'une ligne du tableau $people
    }

}
echo $personList;




//</editor-fold>
