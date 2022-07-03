Buka Terminal
Masuk ke DIR/Folder tempat project
Jalankan perintah: composer create-project laravel/laravel crud
buka di vscode.
Buka Terminal di menu view-> terminal (ctrl+`)
Jalankan perintah php artisan serve
buka phpmyadmin.
buat database dengan nama yang ditentukan terus tekan create
buka vscode.
setting env.
buka terminal terus ketik php artisan make::migration create_table_student
buka database terus klik student migration terus tulis sesuai di tentukan  (data yang akan masuk di database)
buka terminal lagi ketik php artisan migrate lepas itu cek phpmyadmin apa sudah masuk databasenya
creat controller
terminal ketik php artisan make::controller studentcontroller --resource isi kode
create model
terminal ketik php artisan make::model student
 buka resource klik kanan view buat folder "student"
 klik kanan student buat file yang bernama "create.blade.php" , "edit.blade.php" , "index.blade.php" . "layout.blade.php" , "show.blade.php" dan tulis kode yang sesuai
 buka terminal lagi ketik php artisan serve

 