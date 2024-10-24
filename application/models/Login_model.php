<?php
class Login_model extends CI_Model
{

  function can_login($email, $password)
  {
    $this->db->where('email', $email);
    $query = $this->db->get('users');
    
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        if ($password == $this->encryption->decrypt($row->password)) {
          $this->session->set_userdata('id', $row->id);
          return '';
        } else {
          return 'Wrong Password';
        }
      }
    } else {
      return 'Wrong Email Address';
    }
  }


  public function get_user_by_id($id)
  {

    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('id', $id);

    $query = $this->db->get();


    if ($query->num_rows() == 1) {
      return $query->row();
    } else {
      return null;
    }
  }


  function change_password($id, $current, $new, $confirmation)
    {
      $this->db->where('id', $id);
      $query = $this->db->get('users');
      $user = $query->row();

      if ($current == $this->encryption->decrypt($user->password)) {
        if (strlen($new) > 0) {
          if ($new == $confirmation) {
            $this->db->where('id', $id);
            $this->db->update('users', array('password' => $this->encryption->encrypt($new)));
            return 'Password changed';
          } else {
            return 'Password confirmation does not match';
          }
        } else {
          return 'Password cannot be empty';
        }
      } else {
        return 'Wrong current password';
      }
    }
  }

