<div class="site-menubar">
  <div class="site-menubar-body">
    <div>
      <div>
        <ul class="site-menu" data-plugin="menu">
          <li class="site-menu-category">Menu</li>
          <li class="site-menu-item has-sub {{ Active::check('admin/clients',true) }} ">
            <a href="{{action('Admin\clientController@index')}}">
              <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
              <span class="site-menu-title">Clients</span>
            </a>
          </li>    
  

        </ul>
      </div>
    </div>
  </div>
</div>