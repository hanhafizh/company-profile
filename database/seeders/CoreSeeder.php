<?php

namespace Database\Seeders;

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
            'description' => 'KPU Ushatama menyediakan berbagai layanan profesional untuk mendukung kebutuhan usaha Anda, mulai dari konsultasi pengembangan usaha, pelatihan kewirausahaan, hingga pendampingan UMKM agar dapat tumbuh dan bersaing secara berkelanjutan.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
