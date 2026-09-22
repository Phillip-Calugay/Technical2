<?= view('templates/header', ['title' => $title]) ?>

<div class="page-heading">
    <h2>Customer Accounts</h2>
    <span class="record-count"><?= count($customers) ?> records</span>
</div>
<p class="page-intro">Customer records stored in the POS database.</p>

<div class="table-wrap"><table>
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($customers === []): ?>
            <tr><td colspan="3" class="empty-state">No customer records found.</td></tr>
        <?php endif; ?>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= esc($customer['full_name']) ?></td>
                <td><?= esc($customer['email']) ?></td>
                <td><?= esc($customer['phone']) ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table></div>

<?= view('templates/footer') ?>
