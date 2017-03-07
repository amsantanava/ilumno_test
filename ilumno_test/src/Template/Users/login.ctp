<?=$this->Html->css('style.css')?>
<div class="login">
    <h1>Login</h1>
    <?= $this->Form->create()?>
    <form method="post">
        <?=$this->Form->input('email', ['escape' => false, 'label' => false, 'required' => true, 'placeholder' => 'Correo...'])?>
        <?=$this->Form->input('password', ['escape' => false, 'label' => false, 'required' => true, 'placeholder' => 'Contraseña...'])?>
        <?=$this->Form->submit('Ingresar', ['escape' => false, 'class' => 'btn btn-primary btn-block btn-large'])?>
    </form>
    <?=$this->Form->end()?>
</div>