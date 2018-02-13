<?php

class Ticket_generator_model extends MY_Model{

	private $dbHandle;
	private function _init($handle = 'read'){
//directs the database requests to specific servers(hostnames), different for read and write.
		if($handle=='read'){
			$this->dbHandle = $this->getReadHandle();
		}
		else if($handle=='write'){
			$this->dbHandle = $this->getWriteHandle();
		}
	}

	public function getID($key){
		$this->_init('write');
		$data = array(
			'Temp' => 'a'
			);
		$this->dbHandle->replace('tickets_'.$key, $data);
		return $this->dbHandle->insert_id();
	}
}



 ?>