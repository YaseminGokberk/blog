

## Proje Hakkında

Yii2 Framework ile üzerinde çalışılan modül "**blog**" adına sahiptir. Bu modül ile kullanıcıların; post ekleme, ilgili postu silme/değiştirme yetkilerine sahip olması hedeflenmiştir.

Blog modülü, https://github.com/kouosl/portal projesi altındaki modüllerden bir tanesidir. Bu modülün diğerleriyle ilişkisi bulunmamaktadır.

## **Kurulum**

***Portal*** dizini içerisindeki *composer.js* dosyasını açtıktan sonra "repositories" kısmına:

    "type": "vcs",
    "url": "https://github.com/YaseminGokberk/blog.git"

satırlarını,
"require" kısmına ise:

    "yasemingokberk/blog":"dev-master"
satırını ekleyiniz.

Daha sonra ***portal/backend/config/main.php*** ve ***portal/frontend/config/main.php*** dosyalarında "modules" kısımlarına:

    'blog' => ['class' => 'kouosl\blog\Module',],
satırını ekleyiniz.

***Proje veritabanlarını almak için;***  
terminalde proje dosyasının bulunduğu dizine geliniz. Daha sonra aşağıdaki komutu çalıştırınız:

    php yii migrate --migrationPath=@vendor/kouosl/blog/migrations --interactive=0

## 
*Proje için oluşturulan veri tabanı tabloları:*

**tablo1 : *blog***

|id| title |description |body|created_at|created_by|updated_at|updated_by|
|-|-|-|-|-|-|-|-
|  | |||||||


**tablo2 : *post***

|id| blog_id |category 
|-|-|-|
|  | ||
  
 *Tablolar arasında foreign key ile ilişki kurulmuştur.*

Veritabanıyla alakalı işlemler için iki migration dosyası oluşturulmuştur.

***blog*** tablosu için oluşturulan migration dosyası:
https://github.com/YaseminGokberk/blog/blob/master/migrations/m180520_212815_blog.php

***post*** tablosu için oluşturulan migration dosyası:
https://github.com/YaseminGokberk/blog/blob/master/migrations/m180520_212952_post.php

##

**Proje erişim linkleri**

Anasayfa
http://portal.kouosl/blog

Veritabanı
http://portal.kouosl/admin/blog/blog


