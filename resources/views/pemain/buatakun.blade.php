@extends('template')
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


                  </select>
                </div>
                <div class="section-title mt-0">Saldo Awal</div>
                  <div class="form-group"><label>Masukan jumlah saldo</label>
                    <input name="saldo" type="text" class="form-control">
                  </div>
                <div class="section-title mt-0">Deskripsi</div>
                  <div class="form-group"><label>Masukan deskripsi anda</label>
                    <input type="text" class="form-control">
                  </div>
                <div class="form-group">
                  <a href="#" class="btn btn-primary daterange-btn icon-left btn-icon" type="submit"><i class="fas fa-vote-yea"></i> Buat Akun</a>
                </div>
                </form>
              </div>
            </div>
          </div>
@endsection
