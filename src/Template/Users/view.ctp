<nav class="large-3 medium-4 columns" id="actions-sidebar">
  <ul class="side-nav">
      <li class="heading"><?= __('Menu') ?></li>
      <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
  </ul>
  <ul class="side-nav">
      <li class="heading"><?= __('Actions') ?></li>
              <li><?= $this->Html->link(__('Edit User'), ['controller' => 'Users', 'action' => 'edit', $user->id]) ?></li>
      <li><?= $this->Form->postLink(
              __('Delete User'),
              ['action' => 'delete', $user->id],
              ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
          )
      ?></li>
    <li><?= $this->Html->link(__('Back'), ['controller' => 'Users', 'action' => 'index']) ?></li>
  </ul>

</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surname') ?></th>
            <td><?= h($user->surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Tasks') ?></h4>
        <?php if (!empty($user->tasks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Job') ?></th>
                <th scope="col"><?= __('Hora Inicio') ?></th>
                <th scope="col"><?= __('Hora Fin') ?></th>
                <th scope="col"><?= __('Fin') ?></th>
                <th scope="col"><?= __('Observacion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->tasks as $tasks): ?>
            <tr>
                <td><?= h($tasks->id) ?></td>
                <td><?= $this->cell('Izenak::jobIzena', [$tasks->job_id]); ?></td>
                <td><?= h($tasks->hora_inicio) ?></td>
                <td><?= h($tasks->hora_fin) ?></td>
                <td><?= h($tasks->fin) ?></td>
                <td><?= h($tasks->observacion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tasks', 'action' => 'view', $tasks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tasks', 'action' => 'edit', $tasks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tasks', 'action' => 'delete', $tasks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tasks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
