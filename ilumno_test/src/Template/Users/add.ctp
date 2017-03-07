<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Directorio'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Salir'), ['action' => 'logout']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Nuevo usuario') ?></legend>
        <?php
            echo $this->Form->input('_name', ['label' => 'Nombre', 'required' => true]);
            echo $this->Form->input('lastname', ['label' => 'Apellido', 'required' => true]);
            echo $this->Form->input('email', ['label' => 'Correo', 'required' => true, 'type' => 'email']);
            echo $this->Form->input('phone', ['label' => 'Teléfono', 'required' => true, 'class' => 'numeric']);
            echo $this->Form->input('mobile', ['label' => 'Celular', 'required' => true]);
            echo $this->Form->input('password', ['label' => 'Contraseña', 'required' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
<?=$this->Html->script('users')?>