<?php

# Xử lý logout
unset($_SESSION["is_login"]);
unset($_SESSION["user_login"]);

redirect_to("?page=login");