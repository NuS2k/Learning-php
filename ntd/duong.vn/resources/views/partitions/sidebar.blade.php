<div class="container">
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="sidenav">
          <ul class="list-unstyled"> System 
            <li><a href="/admin/user" class="list-group-item list-group-item-action">User management</a></li>
            <li><a href="/admin/role" class="list-group-item">Role management</a></li>
            <li><a href="/admin/permission" class="list-group-item">Permission management</a></li>           
          </ul>
          <ul class="list-unstyled">  Catalog
            <li><a href="/admin/product" class="list-group-item">Product management</a></li>
            <li><a href="/admin/category" class="list-group-item">Category management</a></li>
          </ul>
        </div>
      </div>
      @yield('content')
    </div>
  </div>