<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nome $nome
 */
?>
<div class="row bg-success p-2 text-dark bg-opacity-10">
    <div class="col">
        <div class="d-grid gap-2 col-6 mx-auto">
            <?= $this->Html->link(__('<< Cadastros'), ['action' => 'index'],['class' => 'btn btn-primary']) ?>
            <br><br>
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Cadastro'), ['action' => 'edit', $nome->id],['class' => 'btn btn-outline-warning']) ?>
            <?= $this->Form->postLink(__('Excluir Cadastro'), ['action' => 'delete', $nome->id], ['confirm' => __('Are you sure you want to delete # {0}?', $nome->id),'class' => 'btn btn-outline-danger']) ?>
            <?= $this->Html->link(__('Novo Cadastro'), ['action' => 'add'],['class' => 'btn btn-outline-success']) ?>
        </div>
    </div>
    <div class="column-responsive column-80">
        <div class="nome view content">
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($nome->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Códgo do Cadastro') ?></th>
                    <td><?= $this->Number->format($nome->id) ?></td>
                </tr>
                <tr>
                    <th><?=__('Soma Total do(s) Produto(s)') ?></th>
                    <td>R$ <?= $this->Number->precision($somaValor,2); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Lista(s) de Produto(s)') ?></h4>
                <?php if (!empty($nome->produto)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Produto') ?></th>
                            <th><?= __('Valor') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Código da Lista') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                        <?php foreach ($nome->produto as $produto) : ?>
                        <tr>
                            <td><?= h($produto->produto) ?></td>
                            <td><?= h($produto->valor) ?></td>
                            <td><?= h($produto->status) ?></td>
                            <td><?= h($produto->nome_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Produto', 'action' => 'view', $produto->id],['class' => 'btn btn-info']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Produto', 'action' => 'edit', $produto->id],['class' => 'btn btn-warning']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Produto', 'action' => 'delete', $produto->id],['class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <script>
                function somarValores(){
                    var s1 = document.getElementById("preco").value;
                    var s2 = 0;
                    for (let i = 0; i < s1.length; i++) {
                        s2 += s1[i]
                    }
                    return s2
                }
                console.log(somarValores)
            </script>
        </div>
    </div>
</div>
