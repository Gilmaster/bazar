<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 * @var string[]|\Cake\Collection\CollectionInterface $nome
 */
?>
<div class="row bg-success p-2 text-dark bg-opacity-10">
    <aside class="col">
        <div class="d-grid gap-2 col-6 mx-auto">
        <?= $this->Html->link(__('Lista Produto'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $produto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id), 'class' => 'btn btn-outline-danger']
            ) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="produto form content">
            <?= $this->Form->create($produto) ?>
            <fieldset>
                <legend><?= __('Edit Produto') ?></legend>
                <?php
                    echo $this->Form->control('produto');
                    echo $this->Form->control('valor');
                    // echo $this->Form->control('nome_id', ['options' => $nome]);
                ?>
                <label for="nome">Nome</label>
                <select class="form-select" aria-label="Default select example">
                    <?php foreach ($nomeEdit as $key => $value): ?>
                        <option value="<?php echo $value['id'] ?>"><?php echo $value['nome'] ?></option>
                    <?php endforeach; ?>
                </select>
            </fieldset>
            <br>
            <div class="d-grid gap-2 col-3 mx-auto">
                <?= $this->Form->button(__('Salvar Alteraçõe(s)'),['class' => 'btn btn-success me-md-2']) ?>
            </div>
            <?= $this->Form->end()?>
        </div>
    </div>
</div>
