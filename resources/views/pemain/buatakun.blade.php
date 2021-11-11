@extends('template')
@section('judul')
        <div class="section-header">
            <h1>Tambah Akun</h1>
          </div>
@endsection
@section('main')
    <div class="section-body">

            <div class="card">
              <div class="card-body">
                <form action="/pemain/daftarakun/create" method="POST">
                  {{csrf_field()}}
                    <div class="section-title mt-0">Kode Akun</div>
                  <div class="form-group"><label>Masukan kode akun</label>
                    <input name="kode_akun" type="text" class="form-control">
                  </div>
                <div class="section-title mt-0">Nama Akun</div>
                  <div class="form-group"><label>Masukan nama akun</label>
                    <input name="nama_akun" type="text" class="form-control">
                  </div>
                <div class="section-title">Kategori Akun</div>
                <div class="form-group">
                  <label>Pilih kategori akun</label>
                  <select name="kategori_akun" class="form-control select2">
                    <option>10 AKTIVA LANCAR</option>
                    <option>11 INVESTASI JANGKA PANJANG</option>
                    <option>12 AKTIVA TETAP</option>
                    <option>13 AKTIVA TETAP TIDAK BERWUJUD</option>
                    <option>14 AKTIVA LAIN-LAIN</option>
                    <option>20 KEWAJIBAN</option>
                    <option>21 KEWAJIBAN JANGKA PANJANG</option>
                    <option>30 EKUITAS</option>
                    <option>40 PENDAPATAN</option>
                    <option>50 BEBAN</option>
                  </select>
                </div>
                <div class="section-title">Sub Akun</div>
                <div class="form-group">
                  <label>Pilih sub akun</label>
                  <select name="sub_akun" class="form-control select2">
                     '102 Persediaan barang dagang','103 Piutang usah','104 Penyisihan piutang usaha','105 Wesel tagih','106 Perlengkapan','107 Iklan dibayar dimuka','108 Sewa dibayar dimuka','109 Asuransi dibayar dimuka','111 Investasi saham','112 Investasi obligasi','121 Peralatan','122 Akumulasi penyusutan peralatan','123 Kendaraan','124 Akumulasi penyusutan peralatan kendaraan','125 Gedung','126 Akumulasi penyusutan gedung','127 Tanah','131 Hak paten','132 Hak cipta','133 Merk dagang','134 Goodwill','135 Franchise','141 Mesin yang tidak digunakan','142 Beban yang ditangguhkan','143 Piutang kepada pemegang saham','144 Beban emisi saham','201 Utang usaha','202 Utang wesel','203 Beban yang masih harus dibayar','204 Utang gaji','205 Utang sewa gedung','206 Utang pajak penghasilan','211 Utang hipotek','212 Utang obligasi','213 Utang gadai','301 Modal/ekuitas pemilik','302 Prive','401 Pendapatan usaha','410 Pendapatan di luar usaha','501 Beban gaji toko','502 Beban gaji kantor','503 Beban sewa gedung','504 Beban penyesuaian piutang','505 Beban perlengkapan kantor','506 Beban perlengkapan toko','507 Beban iklan','508 Beban penyusutan peralatan','509 Beban penyusutan','510 Beban bunga','511 Beban lain-lain','512  beban listrik','513 beban air','514 beban telepon'
                    <option>103 Piutang Usaha</option>
                    <option>104 Penyisihan piutang usaha</option>
                    <option>105 Wesel tagih</option>
                    <option>106 Perlengkapan</option>
                    <option>107 Iklan dibayar dimuka</option>
                    <option>108 Sewa dibayar dimuka</option>
                    <option>109 Asuransi dibayar dimuka</option>
                    <option>111 Investasi saham</option>
                    <option>112 Investasi obligasi</option>
                   <!--  <option>10 AKTIVA LANCAR</option>
                    <option>11 INVESTASI JANGKA PANJANG</option>
                    <option>12 AKTIVA TETAP</option>
                    <option>13 AKTIVA TETAP TIDAK BERWUJUD</option>
                    <option>14 AKTIVA LAIN-LAIN</option>
                    <option>20 KEWAJIBAN</option>
                    <option>21 KEWAJIBAN JANGKA PANJANG</option>
                    <option>30 EKUITAS</option>
                    <option>40 PENDAPATAN</option>
                    <option>50 BEBAN</option>
                    <option>10 AKTIVA LANCAR</option>
                    <option>11 INVESTASI JANGKA PANJANG</option>
                    <option>12 AKTIVA TETAP</option>
                    <option>13 AKTIVA TETAP TIDAK BERWUJUD</option>
                    <option>14 AKTIVA LAIN-LAIN</option>
                    <option>20 KEWAJIBAN</option>
                    <option>21 KEWAJIBAN JANGKA PANJANG</option>
                    <option>30 EKUITAS</option>
                    <option>40 PENDAPATAN</option>
                    <option>50 BEBAN</option>
                                        <option>10 AKTIVA LANCAR</option>
                    <option>11 INVESTASI JANGKA PANJANG</option>
                    <option>12 AKTIVA TETAP</option>
                    <option>13 AKTIVA TETAP TIDAK BERWUJUD</option>
                    <option>14 AKTIVA LAIN-LAIN</option>
                    <option>20 KEWAJIBAN</option>
                    <option>21 KEWAJIBAN JANGKA PANJANG</option>
                    <option>30 EKUITAS</option>
                    <option>40 PENDAPATAN</option>
                    <option>50 BEBAN</option>
                    <option>10 AKTIVA LANCAR</option>
                    <option>11 INVESTASI JANGKA PANJANG</option>
                    <option>12 AKTIVA TETAP</option>
                    <option>13 AKTIVA TETAP TIDAK BERWUJUD</option>
                    <option>14 AKTIVA LAIN-LAIN</option>
                    <option>20 KEWAJIBAN</option>
                    <option>21 KEWAJIBAN JANGKA PANJANG</option>
                    <option>30 EKUITAS</option>
                    <option>40 PENDAPATAN</option>
                    <option>50 BEBAN</option>
                    <option>10 AKTIVA LANCAR</option>
                    <option>11 INVESTASI JANGKA PANJANG</option>
                    <option>12 AKTIVA TETAP</option>
                    <option>13 AKTIVA TETAP TIDAK BERWUJUD</option>
                    <option>14 AKTIVA LAIN-LAIN</option>
                    <option>20 KEWAJIBAN</option>
                    <option>21 KEWAJIBAN JANGKA PANJANG</option>
                    <option>30 EKUITAS</option>
                    <option>40 PENDAPATAN</option>
                    <option>50 BEBAN</option>
                    <option>10 AKTIVA LANCAR</option>
                    <option>11 INVESTASI JANGKA PANJANG</option>
                    <option>12 AKTIVA TETAP</option>
                    <option>13 AKTIVA TETAP TIDAK BERWUJUD</option>
                    <option>14 AKTIVA LAIN-LAIN</option>
                    <option>20 KEWAJIBAN</option>
                    <option>21 KEWAJIBAN JANGKA PANJANG</option>
                    <option>30 EKUITAS</option>
                    <option>40 PENDAPATAN</option>
                    <option>50 BEBAN</option>
                    <option>10 AKTIVA LANCAR</option>
                    <option>11 INVESTASI JANGKA PANJANG</option>
                    <option>12 AKTIVA TETAP</option>
                    <option>13 AKTIVA TETAP TIDAK BERWUJUD</option>
                    <option>14 AKTIVA LAIN-LAIN</option>
                    <option>20 KEWAJIBAN</option>
                    <option>21 KEWAJIBAN JANGKA PANJANG</option>
                    <option>30 EKUITAS</option>
                    <option>40 PENDAPATAN</option>
                    <option>102 Persediaan barang dagang</option> --> 
                  </select>
                </div>
                <div class="section-title mt-0">Saldo Awal</div>
                  <div class="form-group"><label>Masukan jumlah saldo</label>
                    <input name="saldo" type="number" class="form-control">
                  </div>
                <div class="section-title mt-0">Deskripsi</div>
                  <div class="form-group"><label>Masukan deskripsi anda</label>
                    <input type="text" class="form-control">
                  </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary daterange-btn icon-left btn-icon"><i class="fas fa-vote-yea"></i> Buat Akun</button>
                  <!-- <a href="#" class="btn btn-primary daterange-btn icon-left btn-icon" ><i class="fas fa-vote-yea"></i> Buat Akun</a> -->
                </div>
                </form>
              </div>
            </div>
          </div>
@endsection
