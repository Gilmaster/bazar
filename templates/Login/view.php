<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Login $login
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Login'), ['action' => 'edit', $login->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Login'), ['action' => 'delete', $login->id], ['confirm' => __('Are you sure you want to delete # {0}?', $login->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Login'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Login'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="login view content">
            <h3><?= h($login->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($login->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Login') ?></th>
                    <td><?= h($login->login) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logon') ?></th>
                    <td><?= h($login->logon) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
