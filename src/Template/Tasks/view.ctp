<nav class="large-3 medium-4 columns" id="actions-sidebar">
  <ul class="side-nav">
      <li class="heading"><?= __('Menu') ?></li>
      <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
  </ul>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
          <li>      <?= $this->Html->link(__('Edit Task'), ['controller' => 'Tasks', 'action' => 'edit', $task->id]) ?></li>
        <li><?= $this->Form->postLink(__('Delete Task'), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?> </li>
        <li><?= $this->Html->link(__('Back'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
    </ul>

</nav>
<div class="tasks view large-9 medium-8 columns content">
    <h3><?= h($task->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $task->has('user') ? $this->Html->link($task->user->name, ['controller' => 'Users', 'action' => 'view', $task->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job') ?></th>
            <td><?= $task->has('job') ? $this->Html->link($task->job->name, ['controller' => 'Jobs', 'action' => 'view', $task->job->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observacion') ?></th>
            <td><?= h($task->observacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hora Inicio') ?></th>
            <td><?= h($task->hora_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hora Fin') ?></th>
            <td><?= h($task->hora_fin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fin') ?></th>
            <td><?= $task->fin ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
