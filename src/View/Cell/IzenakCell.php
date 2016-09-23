<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Izenak cell
 */
class IzenakCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
    }

    public function userIzena($id = null){
        $this->loadModel('Users');
        $user = $this->Users->get($id);
        print $user->name;

    }

    public function jobIzena($id = null){
        $this->loadModel('Jobs');
        $job = $this->Jobs->get($id);
        print $job->name;

    }
}
