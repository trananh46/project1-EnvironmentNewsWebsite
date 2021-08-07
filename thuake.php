<?PHP
class Dongvat
{
    var $leg = 4;
    var $eye = 2;
    function run()
    {
        echo 'Animal can run rather than human';
    }
    function eat()
    {
        echo 'Animal have the difference among human ';
    }
}

class ConCho extends Dongvat
{
    var $leg = 10;
    function run()
    {
        echo 'Was replaced by one person';
        //chúng ta có thể gọi lại lớp cha ----- parent::run();
    }
}
$ConCho = new ConCho;
echo $ConCho->leg;
// die();
echo '<br>';
echo $ConCho->run();
