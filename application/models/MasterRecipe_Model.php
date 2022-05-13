<?php 


	class MasterRecipe_Model extends CI_Model {



		public $table = 'master_recipe_drug_patient';

		public function input_data_master_recipe($data)
		{

			$this->db->set('recipe_id', $data['id_recipe']);
			$this->db->set('id_patient', $data['id_patient']);
			$this->db->set('reason_checking', $data['reason_checking']);
			$this->db->set('diagnostic', $data['diagnostic']);
			$this->db->set('instruction', $data['instruction']);
			$this->db->set('created_date', date('Y-m-d'));
			$this->db->insert($this->table);
			return $this->db->insert_id();
		}


		public function get_all_recipe_patient()
		{

			$this->db->select('master_recipe_drug_patient.recipe_id, patient.patient_name, patient.phone_number_1, master_recipe_drug_patient.diagnostic,
				 master_recipe_drug_patient.created_date
				');
			$this->db->join('patient', 'patient.id = master_recipe_drug_patient.id_patient');

			return $this->db->get($this->table)->result_array();

		}

	}