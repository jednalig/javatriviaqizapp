<?php
session_start();
ini_set('display_errors', 1);
class Action
{
	private $db;

	public function __construct()
	{
		ob_start();
		include 'db_connect.php';

		$this->db = $conn;
	}
	function __destruct()
	{
		$this->db->close();
		ob_end_flush();
	}


	function complaint()
	{
		extract($_POST);




	}
	function manage_complaint()
	{
		extract($_POST);
		
		
			$save = $this->db->query("UPDATE complaints set status = $status where id = $id");

	

		if ($save) {
			$chk = $this->db->query("SELECT * FROM complaints_action where complaint_id = $id ");
			if ($status == 2) {
				$data = " complaint_id = $id ";
				$data .= ", responder_id = $responder_id ";
				$data .= ", dispatched_by = {$_SESSION['login_id']} ";
				if ($chk->num_rows > 0) {
					$res = $chk->fetch_array();
					$save2 = $this->db->query("UPDATE complaints_action $data where complaint_id = $id");
				} else {
					$save2 = $this->db->query("INSERT INTO complaints_action set $data");
				}
				if ($save2) {
					$this->db->query("UPDATE responders_team set availability = 0 where id = $responder_id ");
				}
				if (isset($res)) {
					$this->db->query("UPDATE responders_team set availability = 1 where id = {$res['responder_id']} ");
				}
				return 1;
			} elseif ($status == 3) {
				if ($chk->num_rows > 0) {
					$save2 = $this->db->query("UPDATE complaints_action set status = 1 , remarks = '$remarks' where complaint_id = $id");
					if ($save2) {
						$this->db->query("UPDATE responders_team set availability = 1 where id = $responder_id ");
						return 1;
					}
				} else {
					return 2;
				}
			} else {
				$this->db->query("DELETE FROM complaints_action where complaint_id = $id ");
				if (isset($res)) {
					$this->db->query("UPDATE responders_team set availability = 1 where id = {$res['responder_id']} ");
				}
				return 1;
			}
		}
	}
}
