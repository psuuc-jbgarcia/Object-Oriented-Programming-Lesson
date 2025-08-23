<?php
class Contact {
    public $id;
    public $name;
    public $phone;
    public $email;

    public function __construct($id, $name, $phone, $email) {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function toString() {
        return "{$this->id}|{$this->name}|{$this->phone}|{$this->email}";
    }

    public static function fromString($str) {
        $parts = explode("|", trim($str));
        if (count($parts) < 4) return null;
        return new Contact($parts[0], $parts[1], $parts[2], $parts[3]);
    }
}

class ContactManager {
    private $file = "contacts.txt";

    public function getAll() {
        $contacts = [];
        if (!file_exists($this->file)) return $contacts;
        $lines = file($this->file, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            $contact = Contact::fromString($line);
            if ($contact) $contacts[] = $contact;
        }
        return $contacts;
    }

    public function add($name, $phone, $email) {
        $id = uniqid();
        $contact = new Contact($id, $name, $phone, $email);
        file_put_contents($this->file, $contact->toString() . PHP_EOL, FILE_APPEND);
    }

    public function update($id, $name, $phone, $email) {
        $contacts = $this->getAll();
        $newData = "";
        foreach ($contacts as $c) {
            if ($c->id == $id) {
                $c->name = $name;
                $c->phone = $phone;
                $c->email = $email;
            }
            $newData .= $c->toString() . PHP_EOL;
        }
        file_put_contents($this->file, $newData);
    }

    public function delete($id) {
        $contacts = $this->getAll();
        $newData = "";
        foreach ($contacts as $c) {
            if ($c->id != $id) {
                $newData .= $c->toString() . PHP_EOL;
            }
        }
        file_put_contents($this->file, $newData);
    }
}

$manager = new ContactManager();

if (isset($_POST['add'])) {
    $manager->add($_POST['name'], $_POST['phone'], $_POST['email']);
}

if (isset($_POST['update'])) {
    $manager->update($_POST['id'], $_POST['name'], $_POST['phone'], $_POST['email']);
}

if (isset($_GET['delete'])) {
    $manager->delete($_GET['delete']);
}

$contacts = $manager->getAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact CRUD (Single File)</title>
</head>
<body>
    <h2>Add Contact</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit" name="add">Add</button>
    </form>

    <h2>Contact List</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>Name</th><th>Phone</th><th>Email</th><th>Actions</th>
        </tr>
        <?php foreach ($contacts as $c): ?>
        <tr>
            <form method="post">
                <td><input type="text" name="name" value="<?= $c->name ?>"></td>
                <td><input type="text" name="phone" value="<?= $c->phone ?>"></td>
                <td><input type="email" name="email" value="<?= $c->email ?>"></td>
                <td>
                    <input type="hidden" name="id" value="<?= $c->id ?>">
                    <button type="submit" name="update">Update</button>
                    <a href="?delete=<?= $c->id ?>" onclick="return confirm('Delete this contact?')">Delete</a>
                </td>
            </form>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
