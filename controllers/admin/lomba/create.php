<?php

authorize(isset($_SESSION['user']['hak_akses']) ? $_SESSION['user']['hak_akses'] === 'admin' : false, 403);

view('dashboard_admin/lomba/create.view.php', [
    'css' => 'dashboard.css',
    'title' => 'Dashboard'
]);