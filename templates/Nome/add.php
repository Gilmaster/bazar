<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nome $nome
 */
?>
<div class="row bg-success p-2 text-dark bg-opacity-10">
    <aside class="col">
        <div class="d-grid gap-2 col-6 mx-auto">
            <?= $this->Html->link(__('<< Nomes'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Cad. Produto'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="nome form content">
            <?= $this->Form->create($nome) ?>
            <fieldset>
                <legend><?= __('Adicioner Nome') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                ?>
            </fieldset>
            <br>
            <div class="d-grid gap-2 col-3 mx-auto">
                <?= $this->Form->button(__('Salvar'),['class' => 'btn btn-success me-md-2']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
