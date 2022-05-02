<?php


class Core{

    protected  $currentController = "pages";
    protected  $currentMethod = "index";
    protected  $parameter = [];

    public function __construct()
    { 
       $url=$this->get_url();
       if (file_exists('../app/controller/'.ucwords($url[0]).".php")) {
         $this->currentController=ucwords($url[0]);
         unset($url[0]);
       }  
       require_once('../app/controller/'.$this->currentController.".php");
       $this->currentController= new $this->currentController;


       if (isset($url[1])){

       if(method_exists($this->currentController,$url[1])){
         $this->currentMethod=$url[1];
         unset($url[1]);
       }
      }

      /// echo $this->currentMethod;
     $this->parameter = $url? array_values($url):[];
     call_user_func_array([$this->currentController,$this->currentMethod],$this->parameter);


    }


  public function get_url(){
      if (isset($_GET['url'])){
        $url=rtrim($_GET['url'],'/');
        $url=filter_var($url,FILTER_SANITIZE_URL);
        $url= explode('/',$url);
        return $url;

      }
  }


}

?>