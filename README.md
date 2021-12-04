Tutorial set up:
1. Setelah di fork, buka file .env, ganti username, password, sama nama database sesuai device masing-masing
2. Di VS Code, buka file vendor\myth\auth\src\Database\Migrations\2017-11-20-223112_create_auth_tables.php Klik ctrl + backtick(`)
3. jalankan perintah 'php spark migrate -all'
4. Jika terdapat tulisan error 'SQLite 3 Not Found' saat melakukan migrasi, maka data migrasi akan tetap masuk ke database.
6. Buka phpMyAdmin, seharusnya tabel sudah dibuat di database
7. Jalankan query berikut di phpMyAdmin

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Admin EBOOK, dapat melakukan CRUD pada buku, user, dan penulis'),
(2, 'user', 'User biasa, hanya dapat melihat dan men download buku');

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-penulis', 'dapat melakukan CRUD pada penulis\r\n'),
(2, 'manage-user', 'dapat melakukan CRUD pada user'),
(3, 'manage-profile', 'dapat melakukan edit profile'),
(4, 'manage-ebook', 'dapat melakukan CRUD pada ebook');

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 3);

8. Lakukan migrasi lagi pada file yang ada di app/Database/Migrations. Terdapat 4 file migrasi. Pilih file CreateEbook, buka terminal, kemudian lakukan migrasi dengan 'php spark migrate -all'
9. Jika terdapat error 'SQLite 3 Not Found' dan data migrasi tidak masuk di phpMyAdmin, buka file php.in, cari 'sqlite', kemudian hapus titik koma (;) pada baris 'extension=pdo_sqlite' dan extension=sqlite3'
10. Jika sudah, lakukan migrasi dengan 'php spark migrate -all', seharusnya sudah berhasil terinstall di database
11. Langkah selanjutnya yaitu melakukan seeding. Pertama buka file app/Database/Seeds. Kemudian buka terminal, dan jalankan perintah 'php spark db:seed EbookSeeder', 'php spark db:seed PenulisSeeder', dan 'php spark db:seed EbookHasSeeder'.
12. Website sudah bisa digunakan, nanti user yang register bakal langsung dapet role user, kalo mau diubah jadi admin, di phpMyAdmin update tabel auth_groups_users, update row user yang pingin dijadikan admin, ganti auth_group_id nya dari 1 menjadi 2.
