<?php 

class Pages extends Controller{

    public function __construct()
    {
        // echo"Paginas";
    }

    public function index(){
        $datos=[
            'titulos'=>'Bienvenidoos'
        ];
        $this->view('pages/inicio',$datos);
    }

    public function actualizar($num_register){
        echo $num_register;
    }




}


?>