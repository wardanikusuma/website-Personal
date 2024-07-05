<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $date = htmlspecialchars($_POST['datemax']);
    $date_max = htmlspecialchars($_POST['datemax'])
    $books = isset($_POST['book']) ? $_POST['book'] : [];

    $file = fopen("orders.txt", "a");

    if ($file) {
        $order_data = "Name: $name\nEmail: $email\nPhone: $phone\nPeminjaman: $date\nPengembalian: $date_max\nBooks:\n";

        foreach ($books as $book) {
            $order_data .= "- $book\n";
        }

        $order_data .= "\n---\n";

        fwrite($file, $order_data);
        fclose($file);

        echo "Order saved successfully!";
    } else {
        echo "Error: Unable to open the file.";
    }
}
?>
