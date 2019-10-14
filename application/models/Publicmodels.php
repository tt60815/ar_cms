<?php
class Publicmodels extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function getjob()
	{
		return $this->db->get('job')->result_array();
	}
	public function getclass2($classid)
	{
		return $this->db->where("jobclass_id", $classid)->get('jobclass2')->result_array();
	}
	public function getclass()
	{
		return $this->db->get('jobclass')->result_array();
	}
	public function getalladdress()
	{
		return $this->db->get('address')->result_array();
	}
	public function getjobdetail($jobid)
	{
		return $this->db->where('jobid', $jobid)->get('job')->result_array()[0];
	}
	public function getjobaddress($jobid)
	{
		$this->db->select('address.address_name');
		$this->db->from('jobtagaddress');
		$this->db->join('address', "jobtagaddress.jobtagaddress_jobid=" . $jobid . " AND jobtagaddress.jobtagaddress_addid = address.address_id");
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getjobclass2($jobid)
	{
		$this->db->select('jobclass2.jobclass2_name');
		$this->db->from('jobtagjobclass2');
		$this->db->join('jobclass2', "jobtagjobclass2.usertagjobclass2_jobid=" . $jobid . " AND jobtagjobclass2.usertagjobclass2_jobclass2id = jobclass2.jobclass2_id");
		$query = $this->db->get();
		return $query->result_array();
	}
	public function insertjob($contx)
	{
		$insrt = array(
			'jobuser' => 1,
			'jobtitle' => $contx['jobtitle'],
			'jobtxt' => $contx['jobtxt'],
			'jobclassid' => $contx['jobclassid']
		);
		$this->db->insert('job', $insrt);
		$jobid = $this->db->insert_id();
		if (!empty($contx['add'])) {
			foreach ($contx['add'] as $it) {
				$insrt = array(
					'jobtagaddress_jobid' => $jobid,
					'jobtagaddress_addid' => $it
				);
				$this->db->insert('jobtagaddress', $insrt);
			}
		}
		if (!empty($contx['class2'])) {
			foreach ($contx['class2'] as $it) {
				$insrt = array(
					'usertagjobclass2_jobid' => $jobid,
					'usertagjobclass2_jobclass2id' => $it
				);
				$this->db->insert('jobtagjobclass2', $insrt);
			}
		}
		return $jobid;
	}
}
