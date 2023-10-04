<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 * @var \Cake\Collection\CollectionInterface|string[] $nome
 */
?>
<div class="row bg-success p-2 text-dark bg-opacity-10">
    <aside class="col">
        <div class="d-grid gap-2 col-6 mx-auto">
            <?= $this->Html->link(__('<< Produto'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="produto form content">
            <?= $this->Form->create($produto) ?>
            <fieldset>
                <legend><?= __('Add Produto') ?></legend>
                <?php
                    echo $this->Form->control('produto');
                    echo $this->Form->control('valor');
                    echo $this->Form->control('status', ['value' => 'DISPONIVEL']);
                    // echo $this->Form->control('nome_id', ['options' => $nome]);
                ?>
                <div class="input select required">
                <label for="nome-id">Nome</label>
                    <select id="nome-id" name='nome_id' class="form-select">
                        <option selected>Selecione um Nome</option>
                        <?php foreach ($nomeAdd as $key => $value): ?>
                            <option value="<?php echo $value['id'] ?>"><?php echo $value['nome'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </fieldset>
            <br>
            <div class="d-grid gap-2 col-3 mx-auto">
                <?= $this->Form->button(__('Salvar'),['class' => 'btn btn-success me-md-2']) ?>
            </div>
            <?= $this->Form->end()?>
        </div>
    </div>
</div>
