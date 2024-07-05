// Data buku yang tersedia
const books = [
    { id: 1, title: "Belajar Pemrograman JavaScript", author: "John Doe", price: 75000 },
    { id: 2, title: "Pemrograman Web dengan PHP", author: "Jane Smith", price: 85000 },
    { id: 3, title: "Mastering Python", author: "Alice Johnson", price: 95000 }
];

// Menampilkan data buku yang tersedia di halaman books.html
document.addEventListener("DOMContentLoaded", function () {
    const booksList = document.getElementById("books-list");

    books.forEach(book => {
        const bookItem = document.createElement("div");
        bookItem.className = "book-item";

        bookItem.innerHTML = `
        <h3>${book.title}</h3>
        <p>Penulis: ${book.author}</p>
        <p>Harga: Rp${book.price}</p>
      `;

        booksList.appendChild(bookItem);
    });
});
