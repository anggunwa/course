<?php

interface Payable {
    public function calculatePayment();
}

class Freelancer implements Payable{
    private string $name;
    private float $ratePerHour;
    private int $hoursWorked;

    public function __construct($name, $ratePerHour, $hoursWorked) {
        $this->name = $name;
        $this->ratePerHour = $ratePerHour;
        $this->hoursWorked = $hoursWorked;
    }

    public function calculatePayment() {
        $total = $this->ratePerHour * $this->hoursWorked;
        return "Freelancer " . $this->name . " - Payment: $" . number_format($total, 2);
    }
}

class Contractor implements Payable {
    private string $name;
    private int $fixedFee;

    public function __construct($name, $fixedFee) {
        $this->name = $name;
        $this->fixedFee = $fixedFee;
    }

    public function calculatePayment() {
        return "Contractor " . $this->name . " - Payment: $" . number_format($this->fixedFee, 2);
    }
}

$freelancer = new Freelancer("John", 50, 40);
$contractor = new Contractor("Arthur", 4000);

echo $freelancer->calculatePayment();
echo "<br>";
echo $contractor->calculatePayment();

// tes

?>