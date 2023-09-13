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
            <br>
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $nome->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $nome->id), 'class' => 'btn btn-outline-danger']
            ) ?>
        </div>
    </div>
    <div class="column-responsive column-80">
        <div class="nome form content">
            <?= $this->Form->create($nome) ?>
            <fieldset>
                <legend><?= __('Editar Nome') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                ?>
            </fieldset><br>
            <div class="d-grid gap-2 col-3 mx-auto">
                <?= $this->Form->button(__('Salvar Alteraçõe(s)'),['class' => 'btn btn-success me-md-2']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
