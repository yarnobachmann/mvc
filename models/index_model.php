<?php

class Index_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function noteList()
    {
        return $this->db->select('SELECT * FROM note WHERE userid = :userid',
                array('userid' => $_SESSION['userid']));
    }

    public function noteSingleList($noteid)
    {
        return $this->db->select('SELECT * FROM note WHERE userid = :userid AND noteid = :noteid',
            array('userid' => $_SESSION['userid'], 'noteid' => $noteid));
    }

}
