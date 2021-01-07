<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Admin',
          'email' => 'admin@gmail.com',
          'role'=> '1',
          'thumbnail'=>'07012021095430.jpg',
          'password' => bcrypt('katasandi'),
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);
      DB::table('users')->insert([
          'name' => 'User1',
          'email' => 'user1@gmail.com',
          'role'=>'2',
          'thumbnail'=>'07012021100142.jpg',
          'password' => bcrypt('katasandi'),
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);
      DB::table('users')->insert([
          'name' => 'User2',
          'email' => 'user2@gmail.com',
          'role'=>'2',
          'thumbnail'=>'07012021100903.jpg',
          'password' => bcrypt('katasandi'),
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);
      DB::table('articles')->insert([
          'id_user'=>'1',
          'title' => 'Begini Kabar Terbaru Jack Ma yang Diduga Menghilang',
          'content' => 'KOMPAS.com - Setelah dua bulan tidak muncul di hadapan publik, banyak spekulasi yang menyebutkan bahwa pendiri Alibaba, Jack Ma, telah "hilang". Kabar menghilangnya miliarder asal China itu berembus setelah ia melontarkan kritikan pedas pada Pemerintah China. Namun, dugaan tersebut belakangan ditepis oleh jurnalis CNBC David Faber. Menurut Faber yang mendapat informasi dari sumber anonim, sebagaimana dhimpun KompasTekno, Rabu (6/1/2021), Ma bukannya menghilang, melainkan sedang sengaja menghindari sorotan publik. "Dia tidak ditangkap. Ini bukan situasi seperti Chairman Wu," kata Faber dalam acara CNBC Tuesday, mengacu pada bos Anbang Insurance yang divonis 18 tahun penjara pada tahun 2018.',
          'thumbnail' => '07012021094527.jpg',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);
      DB::table('articles')->insert([
          'id_user'=>'1',
          'title' => 'Gubernur dan Wagub Sulteng Positif Corona',
          'content' => 'Jakarta, CNN Indonesia -- Gubernur Sulawesi Tengah (Sulteng) Longki Djanggola dan Wakil Gubernur Sulteng Rusli Baco Dg Palabbi terkonfirmasi positif virus corona (Covid-19).
"Gubernur dan wakilnya diketahui terinfeksi Covid-19 pada Selasa sore (5/11) setelah hasil pemeriksaan sampel tes usap PCR keduanya keluar," kata Pelaksanatugas Kepala Biro Humas Pemprov Sulteng Moh Haris Kariming, di Kota Palu, Kamis (7/1) dikutip dari Antara.',
          'thumbnail' => '07012021101315.jpg',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
      ]);
    }
  }
