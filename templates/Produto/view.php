<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<div class="row bg-success p-2 text-dark bg-opacity-10">
    <div class="col">
        <div class="d-grid gap-2 col-6 mx-auto">
            <?= $this->Html->link(__('<< Produto(s)'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
            <br>
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Produto'), ['action' => 'edit', $produto->id], ['class' => 'btn btn-outline-warning']) ?>
            <?= $this->Form->postLink(__('Excluir Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id), 'class' => 'btn btn-outline-danger']) ?>
            <?= $this->Html->link(__('Cadastrar Produto'), ['action' => 'add'], ['class' => 'btn btn-outline-success']) ?>
        </div>
    </div>
    <div class="column-responsive column-80">
        <div class="produto view content">
            <!-- <h3><?= h($produto->id) ?></h3> -->
            <table>
                <tr>
                    <th><?= __('Produto') ?></th>
                    <td><?= h($produto->produto) ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($produto->status) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Cliente') ?></th>
                    <td><?= $produto->has('nome') ? $this->Html->link($produto->nome->nome, ['controller' => 'Nome', 'action' => 'view', $produto->nome->id]) : '' ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($produto->id) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Valor') ?></th>
                    <td><?= $this->Number->precision($produto->valor,2) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
