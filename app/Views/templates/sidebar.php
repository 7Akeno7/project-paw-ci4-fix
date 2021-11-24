<div class="container-fluid page-body-wrapper">
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="
            nav-item
            <?= isset($segments[0]) && $segments[0] == 'user' ? 'active' : ''; ?>
          ">
            <a
              class="nav-link"
              href="<?= base_url('user'); ?>"
              aria-expanded="false"
              aria-controls="auth"
            >
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">My Profile</span>
            </a>
          </li>
          <?php if(in_groups('admin')) { ?>
          <li class="
            nav-item
            <?= isset($segments[1]) && $segments[1] == 'userList' ? 
              'active' : ''; ?>
          ">
            <a
              class="nav-link"
              href="<?= route_to('userList'); ?>"
              aria-expanded="false"
              aria-controls="auth"
            >
              <i class="icon-grid-2 menu-icon""></i>
              <span class="menu-title">List User</span>
            </a>
          </li>

          <li class="
            nav-item
            <?= isset($segments[0]) && isset($segments[1]) && 
                $segments[0] == 'penulis' && 
                ($segments[1] == 'index' || $segments[1] == 'formTambah' )? 
                'active' : ''; ?>
          ">
            <a
              class="nav-link"
              href="<?= route_to('listPenulis'); ?>"
              aria-expanded="false"
              aria-controls="auth"
            >
              <i class="icon-grid-2 menu-icon""></i>
              <span class="menu-title">List Penulis</span>
            </a>
          </li>

          <li class="
            nav-item
            <?= isset($segments[0]) && isset($segments[1]) && 
                $segments[0] == 'buku' && 
                ($segments[1] == 'index' || $segments[1] == 'formTambah' )? 
                'active' : ''; ?>
          ">
            <a
              class="nav-link"
              href="<?= route_to('listBuku'); ?>"
              aria-expanded="false"
              aria-controls="auth"
            >
              <i class="icon-grid-2 menu-icon""></i>
              <span class="menu-title">List Buku</span>
            </a>
          </li>
          <?php } ?>
          
          <li class="nav-item">
            <a
              class="nav-link"
              data-toggle="collapse"
              href="#ui-basic"
              aria-expanded="false"
              aria-controls="ui-basic"
            >
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Books Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#"
                    >Teknologi</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"
                    >Kesenian</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"
                    >Lingkungan</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"
                    >Sains</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"
                    >Sosial</a
                  >
                </li>
              </ul>
            </div>
          </li>
          </li>
        </ul>
      </nav>
    </ul>
  </nav>