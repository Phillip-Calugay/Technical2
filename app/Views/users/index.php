<?= view('templates/header', ['title' => $title]) ?>

<div class="page-heading">
    <h2>User Accounts</h2>
    <span class="record-count"><?= count($users) ?> records</span>
</div>
<p class="page-intro">Authorized staff accounts stored in the POS database.</p>

<div class="table-wrap"><table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Full Name</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($users === []): ?>
            <tr><td colspan="2" class="empty-state">No user accounts found.</td></tr>
        <?php endif; ?>
        <?php foreach ($users as $user): ?>
            <tr>
                <td class="username"><?= esc($user['username']) ?></td>
                <td><?= esc($user['full_name']) ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table></div>

<?= view('templates/footer') ?>
