<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarakunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftarakun', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_akun',30);
            $table->string('nama_akun',30);
            $table->enum('kategori_akun',['10 AKTIVA LANCAR','11 INVESTASI JANGKA PANJANG','12 AKTIVA TETAP','13 AKTIVA TETAP TIDAK BERWUJUD','14 AKTIVA LAIN-LAIN','20 KEWAJIBAN','21 KEWAJIBAN JANGKA PANJANG','30 EKUITAS','40 PENDAPATAN','50 BEBAN']);
            $table->enum('sub_akun',['102 Persediaan barang dagang','103 Piutang usah','104 Penyisihan piutang usaha','105 Wesel tagih','106 Perlengkapan','107 Iklan dibayar dimuka','108 Sewa dibayar dimuka','109 Asuransi dibayar dimuka','111 Investasi saham','112 Investasi obligasi','121 Peralatan','122 Akumulasi penyusutan peralatan','123 Kendaraan','124 Akumulasi penyusutan peralatan kendaraan','125 Gedung','126 Akumulasi penyusutan gedung','127 Tanah','131 Hak paten','132 Hak cipta','133 Merk dagang','134 Goodwill','135 Franchise','141 Mesin yang tidak digunakan','142 Beban yang ditangguhkan','143 Piutang kepada pemegang saham','144 Beban emisi saham','201 Utang usaha','202 Utang wesel','203 Beban yang masih harus dibayar','204 Utang gaji','205 Utang sewa gedung','206 Utang pajak penghasilan','211 Utang hipotek','212 Utang obligasi','213 Utang gadai','301 Modal/ekuitas pemilik','302 Prive','401 Pendapatan usaha','410 Pendapatan di luar usaha','501 Beban gaji toko','502 Beban gaji kantor','503 Beban sewa gedung','504 Beban penyesuaian piutang','505 Beban perlengkapan kantor','506 Beban perlengkapan toko','507 Beban iklan','508 Beban penyusutan peralatan','509 Beban penyusutan','510 Beban bunga','511 Beban lain-lain','512  beban listrik','513 beban air','514 beban telepon']);
            $table->integer('saldo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftarakun');
    }
}
