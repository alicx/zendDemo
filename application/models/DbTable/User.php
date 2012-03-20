<?php
/**
 * @author xiaoxia.xu <xiaoxia.xuxx@aliyun-inc.com> 2010-11-2
 * @link http://www.phpwind.com
 * @copyright Copyright ©2003-2010 phpwind.com
 * @license
 */
class Model_DbTable_User extends Zend_Db_Table_Abstract {
	protected $_name = 'user';
	protected $_primary = array(1 => 'uid');

	/**
	 * 获得用户信息
	 *
	 * @param int $id
	 * @return array
	 */
	public function get($id) {
		$id = (int) $id;
		$row = $this->fetchRow('id = ' . $id);
		if (!$row) {
			throw new Exception("Count not find row $id");
		}
		return $row->toArray();
	}

	/**
	 * 添加用户
	 *
	 * @param array $artist
	 * @return int
	 */
	public function add($data) {
		return $this->insert($data);
	}

	/**
	 * 更新用户信息
	 *
	 * @param int $id
	 * @param array $data
	 * @return boolean
	 */
	public function updateAlbum($id, $data) {
		$this->update($data, 'id = ' . (int) $id);
	}

	public function deleteAlbum($id) {
		$this->delete('id =' . (int) $id);
	}
}