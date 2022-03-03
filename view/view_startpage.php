<?php 
/**
 * 
 */
class view_startpage 
{
  
  private $topbottom;
  
  function __construct()
  {
      $this->topbottom=new topbottom();
  }
  
  public function render($arrVolvo){
    $this->topbottom->top();
    
    foreach ($arrVolvo as $key => $value) {
      
      echo "<h1>".$key." : " .$value."</h1>";
      
    }
    
    
    $this->topbottom->bottom();
    
  }
  
  
  
}







 ?>
