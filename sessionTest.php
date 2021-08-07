<?PHP
class TongThong
{
    public  $vo = 0;
    protected $con = 12;
    private $bo = 3;

    public function meeting()
    {
        echo 'Thông báo cuộc họp cho toàn bộ';
    }
    protected function control()
    {
        echo 'Chỉ 1 số ít đc quyền kiểm soát';
    }
    private function war()
    {
        echo 'ấn hạt nhân';
    }
}


class president extends TongThong
{
    function control()
    {
    }
}

$president = new president;

$president->control();
