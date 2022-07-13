<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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


    <div class="container-fluid">
        <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 left">
                            <div class="dropdown">
                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
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

                        <div class="col-md-8 right">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                    <caption-top><h2>List of users</h2></caption-top>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <button type="button" class="btn btn-primary d-block mr-0 ml-auto float-end" >Back</button>
                                    </div>
                                </div>
                            <form class="fw-bold">
                                <div class="mb-3">
                                <label  class="form-label fs-6 fw-bold" >Name</label>
                                <input type="text" class="form-control" id="inputPassword">
                                </div>
                                <div class="mb-3">
                                <label  class="form-label fs-6 fw-bold">Email </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1">
                                </div>                                
                                <div class="row g-2 fs-6 fw-bold">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="" id="" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                    <label for="inputPassword2" class="form-label">Password</label>
                                    <input type="password" class="form-control"  >
                                    </div>
                                </div>
                                <div class="mb-3">
                                <label  class="form-label fs-6 fw-bold" >Address</label>
                                <input type="text" class="form-control" id="inputPassword">
                                </div>
                                <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Facebook link</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="https://example.com">
                                </div>
                                <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Youtube</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="https://example.com">
                                </div>
                                <div class="mb-3">
                                <label  class="form-label">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                
                                <div class="container my-3 bg-light">
                                    <div class="col-md-12 text-center">
                                    <button type="button" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn btn-secondary">Reset</button>
                                    </div>
                                </div>
                            </form>
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

    <script src="https://kit.fontawesome.com/b33177e463.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>
