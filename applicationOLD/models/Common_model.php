<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Common_model extends CI_Model {
    public function Add($table, $data) { 
        $this->db->insert($table, $data);
	// echo $this->db->last_query(); exit; 
        if ($this->db->affected_rows() > 0)	
            return $this->db->insert_id();
        return false;
    }
    public function Edit($table, $data, $field, $id) {
        if (!empty($field)):
            $this->db->where($field, $id);
        endif;
        $this->db->update($table, $data);
        if ($this->db->affected_rows() > 0)
            return true;
        return false;
    }
    public function AllEdit($table, $data) {  // Without key
        $this->db->update($table, $data);
        if ($this->db->affected_rows() > 0)
            return true;
        return false;
    }
    public function EditBatch($table, $data, $keyFiels) {
        $this->db->update_batch($table, $data, $keyFiels);
        if ($this->db->affected_rows() > 0)
            return true;
        return false;
    }
    public function Del($table, $field, $id) {
        $this->db->where($field, $id);
        $this->db->delete($table);
        if ($this->db->affected_rows() > 0)
            return true;
        return false;
    }
    public function AllRecord($table, $start, $end) {
        if ($start == $end || $start < 0 || $end < 0) {
            $query = $this->db->get($table);
        } else {
            $query = $this->db->get($table, $start, $end);
        }
        return ($query->num_rows() > 0) ? $query : false;
    }
    public function AllRecordWithWhere($table, $where) {
        $query = $this->db->get_where($table, $where);
	 	 //echo $this->db->last_query(); exit;  
        return ($query->num_rows() > 0) ? $query : false;
    }
    public function GetARecord($table, $inField, $inFieldId) {
        $this->db->where($inField, $inFieldId);
        return $this->db->get($table)->row();
    }
    public function AllRecordWithWhereSingle($table, $where) {
        $query = $this->db->get_where($table, $where);
	  //  echo $this->db->last_query();       exit;  
        return $query->row();
    }
    public function GetARecordWithWhereRow($table, $where) { 
        $query = $this->db->get_where($table, $where);
	// echo $this->db->last_query(); exit;
        return $query->row();
    }
    public function AllRecordWithFIND_IN($table, $inFieldId, $inField, $where ) {
        $this->db->where("FIND_IN_SET('$inFieldId',$inField) !=", 0);
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get($table)->result();
    }
    public function AllRecordQ($sql) {
        $query = $this->db->query($sql);
        return ($query->num_rows() > 0) ? $query : false;
    }
    public function execQuery($sql) {
        $query = $this->db->query($sql);
        return ($query->num_rows() > 0) ? $query : false;
    }
    public function execProcedure($sql) {
        $query = $this->db->query($sql);
        return ($query->conn_id->affected_rows > 0 ) ? true : false;
    }
    public function IsExists($table, $inField, $inFieldId) {
        $this->db->where($inField, $inFieldId);
        $query = $this->db->get($table);
        return ($query->num_rows() > 0) ? true : false;
    }
    public function IsExistsQ($sql) {
        $query = $this->db->query($sql);
        return ($query->num_rows() > 0) ? true : false;
    }
    public function GetAValue($table, $inField, $inFieldId, $outField) {
        if (is_array($inField)):
            $res = $this->db->where($inField)->get($table);
        else:
            $res = $this->db->where($inField, $inFieldId)->get($table);
        endif;
        if ($res->num_rows()) {
            return empty($outField) ? $res->row()->$inFieldId : $res->row()->$outField;
        }
        return FALSE;
    }
    public function NumOfRows($table, $where) {
        $query = $this->db->get_where($table, $where);
        return ($query->num_rows());
    }
    public function isURL($url) {
        $file_headers = @get_headers($url);
        return ($file_headers[0] == 'HTTP/1.1 404 not Found' || empty($file_headers) || !is_array($file_headers)) ? false : true;
    }
    public function getRecordOrderBy($table, $where, $order, $group = false) {
        $this->db->where($where);
        if ($group) {
            $this->db->group_by($group);
        }
        while ($key = current($order)) {
            $this->db->order_by(key($order), $key);
            next($order);
        }
        $query = $this->db->get($table);
        return ($query->num_rows() > 0) ? $query : false;
    }
    public function GetAllMenus($mid) {
        $this->db->select('m.*');
        $this->db->where("FIND_IN_SET($mid, m.master_menu)");
        $this->db->from('menus m');
//        $this->db->get();       echo $this->db->last_query();       exit;    
 return $this->db->get();		
    }
     public function DelRow($table, $field, $id) {
        $this->db->where($field, $id);
        $this->db->delete($table);
        if ($this->db->affected_rows() > 0)
            return true;
        return false;
    }
    public function getRecordWithWhereOrderby($table,$where,$orderField,$orderBy) {
        $this->db->select('*');
		$this->db->where($where);
		$this->db->from($table);
		$this->db->order_by($orderField.' '.$orderBy);
	  //$this->db->get();  echo $this->db->last_query();       exit;   
        return $this->db->get();
    }
  public function AllRecordWithWhereOrderby($table,$orderField,$orderBy,$whereField) {
        $this->db->select('*');
		if($whereField!=null)
		{
			$this->db->where('$whereField ',$whereField); 
		}
		$this->db->where('status',1); 
		$this->db->from($table);
		$this->db->order_by($orderField.' '.$orderBy);
		//  $this->db->get();  echo $this->db->last_query();       exit;   
        return $this->db->get();
    }
function multipleUpdate($table_name,$set,$where)
	{
		$this->db->where($where);
		$this->db->update($table_name,$set);
		/* echo $this->db->last_query(); exit;   */
		 if ($this->db->affected_rows() > 0)
            return true;
        return false;
	}
function customeEdit($userid)
{
	 $query = 'UPDATE `learner_lesson` SET `user_id` = '.$userid.' WHERE `session_id` = "'.session_id().'" AND `user_id` IS NULL'; 
	$res = $this->db->query($query);
		 if ($this->db->affected_rows() > 0)
            return true;
        return false;
	
}
function deleteWhere($table_name,$where)
	{	
		$this->db->where($where);
        $this->db->delete($table_name);
    	return true;

	}
function updateWhereData($table_name,$set,$where)
{
	$this->db->where($where);
  //$this->db->get();  echo $this->db->last_query();       exit;   
	$this->db->update($table_name,$set);
}
function AllRecordWithColumn($table_name,$column,$where)
	{	
		$this->db->select('GROUP_CONCAT(DISTINCT product_id) as productid');
        $this->db->from($table_name);
		$this->db->where($where);
        return  $query = $this->db->get()->row();
    		
	}
}