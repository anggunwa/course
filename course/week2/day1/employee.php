<?php

class Employee {
    public $name;
    protected $basePay;
    public $type;

    // Static property to count all Employee instances
    private static $employeeCount = 0;

    public function __construct ($name, $basePay, $type) {
        $this->name = $name;
        $this->basePay = $basePay;
        $this->type = $type;
        self::$employeeCount++;
    }

    public static function getEmployeeCount () {
        return self::$employeeCount;
    }

    public function getDetails() {
        return "Name: {$this->name} | Type: {$this->type}";
    }
}

    class FullTimeEmployee extends Employee {
        private array $benefits;

        public function __construct ($name, $basePay, array $benefits) {
            parent::__construct ($name, $basePay, "Full-Time");
            $this->benefits = $benefits;
        }

        public function getDetails() {
            return "Name:  {$this->name} | Type: {$this->type} | List of benefit: " . implode(", ", $this->benefits);
        }

        public function calculateSalary() {
            return $this->basePay + 500;
        }
    }

    class PartTimeEmployee extends Employee {
        private $hoursWorked;

        public function __construct ($name, $basePay, $hoursWorked) {
            parent::__construct ($name, $basePay, "Part-Time");
            $this->hoursWorked = $hoursWorked;
        }

        public function getDetails() {
            return "Name: {$this->name} | Type: {$this->type}. Hours worked: {$this->hoursWorked}";
        }

        public function calculateSalary() {
            return $this->basePay * $this->hoursWorked;
        }
    }

$emp1 = new FulltimeEmployee("Alice", 3000, ["Health Insurance", "Retirement"]);
echo $emp1->getDetails();
echo "<br>Salary: $" . $emp1->calculateSalary();

$emp2 = new PartTimeEmployee("Bob", 20, 60);
echo "<br><br>" . $emp2->getDetails();
echo "<br>Salary: $" . $emp2->calculateSalary();

// Show total number of employees
echo "<br><br>Total employees created: " . Employee::getEmployeeCount();

?>