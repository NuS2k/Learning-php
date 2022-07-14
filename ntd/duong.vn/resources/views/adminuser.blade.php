<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <header class="container-fluid bg-secondary sticky-top">
                <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">GOLSOFT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="col-md-12 text-center text-white fw-bold  ">
                        <span>Header</span>
                    </div>
                </div>
            </div>
            </nav>
    </header>


    <div class="container-fluid sidebar">
        <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="dropdown">
                            <button class="btn  dropdown-toggle fw-bold" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
                            System
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><button class="dropdown-item" type="button">User management</button></li>
                                <li><button class="dropdown-item" type="button">Role management</button></li>
                                <li><button class="dropdown-item" type="button">Permission management</button></li>
                            </ul>
                            </div>
                            <div class="dropdown">
                            <br><br><br/><br><br>
                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            Catalog
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><button class="dropdown-item" type="button">Product management</button></li>
                                <li><button class="dropdown-item" type="button">Category management</button></li>
                            </ul>
                            </div>
                        </div>

                        <div class="col-md-8">
                        <div class="container-fluid">
                            <div class="table-responsive table-bordered border-light">
                                <form action="">
                                <table class="table caption-top table-striped ">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <caption-top><h2>List of users</h2></caption-top>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-primary d-block mr-0 ml-auto" class="right">Add User</button>
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
                            </div>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>


    <footer>
        <nav class="navbar navbar-expand-sm navbar-dark fixed-bottom bg-secondary">
        <div class="col-md-12 text-center text-white fw-bold  ">
                    <span>Footer</span>
                </div>
        </nav>
    </footer>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b33177e463.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
