<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Login> $login
 */
?>
<div class="login index content">
    <!-- <?= $this->Html->link(__('New Login'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Login') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('login') ?></th>
                    <th><?= $this->Paginator->sort('logon') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($login as $login): ?>
                <tr>
                    <td><?= $this->Number->format($login->id) ?></td>
                    <td><?= h($login->login) ?></td>
                    <td><?= h($login->logon) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $login->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $login->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $login->id], ['confirm' => __('Are you sure you want to delete # {0}?', $login->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div> -->
    <header>
        <div class="container text-center">
            <h1 class="display-1">
                Bem Vindo Mini Bazar 🍓
            </h1>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <br><br><br><br><br>
                <div class="row">
                    <div class="btn-group">
                        <a href="http://localhost/bazar/nome" class="btn btn-primary active" aria-current="page">Lista de Nomes</a>
                        <a href="http://localhost/bazar/produto" class="btn btn-success active" aria-current="page">Listas de Produtos</a>
                    </div>
                </div>
        </div>
</div>
