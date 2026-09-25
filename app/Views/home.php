<?= view('layout/header', ['title' => 'Home']) ?>
<h1>POS Account Dashboard</h1>
<p>Customers: <?= esc($customerCount) ?></p>
<p>Users: <?= esc($userCount) ?></p>
<p>Select Customer Accounts or User Accounts above to view records from MySQL.</p>
<?= view('layout/footer') ?>
