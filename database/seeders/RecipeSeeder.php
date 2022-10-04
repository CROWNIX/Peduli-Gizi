<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipes = [
            [
                "need_sub_category_id" => 1,
                "title" => "Sego Tumpang Komplit",
                "ingridients" => "<ul>
                    <li>300 g tempe, potong-potong, rebus, haluskan</li>
                    <li>200 g tahu china, potong-potong dadu, rebus</li>
                    <li>250 g kentang kecil, rebus, kupas, belah menjadi dua</li>
                    <li>4 butir telur (&plusmn; 200 g), rebus kupas, belah menjadi dua</li>
                    <li>500 g daging sandung lamur, potong kecil</li>
                    <li>300 g kelapa parut</li>
                    <li>1 kg beras, aron</li>
                    <li>8 butir bawang merah</li>
                    <li>3 siung bawang putih</li>
                    <li>2 sdt ketumbar</li>
                    <li>1 sdt jintan</li>
                    <li>1/4 biji pala</li>
                    <li>1 ruas jari kunyit, bakar</li>
                    <li>1 ruas jari jahe</li>
                    <li>1 ruas jari lengkuas</li>
                    <li>1 batang serai, iris halus</li>
                    <li>2 lbr daun salam</li>
                    <li>2 sdt garam (secukupnya)</li>
                    <li>100 g wortel, potong bentuk korek api</li>
                    <li>100 g tauge, buang ekor</li>
                    <li>100 g kol, potong kecil</li>
                    <li>1 ikat kangkung, petik-petik daunnya</li>
                </ul>",
                "steps" => "<ol>
                    <li>Haluskan bawang merah, bawang putih, ketumbar, jintan, pala, kunyit, jahe, serai, dan garam. Tumis bumbu halus, masukkan daun salam dan daging. Teruskan menumis hingga daging berubah warna.</li>
                    <li>Masukkan kelapa parut dan tempe halus, tambahkan sedikit air, Teruskan memasak hingga daging lunak. Angkat.</li>
                    <li>Campur tumisan daging dengan tahu, kentang, telur, worter, taoge, kol, dan kangkung.</li>
                    <li>Susun 1/3 bagian nasi aron pada kukusan, tambahkan 1/2 bagian campuran tumisan daging dan sayuran, lalu tambah 1/3 bagian nasi aron diatasnya, tutup lagi dengan 1.2 bagian campuran tumisan daging, dan terakhir tutup dengan 1/3 bagian nasi aron. Kukus hingga matang.</li>
                    </ol>",
                "portion" => 10,
                "energy" => 151,
                "protein" => 11.4,
                "fat" => 5.6,
                "carbohydrate" => 18.5 
            ],
            [
                "need_sub_category_id" => 1,
                "title" => "Tahu campur istimewa",
                "ingridients" => "<ul>
                    <li>250 g mi telur, rendam dalam air</li>
                    <li>200 g tahu cina, potong dadu, goreng setengah matang</li>
                    <li>250 g kentang, rebus, kupas, potong dadu</li>
                    <li>50 g kol, iris halus</li>
                    <li>100 g tauge, buang ekor, rendam air panas</li>
                    <li>2 sdm cacahan daun seledri</li>
                    <li>1 bh&nbsp; tomat merah goreng</li>
                    <li>2 sdm bawang putih goreng</li>
                    </ul>
                    
                    <p><span style='font-size:20px'><strong>Kuah:</strong></span></p>
                    
                    <ul>
                        <li>500 g daging sapi tetelan, rebus hingga lunak, potong-potong</li>
                        <li>1.5 liter kaldu sapi</li>
                        <li>8 butir bawang merah</li>
                        <li>3 siung bawang putih</li>
                        <li>1 sdt merica</li>
                        <li>2 sdt ketumbar, sangrai</li>
                        <li>1/4 sdt jintan</li>
                        <li>1 ruas jari kunyit, bakar</li>
                        <li>1 ruas jari lengkuas, memarkan</li>
                        <li>2 lbr daun salam</li>
                        <li>2 lbr daun jeruk purut</li>
                        <li>1 btg serai, memarkan</li>
                        <li>1 sdt garam (secukupnya)</li>
                        <li>2 sdm minyak goreng</li>
                    </ul>
                    
                    <p><span style='font-size:20px'><strong>Pelengkap:</strong></span></p>
                    
                    <ul>
                        <li>lento (perkedel singkong)</li>
                        <li>Sambar petis</li>
                    </ul>",
                "steps" => "<ol>
                    <li>Haluskan bawang merah, bawang putih, merica, ketumbar, jintan, kunyit, jahe, dan garam.</li>
                    <li>Tumis bumbu halus hingga harum, masukkan lengkuas, daun salam, daun jeruk purut, dan serai, Tambahkan rebusan daging dan kaldu daging, masak hingga mendidik.</li>
                    <li>Cara menyajikan: tata mi, tahu, kol, taoge di mangkuk, siram dengan kuah tetelan, taburi dengan cacahan daun seledri, bawang merah goreng, dan bawang putih goreng.</li>
                    <li>Sajikan dengan lento dan sambal petis.</li>
                    <li>Sambal petis: 1 sdm petis udang di campur dengan 1 sdt cabai merah keriting halus, 1 sdm kecap manis, dan sedikit garam.</li>
                    <li>Lento: 500 g singkong parut dicampur dengan 50 g kacang tolo rebus, 100 g kelapa parut, 1 sdm potongan bawang, 1 siung bawang putih halus, 3 btr bawang merah halus, 1/2 sdt merica bubuk, 1 sdt ketumbar, 1 sdt garam yang di haluskan. Kepal-kepal sebesar ibu jari, goreng hingga matang.</li>
                    </ol>",
                "portion" => 4,
                "energy" => 216,
                "protein" => 14.4,
                "fat" => 11.2,
                "carbohydrate" => 15.3 
            ],
            [
                "need_sub_category_id" => 2,
                "title" => "Bubur Tempe Serai",
                "ingridients" => "<ul>
                    <li>150 g beras, cuci dan bersihkan</li>
                    <li>1 ltr air</li>
                    <li>500 ml air kaldu ayam</li>
                    <li>1/2 sdt garam</li>
                    <li>1 lbr daun salam</li>
                    </ul>
                    
                    <p><strong><span style='font-size:20px'>Pelengkap:</span></strong></p>
                    
                    <ul>
                        <li>2 btg daun bawang, iris halus</li>
                        <li>2 btg daun seledri, iris halus</li>
                        <li>2 sdm bawang merah, goreng</li>
                    </ul>
                    
                    <p><strong><span style='font-size:20px'>Taburan:</span></strong></p>
                    
                    <ul>
                        <li>200 g tempe, potong kecil, goreng kering</li>
                        <li>200 g udang peci, buang kepala dan kulit goreng</li>
                        <li>7 bh cabai merah besar, buang biji, potong halus, tumis hingga layu</li>
                        <li>5 btr bawang merah, iris tipis</li>
                        <li>3 siung bawang putih, iris tipis</li>
                        <li>2 btg serai, iris halus</li>
                        <li>1 ruas jari lengkuas, memarkan</li>
                        <li>2 lbr daung salam</li>
                        <li>3 sdm perahan asam jawa</li>
                        <li>1 sdm gula merah</li>
                        <li>5 sdm kecap manis</li>
                        <li>1 sdt terasi bakar</li>
                        <li>1 sdm garam</li>
                    </ul>",
                "steps" => "<ol>
                    <li>Didihkan air dan kaldu ayam, kemudian masukkan beras&nbsp;tambahkan garam dan daun salam. Masak hingga menjadi bubur.</li>
                    <li>Taburan: Tumis bawang merah dan bawang putih hingga harum.</li>
                    <li>Tambahkan serai, cabang merah, lengkuas, perahan asam jawa, gula merah, daun salam, kecap manis, terasi, dan garam. Masukkan tempe dan udang, aduk hingga tercampur rata.</li>
                    <li>Tempatkan bubur ke dalam mangkuk, taburi dengan tempe dan udang, bawang goreng, daun bawang, dan daun seledri.</li>
                    <li>Hidangkan selagi panas.</li>
                    </ol>",
                "portion" => 4,
                "energy" => 150,
                "protein" => 11.5,
                "fat" => 1.2,
                "carbohydrate" => 22.9 
            ],
            [
                "need_sub_category_id" => 2,
                "title" => "Nasi Pecel Daun Mengkudu",
                "ingridients" => "<ul>
                    <li>400 g nasi hangat</li>
                    <li>300 g sambal pecel, siap pakai, seduh dengan air hangat</li>
                    <li>1 sdm biji lamtoro muda</li>
                    <li>3 lbr daun mengkudu muda</li>
                    <li>10 pucuk daun kemangi</li>
                    <li>50 g tauge, rendam dalam air mendidih, tiriskan</li>
                    </ul>
                    
                    <p><span style='font-size:20px'><strong>Pelengkap:</strong></span></p>
                    
                    <ul>
                        <li>Tempe goreng</li>
                        <li>Rempeyek teri / kerupuk uli</li>
                    </ul>",
                "steps" => "<ol>
                    <li>Daun mengkudu di buang tulang daunnya, kemudian potong halus, remas-remas, cuci, dan tiriskan.</li>
                    <li>Tempatkan nasi dalam picuk daun pisang atau piring, taburi dengan daun mengkudu, biji lamtoro, tauge, dan daung kemangi, Siram dengan sambal kacang.</li>
                    <li>Sajikan selagi hangat dengan laut tempe goreng, rempeyek atau kerupuk uli</li>
                    </ol>",
                "portion" => 4,
                "energy" => 188,
                "protein" => 3.2,
                "fat" => 0.3,
                "carbohydrate" => 41.6 
            ],
            [
                "need_sub_category_id" => 3,
                "title" => "Bubur Ikan Sayuran",
                "ingridients" => "<ul>
                    <li>100 g daging ikan tenggiri, potong-potong</li>
                    <li>2 btg serai, memarkan</li>
                    <li>1 lbr daun kunyit</li>
                    <li>1 ruas jari jahe, memarkan</li>
                    <li>750 ml air</li>
                    <li>1 sdt garam</li>
                    <li>2 sdt kecap asin</li>
                    <li>1 btg daun bawang, iris halus</li>
                    <li>150 g beras pulen</li>
                    <li>1 bh ubi jalar, kupas rebus, potong dadu</li>
                    <li>2 bh jagung yang muda, sisir bijinya</li>
                    <li>50 g labu kuning, kupas, potong dadu</li>
                    <li>100 g daung kangkung</li>
                    <li>50 g daung bayam merah / hijau</li>
                    <li>50 g daun katuk</li>
                    <li>50 g daun labu kuning muda</li>
                    <li>10 pucuk daun kemangi</li>
                    </ul>",
                "steps" => "<ol>
                    <li>Masukkan ikan, serai, daun kunyit, dan jahe ke dalam air. Tambahkan beras, rebus hingga beras lunak. Masukkan jagung muda pipil, ubi dan labu kuning. Tambahkan garam, kecap asin, dan daun bawang.</li>
                    <li>Jika sudah matang dan menjadi bubur, masukkan kangkung, bayam merah, kaluk, dan daun kemangi. Aduk hingga bahan tercampur.</li>
                    <li>Bubur ini sangat serasi disajikan dengan ikan bakar dan sambal tomat</li>
                    </ol>",
                "portion" => 4,
                "energy" => 207,
                "protein" => 11.2,
                "fat" => 2.3,
                "carbohydrate" => 35.5 
            ],
            [
                "need_sub_category_id" => 3,
                "title" => "Lontong Sup Betawi",
                "ingridients" => "<ul>
                    <li>1 kg jeroan kambing (hati, sus, babat, paru, dan ginjal)</li>
                    <li>250 g daging kambing</li>
                    <li>5 btr cengkih utuh</li>
                    <li>1 btg kayu manis</li>
                    <li>1 ruas jari jahe, memarkan</li>
                    <li>1/2 sdt pala bubuk</li>
                    <li>2 sdt merica bubuk</li>
                    <li>1 sdt garam (secukupnya)</li>
                    <li>400 ml susu cair</li>
                    </ul>
                    
                    <p><span style='font-size:20px'><strong>Pelengkap:</strong></span></p>
                    
                    <ul>
                        <li>8 bh lontong (siap pakai)</li>
                        <li>5 bh tomat merah, iris kasar</li>
                        <li>2 btg daun bawang, iris halus</li>
                        <li>4 btg daun seledri, iris halus</li>
                        <li>4 sdm bawang goreng</li>
                        <li>4 sdm kecap manis (secukupnya)</li>
                        <li>Saus sambal</li>
                        <li>Jeruk limau / jeruk nipis</li>
                    </ul>",
                "steps" => "<ol>
                    <li>Rebus jeroan dan daging dalam 1/2 liter air, tambahkan cengkih, kayu manis, jahe, dan garam hingga lunak dan matang. Angkat, tiriskan dan potong dadu.</li>
                    <li>Didihkan kembali kaldunya, tambahkan susu, merica, dan pala.</li>
                    <li>Tempatkan daging dan jeroan dalam mangkuk, tambahkan tomat, daun bawang, seledri, bawang goreng, kecap manis, emping, dan perlahan jeruk limau.&nbsp;</li>
                    <li>Sajikan dengan lontong dan sambal sesuai selera.</li>
                    </ol>",
                "portion" => 4,
                "energy" => 456,
                "protein" => 49.4,
                "fat" => 25.6,
                "carbohydrate" => 53.4 
            ],
            [
                "need_sub_category_id" => 4,
                "title" => "Open Sandwich",
                "ingridients" => "<ul>
                    <li>6 lbr roti tawar</li>
                    <li>6 lbr daging asap, goreng sebentar dengan mentega</li>
                    <li>6 btr telur ayam</li>
                    <li>6 lbr daun selada</li>
                    <li>6 sdm mayones</li>
                    <li>6 sdm saus tomat</li>
                    <li>3 sdm saus sambal</li>
                    </ul>
                    
                    <p><span style='font-size:20px'><strong>Saus:</strong></span></p>
                    
                    <ul>
                        <li>2 bh tomat merah, potong kecil</li>
                        <li>50 g jamur kancing, iris tipis</li>
                        <li>1 bh bawang bombai, cincang halus</li>
                        <li>2 siung bawang putih, cincang halus</li>
                        <li>1/2 sdt merica bubuk</li>
                        <li>1 sdm kecap manis</li>
                        <li>1 sdm air jeruk nipis</li>
                        <li>3 sdm mentega, untuk menumis</li>
                    </ul>",
                "steps" => "<ol>
                    <li>Goreng telur mata sapi dalam cetakan, beri sedikit garam dan merica bubuk, Masak setengah matang, lepas cetakan, goreng hingga matang, angkat.</li>
                    <li>Saus: Panaskan mentega, tumis bawang bombai dan bawang putih hingga harum, masukkan tomat, merica, air jeruk nipis, kecap manis, aduk rata, angkat.</li>
                    <li>Cara menyajikan: Taruh 1 lembar daun selada di atas roti yang telah di oleh saus tomat dan saus sambal, lalu&nbsp; taruh daging asap dan telur mata sapi, siram saus jamur. Beri mayones di atasnya, hiasi dengan tomat ceri dan peterseli</li>
                    </ol>",
                "portion" => 6,
                "energy" => 207,
                "protein" => 11.2,
                "fat" => 2.3,
                "carbohydrate" => 35.5
            ],
            [
                "need_sub_category_id" => 4,
                "title" => "Berry Smoothies",
                "ingridients" => "<ul>
                    <li>1 bh pisang ambon, kupas dan potong</li>
                    <li>100 g strawberry</li>
                    <li>100 g es krim rasa strawberry</li>
                    <li>200 ml susu / 2 sdm susu khusus untuk ibu hamil, seduh dalam 200 ml air matang</li>
                    <li>2 sdm sirop coco pandan</li>
                    </ul>",
                "steps" => "<ol>
                    <li>Masukkan semua bahan dalam blender. Haluskan.</li>
                    <li>Tuangkan ke dalam gelas saji.</li>
                    </ol>",
                "portion" => 2,
                "energy" => 223,
                "protein" => 5.5,
                "fat" => 9.6,
                "carbohydrate" => 30.9
            ],
            [
                "need_sub_category_id" => 5,
                "title" => "Wedang Jasuka",
                "ingridients" => "<ul>
                    <li>500 ml susu cair</li>
                    <li>1 bks agar-agar bubuk warna hijau</li>
                    <li>2 sdm gula pasir</li>
                    <li>2 lbr daun pandan, simpulkan</li>
                    </ul>
                    
                    <p><span style='font-size:20px'><strong>Sirop Jahe:</strong></span></p>
                    
                    <ul>
                        <li>500 ml air</li>
                        <li>150 g gula merah</li>
                        <li>1/2 ruas jari jahe, memarkan</li>
                        <li>2 lbr daun pandan, simpulkan</li>
                    </ul>
                    
                    <p><span style='font-size:20px'><strong>Saus:</strong></span></p>
                    
                    <ul>
                        <li>800 ml santan sedang</li>
                        <li>1 sdm gula pasir</li>
                        <li>1 sdt garam</li>
                        <li>100 g kacang tanah, rebus dan buang kulit</li>
                        <li>1 sdt vanili bubuk</li>
                        <li>2 lbr daun jeruk, sobek-sobek</li>
                    </ul>",
                "steps" => "<ol>
                    <li>Puding susu: Campur susu, agar-agar bubuk, daun pandan, dan gula pasir dalam panci. Aduk rata. Jerang diatas api hingga mendidih. Angkat dan dinginkan. Setelah dingin potong dadu sesuai selera.&nbsp;</li>
                    <li>Sirop Jahe: Masak air hingga mendidih, masukkan gula merah, jahe, dan daun pandan, teruskan memasak hingga agak mengental.</li>
                    <li>Saus: Rebus santan, gula pasir, garam, kacang, vanilli, dan daun jeruk hingga mendidih. Aduk terus agar santan tidak pecah.</li>
                    <li>Ambil gelas saji, tata agar susu, siram dengan sirop jahe dan tuang santan kacang. Sajikan panas atau dingin.</li>
                    </ol>",
                "portion" => 4,
                "energy" => 158,
                "protein" => 4.3,
                "fat" => 5.5,
                "carbohydrate" => 26.8
            ],
            [
                "need_sub_category_id" => 5,
                "title" => "Air Kelapa Berempah",
                "ingridients" => "<ul>
                    <li>2 bh kelapa hijau muda, ambil air, dan keruk daging kelapa mudanya</li>
                    <li>200 ml air</li>
                    <li>1 btg serai, memarkan</li>
                    <li>1/2 ruas jari jahe bakar, memarkan</li>
                    <li>1 btg kecil kayu manis, sangrai</li>
                    <li>3 btr cengkih, sangrai</li>
                    <li>1 lbr daun pandan, simpulkan</li>
                    <li>100 g gula aren</li>
                    </ul>",
                "steps" => "<ol>
                    <li>Rebus air dengan serai, jahe, kayu manis, cengkih, daun pandan, dan gula aren hingga mendidih dan gula larut. Angkat, saring, dan biarkan dingin.</li>
                    <li>Campurkan dengan air kelapa, aduk rata. Tata kerukan daging kelapa muda dalam gelas saji, tuangkan campuran air kelapa berempah.</li>
                    <li>Sajikan hangat atau dingin sesuai selera.</li>
                    </ol>",
                "portion" => 2,
                "energy" => 85,
                "protein" => 1.2,
                "fat" => 1.0,
                "carbohydrate" => 5.2
            ],
            [
                "need_sub_category_id" => 6,
                "title" => "Katuk Gulung",
                "ingridients" => "<p>
                    <span      style='font-size:20px'><strong>Bahan Dadar:</strong></span></p>
                    <ul>
                        <li>4 btr telur, kocok lepas</li>
                        <li>1/2 sdt garam</li>
                        <li>2 sdm minyak goreng</li>
                    </ul>
                    
                    <p><span style='font-size:20px'><strong>Isi:</strong></span></p>
                    
                    <ul>
                        <li>100 g udang kupas, haluskan</li>
                        <li>100 g&nbsp; daging ayam giling</li>
                        <li>100 g daun katuk, rebus sebentar</li>
                        <li>4 siung bawang putih, cincang halus</li>
                        <li>1/2 parutan jahe</li>
                        <li>1 sdt merica bubuk</li>
                        <li>1/2 sdt garam</li>
                        <li>2 btr telur, kocok lepas</li>
                    </ul>
                    
                    <p><span style='font-size:20px'><strong>Saus:</strong></span></p>
                    
                    <ul>
                        <li>2 siung bawang putih, cincang halus</li>
                        <li>2 sdm tepung terigu</li>
                        <li>4 sdm susu ubuk (khusus ibu menyusui), seduh dengan 100 cc kaldu ayam hangat</li>
                        <li>200 ml kaldu ayam</li>
                        <li>1/4 sdt garam (secukupnya)</li>
                        <li>1/2 sdt merica bubuk</li>
                        <li>1 sdm kecap manis</li>
                        <li>2 sdm minyak goreng</li>
                    </ul>",
                "steps" => "<ol>
                    <li>Campur telur dengan garam. Buat dadar</li>
                    <li>Isi: Tumis bawang putih sampai harum. Masukkan ayam dan udang aduk, tambahkan jahe, garam, dan merica. Angkat, tambahkan telur dan katuk. Aduk rata.</li>
                    <li>Ambil selembar dadar lalu tambahkan bahan isi. Gulung lalu bungkus dengan plastik. Kukus selama 20 menit.</li>
                    <li>Saus: Tumis bawang putih sampai harum. Masukkan tepung terigu. Aduk sebentar lalu tuangkan susu kaldu dan kaldu. Aduk kembali. Tambahkan garam, merica, dan kecap manis. Aduk rata. Setelah kental dan meluap-luap, angkat dan sajikan dengan potongan bayam gulung.</li>
                    </ol>",
                "portion" => 10,
                "energy" => 103,
                "protein" => 9.4,
                "fat" => 5.1,
                "carbohydrate" => 4.5
            ],
            [
                "need_sub_category_id" => 6,
                "title" => "Asem-Asem Tahu Sutera",
                "ingridients" => "<ul>
                    <li>2 ltr air</li>
                    <li>200 g daging sapi, iris dadu</li>
                    <li>5 sdm susu bubuk khusus ibu menyusui</li>
                    <li>2 sdm margarin</li>
                    <li>2 lbr daun salam</li>
                    <li>3 bh cabai merah, belah, bakar</li>
                    <li>3 bh cabai hijau, belah, bakar</li>
                    <li>3 btr bawang merah, bakar, memarkan</li>
                    <li>3 siung bawang putih, bakar, memarkan</li>
                    <li>5 bh belimbing sayur, iris melintang</li>
                    <li>2 lbr daun jeruk purut</li>
                    <li>1 sdt garam (secukupnya)</li>
                    <li>1 sdt gula pasir</li>
                    <li>2 btg daung bawang, iris serong</li>
                    <li>200 g tahu sutera, potong dadu</li>
                    <li>100 g daun katuk</li>
                    </ul>",
                "steps" => "<ol>
                    <li>Rebus air hingga mendidih. Masukkan daging dan rebus hingga lunak.</li>
                    <li>Ambil sebagian kaldu, tambahkan susu bubuk, aduk hingga larut</li>
                    <li>Tumis bawang merah, bawang putih, dan daun salam hingga harum. Masukkan cabai merah dan cabai hijau, aduk-aduk hingga layu</li>
                    <li>Masukkan tahu sutera, daging tetelan, dan kaldu susu. Tambahkan belimbing sayur, dan daun bawang</li>
                    <li>Sejenak sebelum diangkat masukkan daun katuk. Angkat</li>
                    <li>Sajikan selagi hangat denga nasi hangat dan ikan goreng</li>
                    </ol>",
                "portion" => 6,
                "energy" => 159,
                "protein" => 11.8,
                "fat" => 10.5,
                "carbohydrate" => 5.4
            ],
        ];
        
        DB::table('recipes')->insert($recipes);
    }
}