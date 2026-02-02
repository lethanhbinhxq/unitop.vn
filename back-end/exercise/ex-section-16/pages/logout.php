<?php

# Xử lý logout
unset($_SESSION["is_login"]);
unset($_SESSION["user_login"]);
setcookie('is_login', false, time() - 3600);
setcookie('user_login', false, time() - 3600);

redirect_to("?page=login");