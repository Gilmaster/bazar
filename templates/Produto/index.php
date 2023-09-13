<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Produto> $produto
 */
?>
<div class="container-flex">
    <div class="row justify-content-between">
        <div class="col-4">
            <h3><?= __('Produto(s)') ?></h3>
        </div>
        <div class="col-4">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <?= $this->Html->link(__('Cadastrar Novo(s) Produto(s)'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    <div class="table-responsive-sm">
        <table class="table table-striped-columns table-bordered">
            <thead class="table-light">
                <tr>
                    <th scope="col" colspan="2"><?= $this->Paginator->sort('produto') ?></th>
                    <th scope="col" colspan="2"><?= $this->Paginator->sort('valor') ?></th>
                    <th scope="col" colspan="1" class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produto as $produto): ?>
                <tr>
                    <td class="col-4" colspan="2"><?= h($produto->produto) ?></td>
                    <td class="col-4" colspan="2">R$ <?= $this->Number->precision($produto->valor,2) ?></td>
                    <td class="col" colspan="1" class="actions">
                        <?= $this->Html->link(__('Visualisar'), ['action' => 'view', $produto->id], ['class' => 'btn btn-info']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $produto->id], ['class' => 'btn btn-warning']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $produto->id],['class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?>
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
