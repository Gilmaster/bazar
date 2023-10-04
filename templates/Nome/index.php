<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Nome> $nome
 */
?>
<div class="container-flex">
    <div class="btn-group">
        <a href="http://localhost/bazar/produto" class="btn btn-info active" aria-current="page">Listas de Produtos</a>
    </div><br><br>
    <div class="row justify-content-between">
        <div class="col-4">
            <h3><?= __('Lista de cadastros') ?></h3>
        </div>
        <div class="col-4">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <?= $this->Html->link(__('Novo Cadastro'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
            </div>
            <br>
        </div>
    </div>
    <div class="table-responsive-xxl">
        <table class="table table-striped-columns table-bordered">
            <thead class="table-light">
                <tr>
                    <th scope="col" colspan="2"><?= $this->Paginator->sort('Nomes') ?></th>
                    <th scope="col" colspan="1" class="actions" ><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($nome as $nome): ?>
                <tr>
                    <td class="col-4" colspan="2"><?= h($nome->nome) ?></td>
                    <td class="col-2" colspan="1" class="actions align-bottom">
                        <?= $this->Html->link(__('Visualisar'), ['action' => 'view', $nome->id], ['class' => 'btn btn-info']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $nome->id], ['class' => 'btn btn-warning']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $nome->id], ['class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $nome->id)]) ?>
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
    </div>
</div>
