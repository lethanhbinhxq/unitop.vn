<?php

function redirect_to($url = "?page=home") {
    header("Location: {$url}");
}