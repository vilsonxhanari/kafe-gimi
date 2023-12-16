<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Kafe-Gimi</title>
</head>
<body>
    <?php 

// krijoni klasen Person 
class Person{

    // nje person ka ID
    public $id; // Ka emer 
    
    public  $name;  // moshen 
   
     public $surname;     // moshen 
   
     public $age;     // qytetin ku banon 
   
    public $city;


// method set

 function set_id($id) // Set Id 
{
   $this->id=$id;
}

 function set_name($name) // Set name 
{
    $this->name=$name;
}

 function set_surname($surname) // Set surname
{
   $this->surname=$surname;
}

function set_age($age) // Set age
{ 
   $this->age=$age;
}
function set_city($city)
{
    $this->city=$city;
}
function get_city()
{
return $this->city;
}
// method get 

 function get_id() // get id 
{
   return  $this->id;
}
function get_name() // get name
{
   return  $this->name;
}
 function get_surname() // get surname
{
   return $this->surname;
}
 function get_age()
{
    return $this->age;
}
}
// Person name property
$vilson = new Person();
echo "<br>";
$vilson->set_id('M13324002M');
echo "Id: " . $vilson->get_id();
echo "<br>";
$vilson->set_name('Vilson');
echo "Name: " . $vilson->get_name();
echo "<br>";
$vilson->set_surname('Xhanari');
echo "Surname: " . $vilson->get_surname();
echo "<br>";
$vilson->set_age('25');
echo "Mosha: " . $vilson->get_age();
echo "<br>";
$vilson->set_city('Tirane');
echo "Qyteti: " . $vilson->get_city();


/* Construction

*/
function __construct ($name,$surname,$city,$age){
    $this->id=$id;
    $this->name=$name;
    $this->surname=$surname;
    $this->age=$age;
    $this->city=$city;

    // method get 
   
    function get_id($id) // get id 
    {
   return  $this->id;
    }
    function get_name() // get name
    {
   return  $this->name;
    }
  function get_surname() // get surname
    {
    return $this->surname;
    }
   function get_age()
    {
   return $this->age;
    }
    function get_city()
    {
    return $this->city;
    }
}
    $vilson = new Person("J21231004W","Vilson", "Xhanari","25","Tirane");
    echo $vilson->get_id();
    echo "<br>";
    echo $vilson->get_name();
    echo "<br>";
    echo $vilson->get_surname();
    echo "<br>";
    echo $vilson->get_age();
    echo "<br>";
    echo $vilson->get_city();

class Punonjes extends Person{
    $vilson=new Punonjes();
    $vilson->

}

?>
</body>
</html>
</body>
</html>