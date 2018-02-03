<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EnergyProduction $energyProduction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $energyProduction->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $energyProduction->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Energy Production'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="energyProduction form large-9 medium-8 columns content">
    <?= $this->Form->create($energyProduction) ?>
    <fieldset>
        <legend><?= __('Edit Energy Production') ?></legend>
        <?php
            echo $this->Form->control('DateAndTime');
            echo $this->Form->control('Value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
