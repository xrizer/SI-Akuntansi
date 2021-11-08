@extends('template')
@section('main')

        <div class="section-body">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Advanced Table</h4>
                  <div class="card-header-form">
                    <form>
                          <a class="btn btn-info" href="/pemain/daftarakun/add" role="button"> <i class="fas fa-plus"></i> Buat akun baru</a>
                          <!-- <div class="btn btn-info">
                            <i class="fas fa-plus"></i>
                            <a href="" class="">Buat akun baru</a>
                          </div> -->

                    </form>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tbody><tr>
                        <th>
                          <div class="custom-checkbox custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                          </div>
                        </th>
                        <th>Kode Akun</th>
                        <th>Nama Akun</th>
                        <th>Kategori Akun</th>
                        <th>Sub Akun</th>
                        <th>Saldo</th>
                        <th>Action</th>
                      </tr>
                      <tr>
                        <td class="p-0 text-center">
                          <div class="custom-checkbox custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                          </div>
                        </td>
                        <td>1-1001</td>
                        <td>Beban Sewa</td>
                        <td>Beban</td>
                        <td>Pinjaman</td>
                        <td>200.000</td>
                        <td><a href="#" class="btn btn-danger">Hapus</a></td>
                      </tr>
                    </tbody></table>
                  </div>
                </div>
              </div>
            </div>

          </div>
@endsection
