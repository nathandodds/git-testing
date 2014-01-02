<?php
    class services extends C_Controller {

        public function index()
        {
        	$this->addStyle('styles');
        	
        	$this->setView('services/index');
        }

    }
?>