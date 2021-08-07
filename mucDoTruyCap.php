<?PHP

class giaovien
{
    public $chucvu = 0;
    protected $hoso = 'Kiểm tra hồ sơ của sinh viên';
    private $check = 'Số sinh viên';

    public function giangday()
    {
        echo 'giáo viên xếp loại hạng A ';
    }
    protected function tuoi()
    {
        echo 'tuổi của giáo viên ';
    }

    private function school()
    {
        echo 'Các trường có thành tích cao ';
    }
}

class hocsinh extends giaovien
{
    function quyen()
    {
        $this->tuoi();
    }
}

$hocsinh = new hocsinh;
// echo $hocsinh->chucvu;
// echo $hocsinh->hoso;

$hocsinh->giangday();
$hocsinh->quyen();
