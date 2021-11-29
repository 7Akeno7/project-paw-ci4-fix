Tutorial set up:
1. Buka file .env, ganti username, password, sama nama database sesuai komputer klean
2. Di VS Code, buka file ci4login\vendor\myth\auth\src\Database\Migrations\2017-11-20-223112_create_auth_tables.php Klik ctrl + backtick(`)
3. jalankan perintah 'php spark migrate -all'
4. Buka phpMyAdmin, seharusnya tabel sudah dibuat di database kalian
5. Jalankan query berikut di phpMyAdmin

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Admin EBOOK, dapat melakukan CRUD pada buku, user, dan penulis'),
(2, 'user', 'User biasa, hanya dapat melihat dan men download buku');

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-penulis', 'dapat melakukan CRUD pada penulis\r\n'),
(2, 'manage-user', 'dapat melakukan CRUD pada user'),
(3, 'manage-profile', 'dapat melakukan edit profile'),
(4, 'manage-ebook', 'dapat melakukan CRUD pada ebook');

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-penulis', 'dapat melakukan CRUD pada penulis\r\n'),
(2, 'manage-user', 'dapat melakukan CRUD pada user'),
(3, 'manage-profile', 'dapat melakukan edit profile'),
(4, 'manage-ebook', 'dapat melakukan CRUD pada ebook');
