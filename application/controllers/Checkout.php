<?php 
class Checkout extends CI_Controller{
   public function products($num){
    if($num == 1){
        $this->load->view("pages/sharia");
    }
    if($num == 2){
        $this->load->view("pages/dresses");
    }
    if($num == 3){
        $this->load->view("pages/gomesi");
    }
   
   }
}
?>