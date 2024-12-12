<?php
declare(strict_types = 1);

class Account {
    public    int    $number;
    public    string $type;
    protected float  $balance;
    private string $owner;

    public function __construct(int $number, string $type, float $balance = 0.00, string $owner)
    {
        $this->number  = $number;
        $this->type    = $type;
        $this->balance = $balance;
        $this->owner = $owner;
    }

    public function deposit(float $amount): float
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getOwner(){
        return $this->owner;
    }

    public function setOwner(string $owner){
        $this->owner = $owner;
    }
    
}

$account = new Account(20148896, 'Savings', 80.00, "Ivy");
$account2 = new Account(12345678, 'Savings', 90.00, "Raul");
?>
<?php include 'includes/header.php'; ?>
<h2><?= $account->type ?> Account</h2>
<p>Previous balance: $<?= $account->getBalance() ?></p>
<p>New balance: $<?= $account->deposit(35.00) ?></p>
<p>Name: <?= $account->getOwner() ?></p>
<?php include 'includes/footer.php'; ?>