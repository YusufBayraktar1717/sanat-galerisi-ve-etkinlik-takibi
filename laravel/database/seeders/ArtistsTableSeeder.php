<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artists')->insert([
            [
                'name' => 'Leonardo da Vinci',
                'biyografi' => "Leonardo Da Vinci 1482 tarihinde Verrocchio’nun yanından ayrılırken Yeni Bir başlangıç yapmaktaydı. Floransa’dan Milano’ya giden ünlü sanatçı mühendis ve sanatçı olarak bilinen II Moro olarak tanınan Ludovico Sforza ile bağlantı kurdu.
Leonardo Da Vinci Sforza ailesinin merasimleri  festivallerde kullanılan kostümleri ve dekorları tasarlayıp bir yandan da uçan makineler silahlar üzerine çalışmalar yapmaktaydı.

İnsan vücuduna ve anatomiye yoğun ilgisi artan Leonardo Da Vinci 1980’li tarihlerde bilimsel ve anatomik çalışmalara daha yoğunlaşmaya vermeye başladı.

Leonardo Da Vinci’nin 1493 tarihinde Milano Dükü Ludovico il Moro’nun  babası için sipariş ettiği atlı anıtın çalışmaları başlamıştı. Atölyede dev boyutlarda kil modelleri fırınlar ve kalıplar bulunmaktaydı. Bu esnada Savaş ortaya çıktı ve heykel tamamlanamadı. Sadece geride Leonardo’nun yapmış olduğu eskizler kaldı.

1495 tarihinde ise Leonardo’nun Son Akşam Yemeği konulu tablosu için hazırlıklar yapıldı. Santa Maria delle Grazie Manastırı’nın yemekhanesi için yapılan bu tablo yeni fresko teknikleri ile yapılan ilk eserdir.

Leonardo Da Vinci 1503 tarihinde tekrardan Fransa’ya döndü ve bu sefer eşi Lisa der Giocondo için Mona Lisa tablosu için çalışmalar başladı. Resim tamamlanana kadar hiçbir şekilde yanından ayırma ya ve bütün seyahatlerinde yanında taşıyan Leonardo Da Vinci eserini büyük ve titizlikle tuvale aktarmıştır.

1504 tarihinde babasının ölüm haberini alan Leonardo Da Vinci tekrardan Floransa’ya geri dönmüştür. Üvey kardeşleri ile miras paylaşımı konusunda ufak bir anlaşmazlık yaşasa da amcası tüm varlığı ona bırakmıştır. .",
                'dogum_tarihi' => '1452-04-15',
                'milliyet' => 'İtalyan',
                'olum_tarihi' => '1519-05-2',
                'kayit_guncelleme_tarihi' => now(),
                'foto_url' =>'https://blog.tabloplus.com/wp-content/uploads/2024/07/leonardo-da-vinci-kimdir-780x470.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vincent van Gogh',
                'biyografi' => "Vincent Van Gogh, 1853 tarihinde Hollanda’da Doğan sanatla hayatı boyunca iç içe yaşayan sanatçı iki erkek kardeşi 3 kız kardeşi ile sıcak bir ailede büyümüştür. Van Gogh küçük kardeşi Theo ile yakın bir ilişkisi vardır. Genç yaşlarda çizim yapmayı seven Van Gogh ilerleyen dönemlerde Tam zamanlı bir sanatçı olmadan önce din adamlığı öğretmenlik gibi pek çok farklı bir şey imza atmıştır.

27 yaşında kendini sanata adayan Van Gogh kariyerinin başlarında kara kalem ve kömür çubukları kullanarak yeteneğini geliştirmiştir.
Sanatına başladığı ilk zamanlarda çalışkan ve fakir insanları resmeden ünlü sanatçı daha sonraki çalışmalarında yağlı boya kullanmıştır. Çalışmalarının ilk zamanlarında koyu renkleri tercih eden ünlü sanatçı ilk önemli eserlerinden olan “Patates Yiyenler” tablosu akşam yemeği yiyen bir köylü ailesini resmeder.
Hayatı ve sanatı hakkında bilinen her şey kardeşi Theo tarafından mektuplarla ortaya çıkmıştır. O dönemde kardeşi Paris’e bir sanat galerisinde çalışıp maddi manevi Van Gogh’a destek olmuştur. Van Gogh’un resimlerini satmaya çalışıp ünlü sanatçıya destek olmaya gayret eden kardeşi o dönemlerde pek başarılı olamamıştır. Ünlü sanatçının ölümünden sonra eserlerinin kardeşi tarafından yeniden ele alınıp ünlenmesi ünlü sanatçının küçük bir talihsizliğidir. Yaşamı boyunca eserlerine olan ilgi az olsa da vefatından sonra büyük bir ilgi görmüştür.
1886’da ünlü sanatçı kardeşini isteği üzerine Paris’e taşınıp izlenimcilik akımını benimsemiştir. Kardeşinin önerisiyle yeniden sanata tutunan ve farklı bir akım benimseyen Gogh, o dönemde pek çok sanatçıdan etkilenmiştir.
Camille Pissarro, Edgar Degas, Claude Monet gibi sanatçıların eserlerinden etkilenen Van Gogh sanata ve resimlere daha fazla merak salmıştır.

Paris’te kaldığı dönemlerde pek çok kafe, kırsal manzara, sokak gibi alanlardan ilham alıp manzara resimleri yapmıştır. Kendi portresini çizerek sanatını geliştirmeye devam etmiştir.
1888 tarihinde Van Gogh Fransa’nın Arles şehrinde taşınarak burada Paul Gauguin ile dostluk kurmuştur. Arles şehrinde kısa bir süre kalan Van Gogh burada canlı renkler kullanarak pek çok resim yapmıştır.
Burada tanışmış olduğu arkadaşıyla yapmış olduğu tartışma sonucunda Gauguin ile yollarını ayırdı. 1889 tarihinde Van Gogh kendine bakmakta zorlanmaya başladı. Yine aynı tarihte artan geçim sıkıntısı ile akıl hastanesine yattı.
Burada en önemli ve ünlü eserlerinden olan “Yıldızlı Gece”yi yaptı. 1889 tarihi ve ilerleyen zamanlarda tablosunda kullanmış olduğu renkler epey bir dikkat çekmekteydi. Akıl Hastanesi’nde yapmış olduğum zaman arttıkça zihinsel durumu kötüleşmeye başladı.
29 temmuz 1890 tarihinde göğsü tarafını almış olduğu kurşun yarısı sonucunda vefat etti. Bu durum bir intihar mı yoksa cinayet mi olduğu hala tartışmalı olan bir konudur. O zamanki şartlar neticesinde bu durum nihai karara kavuşmadı. ",
                'dogum_tarihi' => '1853-03-30',
                'olum_tarihi' => '1890-07-29',
                'foto_url' =>'https://www.worldhistory.org/img/r/p/1500x1500/15458.png.webp?v=1732122249',
                'milliyet' => 'Hollandalı',
                'kayit_guncelleme_tarihi' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Auguste Rodin',
                'biyografi' => "
Rodin, Paris’te İşçi sınıfından bir ailenin oğlu olarak 1840 yılında dünyaya gelmiş ve 14 yaşında dekoratif sanatlar okuluna girmiştir. Rodin heykeltıraş Jean Baptiste Carpcaux (1827-75) ile heykel çalışmış, 1857’de Ûcolc des Bcaux-Arts’a başvurmuş fakat üç kez reddedilmiş, bunun üzerine ertesi yıl dekoratif duvar ustası olarak çalışmaya başlamıştır.

14 yaşında girdiği La Petite École (Küçük Okul) isimli Özel okula gittiğinde heykele olan becerisini farkedip desen ve çizim üzerine olan yeteneklerini geliştirmeye yönelmiştir. Bu okulda hareketli modelleri akıldan resimleme üzerinde çalışmıştır. Okuldan mezun olunca 1857-1858 arasında üç kez girdiği Ecole des Beaux-Arts’ın (Güzel Sanatlar Okulu) sınavını kazanamamış ve 1864 yılında Sevres Kenti’ndeki porselen fabrikasında çalışmaya başlamıştır. Aynı yıl ilk eseri olan Kırık Burunlu Adam’ı yapmıştır.",
                'dogum_tarihi' => '1840-11-12',
                'olum_tarihi' => '1917-11-17',
                'foto_url'=>'https://www.fundacionmapfre.org/media/arte-cultura/colecciones/auguste-rodin/auguste-rodin-620x771-1.jpg',
                'milliyet' => 'Fransız',
                'kayit_guncelleme_tarihi' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Salvador Dalí',
                'biyografi' => "Sürrealist bir ressam olan Salvador Dali, tuhaf ve çarpıcı imgelerin bulunduğu resimleriyle sanat dünyasında kendisine özel bir yer bulan Dali, 20. Yüzyılın en dikkat çeken ressamları arasında yer alır. Dali’nin eserlerinde, bilinçaltında bulunanların su yüzeyine çıkması hedeflenir. Bu nedenle eserleri, bilinçaltındaki karmaşıklığı yansıtma konusunda oldukça başarılıdır.

Salvador Dali’nin Hayatı
Sürrealist ressam Salvador Dali, 11 Mayıs 1904 yılında İspanya’da dünyaya gelmiş olan bir sanatçıdır. Tam ismi Salvador Domingo Felipe Jacinto Dali i Domenech olarak ifade edilmektedir. İkinci çocuklarına da Dali ismini vermişler ve ilk çocuklarını anılarla yaşatmak için çok büyük bir çaba içerisine girmişlerdir. Bu durum, Dali’nin ilerleyen dönemlerde yaşadığı buhranların da kaynağı olacaktır.

Sürekli ölmüş abisinin gölgesini hisseden ve bununla yaşamak zorunda kalan Dali, sanatlarına da bu baskı ve gölgeyi yansıtmıştır. Hatta Dali, hayatının ilerleyen dönemlerinde yaşadığı söz konusu psikolojik baskıyı şu sözler ile anlatmıştır: “Doğar doğmaz tapınılan bir ölünün ayak izlerinden yürümeye başladım. Beni severken hala onu seviyorlardı aslında. Belki de benden çok onu. Babamın sevgisinin bu sınırları yaşamımın ilk günlerinde itibaren çok büyük bir yara oldu benim için.”

Dali, 1914 yılında annesinin de desteklemesiyle birlikte bir resim okuluna yazılmıştır. 1919 yılında ise Figueres Belediye Tiyatrosu’nda ilk sergisini açarak resim alanında profesyonel çalışmalarına başlamıştır. 1921 yılında Dali, annesini meme kanserinden kaybeder ve yaşamının en sıkıntılı süreci başlar.Dali, 1921 yılında Madrid’e taşınır ve burada da resim yapmaya devam eder.",
                'dogum_tarihi' => '1904-05-11',
                'foto_url'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Salvador_Dali_NYWTS.jpg/800px-Salvador_Dali_NYWTS.jpg',
                'olum_tarihi' => '1989-01-23',
                'milliyet' => 'İspanyol',
                'kayit_guncelleme_tarihi' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Edgar Allan Poe',
                'biyografi' => "Amerikalı şair, yazar ve edebiyat eleştirmeni, gotik edebiyatın öncülerindendir.Edgar Allan Poe, 19 Ocak 1809'da Boston'da Massachusetts'de doğdu. Anne ve babası profesyonel oyuncu olan Poe, üç kardeşten ikincisi olarak dünyaya geldi. Önce babası evi terketti ardından annesi 1810 yılında veremden hayatını kaybetti. Poe'yu zengin bir tüccar olan John Allan ve eşi Frances evlat edindi. Edgar'ın Allan soyadını, bu tüccardan aldığı ifade edilir.
Poe'nun eğitim hayatı antik ve modern diller üzerine eğitim görmek üzere gittiği Virginia Üniversitesi'nde başladı. Ancak alkol, kumar ya da borçları nedeniyle okuldan ayrılmak zorunda kaldı. Kâtiplik ve gazete yazarlığı yaptı. Annesini küçük yaşta kaybeden Edgar Allan Poe, kendisini büyüten Frances Allan'ı 1829 yılında kaybetti. Frances Allan'in ölümü ve John Allan ile anlaşamaması sonrası Poe aileden uzaklaştı. Orduda bir süre görev alan Poe, West Point Askeri Akademisine kayıt oldu ve buradan da atıldı. Ardından yazılarını yayımlamaya bu dönemlerde başladı.",
                'dogum_tarihi' => '1809-01-19',
                'olum_tarihi' => '1849-10-07',
                'foto_url'=>'https://cdn.britannica.com/52/76652-050-F4A6B093/Edgar-Allan-Poe.jpg?w=300',
                'milliyet' => 'Amerikalı',
                'kayit_guncelleme_tarihi' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
