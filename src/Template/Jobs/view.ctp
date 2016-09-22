<nav class="large-3 medium-4 columns" id="actions-sidebar">
  <ul class="side-nav">
      <li class="heading"><?= __('Menu') ?></li>
      <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
  </ul>
  <ul class="side-nav">
      <li class="heading"><?= __('Actions') ?></li>
      <li>        <?= $this->Html->link(__('Edit Job'), ['controller' => 'Jobs', 'action' => 'edit', $job->id]) ?></li>
      <li><?= $this->Form->postLink(
              __('Delete Job'),
              ['action' => 'delete', $job->id],
              ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]
          )
      ?></li>
      <li><?= $this->Html->link(__('Back'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
  </ul>
</nav>
<div class="jobs view large-9 medium-8 columns content">
    <h3><?= h($job->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($job->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($job->description) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Tasks') ?></h4>
        <?php if (!empty($job->tasks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User') ?></th>
                <th scope="col"><?= __('Hora Inicio') ?></th>
                <th scope="col"><?= __('Hora Fin') ?></th>
                <th scope="col"><?= __('Fin') ?></th>
                <th scope="col"><?= __('Observacion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($job->tasks as $tasks): ?>
            <tr>
                <td><?= h($tasks->id) ?></td>
                <td><?= $this->cell('Izenak::userIzena', [$tasks->user_id]);?></td>
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
