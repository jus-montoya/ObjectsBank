<?php
include 'classes/Account.php';
include 'classes/Customer.php';
include 'includes/header.php';
include 'includes/footer.php';

$accounts = [
    new Account("1095678", "Checking", -20),
    new Account("1095679", "Business Account", 89000),
    new Account("1095680", "Student Account", 10000),
    new Account("1095681", "Health Savings", 25000)
];

$customer = new Customer("Justine", "Montoya", $accounts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MonBank</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">       
        <h1><?php echo $customer->getFullName(); ?>'s Account Summary</h1>
        <table>
            <tr>
                <th>Account Number</th>
                <th>Account Type</th>
                <th>Balance (₱)</th>
            </tr>
            <?php foreach ($customer->accounts as $account): ?>
                <tr>
                    <td><?php echo $account->accountNumber; ?></td>
                    <td><?php echo $account->accountType; ?></td>
                    <?php if ($account->balance >= 0): ?>
                        <td class="credit">₱<?php echo number_format($account->balance, 2); ?></td>
                    <?php else: ?>
                        <td class="overdrawn">₱<?php echo number_format($account->balance, 2); ?></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>