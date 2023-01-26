
<?php 
$routeUri = Route::currentRouteName();
$user = Auth::user();

$guard = Auth::user();

$role = DB::table('role')->Where('id',$guard->role)->first();
$ids = explode (",", $role->modules);
$modules = DB::table('modules')->whereIn('id',$ids)->get();

$accccc = [];
foreach ($ids as $id) {
 $accccc[]= $id;
}


$admin_access = [1,2,3,5,6,7,8];
$admin_navi = array_intersect($admin_access, $accccc);



$semi_admin_access = [];
$semi_admin_navi = array_intersect($semi_admin_access, $accccc);




$books_access = [];
$books_navi = array_intersect($books_access, $accccc);
$books_routes=array('books.request','books.profile');

$dashboard = in_array('4', $accccc);

?> 
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-olive elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link navbar-cyan">
    <img src="{{asset('assets/zear_logo.png')}}" alt="AdminLTE Logo" class=" brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight text-dark">ZEAR DEVELOPER</span>
  
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
       <img src="{{asset($user->image)}}" class="img-circle elevation-2" alt="User Image">
     </div>
     <div class="info">
      <a href="#" class="d-block">{{$user->name}}</a>
    </div>
  </div>

  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <nav class="mt-2">
   <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">


  @if($dashboard==1)
     <li class="nav-item ">
      <a href="{{Route('dashboard.index')}}" class="nav-link <?php echo ($routeUri=='dashboard.index') ? 'active' : '' ?> ">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
        </p>
      </a>
    </li>         
@endif





    @if(count($books_navi) > 0)
    <!-- administrator -->

    <?php 
    $booksaccess = DB::table('modules')->whereIn('id',$books_navi)->orderByRaw("field(id,".implode(',',$books_navi).")")->get(); 
    $booksarray = DB::table('modules')->whereIn('id',$books_navi)->pluck('default_url');
  
    ?>

    <li class="nav-item <?php echo (in_array($routeUri, json_decode($booksarray,true))) ? 'menu-open' : '' ?><?php echo (in_array($routeUri, $books_routes)) ? 'menu-open' : '' ?>">
      <a href="#" class="nav-link <?php echo (in_array($routeUri, json_decode($booksarray,true))) ? 'active' : '' ?> <?php echo (in_array($routeUri, $books_routes)) ? 'active' : '' ?>">
        <i class="nav-icon fas fa-briefcase"></i>
        <p>
         Books
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">

        @foreach($booksaccess as $arow)
        <li class="nav-item">
          <a href="{{Route($arow->default_url)}}" class="nav-link <?php echo ($routeUri==$arow->default_url) ? 'active' : '' ?> <?php echo (in_array($routeUri, $books_routes)) ? 'active' : '' ?> ">
            <i class="fas {{$arow->icon}}"></i>
            <p>{{$arow->module}}</p>
          </a>
        </li>
        @endforeach


      </ul>
    </li>

    @endif



    @if(count($semi_admin_navi) > 0)
    <!-- administrator -->

    <?php 
    $semiadminaccess = DB::table('modules')->whereIn('id',$semi_admin_navi)->orderByRaw("field(id,".implode(',',$semi_admin_navi).")")->get(); 
    $semiadminarray = DB::table('modules')->whereIn('id',$semi_admin_navi)->pluck('default_url');
  
    ?>

    <li class="nav-item <?php echo (in_array($routeUri, json_decode($semiadminarray,true))) ? 'menu-open' : '' ?> ">
      <a href="#" class="nav-link <?php echo (in_array($routeUri, json_decode($semiadminarray,true))) ? 'active' : '' ?>">
        <i class="nav-icon fas fa-globe"></i>
        <p>
          Website Data
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">

        @foreach($semiadminaccess as $aarow)
        <li class="nav-item">
          <a href="{{Route($aarow->default_url)}}" class="nav-link <?php echo ($routeUri==$aarow->default_url) ? 'active' : '' ?> ">
            <i class="fas {{$aarow->icon}}"></i>
            <p>{{$aarow->module}}</p>
          </a>
        </li>
        @endforeach


      </ul>
    </li>

    @endif



    @if(count($admin_navi) > 0)
    <!-- administrator -->

    <?php 
    $adminaccess = DB::table('modules')->whereIn('id',$admin_navi)->orderByRaw("field(id,".implode(',',$admin_navi).")")->get(); 
    $adminarray = DB::table('modules')->whereIn('id',$admin_navi)->pluck('default_url');
  
    ?>

    <li class="nav-item <?php echo (in_array($routeUri, json_decode($adminarray,true))) ? 'menu-open' : '' ?> ">
      <a href="#" class="nav-link  <?php echo (in_array($routeUri, json_decode($adminarray,true))) ? 'active' : '' ?> ">
        <i class="nav-icon fas fa-code"></i>
        <p>
          Administrator
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">

        @foreach($adminaccess as $aarow)
        <li class="nav-item">
          <a href="{{Route($aarow->default_url)}}" class="nav-link <?php echo ($routeUri==$aarow->default_url) ? 'active' : '' ?> ">
            <i class="fas {{$aarow->icon}}"></i>
            <p>{{$aarow->module}}</p>
          </a>
        </li>
        @endforeach


      </ul>
    </li>

    @endif





  </ul>
</nav>
   
</div>
</aside>
