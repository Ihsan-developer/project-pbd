**How to Setup This Website**

**< -- Persiapan -->**

**1. Pahami apa itu framework CodeIgniter :**

https://idcloudhost.com/panduan/mengenal-apa-itu-framework-codeigniter/

**2. Siapkan Tools yang dibutuhkan** : 

  a. Software :
  
  - XAMPP : 
      
  https://www.apachefriends.org/download.html
       
  - Code Editor (I.D.E) :

  https://code.visualstudio.com/download
       
  b. Package Manager :  
      
  - Composer : https://getcomposer.org/

**3. Pastikan semua tools di atas sudah di download dan di install**

**4. Buka Aplikasi XAMPP dan nyalakan MySQL dan APACHE**

**5. Kemudian, untuk mengecek ketersediaan package manager silahkan**, 
 
 a. Buka terimal, dan ketikkan perintah : 
    
    composer   
    
    # Berfungsi untuk mengecek apakah composer sudah berhasil di install atau belum
    

**<-- Eksekusi File -->**

**6. Selanjutnya, download-lah file project-pbd via compress zip/rar dan taruh di folder htdocs**

**7. Setelah itu, silahkan buka terminal kalian dan arahkan directory ke folder htdocs dan jalankan perintah:**
  
      cd C://xampp/htdocs
      
      composer create-project codeigniter4/appstarter website_ci4
      
  # Tunggu hingga proses instalasi selesai, di sini kita menginstall default aplikasi codeigniter 4 yang disimpan di folder "website_ci4"
  
  # Jika sudah, silahkan delete seluruh file aplikasi default ci4 yang ada di folder "website_ci4", dan ganti dengan hasil ekstraksi file zip/rar project-pbd yang sudah di download

**9. Jika sudah di ekstrak file zip/rar project-pbd dan ditaruh di folder "website_ci4", maka langkah selanjutnya adalah membuka file tersebut di localhost dengan menuliskan perintah**

    - php spark serve
  

