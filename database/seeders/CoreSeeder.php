<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoreSeeder extends Seeder
{
    public function run(): void
    {

        // landing
        DB::table('landing')->insert([
            'title' => 'PT. Karya Prima Usahatama',
            'description' => 'Selamat datang di PT Karya Prima Usahatama, mitra terbaik untuk solusi bisnis Anda!',
            'image' => 'landing-core.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // about
        DB::table('about')->insert([
            'title' => 'About Us',
            'sub_title' => 'Tentang Kami',
            'description' => 'PT Karya Prima Usahatama adalah perusahaan yang bergerak di bidang solusi bisnis terintegrasi. Perusahaan ini menawarkan layanan untuk mendukung kesuksesan operasional klien. Fokus utama mereka adalah memberikan solusi inovatif di bidang teknologi informasi, konsultasi bisnis, dan manajemen proyek.',
            'image' => 'about-core.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // ourworks
        DB::table('ourworks')->insert([
            'title' => 'Pembangunan Jalan Raya Pulau Jawa',
            'description' => 'Proyek pembangunan jalan raya sepanjang 100 km di Pulau Jawa bertujuan meningkatkan konektivitas antara kota-kota besar, seperti Jakarta, Surabaya, dan Semarang. Jalur ini dirancang untuk memperlancar distribusi barang dan mobilitas masyarakat guna mendukung pertumbuhan ekonomi, khususnya di sektor perdagangan, transportasi, dan pariwisata. Proyek ini melibatkan berbagai aspek konstruksi, termasuk pembangunan jembatan untuk melintasi area sulit, sistem drainase untuk mencegah banjir, serta instalasi penerangan jalan yang ramah lingkungan. Selain itu, proyek ini menggunakan teknologi modern untuk memastikan kualitas infrastruktur yang tahan lama dan aman bagi pengguna jalan. Proses pembangunan melibatkan kolaborasi dengan masyarakat lokal untuk menciptakan peluang kerja sementara sekaligus mengurangi dampak sosial. Sebagai bagian dari tanggung jawab lingkungan, proyek ini meminimalkan dampak negatif terhadap ekosistem sekitarnya dengan melibatkan ahli lingkungan dalam perencanaan dan implementasi. Dengan adanya jalan raya ini, Pulau Jawa diharapkan menjadi model transportasi terintegrasi yang efisien, mendukung pertumbuhan wilayah perkotaan maupun pedesaan.',
            'image' => 'ourwork1.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ourworks')->insert([
            'title' => 'Energi Terbarukan Berkelanjutan di NTT',
            'description' => 'Proyek ini bertujuan mengembangkan sumber energi terbarukan di kawasan Nusa Tenggara Timur (NTT), khususnya pembangkit listrik tenaga surya dan angin. Dengan memanfaatkan potensi alam yang melimpah, proyek ini menjadi solusi untuk mengurangi ketergantungan pada energi fosil yang tidak ramah lingkungan. Energi yang dihasilkan dari proyek ini dirancang untuk mencakup kebutuhan masyarakat lokal, terutama di daerah terpencil yang selama ini sulit dijangkau oleh jaringan listrik konvensional. Selain itu, proyek ini mendukung pembangunan berkelanjutan dengan memanfaatkan teknologi ramah lingkungan, seperti panel surya efisien dan turbin angin yang dirancang untuk meminimalkan dampak terhadap satwa liar. Proyek ini juga menciptakan peluang ekonomi melalui pelatihan masyarakat lokal dalam pengelolaan fasilitas energi terbarukan, sehingga meningkatkan keterampilan dan menciptakan lapangan kerja. Dengan keberhasilan proyek ini, NTT diharapkan menjadi pelopor dalam penggunaan energi terbarukan di Indonesia dan menjadi contoh bagi daerah lain dalam menghadapi tantangan energi global.',
            'image' => 'ourwork2.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ourworks')->insert([
            'title' => 'Restorasi Hutan Tropis di Kalimantan',
            'description' => 'Proyek restorasi hutan tropis di Kalimantan ini merupakan inisiatif untuk memulihkan kawasan hutan yang telah terdegradasi akibat aktivitas manusia seperti deforestasi, illegal logging, dan ekspansi lahan pertanian. Upaya restorasi meliputi penanaman kembali pohon-pohon asli yang berfungsi sebagai habitat satwa liar dan penyerap karbon dioksida alami. Proyek ini juga mencakup rehabilitasi lahan kritis dengan teknik modern untuk memastikan keberhasilan pertumbuhan vegetasi baru. Selain aspek lingkungan, proyek ini melibatkan pemberdayaan masyarakat lokal melalui edukasi dan pelatihan terkait pelestarian hutan. Masyarakat diajak untuk berperan aktif sebagai penjaga hutan dan diberikan alternatif mata pencaharian yang tidak merusak lingkungan, seperti budidaya tanaman lokal atau ekowisata. Restorasi ini bertujuan melindungi keberagaman hayati Kalimantan, yang merupakan salah satu pusat ekosistem tropis terkaya di dunia. Dengan keberhasilan proyek ini, diharapkan kawasan hutan dapat kembali berfungsi sebagai paru-paru dunia dan sumber kehidupan bagi generasi mendatang.',
            'image' => 'ourwork3.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('ourworks')->insert([
            'title' => 'Pendidikan Keterampilan Terpadu Papua',
            'description' => 'Program ini bertujuan untuk meningkatkan kualitas hidup masyarakat Papua melalui pendidikan keterampilan yang terpadu. Pelatihan yang diberikan mencakup berbagai bidang, seperti kerajinan tangan tradisional, teknologi informasi, keterampilan industri, dan kewirausahaan. Pendekatan program ini adalah memberikan pendidikan berbasis kebutuhan lokal untuk memastikan masyarakat dapat langsung memanfaatkan keterampilan yang diperoleh dalam kehidupan sehari-hari maupun di dunia kerja. Selain itu, program ini berupaya membuka akses pelatihan kepada seluruh lapisan masyarakat, termasuk pemuda, perempuan, dan kelompok rentan. Pelatihan teknologi informasi, misalnya, dirancang untuk membantu masyarakat memahami dan memanfaatkan teknologi dalam menciptakan peluang usaha baru. Di sisi lain, pelatihan kerajinan tangan berfokus pada produk-produk khas Papua untuk mendukung pelestarian budaya lokal sekaligus meningkatkan nilai ekonomi. Dengan adanya program ini, diharapkan masyarakat Papua tidak hanya memiliki keterampilan yang relevan dengan kebutuhan pasar kerja tetapi juga mampu menciptakan lapangan kerja baru secara mandiri, sehingga meningkatkan kesejahteraan daerah secara menyeluruh.',
            'image' => 'ourwork4.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);



        // ourfeature
        DB::table('ourfeature')->insert([
            'title' => 'Our Feature',
            'sub_title' => 'Solusi Inovatif',
            'description' => 'Kami menawarkan solusi inovatif untuk setiap kebutuhan bisnis Anda, dengan pendekatan yang disesuaikan untuk memastikan kesuksesan jangka panjang. Tim kami berdedikasi untuk memberikan layanan yang tidak hanya efektif, tetapi juga memberikan nilai tambah yang dapat meningkatkan efisiensi operasional serta membantu perusahaan Anda tumbuh secara berkelanjutan.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // featurelist
        DB::table('featurelist')->insert([
            'title' => 'Digital Marketing',
            'description' => 'Kami membantu memaksimalkan strategi pemasaran digital Anda untuk menjangkau audiens lebih luas dan meningkatkan konversi secara efektif.',
            'image' => 'feature1.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('featurelist')->insert([
            'title' => 'Sistem CRM Terpadu',
            'description' => 'Kelola hubungan pelanggan Anda dengan lebih efisien menggunakan sistem CRM yang memungkinkan pengelolaan data dan interaksi lebih baik.',
            'image' => 'feature2.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('featurelist')->insert([
            'title' => 'Layanan Konsultasi',
            'description' => 'Dapatkan panduan dari para ahli kami untuk mendorong pertumbuhan bisnis Anda melalui strategi yang tepat dan solusi inovatif.',
            'image' => 'feature3.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('featurelist')->insert([
            'title' => 'Manajemen Kampanye',
            'description' => 'Optimalkan kampanye pemasaran Anda dengan analisis data dan strategi yang terarah untuk hasil terbaik yang lebih maksimal.',
            'image' => 'feature4.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // faq
        DB::table('faq')->insert([
            'ask' => 'Apa itu PT Karya Prima Usahatama?',
            'title' => 'PT Karya Prima Usahatama sebagai perusahaan yang bergerak di berbagai sektor',
            'description' => 'PT Karya Prima Usahatama adalah perusahaan yang bergerak di bidang distribusi dan pengadaan produk, dengan fokus pada penyediaan solusi berkualitas tinggi untuk berbagai kebutuhan industri. Perusahaan ini berkomitmen untuk memberikan layanan terbaik kepada pelanggan dan mitra bisnis.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('faq')->insert([
            'ask' => 'Apa layanan utama yang ditawarkan oleh PT Karya Prima Usahatama?',
            'title' => 'Layanan utama PT Karya Prima Usahatama',
            'description' => 'PT Karya Prima Usahatama menawarkan berbagai layanan, termasuk distribusi barang, pengadaan produk industri, dan solusi teknis untuk berbagai sektor. Perusahaan ini juga menyediakan layanan konsultasi untuk meningkatkan efisiensi operasional bagi perusahaan lain.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('faq')->insert([
            'ask' => 'Bagaimana sejarah berdirinya PT Karya Prima Usahatama?',
            'title' => 'Sejarah berdirinya PT Karya Prima Usahatama',
            'description' => 'PT Karya Prima Usahatama didirikan dengan tujuan untuk memenuhi kebutuhan pasar akan produk dan layanan yang berkualitas tinggi. Sejak berdiri, perusahaan ini telah berkembang pesat dengan fokus pada inovasi, kualitas produk, dan layanan yang handal.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // carousel
        DB::table('carousel')->insert([
            'title' => 'Our Moments',
            'sub_title' => 'Menampilkan Momen Terbaik',
            'description' => 'Jelajahi koleksi foto kami yang penuh inspirasi, inovasi, dan kreativitas.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // carouselist
        DB::table('carousellist')->insert([

            'description' => 'Pertamina adalah perusahaan energi milik negara Indonesia yang bergerak di bidang minyak, gas, dan energi terbarukan.',
            'image' => 'carousellist1.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('carousellist')->insert([

            'description' => 'Sebagai BUMN terbesar di sektor energi, Pertamina berperan penting dalam menjaga ketahanan energi nasional dan mendukung pembangunan berkelanjutan.',
            'image' => 'carousellist2.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('photogroup')->insert([

            'title' => 'Our Photo',
            'sub_title' => 'Foto Bersama',
            'description' => 'Menangkap setiap momen berharga dan mengabadikannya menjadi kenangan yang tak terlupakan.',
            'image' => 'photogroup.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('visionmission')->insert([

            'title' => 'Vision & Mission',
            'sub_title' => 'Visi & Misi',
            'description' => 'Kami berkomitmen untuk memberikan inovasi terbaik demi mencapai tujuan dan nilai-nilai yang kami junjung tinggi.',
            'vision_title' => 'Visi Perusahaan',
            'vision_description' => 'Menjadi perusahaan swasta profesional yang dapat mendukung PT. Perusahaan Gas Negara (Persero) Tbk dalam mewujudkan cita-cita menjadi infrastruktur nasional di bidang transmisi dan distribusi gas.',
            'mission_title' => 'Misi Perusahaan',
            'mission_description' => 'Mendayagunakan segala potensi permodalan, pensiunan, serta sumber daya lain untuk memberikan manfaat optimal dalam menunjang misi Yayasan Kesejahteraan Pegawai dan Pensiunan Gas Negara, serta memberikan kontribusi kesejahteraan bagi pensiunan.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // directors
        DB::table('directors')->insert([
            'title' => 'Board of Directors',
            'sub_title' => 'Jajaran Direksi',
            'description' => 'Tim direksi kami berkomitmen untuk memajukan perusahaan dengan kepemimpinan yang profesional dan inovatif.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('directorslist')->insert([
            'name' => 'Uji Subroto Santoso',
            'position' => 'Komisaris',
            'image' => 'ujisubroto.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('directorslist')->insert([
            'name' => 'Sugito',
            'position' => 'Direktur Utama',
            'image' => 'sugito.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('directorslist')->insert([
            'name' => 'Sutaryo',
            'position' => 'Direktur Keuangan dan Administrasi',
            'image' => 'sutaryo.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);



        DB::table('certificate')->insert([
            'title' => 'Our Certificate',
            'sub_title' => 'Sertifikat ISO',
            'description' => 'Berikut ini adalah kumpulan sertifikat dari PT Karya Prima Usahatama.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('certificatelist')->insert([
            [
                'title' => 'Sertifikat ISO - keamanan',
                'description' => 'Sertifikat ISO untuk standar keamanan',
                'image' => 'sertifikatlist-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sertifikat ISO - kualitas',
                'description' => 'Sertifikat ISO untuk standar kualitas',
                'image' => 'sertifikatlist-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sertifikat ISO - lingkungan',
                'description' => 'Sertifikat ISO untuk standar lingkungan',
                'image' => 'sertifikatlist-3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sertifikat ISO - manajemen',
                'description' => 'Sertifikat ISO untuk standar manajemen',
                'image' => 'sertifikatlist-4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('service')->insert([
            'title' => 'Our Service',
            'sub_title' => 'Layanan Kami',
            'description' => 'KPU Usahatama menyediakan berbagai layanan profesional untuk mendukung kebutuhan usaha Anda, mulai dari konsultasi pengembangan usaha, pelatihan kewirausahaan, hingga pendampingan UMKM agar dapat tumbuh dan bersaing secara berkelanjutan.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('servicelist')->insert([
            [
                'title' => 'Konstruksi Gedung Perkantoran',
                'description' => 'Pembangunan gedung perkantoran yang kokoh, fungsional, dan sesuai standar keselamatan kerja.',
                'image' => 'building.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Instalasi Listrik & Pipa Gedung',
                'description' => 'Layanan instalasi tenaga listrik serta pipa air dan gas untuk gedung dan pabrik.',
                'image' => 'electric.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Konstruksi Jalan & Saluran Air',
                'description' => 'Pembangunan infrastruktur jalan, saluran air, dan prasarana pendukung lainnya.',
                'image' => 'road.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sistem Ventilasi & AC Gedung',
                'description' => 'Pemasangan sistem pendingin udara (AC), ventilasi, dan pemanas untuk kenyamanan bangunan.',
                'image' => 'ac.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $details = [
            [
                'servicelist_id' => 1,
                'title' => 'Manpower Solution',
                'subtitle' => 'Penyediaan tenaga kerja terampil sesuai kebutuhan proyek',
                'image' => '1servicedetail1.png',
            ],
            [
                'servicelist_id' => 1,
                'title' => 'B2B Recruitment Process',
                'subtitle' => 'Proses perekrutan tenaga kerja antar perusahaan (business to business)',
                'image' => '1servicedetail2.png',
            ],
            [
                'servicelist_id' => 1,
                'title' => 'Manpower Coverage',
                'subtitle' => 'Layanan penempatan tenaga kerja di berbagai sektor industri',
                'image' => '1servicedetail3.png',
            ],
            [
                'servicelist_id' => 2,
                'title' => 'Manpower Solution',
                'subtitle' => 'Penyediaan tenaga kerja terampil sesuai kebutuhan proyek',
                'image' => '2servicedetail1.png',
            ],
            [
                'servicelist_id' => 2,
                'title' => 'B2B Recruitment Process',
                'subtitle' => 'Proses perekrutan tenaga kerja antar perusahaan (business to business)',
                'image' => '2servicedetail2.png',
            ],
            [
                'servicelist_id' => 2,
                'title' => 'Manpower Coverage',
                'subtitle' => 'Layanan penempatan tenaga kerja di berbagai sektor industri',
                'image' => '2servicedetail3.png',
            ],
            [
                'servicelist_id' => 3,
                'title' => 'Manpower Solution',
                'subtitle' => 'Penyediaan tenaga kerja terampil sesuai kebutuhan proyek',
                'image' => '3servicedetail1.png',
            ],
            [
                'servicelist_id' => 3,
                'title' => 'B2B Recruitment Process',
                'subtitle' => 'Proses perekrutan tenaga kerja antar perusahaan (business to business)',
                'image' => '3servicedetail2.png',
            ],
            [
                'servicelist_id' => 3,
                'title' => 'Manpower Coverage',
                'subtitle' => 'Layanan penempatan tenaga kerja di berbagai sektor industri',
                'image' => '3servicedetail3.png',
            ],
            [
                'servicelist_id' => 4,
                'title' => 'Manpower Solution',
                'subtitle' => 'Penyediaan tenaga kerja terampil sesuai kebutuhan proyek',
                'image' => '4servicedetail1.png',
            ],
            [
                'servicelist_id' => 4,
                'title' => 'B2B Recruitment Process',
                'subtitle' => 'Proses perekrutan tenaga kerja antar perusahaan (business to business)',
                'image' => '4servicedetail2.png',
            ],
            [
                'servicelist_id' => 4,
                'title' => 'Manpower Coverage',
                'subtitle' => 'Layanan penempatan tenaga kerja di berbagai sektor industri',
                'image' => '4servicedetail3.png',
            ],

        ];

        foreach ($details as &$detail) {
            $detail['created_at'] = Carbon::now();
            $detail['updated_at'] = Carbon::now();
        }

        DB::table('servicelist_details')->insert($details);


        DB::table('event')->insert([
            'title' => 'Our Events',
            'sub_title' => 'Kumpulan Event Kami',
            'description' => 'Temukan berbagai kegiatan dan program unggulan dari KPU Usahatama yang dirancang membangun jejaring usaha, serta mendorong kolaborasi melalui pelatihan, seminar, dan pendampingan yang inspiratif.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('eventlist')->insert([
            'title' => 'Pelatihan Kewirausahaan untuk UMKM',
            'description' => 'Karya Prima Usahatama menyelenggarakan pelatihan kewirausahaan bagi pelaku UMKM untuk meningkatkan kompetensi dalam mengelola usaha. Pelatihan ini mencakup pengelolaan keuangan, strategi pemasaran digital, serta pembuatan produk bernilai jual tinggi. Kegiatan ini diikuti oleh puluhan peserta dari berbagai daerah dengan semangat untuk membangun usaha mandiri yang berkelanjutan.',
            'image' => 'event1.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('eventlist')->insert([
            'title' => 'Pendampingan Bisnis UMKM Berbasis Digital',
            'description' => 'Sebagai bagian dari komitmen dalam transformasi digital UMKM, Karya Prima Usahatama memberikan pendampingan intensif dalam pemanfaatan teknologi seperti e-commerce, media sosial, dan sistem pencatatan digital. Program ini membantu UMKM menjangkau pasar lebih luas dan meningkatkan efisiensi operasional.',
            'image' => 'event2.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('eventlist')->insert([
            'title' => 'Pameran Produk Lokal Binaan KPU',
            'description' => 'Event ini mempertemukan pelaku UMKM binaan Karya Prima Usahatama dengan calon pembeli, investor, dan mitra bisnis. Produk-produk yang ditampilkan mulai dari makanan khas daerah, fashion, hingga kerajinan tangan. Kegiatan ini menjadi ajang promosi sekaligus validasi pasar untuk produk lokal.',
            'image' => 'event3.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('eventlist')->insert([
            'title' => 'Webinar Nasional: Strategi UMKM Tangguh',
            'description' => 'Karya Prima Usahatama mengadakan webinar nasional yang membahas strategi membangun UMKM tangguh di tengah tantangan ekonomi. Menghadirkan narasumber dari berbagai sektor, acara ini membekali peserta dengan wawasan praktis serta inspirasi dari pelaku usaha sukses.',
            'image' => 'event4.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('partner')->insert([
            'title' => 'Our Partner',
            'sub_title' => 'Partner Kami',
            'description' => 'Klien kami adalah prioritas utama, dan kami berkomitmen untuk memberikan layanan terbaik kepada mereka.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('partnerlist')->insert([
            [
                'title' => 'Perusahaan Gas Negara (PGN)',
                'image' => 'partner1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pertamina Hulu Energi (PHE)',
                'image' => 'partner2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'PT Badak NGL',
                'image' => 'partner3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pertamina Power Indonesia (PPI)',
                'image' => 'partner4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('career')->insert([
            'title' => 'Our Careers',
            'sub_title' => 'Karir Kami',
            'description' => 'Bergabunglah dengan tim kami dan kembangkan kariermu di lingkungan kerja yang dinamis, kolaboratif, dan penuh peluang. Kami percaya bahwa setiap individu memiliki potensi untuk tumbuh dan memberikan dampak positif.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('careerlist')->insert([
            [
                'title_career' => 'ADMIN',
                'description_career' => 'Bertanggung jawab atas administrasi akademi dan membantu kebutuhan tim.',
                'company_name' => 'PT. Karya Prima Usahatama',
                'location' => 'Tangerang, Banten',
                'category' => 'Administrasi & Dukungan Perkantoran',
                'job_type' => 'Full Time',
                'requirements' => 'Pendidikan minimal SMA , Pengalaman minimal 1 tahun di posisi yang sama , Pengalaman minimal 1 tahun di bidang Sports , Dapat berbahasa Inggris aktif , Mahir menggunakan komputer , Dapat segera bergabung',
                'responsibilities' => 'Menerima pendaftaran murid baru , Menginformasikan jadwal akademi , Mendata absensi murid , Surat-menyurat , Realisasi kegiatan tim , Siap membantu tim Pro , Dan lainnya',
                'deadline' => Carbon::now()->addDays(30),
                'link' => 'id.jobstreet.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title_career' => 'ASSISTANT COACH',
                'description_career' => 'Membantu pelatihan dan pengembangan pemain di akademi.',
                'company_name' => 'PT. Karya Prima Usahatama',
                'location' => 'Tangerang, Banten',
                'category' => 'Pelatihan & Pengembangan',
                'job_type' => 'Full Time',
                'requirements' => 'Pendidikan minimal D3 , Pengalaman minimal 1 tahun di posisi yang sama , Pengalaman di bidang olahraga , Dapat berbahasa Inggris aktif , Mahir menggunakan komputer',
                'responsibilities' => 'Membantu pelatihan pemain , Menyusun strategi pelatihan , Mengatur jadwal latihan , Monitoring perkembangan pemain',
                'deadline' => Carbon::now()->addDays(30),
                'link' => 'id.jobstreet.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title_career' => 'MARKETING MANAGER',
                'description_career' => 'Mengelola dan merencanakan strategi pemasaran untuk akademi sepak bola.',
                'company_name' => 'PT. Karya Prima Usahatama',
                'location' => 'Tangerang, Banten',
                'category' => 'Pemasaran & Penjualan',
                'job_type' => 'Full Time',
                'requirements' => 'Pendidikan minimal S1 , Pengalaman di bidang pemasaran , Memiliki keterampilan komunikasi yang baik , Mampu bekerja dalam tim',
                'responsibilities' => 'Menyusun strategi pemasaran , Mengelola kampanye promosi , Menjalin kerja sama dengan mitra , Meningkatkan kesadaran merek akademi',
                'deadline' => Carbon::now()->addDays(30),
                'link' => 'id.jobstreet.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title_career' => 'OPERATIONS MANAGER',
                'description_career' => 'Bertanggung jawab untuk mengelola kegiatan operasional akademi.',
                'company_name' => 'PT. Karya Prima Usahatama',
                'location' => 'Tangerang, Banten',
                'category' => 'Manajemen Operasional',
                'job_type' => 'Full Time',
                'requirements' => 'Pendidikan minimal S1 , Pengalaman di manajemen operasional , Kepemimpinan yang baik , Dapat berbahasa Inggris aktif',
                'responsibilities' => 'Mengelola kegiatan operasional harian , Mengatur jadwal akademi , Memastikan kelancaran logistik , Mengawasi staf operasional',
                'deadline' => Carbon::now()->addDays(30),
                'link' => 'id.jobstreet.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title_career' => 'SOCIAL MEDIA MANAGER',
                'description_career' => 'Mengelola akun media sosial untuk mempromosikan akademi.',
                'company_name' => 'PT. Karya Prima Usahatama',
                'location' => 'Tangerang, Banten',
                'category' => 'Pemasaran & Komunikasi',
                'job_type' => 'Full Time',
                'requirements' => 'Pendidikan minimal D3 , Pengalaman di media sosial , Kreatif dan inovatif , Mampu menulis dengan baik',
                'responsibilities' => 'Membuat dan mengelola konten sosial media , Menganalisis dan melaporkan kinerja media sosial , Meningkatkan engagement followers',
                'deadline' => Carbon::now()->addDays(30),
                'link' => 'id.jobstreet.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title_career' => 'HR MANAGER',
                'description_career' => 'Mengelola seluruh aspek sumber daya manusia di akademi.',
                'company_name' => 'PT. Karya Prima Usahatama',
                'location' => 'Tangerang, Banten',
                'category' => 'Sumber Daya Manusia',
                'job_type' => 'Full Time',
                'requirements' => 'Pendidikan minimal S1 , Pengalaman minimal 3 tahun di bidang HR , Memahami undang-undang ketenagakerjaan , Berpengalaman dalam rekrutmen',
                'responsibilities' => 'Mengelola rekrutmen , Menyusun kebijakan HR , Meningkatkan kesejahteraan karyawan , Melakukan pelatihan dan pengembangan',
                'deadline' => Carbon::now()->addDays(30),
                'link' => 'id.jobstreet.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title_career' => 'IT SUPPORT',
                'description_career' => 'Menyediakan dukungan teknis untuk perangkat dan sistem TI akademi.',
                'company_name' => 'PT. Karya Prima Usahatama',
                'location' => 'Tangerang, Banten',
                'category' => 'Teknologi Informasi',
                'job_type' => 'Full Time',
                'requirements' => 'Pendidikan minimal D3 , Memiliki pengetahuan tentang perangkat keras dan perangkat lunak , Kemampuan troubleshoot yang baik',
                'responsibilities' => 'Memberikan dukungan teknis , Memelihara sistem TI , Mengelola peralatan TI , Menyelesaikan masalah teknis',
                'deadline' => Carbon::now()->addDays(30),
                'link' => 'id.jobstreet.com',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
