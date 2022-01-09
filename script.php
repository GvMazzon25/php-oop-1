<?php 
class User{
    public $name;
    public $sold = 0;

    public function getSold($eta){
        if($eta > 65) {
            $this->sconto = 40;
        }
    }

    public function getSold(){
        return $this->sconto;
    }
}

$giorgio = new User();
$giorgio->setSold(40);
$sconto_giorgio = $giorgio->getSold();

$davide = new User();
$davide->setSold(30);
$sconto_davide = $giorgio->getSold();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sconto</h1>
    <h3>Il risultato è: <?php echo "$sconto_giorgio"?></h3>
    <h3>Il risultato è: <?php echo "$sconto_davide"?></h3>
</body>
</html>