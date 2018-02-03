<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SavesSol $savesSol
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Saves Sol'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="savesSol form large-9 medium-8 columns content">
    <?= $this->Form->create($savesSol) ?>
    <fieldset>
        <legend><?= __('Add Saves Sol') ?></legend>
        <?php
            echo $this->Form->control('DateAndTime', ['empty' => true]);
            echo $this->Form->control('kg_co2');
            echo $this->Form->control('kg_so2');
            echo $this->Form->control('kg_nox');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
