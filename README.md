# Minecraft Sunucu Durum API Örnekleri

Bu proje, bir Minecraft sunucusunun durumunu ve ikonunu sorgulamak için bir API'nin nasıl kullanılacağını gösteren basit örnekler içerir.

## 📦 İçindekiler

- `example.html` – HTML + JavaScript ile sunucu durumu kartı
- `example.php` – PHP ile sunucu bilgisi sorgulama
- `nodejs_example.js` – Node.js (fetch ile) sunucu bilgisi çekme

---

## 🔗 API Kullanımı

### Sunucu Durumu:
```
GET /api/status/{sunucu_adresi}
```

**Örnek:** `/api/status/mc.hypixel.net`

### Sunucu İkonu:
```
GET /api/icon/{sunucu_adresi}
```

**Örnek:** `/api/icon/mc.hypixel.net`

---

## 💻 HTML + JS Örneği

```html
<img src="https://mcstatus.zewlox.com.tr/api/icon/mc.hypixel.net" alt="İkon">
<script>
fetch("https://mcstatus.zewlox.com.tr/api/status/mc.hypixel.net")
  .then(res => res.json())
  .then(data => console.log(data));
</script>
```

---

## 🐘 PHP Örneği

```php
<?php
$adres = "mc.hypixel.net";
$response = file_get_contents("https://mcstatus.zewlox.com.tr/api/status/$adres");
$data = json_decode($response, true);
print_r($data);
?>
```

---

## 🟩 Node.js Örneği

```js
const fetch = require("node-fetch");

fetch("https://mcstatus.zewlox.com.tr/api/status/mc.hypixel.net")
  .then(res => res.json())
  .then(data => {
    console.log("Online:", data.data.status.online);
  })
  .catch(err => console.error(err));
```

---

## ⚠️ Rate Limit

- Maksimum 100 istek / 15 dakika (IP başına)

## 🧊 Önbellekleme

- İkonlar 30 dakika önbelleklenir

---

## 📄 Lisans

MIT License

Copyright (c) 2025 Zewlox

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the “Software”), to deal
in the Software without restriction, including without limitation the rights  
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell  
copies of the Software, and to permit persons to whom the Software is  
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in  
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR  
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,  
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE  
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER  
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,  
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE  
SOFTWARE.
