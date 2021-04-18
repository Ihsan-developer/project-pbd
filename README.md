Demo Link Website : https://project-pbd.000webhostapp.com/



**How to Setup This Website**

**< -- Persiapan -->**

**1. Pahami apa itu framework CodeIgniter :**

https://idcloudhost.com/panduan/mengenal-apa-itu-framework-codeigniter/

https://youtu.be/Nt3YH68npW4

**2. Siapkan Tools yang dibutuhkan** : 

  a. Software :
  
  - XAMPP : https://www.apachefriends.org/download.html
       
  - Code Editor (I.D.E) : https://code.visualstudio.com/download
       
  b. Package Manager :  
      
  - Composer : https://getcomposer.org/

**3. Pastikan semua tools di atas sudah di download dan di install**

**4. Buka Aplikasi XAMPP dan nyalakan MySQL dan APACHE**

**5. Kemudian, untuk mengecek ketersediaan package manager silahkan**, 
 
 a. Buka terimal, dan ketikkan perintah : 
    
    composer   
    
  - Berfungsi untuk mengecek apakah composer sudah berhasil di install atau belum, Jika sudah akan muncul tampilan ini di terminal :
    
  ![image](https://user-images.githubusercontent.com/71642382/115120764-5a802800-9fd9-11eb-908c-efa6e6a76135.png)

    
**<-- Eksekusi File -->**

**6. Selanjutnya, download-lah file project-pbd via compress zip/rar dan taruh di folder htdocs**

**7. Setelah itu, silahkan buka terminal kalian dan arahkan directory ke folder htdocs dan jalankan perintah:**
  
      cd C://xampp/htdocs
      
      composer create-project codeigniter4/appstarter website_ci4
      
  - Tunggu hingga proses instalasi selesai, di sini kita menginstall default aplikasi codeigniter 4 yang disimpan di folder "website_ci4"
  
  - Jika sudah, silahkan delete seluruh file aplikasi default ci4 yang ada di folder "website_ci4", dan gantikan dengan hasil ekstraksi file zip/rar project-pbd yang sudah di download

**9. Jika sudah di ekstrak file zip/rar project-pbd dan ditaruh di folder "website_ci4", maka langkah selanjutnya adalah membuka file tersebut di localhost dengan menuliskan perintah**

    - php spark serve
    
  - CodeIgniter 4 berhasil dijalankan apabila muncul tulisan : 

![image](https://user-images.githubusercontent.com/71642382/115119667-bf388400-9fd3-11eb-9407-60da74a599c8.png)

  - Kemudian kunjungi http://localhost:8080
  
  **<-- Eksekusi Database -->**

  - Setelah kita berhasil menjalankan CodeIgniter 4 di localhost, langkah selanjutnya adalah, kita akan mengkonfigurasi databasenya

  **10. Silahkan buka "phpmyadmin" dengan membuka kembali xampp control panel dan klik tombol "admin" pada "Module" MySQL**
  
  **11. Kemudian, klik tombol "new" dan pada bagian top bar terdapat tombol "import". Klik tombol "import" tersebut**
  
  ![image](https://user-images.githubusercontent.com/71642382/115119962-24d94000-9fd5-11eb-9af6-4ea82210d5b5.png)

   **12. Pilih file yang bernama "ci4.sql" yang ada di folder website_ci4 yang sudah diekstrak dari zip/rar project-pbd dan klik "Go" agar database project-pbd dapat diimport**
   
   - Jika berhasil, berikut tampilan isi database ci4 :
   
   ![image](https://user-images.githubusercontent.com/71642382/115120056-9e712e00-9fd5-11eb-9eef-f17988b9e992.png)
   
   **13. Langkah berikutnya adalah dengan memigrasi database. Ketikkan perintah:**
      
       - php spark migrate 
       
   **14. Terakhir, buka Code Editor kalian dan pilih folder "website_ci4". Setelah itu, kalian bisa edit baik tampilan maupun isi database**
   
   ![image](https://user-images.githubusercontent.com/71642382/115120485-f4df6c00-9fd7-11eb-9ce3-623b51a1e7e8.png)
   
   ![image](https://user-images.githubusercontent.com/71642382/115150684-ac858400-a093-11eb-83a6-e08353382cd0.png)

![image](https://user-images.githubusercontent.com/71642382/115150696-b909dc80-a093-11eb-89a0-ab3a0fc88fc4.png)

   
   -  app/views/beranda.php (Lokasi file beranda)
   
   - Terima kasih
    
   **15. Agar lebih paham cara menggunakan framework CodeIgniter 4. Silahkan klik link di bawah ini :**
   
   https://www.petanikode.com/codeigniter4-install/
   
   https://youtu.be/uiOHCqiLzk0
   
   
   
