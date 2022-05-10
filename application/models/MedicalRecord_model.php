<?php 


	class MedicalRecord_model extends CI_Model {


		// Status : 0 -> NOT YET INPUT -> 1 DELAY -> FINISH
		public $table = 'medical_record';


		public function insert_new_medical_record($id_appointment, $id_doctor, $id_patient)
		{

			$this->db->set('id_appointment', $id_appointment);
			$this->db->set('id_doctor', $id_doctor);
			$this->db->set('id_patient', $id_patient);
			$this->db->set('created_date', date('Y-m-d'));
			$this->db->set('status', '0');
			$this->db->insert($this->table);
			return $this->db->affected_rows();


		}


		public function get_all_medical_record()
		{

			$this->db->select('medical_record.id, patient.patient_name, patient.phone_number_1, doctor.doctor_name, patient.blood_type, medical_record.created_date');
			$this->db->join('patient', 'patient.id = medical_record.id_patient');
			$this->db->join('doctor', 'doctor.id = medical_record.id_doctor');
			$this->db->join('appointment', 'appointment.id = medical_record.id_appointment');
			return $this->db->get($this->table)->result_array();
		}

			public function get_medical_record_active()
		{

			$this->db->select('medical_record.id, medical_record.id_patient, patient.patient_name, patient.phone_number_1, patient.sex, doctor.doctor_name, patient.blood_type, medical_record.created_date, medical_record.status, medical_record.checks, medical_record.diagnosis');
			$this->db->join('patient', 'patient.id = medical_record.id_patient');
			$this->db->join('doctor', 'doctor.id = medical_record.id_doctor');
			$this->db->join('appointment', 'appointment.id = medical_record.id_appointment');
			$this->db->where_not_in('medical_record.status', '2');
			return $this->db->get($this->table)->result_array();
		}


			public function get_medical_record_done()
		{

			$this->db->select('medical_record.id, patient.patient_name, doctor.doctor_name, patient.blood_type, medical_record.created_date, medical_record.status');
			$this->db->join('patient', 'patient.id = medical_record.id_patient');
			$this->db->join('doctor', 'doctor.id = medical_record.id_doctor');
			$this->db->join('appointment', 'appointment.id = medical_record.id_appointment');
			$this->db->where('medical_record.status', '2');
			return $this->db->get($this->table)->result_array();
		}


		public function update_medical_record_to_delay($data)
		{
			// Status : 1
			$this->db->set('diagnosis', $data['diagnosis']);
			$this->db->set('checks', $data['check']);
			$this->db->set('status', '1');
			$this->db->where('id', $data['idmedrec']);
			$this->db->update($this->table);
			return $this->db->affected_rows();
			
		}

		public function update_to_done($data) {
			//Status : 2 (Done)
			$this->db->set('status', '2');
			$this->db->where('id', $data);
			$this->db->update($this->table);
			return $this->db->affected_rows();
		}
		



	}