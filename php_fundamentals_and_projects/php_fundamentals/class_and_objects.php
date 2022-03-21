<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php class and objects
    </title>
</head>

<body>
    <?php
    $name = "david";
    echo "Hello guys, this is  $name" . "<br>";
    
    echo var_dump($name) . "<br>";
    class Student
    {
        public $name;
        public $grade;

        public function __construct($name, $grade)
        {
            $this->name = $name;
            $this->grade = $grade;
        }
        public function output()
        {
            echo "The student is $this->name and study in grade $this->grade<br>";
        }
    }

    $s = new Student("david", "assignments");
    $s->output();
    echo var_dump($s);
    ?>
</body>

</html>