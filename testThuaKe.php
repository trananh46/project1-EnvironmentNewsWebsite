<?PHP

class DongVat
{
    var $chan = 5;
    var $chi = 6;
    function an()
    {
        return 'Động vật có thể ăn';
    }

    function chay()
    {
        echo 'Animal can run by leg';
    }
}


class Meo extends Dongvat
{
    var $chan = 4;
}

$Meo = new Meo;

echo $Meo->chan;
$Meo->chay();
