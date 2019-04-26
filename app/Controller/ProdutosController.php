<?php

class ProdutosController extends AppController {
    public function index(){

                
        $this->loadModel("Produtos"); 
        $prod = $this->Produtos->find('all',array(
          "conditions" =>array('id'=>'1','preco <'=>'1000')
        ));
      
      var_dump($prod).exit();
      
        $msn = "ola cake";
        
      //  $this->set('msn',$msn);
    
    }

}

?>