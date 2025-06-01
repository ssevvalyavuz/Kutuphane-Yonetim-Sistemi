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

## 📁 Dosya Yapısı

```text
kütüphane-sistemi/
├── kitap_giris.php   --> Kitap ekleme işlemlerini yapan sayfa
├── kitap.php         --> Kitapların listelendiği veya yönlendirildiği sayfa
└── README.md         --> Proje açıklamalarını içeren dosya
