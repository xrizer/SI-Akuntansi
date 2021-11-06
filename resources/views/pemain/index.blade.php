@extends('template')
@section('main')


<div class="section-body">
<!--             <h2 class="section-title">Daftar pemain bola</h2>
            <p class="section-lead">Halaman ini adalah halaman berisi nama2 pemain bola</p> -->
            <div class="card">
              <div class="card-header">
                <h4>Pemain Bola</h4>
              </div>
              <div class="card-body">
                <div class="container-fluid">

        <table  class="table table-hover ml-4">
          <thead>
            <tr>
              <th scope="col">Nama pemain</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">klub asal</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pemain as $orang)
                            <tr>
                                <td>{{$orang->nama}}</td>
                                <td>{{$orang->jenis_kelamin}}</td>
                                <td>{{$orang->asal_klub}}</td>
                                <td>
                                <button type="button" class="btn btn-success"><a class="text-white text-decoration-none" href="/pemain/{{$orang->id}}">Detail</a>
                                </button>

                                <button type="button" class="btn btn-warning"><a class="text-white text-decoration-none" href="/pemain/{{$orang->id}}/edit">Edit</a></button>
                                <button type="button" class="btn btn-danger"><a class="text-white text-decoration-none" href="/pemain/{{$orang->id}}/delete">Hapus</a> </button>
                                </td>

                            </tr>
            @endforeach
          </tbody>

        </table>



              <!-- Button trigger modal -->
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah data
            </button>
        </div>
                <!-- Modal -->

        </div>

              </div>

          </div>
</div>

@endsection



