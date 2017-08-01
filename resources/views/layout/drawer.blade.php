<body class="drawer drawer--left">
  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only">toggle navigation</span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li><a href="/system_lara/public" class="drawer-brand">MENU</a></li>
        <li><a href="/system_lara/public/login" class="drawer-menu-item">ログイン</a></li>
        <li><a  href="/system_lara/public/create" class="drawer-menu-item">ユーザー登録</a></li>
        <li><a href="/system_lara/public/system" class="drawer-menu-item">コンテンツ表示</a></li>
        @if ($cookie_id=='admin01')
            <li><a href="http://localhost:8888/phpMyAdmin/db_structure.php?server=1&db=system2017&token=4c41df79b4490f3f2003dd320b49c6fd" class="drawer-menu-item" target="_blank">データベース</a></li>
        @endif
      </ul>
    </nav>
  </header>
  <main role="main">
    <!-- コンテンツ -->
  </main>
</body>
