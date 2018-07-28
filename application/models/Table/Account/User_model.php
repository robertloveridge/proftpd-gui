<?php

Class User_model extends \SlaxWeb\BaseModel\Model
{
    function get_columns($options = null) {
        $fields = $this->db->list_fields('users');
        if ($options['exclude']){
            $fields = array_diff($fields, $options['exclude']);
        }
        return $fields;
    }

    public function expiring() {
      $this->orderBy(array(
          'userid' => 'ASC'
      ));
      return $this->users->getBy("expires BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 30 DAY)");
    }

    public function expiring_count() {
      return $this->expiring()->rowCount();
    }

}
