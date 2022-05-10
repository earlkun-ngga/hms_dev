<?php 


	class MasterRecipe_Model extends CI_Model {



		public $table = 'master_recipe_drug_patient';


		public function input_data_master_recipe($data)
		{

			$this->db->set('recipe_id', $data['id_recipe']);
			$this->db->set('id_patient', $data['id_patient']);
			$this->db->set('reason_checking', $data['reason_checking']);
			$this->db->set('diagnostic', $data['diagnostic']);


		}

	}