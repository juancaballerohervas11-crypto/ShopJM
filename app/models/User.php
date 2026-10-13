<?php
class User {
    private $id;
    private $name;
    private $email;
    private $address;
    private $role;

    public function __construct($id, $name, $email = '', $address = '', $role = 'customer') {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->role = $role;
    }

    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getEmail() { return $this->email; }
    public function getAddress() { return $this->address; }
    public function getRole( ) { return $this->role; }
}
?>