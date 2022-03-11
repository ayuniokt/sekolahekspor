<!DOCTYPE html>
<html leng="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
</head>
<body>
    <h1>Latihan Robot</h1>
    <?php
class Robot
{
    private $warnaKepala, $warnaBadan, $warnaKaki, $jSenjata;
    public function __construct($warnaKepala, $warnaBadan, $warnaKaki, $jSenjata)
    {
        $this->warnaKepala = $warnaKepala;
        $this->warnaBadan = $warnaBadan;
        $this->warnaKaki = $warnaKaki;
        $this->jSenjata = $jSenjata;
    }

    public function getWarnaBadan()
    {
        echo $this->warnaKepala . " " . $this->warnaBadan . " " . $this->warnaKaki . " " . $this->jSenjata;
    }
    public function changeWarnaBadan($warnaBadan, $warnaKaki, $jSenjata)
    {
        $this->warnaBadan = $warnaBadan;
        $this->warnaKaki = $warnaKaki;
        $this->jSenjata = $jSenjata;
    }
}

$robot = new Robot("Merah", "Biru", "Kuning", 3);
$robot->getWarnaBadan();
$robot->changeWarnaBadan("Hijau", "Putih", 2);
echo "<br>";
$robot->getWarnaBadan();
    ?>
</body>
</html>