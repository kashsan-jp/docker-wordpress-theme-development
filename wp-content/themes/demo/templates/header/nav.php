<?php
    // wp_nav_menu([
    //    "theme_location" => "header_nav",
    //    "container_class" => "my_header_menu"
    // ]);
    $locations = get_nav_menu_locations();
    $menu_id = $locations["header_nav"];
    $header_menus = wp_get_nav_menu_items($menu_id);

    //デバッグコード
    // echo "<pre>";
    // print_r($header_menus);
    // wp_die();
;
?>_

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <!-- カスタムロゴの表示 -->
        <?php
        if(function_exists("the_custom_logo")){
            the_custom_logo();
        }
        ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- $header_menusが空じゃなく、かつ配列nおデータである時 -->
        <?php if(!empty($header_menus) && is_array($header_menus)):?>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php foreach($header_menus as $header_menu):?>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo esc_url($header_menu->url)?>">
                <?php echo esc_html($header_menu -> title);?>
            </a>
            </li>
        <?php endforeach;?>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>
      <?php endif;?>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>