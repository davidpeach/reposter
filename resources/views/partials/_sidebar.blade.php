<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/img/david-peach-avatar.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>David Peach</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Messenger</li>

        <li>
          <a href="{{ route('messages.index') }}">
            <i class="fa fa-th"></i> <span>Upcoming Messages</span>
          </a>
        </li>

        <li>
          <a href="{{ route('posts.index') }}">
            <i class="fa fa-th"></i> <span>All Posts</span>
          </a>
        </li>

        <li>
          <a href="{{ route('posts.create') }}">
            <i class="fa fa-th"></i> <span>Add Post</span>
          </a>
        </li>

        <li>
          <a href="{{ route('messages.create') }}">
            <i class="fa fa-th"></i> <span>Add Custom Message</span>
          </a>
        </li>
      </ul>

      <ul class="sidebar-menu">
        <li class="header">QUANTIFIED</li>
        <li class="header">Listening History</li>

        <li>
          <a href="{{ route('listens.index') }}">
            <i class="fa fa-th"></i> <span>Listens</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>