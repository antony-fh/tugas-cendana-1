<?php namespace config_;
/*
Copyright (c) 2016, Achmad Chadil Auwfar
All rights reserved.

Redistribution and use in source, with or without modification, are permitted provided that the following conditions are met:

    * Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
    * Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
    * Neither the name of the organisation nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/
class Config {
		var $SQL = "";
		var $SQL_from = "";
		var $SQL_where = "";
		var $SQL_order = "";
		var $SQL_update = "";
		var $SQL_where_update = "";
		var $SQL_delete = "";
		var $SQL_where_delete = "";
		var $resultData = [];
		public function __construct() {
			$h = "localhost";
			$u = "root";
			$p = "";
			$db ="db_dp";
			$conn = mysql_connect($h, $u, $p);
			mysql_select_db($db, $conn);
		}
		public function select($field = "*") {
			if (is_array($field)) {
				$this->SQL .= "SELECT " .implode(", ", $field) ." ";
			} else {
				if ($this->SQL == '') {
					$this->SQL .= "SELECT " .$field ." ";
				} else {
					$this->SQL .= ", " .$field ." ";
				}
			}
		}

		public function from($table) {
			if (is_array($table)) {
				$this->SQL_from .= "FROM " .implode(", ", $table) ." ";

			} else {
				if ($this->SQL_from == '') {
					$this->SQL_from .= "FROM " .$table ." ";
				} else {
					$this->SQL_from .= ", " .$table ." ";
				}
			}
		}

		public function where($tableCondition, $value = "") {
			if (is_array($tableCondition)) {
				foreach ($tableCondition as $key => $value) {
					if (strpos($value, ".") == '') {
						$value = "'" .$value ."'";
					}

					if ($this->SQL_where == '') {
						$this->SQL_where .= "WHERE " .$key ." = " .$value ." ";
					} else {
						$this->SQL_where .= "AND " .$key ." = " .$value ." ";
					}
				}
			} else {
				if (strpos($value, ".") == '') {
					$value = "'" .$value ."'";
				}

				if ($this->SQL_where == '') {
					$this->SQL_where .= "WHERE " .$tableCondition ." = " .$value ." ";
				} else {
					$this->SQL_where .= "AND " .$tableCondition ." = " .$value ." ";
				}
			}
		}

		public function or_where($tableCondition, $value = "") {
			if (is_array($tableCondition)) {
				foreach ($tableCondition as $key => $value) {
					if (strpos($value, ".") == '') {
						$value = "'" .$value ."'";
					}

					if ($this->SQL_where == '') {
						$this->SQL_where .= "WHERE " .$key ." = " .$value ." ";
					} else {
						$this->SQL_where .= "OR " .$key ." = " .$value ." ";
					}
				}

			} else {
				if (strpos($value, ".") == '') {
					$value = "'" .$value ."'";
				}

				if ($this->SQL_where == '') {
					$this->SQL_where .= "WHERE " .$tableCondition ." = " .$value ." ";
				} else {
					$this->SQL_where .= "OR " .$tableCondition ." = " .$value ." ";
				}
			}
		}

		public function LIKE($tableCondition, $value = "") {
			if (is_array($tableCondition)) {
				foreach ($tableCondition as $key => $value) {
					if ($this->SQL_where == '') {
						$this->SQL_where .= "WHERE " .$key ." LIKE '%" .$value ."%'";
					} else {
						$this->SQL_where .= "OR " .$key ." LIKE '%" .$value ."%' ";
					}
				}

			} else {
				if ($this->SQL_where == '') {
					$this->SQL_where .= "WHERE " .$tableCondition ." LIKE '%" .$value ."%' ";
				} else {
					$this->SQL_where .= "OR " .$tableCondition ." LIKE '%" .$value ."%' ";
				}
			}
		}

		public function and_like($tableCondition, $value = "") {
			if (is_array($tableCondition)) {
				foreach ($tableCondition as $key => $value) {
					if ($this->SQL_where == '') {
						$this->SQL_where .= "WHERE " .$key ." LIKE '%" .$value ."%'";
					} else {
						$this->SQL_where .= "AND " .$key ." LIKE '%" .$value ."%' ";
					}
				}

			} else {
				if ($this->SQL_where == '') {
					$this->SQL_where .= "WHERE " .$tableCondition ." LIKE '%" .$value ."%' ";
				} else {
					$this->SQL_where .= "AND " .$tableCondition ." LIKE '%" .$value ."%' ";
				}
			}
		}

		public function order($field, $value = "") {
			if (is_array($field)) {
				foreach ($field as $key => $value) {
					if ($this->SQL_order == '') {
						$this->SQL_order .= "ORDER BY " .$value ." " .$key ." ";
					} else {
						$this->SQL_order .= ", " .$value ." " .$key ." ";
					}
				}

			} else {
				if ($this->SQL_order == '') {
					$this->SQL_order .= "ORDER BY " .$field ." " .$value ." ";
				} else {
					$this->SQL_order .= ", " .$field ." " .$value ." ";
				}
			}
		}

		public function get() {
			$this->resultData = [];

			$this->SQL .= $this->SQL_from .$this->SQL_where .$this->SQL_order;
			$result = mysql_query($this->SQL);
			$index = 0;
			while ($data = mysql_fetch_array($result)) {
				foreach ($data as $key => $value) {
					$this->resultData[$index][$key] = $value;
				}
				$index++;
			}

			$this->reset();

			return $this->resultData;
		}

		public function insert($table, $data) {
			$index = 0;
			foreach ($data as $key => $value) {
				$Keys[$index] = $key;
				$index++;
			}
			foreach ($data as $key => $value) {
				if (strpos($value, "()") == '') {
					$data[$key] = "'" .$value ."'";
				}
				else{
					$data[$key] = $value;
				}
			}

			// foreach ($data as $key => $value) {
			// 	$data[$key] = "'" .$value ."'";
			// }

			$SQL_insert = "INSERT INTO " .$table ."(" .implode(", ", $Keys) .") VALUES (" .implode(", ", $data) .")";

			$result = mysql_query($SQL_insert);

			return $result;
		}

		public function update($table, $data) {
			$this->SQL_update .= "UPDATE " .$table ." SET ";

			$index = 0;
			foreach ($data as $key => $value) {
				$Keys[$index] = $key;
				$index++;
			}

			foreach ($data as $key => $value) {
				if (strpos($value, "()") == '') {
					$data[$key] = "'" .$value ."'";
				}
				else{
					$data[$key] = $value;
				}
			}
			
			// foreach ($data as $key => $value) {
			// 	$data[$key] = "'" .$value ."'";
			// }

			$last = 0;
			foreach ($data as $key => $value) {
				$last++;
				$this->SQL_update .= $key ." = " .$value;
				if (count($data) > 1) {
					if ($last != count($data)) {
						$this->SQL_update .= ", ";
					} else {
						$this->SQL_update .= " ";
					}
				}
			}
		}

		public function where_update($tableCondition, $value="") {
			if (is_array($tableCondition)) {
				foreach ($tableCondition as $key => $value) {
					if (strpos($value, ".") == '') {
						$value = "'" .$value ."'";
					}

					if ($this->SQL_where_update == '') {
						$this->SQL_where_update .= "WHERE " .$key ." = " .$value ." ";
					} else {
						$this->SQL_where_update .= "AND " .$key ." = " .$value ." ";
					}
				}
			} else {
				if (strpos($value, ".") == '') {
					$value = "'" .$value ."'";
				}

				if ($this->SQL_where_update == '') {
					$this->SQL_where_update .= "WHERE " .$tableCondition ." = " .$value ." ";
				} else {
					$this->SQL_where_update .= "AND " .$tableCondition ." = " .$value ." ";
				}
			}
		}

		public function getUpdate() {
			$this->SQL_update .= $this->SQL_where_update;

			$result = mysql_query($this->SQL_update);

			$this->SQL_update = "";

			return $result;
		}

		public function delete($table) {
			$this->SQL_delete .= "DELETE FROM " .$table ." ";
		}

		public function where_delete($tableCondition, $value="") {
			if (is_array($tableCondition)) {
				foreach ($tableCondition as $key => $value) {
					if (strpos($value, ".") == '') {
						$value = "'" .$value ."'";
					}

					if ($this->SQL_where_delete == '') {
						$this->SQL_where_delete .= "WHERE " .$key ." = " .$value ." ";
					} else {
						$this->SQL_where_delete .= "OR " .$key ." = " .$value ." ";
					}
				}
			} else {
				if (strpos($value, ".") == '') {
					$value = "'" .$value ."'";
				}

				if ($this->SQL_where_delete == '') {
					$this->SQL_where_delete .= "WHERE " .$tableCondition ." = " .$value ." ";
				} else {
					$this->SQL_where_delete .= "OR " .$tableCondition ." = " .$value ." ";
				}
			}
		}

		public function getDelete() {
			$this->SQL_delete .= $this->SQL_where_delete;

			$result = mysql_query($this->SQL_delete);

			$this->SQL_delete = "";
			return $result;
		}

		public function reset() {
			$this->SQL = "";
			$this->SQL_from = "";
			$this->SQL_where = "";
			$this->SQL_order = "";
		}
}
?>
