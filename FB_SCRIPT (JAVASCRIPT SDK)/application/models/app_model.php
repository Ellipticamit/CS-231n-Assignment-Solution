<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class App_model extends CI_Model {
    public function __construct() {        
		parent::__construct();    
	}	

	public function update_sample($id, $data) {		
		$this->db->where('gid', $id);	
		$this->db->update('game', $data); 	
		return ($this->db->affected_rows() != 1) ? false : true;	
	}
	public function update_game($id, $data) {
		$this->db->where('gid', $id);
		$this->db->update('game', $data); 
		return ($this->db->affected_rows() != 1) ? false : true;
	}
	public function delete_game($id) {
		$this->db->where('gid', $id);
		$this->db->delete('game');
		return ($this->db->affected_rows() != 1) ? false : true;
	}
	
	public function get_game() {
		$this->db->order_by('gid', 'desc');
		$query = $this->db->get("game");
		return $query->result();
	}

	public function get_particular_game($id) {		
		$this->db->where('gid', $id);
		$query = $this->db->get("game");
		return $query->result();
	}

	public function app_scroll_data($start, $limit){
		$sql = "select * from game where action = 'enable' order by gid desc limit $start,$limit";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function add_game($data) {
		$this->db->insert('game', $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function enable_game($enable, $id) {
		if($enable == 'disabled') {
			$data = array('action' => 'enable');
			$this->db->where('gid', $id);
			$this->db->update('game', $data);
		} elseif($enable == 'enable') {
			$data = array('action' => 'disabled');
			$this->db->where('gid', $id);
			$this->db->update('game', $data);
		} 
	}

	public function add_small_png($data) {
		$this->db->insert('small_img', $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function get_small($id) {
		$this->db->where('appid', $id);
		$query = $this->db->get('small_img');
		return $query->result();
	}

	public function get_gender_small($id, $gender) {
		$condition = "appid = ".$id." AND img_type = '".$gender."'";
		$this->db->where($condition);
		$query = $this->db->get('small_img');
		return $query->result();
	}

	public function update_small_pic($id, $data) {
		$this->db->where('siid', $id);	
		$this->db->update('small_img', $data);
		//echo $this->db->last_query();
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function get_edit_small($id) {
		$this->db->where('siid', $id);
		$query = $this->db->get('small_img');
		return $query->result();
	}
	
	public function add_png($data) {
		$this->db->insert('app_img', $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}
	
	public function delete_png($id) {
		$this->db->where('imgid', $id);		
		$this->db->delete('app_img');	
		return ($this->db->affected_rows() != 1) ? false : true;	
	}	

	public function get_png($id) {
		$this->db->where('appid', $id);
		$query = $this->db->get('app_img');
		return $query->result();
	}
	
	public function add_user_pic($data) {
		$this->db->insert('fb_users', $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}
	
	public function get_user_pic($id) {	
		$this->db->where('appid', $id);
		$query = $this->db->get('fb_users');
		return $query->result();
	}	

	public function edit_user_pic($id) {		
		$this->db->where('fuid', $id);		
		$query = $this->db->get('fb_users');	
		return $query->result();	
	}	

	public function update_user_pic($id, $data) {	
		$this->db->where('fuid', $id);	
		$this->db->update('fb_users', $data);
		return ($this->db->affected_rows() != 1) ? false : true;	
	}

	public function delete_user_pic($id) {		
		$this->db->where('fuid', $id);		
		$this->db->delete('fb_users');	
		return ($this->db->affected_rows() != 1) ? false : true;	
	}

	public function add_friend_pic($data){
		$this->db->insert('friend_img', $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function get_friend_pic($id) {	
		$this->db->where('appid', $id);
		$query = $this->db->get('friend_img');
		return $query->result();
	}	

	public function edit_friend_pic($id) {		
		$this->db->where('fid', $id);		
		$query = $this->db->get('friend_img');	
		return $query->result();	
	}	

	public function update_friend_pic($id, $data) {	
		$this->db->where('fid', $id);	
		$this->db->update('friend_img', $data);
		return ($this->db->affected_rows() != 1) ? false : true;	
	}

	public function delete_friend_pic($id) {		
		$this->db->where('fid', $id);		
		$this->db->delete('friend_img');	
		return ($this->db->affected_rows() != 1) ? false : true;	
	}
	
	public function add_text($data) {
		$this->db->insert('app_text', $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}
	
	public function get_text($id) {
		$this->db->where('appid', $id);
		$query = $this->db->get('app_text');
		return $query->result();
	}

	public function get_edit_text($id) {
		$this->db->where('tid', $id);
		$query = $this->db->get('app_text');
		return $query->result();
	}
	
	public function update_text($id, $data) {
		$this->db->where('tid', $id);
		$this->db->update('app_text', $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function delete_text($id) {
		$this->db->where('tid', $id);
		$this->db->delete('app_text');
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	/* Random text destails */

	public function get_gender_random_text($id, $gender) {
		$condition = "appid = '".$id."' AND options = '".$gender."'";
		$this->db->where($condition);
		$query = $this->db->get('random_texts');
		return $query->result();
	}

	public function add_random_text($data) {
		$this->db->insert('random_texts', $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function get_random_text($id) {
		$this->db->where('appid', $id);
		$query = $this->db->get('random_texts');
		return $query->result();
	}

	public function get_edit_random_text($id) {
		$this->db->where('rtid', $id);
		$query = $this->db->get('random_texts');
		return $query->result();
	}
	
	public function update_random_text($id, $data) {
		$this->db->where('rtid', $id);
		$this->db->update('random_texts', $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function delete_random_text($id) {
		$this->db->where('rtid', $id);
		$this->db->delete('random_texts');
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	/* friend name details */

	public function add_friend_text($data) {
		$this->db->insert('name_text', $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function get_friend_text($id) {
		$this->db->where('appid', $id);
		$query = $this->db->get('name_text');
		return $query->result();
	}

	public function get_edit_friend_text($id) {
		$this->db->where('nid', $id);
		$query = $this->db->get('name_text');
		return $query->result();
	}

	public function update_friend_text($id, $data) {
		$this->db->where('nid', $id);
		$this->db->update('name_text', $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function delete_friend_text($id) {
		$this->db->where('nid', $id);
		$this->db->delete('name_text');
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	/* get background image */

	public function get_background_image($id) {
		$this->db->where('appid', $id);
		$query = $this->db->get('app_img');
		return $query->result();
	}

	public function get_male_female_background_image($id, $gender) {
		$condition = "appid = '".$id."' AND img_type = '".$gender."'";
		$this->db->where($condition);
		$query = $this->db->get('app_img');
		return $query->result();
	}

	/* ads code */
	
	public function get_ads() {
		$query = $this->db->get('ads');
		return $query->result();
	}
	
	public function update_ads($data) {
		$this->db->where('adid', '1');
		$this->db->update('ads', $data); 
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	/* users pic details */

	public function add_user_photo($data){
		$this->db->insert('user_img', $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function get_user_photo($id) {	
		$this->db->where('appid', $id);
		$query = $this->db->get('user_img');
		return $query->result();
	}	

	public function edit_user_photo($id) {		
		$this->db->where('usid', $id);		
		$query = $this->db->get('user_img');	
		return $query->result();	
	}	

	public function update_user_photo($id, $data) {	
		$this->db->where('usid', $id);	
		$this->db->update('user_img', $data);
		return ($this->db->affected_rows() != 1) ? false : true;	
	}

	public function delete_user_photo($id) {		
		$this->db->where('usid', $id);		
		$this->db->delete('user_img');	
		return ($this->db->affected_rows() != 1) ? false : true;	
	}

	/*end user pic details */
	/* Save User Information */

	public function save_users_info($fbid, $insert_user_data) {
		$query = $this->db->get_where('users_info', array( 'fbid' => $fbid));
        $count = $query->num_rows();
        if($count === 0) {
        	$this->db->insert('users_info', $insert_user_data);
        }
	}
	
}