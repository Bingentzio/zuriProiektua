<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;


$cakeDescription = 'ZuriZuri';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('hasiera.css') ?>
    <?= $this->Html->css('bootstrap.min'); ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('bootstrap-datetimepicker'); ?>
    <?= $this->Html->script('jquery.js'); ?>
    <?= $this->Html->script('bootstrap-datetimepicker.min.js'); ?>

</head>
<body>
  <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="">ZuriZuri</a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
          <ul class="right">
            <li><a href="/Tasks">admin</a></li>
          </ul>
        </div>
 </nav>
 <?= $this->Flash->render() ?>
<div class="hasierakoOrria">
    <?= $this->Form->create($task) ?>
    <fieldset>
        <legend><?= __('Add Task') ?></legend>
            </fieldset>
<div class="biZutabe">
        <?php
            echo $this->Form->input('user_id', ['options' => $users,'class' => 'dropbtn']);
            echo $this->Form->input('job_id', ['options' => $jobs,'class' => 'dropbtn']);
        ?>


        <div class="input-append date form_datetime">
          <?php echo $this->Form->input('hora_inicio', ['type'=>'text']); ?>

            <span class="add-on"><i class="icon-th"></i></span>
        </div>

        <div class="input-append date form_datetime">
        <?php echo $this->Form->input('hora_fin', ['type'=>'text']); ?>
            <span class="add-on"><i class="icon-th"></i></span>
        </div>

</div>


<?php
        //    echo $this->Form->input('hora_inicio');
        //    echo $this->Form->input('hora_fin');
            echo $this->Form->input('observacion');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "dd/mm/yy, hh:ii",
        autoclose: true,
        todayBtn: true,
        weekStart:1,
        pickerPosition: "bottom-left"
    });
</script>
</body>
</html>
