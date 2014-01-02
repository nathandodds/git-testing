<?php
    class Schools extends C_Controller {

        public function index()
        {
        	$this->addStyle('styles');
        	
			$this->setView('schools/index');
        }


    }
  ?>
