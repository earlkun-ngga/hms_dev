<?php  


	class Appointment_Model extends CI_Model {

		public $table = 'appointment';
		
    

		public function input_new_appointment($data)
		{

			$this->db->set('id_doctor', $data['doctor_id']);
			$this->db->set('id_patient', $data['patient_id']);
			$this->db->set('appointment_id', $data['ap_id']);
			$this->db->set('appointment_date', $data['appointment_date']);
			$this->db->set('appointment_time', $data['appointment_time']);
			$this->db->set('status', '0');
			$this->db->set('note', str_replace(['"',"'"], "", $data['remark']));
			$this->db->insert($this->table);
			return $this->db->affected_rows();
		}


		public function get_all_apointment_with_join()
		{
			$this->db->select('appointment.id, 
				doctor.doctor_name, 
				patient.patient_name, 
				appointment_date, 
				appointment_time, 
				appointment_id,
				appointment.status, 
				id_doctor, 
				id_patient'
			);
			$this->db->join('doctor','doctor.id = appointment.id_doctor');
			$this->db->join('patient','patient.id = appointment.id_patient');
			$this->db->order_by('appointment_date', 'asc');
			return $this->db->get($this->table)->result_array();
		}

		public function get_all_appointment_with_join_today()
		{
			$this->db->select('appointment.id, 
				doctor.doctor_name, 
				patient.patient_name, 
				appointment_date, 
				appointment_time, 
				appointment_id,
				appointment.status, 
				id_doctor, 
				id_patient'
			);
			$this->db->join('doctor','doctor.id = appointment.id_doctor');
			$this->db->join('patient','patient.id = appointment.id_patient');
			$this->db->where('appointment_date', date('Y-m-d'));
			$this->db->order_by('appointment_date', 'asc');
			return $this->db->get($this->table)->result_array();
		}
		public function get_all_appointment_with_join_this_month()
		{
			$this->db->select('appointment.id, 
				doctor.doctor_name, 
				patient.patient_name, 
				appointment_date, 
				appointment_time, 
				appointment_id,
				appointment.status, 
				id_doctor, 
				id_patient'
			);
			$this->db->join('doctor','doctor.id = appointment.id_doctor');
			$this->db->join('patient','patient.id = appointment.id_patient');
			$this->db->where('MONTH(appointment_date)', date('m'));
			$this->db->order_by('appointment_date', 'asc');
			return $this->db->get($this->table)->result_array();
		}
			public function get_all_appointment_with_join_expired()
		{
			$this->db->select('appointment.id, 
				doctor.doctor_name, 
				patient.patient_name, 
				appointment_date, 
				appointment_time, 
				appointment_id,
				appointment.status, 
				id_doctor, 
				id_patient'
			);
			$this->db->join('doctor','doctor.id = appointment.id_doctor');
			$this->db->join('patient','patient.id = appointment.id_patient');
			$this->db->where('appointment_date <', date('Y-m-d'));
			$this->db->order_by('appointment_date', 'asc');
			return $this->db->get($this->table)->result_array();
		}



		public function get_appointment_by_date_time_doct($date, $time, $doctid)
		{
			$this->db->where('appointment_date', $date);
			$this->db->where('appointment_time', $time);
			$this->db->where('id_doctor', $doctid);

			return $this->db->get($this->table)->result_array();

		}


		public function set_status_1($data)
		{

			$this->db->set('status', '1');
			$this->db->where('id', $data);

			$this->db->update($this->table);

			return $this->db->affected_rows();
		}

	}