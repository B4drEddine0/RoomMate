<?php 

class HomeController extends BaseController {


   public function index() {
      if(!isset($_SESSION['user_loged_in_id'])){
         header("Location: /login ");
         exit;
      }
    $this->renderDashboard('admin/index');
   }


   public function showHome(){

      $this->render("youcoder/home");

   }

 

}