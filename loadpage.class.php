<?php

class loadpage {

    private $page;
    private $mode;

    public function __construct($page,$movile=false) {
        $this->page = $page;
        $this->movile = $movile;
    }
    
    public function view(){
        
        if(file_exists(dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'pages' .DIRECTORY_SEPARATOR.$this->page . '.php')){
            
            include dirname ( __FILE__ ) . DIRECTORY_SEPARATOR .'pages' .DIRECTORY_SEPARATOR. $this->page . '.php';
        }
        else{
            include dirname ( __FILE__ ) . DIRECTORY_SEPARATOR.'pages'.DIRECTORY_SEPARATOR. 'error.php';
        }
    }


}

?>
