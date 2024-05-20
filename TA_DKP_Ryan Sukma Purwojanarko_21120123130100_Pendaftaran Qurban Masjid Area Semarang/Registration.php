<?php
class Registration {
    private $name;
    private $phone;
    private $animal;
    private $mosque;
    private $address;

    
    public function __construct($name, $phone, $animal, $mosque, $address) {
        $this->setName($name);
        $this->setPhone($phone);
        $this->setAnimal($animal);
        $this->setMosque($mosque);
        $this->setAddress($address);
    }

   
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = htmlspecialchars($name);
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        if ($this->validatePhone($phone)) {
            $this->phone = htmlspecialchars($phone);
        } else {
            throw new Exception("Invalid phone number.");
        }
    }

    public function getAnimal() {
        return $this->animal;
    }

    public function setAnimal($animal) {
        $this->animal = htmlspecialchars($animal);
    }

    public function getMosque() {
        return $this->mosque;
    }

    public function setMosque($mosque) {
        $this->mosque = htmlspecialchars($mosque);
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = htmlspecialchars($address);
    }

    private function validatePhone($phone) {
        return is_numeric($phone) && strlen($phone) >= 10 && strlen($phone) <= 13;
    }

    public function displayDetails() {
        return "
            <p><strong>Nama:</strong> {$this->getName()}</p>
            <p><strong>Nomor HP:</strong> {$this->getPhone()}</p>
            <p><strong>Alamat:</strong> {$this->getAddress()}</p>
            <p><strong>Hewan Qurban:</strong> {$this->getAnimal()}</p>
            <p><strong>Tempat Penyembelihan:</strong> {$this->getMosque()}</p>
        ";
    }
}
?>
