<?php


	class Doctor_Model extends CI_Model {


		public $table = 'doctor';
		

		public function get_docter_all()
		{

			$this->db->order_by('id', 'desc');
			return $this->db->get($this->table)->result_array();
		}


		public function insert_doctor_new($data)
		{

			$this->db->set('doctor_id', $data['doctor_id']);
			$this->db->set('doctor_name', str_replace(['"',"'"], "", $data['doctor_name']));
			$this->db->set('status', $data['status']);
			$this->db->set('experience_year', $data['experience_year']);
			$this->db->set('no_handphone',str_replace(['"',"'"], "", $data['no_handphone']));
			$this->db->set('last_education',str_replace(['"',"'"], "", $data['last_education']));
			$this->db->set('birth_date', $data['birth_date']);
			$this->db->set('status', '1');
			$this->db->insert($this->table);
			return $this->db->affected_rows();

		}

		public function delete_one_doctor_by_id($data)
		{
			$this->db->where('id', $data);
			$this->db->delete($this->table);

			return $this->db->affected_rows();
		}

		public function update_doctor_by_id($data, $data2)
		{

			$this->db->set('doctor_name', str_replace(['"',"'"], "", $data['doctor_name']));
			$this->db->set('status', $data2);
			$this->db->set('experience_year', $data['experience_year']);
			$this->db->set('no_handphone',str_replace(['"',"'"], "", $data['no_handphone']));
			$this->db->set('last_education',str_replace(['"',"'"], "", $data['last_education']));
			$this->db->set('last_education', $data['last_education']);
			$this->db->set('birth_date', $data['birth_date']);
			$this->db->where('id', $data['id_prim_doct']);
			$this->db->update($this->table);

			return $this->db->affected_rows();

		}

	}