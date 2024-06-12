<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
class Car {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getDescription() {
        return "Carro: $this->make $this->model, Ano: $this->year";
    }
}

$car = new Car('Toyota', 'Corolla', 2020);
echo $car->getDescription();
?>


</body>
</html>