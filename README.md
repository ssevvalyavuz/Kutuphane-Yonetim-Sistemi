# 📚 Kütüphane Yönetim Sistemi

Bu proje, bilgisayar mühendisliği stajım sırasında geliştirdiğim basit bir **Kütüphane Yönetim Sistemi**dir. Kullanıcılar bir form aracılığıyla kitap bilgilerini girebilir ve bu kitaplar MySQL veritabanına kaydedilir. PHP ve PDO kullanılarak güvenli veritabanı işlemleri gerçekleştirilmiştir.

## 🔧 Kullanılan Teknolojiler

- PHP (PDO ile veritabanı işlemleri)
- MySQL
- HTML5

## 🚀 Özellikler

| Özellik                    | Açıklama                                                              |
|----------------------------|-----------------------------------------------------------------------|
| ✅ Kitap Ekleme Formu      | Kullanıcılar kitap bilgilerini forma yazar                            |
| ✅ Aynı Kitap Kontrolü     | Aynı kitap daha önce eklendiyse sistem uyarı verir                    |
| ✅ Güvenli PDO Kullanımı   | SQL Injection’a karşı korumalı PDO altyapısı                          |
| ✅ Form Doğrulama          | Boş alanlar ve yıl değeri kontrol edilir                              |
| ✅ Hata ve Başarı Mesajları| Kullanıcıya sistemden doğru geri bildirim sağlanır                    |

## 🔧 Kurulum ve Çalıştırma

Aşağıdaki adımları izleyerek projeyi kendi bilgisayarınızda çalıştırabilirsiniz:

1. **Veritabanını Oluşturun**

   MySQL komut satırında veya phpMyAdmin üzerinden şu komutu çalıştırın:

   ```sql```
   CREATE DATABASE library;

2. **books Tablosunu Oluşturun**
   ```sql```
   CREATE TABLE books (
   
  id INT AUTO_INCREMENT PRIMARY KEY,
  
  kitap_adi VARCHAR(255),
  
  kitap_konu VARCHAR(255),
  
  kitap_ozet TEXT,
  
  kitap_yil INT
);
  ```sql```

3.**Dosyaları yerleştirin**
  C:/xampp/htdocs/kutuphane-sistemi/

4.**Veritabanı Bağlantı Ayarlarını Güncelleyin**
  ```php```
$host = "localhost";

$username = "root";

$password = "";

$database = "library";
  ```php```
  

## 📁 Dosya Yapısı

```text
kütüphane-sistemi/
├── kitap_giris.php   --> Kitap ekleme işlemlerini yapan sayfa
├── kitap.php         --> Kitapların listelendiği veya yönlendirildiği sayfa
└── README.md         --> Proje açıklamalarını içeren dosya


