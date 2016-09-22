<nav class="large-3 medium-4 columns" id="actions-sidebar">

      <ul class="side-nav">
          <li class="heading"><?= __('Menu') ?></li>
          <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
      </ul>
      <ul class="side-nav">
          <li class="heading"><?= __('Actions') ?></li>
          <li><?= $this->Form->postLink(
                  __('Delete User'),
                  ['action' => 'delete', $user->id],
                  ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
              )
          ?></li>
        <li><?= $this->Html->link(__('Back'), ['controller' => 'Users', 'action' => 'index']) ?></li>
      </ul>


</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('surname');
            echo $this->Form->input('password');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
