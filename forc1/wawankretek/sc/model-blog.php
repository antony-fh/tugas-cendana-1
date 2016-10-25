<?php namespace sc\_model_blog;
	

	use config_\Config as Config;

	class model_blog extends Config {
		function __construct() {
			parent::__construct();
			$this->db = new Config();
		}

		public function SELECT_ALL() {
			$this->db->select('*');			
			$this->db->from('blog');
			$this->db->order('blog_tanggal','DESC LIMIT 5');

			$data = $this->db->get();

			return $data;
		}

		public function SELECT_BY_ID($id) {
			$this->db->select('*');			
			$this->db->from('blog');
			$this->db->where('id', $id);

			$data = $this->db->get();

			return $data[0];
		}

		// public function LIKE($tableCondition,$search="") {
		// 	$tableCondition='blog_judul';
		// 	$this->db->select('*');			
		// 	$this->db->from('blog');
		// 	$this->db->like($tableCondition, $search);

		// 	$data = $this->db->get();

		// 	return $data;
		// }

		// public function INSERT($table,$data) {
		// 	$result = $this->db->insert($table, $data);

		// 	return $result;
		// }

		// public function DELETE($id) {
		// 	$this->db->delete("blog");
		// 	$this->db->where_delete("id", $id);

		// 	$result = $this->db->getDelete();

		// 	return $result;
		// }

		// public function UPDATE($data, $id) {
		// 	$this->db->update("blog", $data);
		// 	$this->db->where_update("id", $id);

		// 	$result = $this->db->getUpdate();

		// 	return $result;
		// }
	}
?>