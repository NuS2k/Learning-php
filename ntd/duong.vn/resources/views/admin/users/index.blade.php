@extends('layouts.admin.master')
@section('content')
<div class="col-md-7 mb-3">
  <div class="row" style="background-color: rgb(241, 241, 241);">
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
    <form action="">
      <table class="table caption-top table-striped ">
          <div class="row">
              <div class="col-md-6">
              <caption-top><h2>List of users</h2></caption-top>
              </div>
              <div class="col-md-6">
              <a href="/admin/user/create" class="btn btn-primary float-end">Add User</a>
              </div>
          </div>
          
          <thead>
              <tr>
              <th scope="col">Avatar</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Action</th>
              </tr>
          </thead>
          <tbody>
              <tr>
              <th><i class="fa-regular fa-user"></i></th>
              <td>Hoàng A Dậu</td>
              <td>hoangadieu123@gmail.com</td>
              <td><button type="button" class="btn btn-primary">Edit</button></td>
              <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
              <th ><i class="fa-regular fa-user"></i></th>
              <td>Phạm Kì Khôi</td>
              <td>phamkikhoi123@gmail.com</td>
              <td><button type="button" class="btn btn-primary">Edit</button></td>
              <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
              <th ><i class="fa-regular fa-user"></i></th>
              <td>Ngô Thái Dương</td>
              <td>thaiduongvietliekhongdau@gmail.com</td>
              <td><button type="button" class="btn btn-primary">Edit</button></td>
              <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
              <th ><i class="fa-regular fa-user"></i></th>
              <td>Phạm Ngọc Long</td>
              <td>Longpndzprovip@gmail.com</td>
              <td><button type="button" class="btn btn-primary">Edit</button></td>
              <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
              <th ><i class="fa-regular fa-user"></i></th>
              <td>Finn Anderson</td>
              <td>Karrigancsgo@gmail.com</td>
              <td><button type="button" class="btn btn-primary">Edit</button></td>
              <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
          </tbody>
      </table>
      </form>
  <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                            </ul>
                        </nav>
</div>
@endsection