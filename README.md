# PHP Gelişmiş MVC Yapısı / Advanced PHP MVC Structure

Bu proje, tamamen sıfırdan geliştirilmiş, framework bağımsız bir PHP MVC mimarisidir. Composer veya başka bir harici kütüphane kullanılmadan, sade ve anlaşılır bir yapıyla inşa edilmiştir. Eğitim, portföy veya küçük çaplı projeler için idealdir.

This project is a fully handcrafted, framework-independent PHP MVC architecture. Built without Composer or any external libraries, it's designed to be simple, clean, and ideal for learning, portfolios, or small-scale projects.

---

## 📁 Dizin Yapısı / Folder Structure

```
project/
├── app/
│   ├── Controllers/
│   ├── Models/
│   ├── Views/
│   └── Middlewares/
├── core/
│   ├── App.php
│   ├── Controller.php
│   ├── Model.php
│   ├── View.php
│   ├── Route.php
│   ├── Request.php
│   ├── Response.php
│   ├── Session.php
│   ├── Auth.php
│   └── Helper.php
├── public/
│   ├── assets/
│   └── index.php
├── routes/
│   └── web.php
├── config/
│   └── app.php
├── .htaccess
├── .env
└── README.md
```

---

## 🚀 Kurulum / Installation

### Türkçe:

1. Bu projeyi indir veya GitHub üzerinden klonla:

```bash
git clone https://github.com/hbkutlu/mvc-framework.git
```

2. Klasörü `htdocs` içine taşı.

3. Tarayıcından şu URL’yi aç:

```
http://localhost/mvc/public
```

### English:

1. Download or clone this project:

```bash
git clone https://github.com/hbkutlu/mvc-framework.git
```

2. Move it to your `htdocs` folder.

3. Access it in your browser:

```
http://localhost/mvc/public
```

---

## ✅ Özellikler / Features

- ✅ Temiz MVC mimarisi / Clean MVC architecture
- ✅ Özel Router yapısı / Custom router class
- ✅ Controller – Model – View dosya ayrımı
- ✅ Basit session & auth sistemi / Basic session & auth system
- ✅ View render & veri taşıma
- ✅ Composer bağımlılığı olmadan çalışır / No Composer required

---

## 🧱 Planlanan Geliştirmeler / Planned Features

- [ ] PDO ile veritabanı bağlantısı / PDO DB connection
- [ ] Gelişmiş CRUD sistemi / CRUD system
- [ ] Kullanıcı girişi / kayıt sistemi / Login / Register system
- [ ] Admin panel
- [ ] JSON API & mobil destek

---

## 👨‍💻 Geliştirici / Developer

Bu proje [Hasan Behram KUTLU / hbkutlu] tarafından geliştirilmiştir.  
This structure was developed by [Hasan Behram KUTLU / hbkutlu].

> Her türlü katkıya açığım. PR göndermekten çekinme!  
> Contributions are welcome. Feel free to submit a PR!

---

## 📄 Lisans / License

MIT Lisansı altında lisanslanmıştır.  
Licensed under the MIT License.
