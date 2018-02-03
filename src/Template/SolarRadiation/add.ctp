<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SolarRadiation $solarRadiation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Solar Radiation'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="solarRadiation form large-9 medium-8 columns content">
    <?= $this->Form->create($solarRadiation) ?>
    <fieldset>
        <legend><?= __('Add Solar Radiation') ?></legend>
        <?php
            echo $this->Form->control('DateAndTime');
            echo $this->Form->control('Value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
