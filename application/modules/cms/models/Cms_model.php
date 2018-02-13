 <?php

class Cms_model extends MY_Model {

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

	public function checkValueExist($value, $key){
		$this->_init('read');
		$this->dbHandle->where(ucfirst($key).'Name', $value);
		$this->dbHandle->select('ID');
		$this->dbHandle->from($key);
		$ID = $this->dbHandle->get();
		if($ID->num_rows() > 0){
			return true;
		}
		return false;

	}
	public function addLeads($data, $key){
		$this->_init('write');
		return $this->dbHandle->insert($key, $data);
	}

}
?>