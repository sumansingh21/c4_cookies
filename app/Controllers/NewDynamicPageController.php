<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\NewCurriculumDownnloadFormModal;

class NewDynamicPageController extends BaseController
{
        public function insertDummy(){
          // Initialize the model
            $modal = new NewCurriculumDownnloadFormModal();
            
          // Data to be inserted
          $data = [
             'name' => 'John Doe',
        'email' => 'john.doe@example.com',
        'contact_number' => '1234567890',
        'message' => 'This is a test message',
          ];

         
  
          $modal->save($data);

      return "HI";

    }
}
