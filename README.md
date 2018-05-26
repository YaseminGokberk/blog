

## Proje Hakkında

Yii2 Framework ile üzerinde çalışılan modül "**blog**" adına sahiptir. Bu modül ile kullanıcıların; post ekleme, ilgili postu silme/değiştirme yetkilerine sahip olması hedeflenmiştir.

Blog modülü, https://github.com/kouosl/portal projesi altındaki modüllerden bir tanesidir. Bu modülün diğerleriyle ilişkisi bulunmamaktadır.
##

Yerel makine kurularak projeye başlanmış, veritabanı için phpMyAdmin ile çalışılmıştır.
Proje için oluşturulan veri tabanı tabloları:

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



