@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Mahasiswa</h1>
            </div>

            <table class="table">
            	<thead class="thead-dark">
            		<tr>
            			<th scope="col">No</th>
	            		<th scope="col">Nama</th>
	            		<th scope="col">NRP</th>
	            		<th scope="col">Email</th>
	            		<th scope="col">Jurusan</th>
	            		<th scope="col">Aksi</th>
            		</tr>
            	</thead>
            	<tbody>
            		@foreach($mahasiswa as  $mhs)
	            		<tr>
	            			<th scope="row">{{ $loop->iteration }}</th>
	            			<th>{{ $mhs->name }}</th>
	            			<th>{{ $mhs->nrp }}</th>
	            			<th>{{ $mhs->email }}</th>
	            			<th>{{ $mhs->jurusan }}</th>
	            			<th>
	            				<a href="{{ url('/edit') }}" class="badge badge-success">edit</a>
	            				<a href="#" class="badge badge-danger">delete</a>
	            			</th>
	            		</tr>
	            	@endforeach
            	</tbody>
            </table>
        </div>
    </div>
@endsection