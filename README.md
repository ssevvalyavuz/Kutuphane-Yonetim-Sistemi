# 📚 Kütüphane Yönetim Sistemi

Bu proje, bilgisayar mühendisliği stajım sırasında geliştirdiğim basit bir **Kütüphane Yönetim Sistemi**dir. Kullanıcılar bir form aracılığıyla kitap bilgilerini girebilir ve bu kitaplar MySQL veritabanına kaydedilir. PHP ve PDO kullanılarak güvenli veritabanı işlemleri gerçekleştirilmiştir.

## 🔧 Kullanılan Teknolojiler

- PHP (PDO ile veritabanı işlemleri)
- MySQL
- HTML5

## 🚀 Özellikler

- ✅ Kitap ekleme formu
- ✅ Kitap adı tekrar kontrolü (aynı kitap birden fazla kez eklenemez)
- ✅ PDO ile güvenli veritabanı bağlantısı
- ✅ Form doğrulama (boş alan kontrolü, yılın sayı olması)
- ✅ Hata ve durum mesajları

## 📁 Dosya Yapısı

kütüphane-sistemi/
│
├── kitap_giris.php # Form verilerini işleyip veritabanına kaydeder
└── README.md # Proje açıklaması


## 🧪 Kurulum ve Çalıştırma
1.MySQL'de bir veritabanı oluşturun.
''' sql 
CREATE DATABASE library;

2.Aşağıdaki tabloyu oluşturun.
CREATE TABLE books (
  id INT AUTO_INCREMENT PRIMARY KEY,
  kitap_adi VARCHAR(255),
  kitap_konu VARCHAR(255),
  kitap_ozet TEXT,
  kitap_yil INT
);

3.Projeyi bir PHP sunucusuna yükleyin (örneğin: XAMPP, MAMP, WAMP).

4.kitap_giris.php dosyasını tarayıcıda açarak formu test edin.

5.Giriş yaptıktan sonra başarıyla eklenen kitapları kitap.php sayfasında görüntüleyebilirsiniz.



