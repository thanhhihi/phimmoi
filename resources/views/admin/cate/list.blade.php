@extends('layouts.app')

@section('title')

<title>Quản trị danh mục</title>

@section('content')

<h2 style="text align:center">Chào mừng bạn đến với trang quản lí danh mục<h2>
 

    <table class="table table-dark" style="background-color:white; color:black;">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên danh Mục</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
@endsection
