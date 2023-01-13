<?
$intNum = 472;
$doubleNum = 29.3;
$boolean = true;
$string = "Web Code Geeks";
$array = array("Pineapple", "Grapefruit", "Banana");

// creating a class before declaring an object variable
class person
{
    function agePrint()
    {
        $age = 5;
        echo "This person is $age years old!";
    }
}

// creating a new object of type person
$object = new person;
$object->agePrint();
?>