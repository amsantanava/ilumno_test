<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo usuario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Salir'), ['action' => 'logout']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Directorio') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id', 'ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('_name', 'Nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastname', 'Apellido') ?></th>
                <th scope="col" colspan="2"><?= $this->Paginator->sort('email', 'Correo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone', 'Teléfono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile', 'Celular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', 'Fecha') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->_name) ?></td>
                <td><?= h($user->lastname) ?></td>
                <td colspan="2"><?= h($user->email) ?></td>
                <td><?= h($user->phone) ?></td>
                <td><?= h($user->mobile) ?></td>
                <td><?= h($user->created->format('Y-m-d H:i:s')) ?></td>
                <td class="actions">
                    <ul>
                        <li><?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id]) ?></li>
                        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?></li>
                        <li><?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], ['confirm' => __('¿Está seguro de eliminar el usuario # {0}?', $user->id)]) ?></li>
                    </ul>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
