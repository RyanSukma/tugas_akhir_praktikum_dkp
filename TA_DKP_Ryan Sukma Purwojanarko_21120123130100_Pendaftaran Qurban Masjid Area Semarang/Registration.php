<?php
class Registration {
    private $name;
    private $phone;
    private $animal;
    private $mosque;
    private $address;
    private $quantity; 

    public function __construct($name, $phone, $animal, $mosque, $address, $quantity) {
        $this->setName($name);
        $this->setPhone($phone);
        $this->setAnimal($animal);
        $this->setMosque($mosque);
        $this->setAddress($address);
        $this->setQuantity($quantity); 
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        if ($this->validateName($name)) {
            $this->name = htmlspecialchars($name);
        } else {
            throw new Exception("Nama hanya boleh mengandung huruf.");
        }
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        if ($this->validatePhone($phone)) {
            $this->phone = htmlspecialchars($phone);
        } else {
            throw new Exception("Nomor handphone tidak valid.");
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

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        if ($this->validateQuantity($quantity)) {
            $this->quantity = $quantity;
        } else {
            throw new Exception("Jumlah hewan qurban tidak valid.");
        }
    }

    private function validateName($name) {
        return ctype_alpha(str_replace(' ', '', $name));
    }

    private function validatePhone($phone) {
        return is_numeric($phone) && strlen($phone) >= 10 && strlen($phone) <= 13;
    }

    private function validateQuantity($quantity) {
        return is_numeric($quantity) && $quantity > 0;
    }

    public function displayDetails() {
        return "
            <p><strong>Nama:</strong> {$this->getName()}</p>
            <p><strong>Nomor HP:</strong> {$this->getPhone()}</p>
            <p><strong>Hewan Qurban:</strong> {$this->getAnimal()}</p>
            <p><strong>Jumlah Hewan Qurban:</strong> {$this->getQuantity()}</p>
            <p><strong>Masjid:</strong> {$this->getMosque()}</p>
            <p><strong>Alamat:</strong> {$this->getAddress()}</p>
        ";
    }
}
?>
