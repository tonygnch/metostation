<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EnergyProduction $energyProduction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Energy Production'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="energyProduction form large-9 medium-8 columns content">
    <?= $this->Form->create($energyProduction) ?>
    <fieldset>
        <legend><?= __('Add Energy Production') ?></legend>
        <?php
            echo $this->Form->control('DateAndTime');
            echo $this->Form->control('Value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
