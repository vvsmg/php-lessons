<?php

require_once __DIR__ . '/models/news.php';

$news = News_getAll();

include 'view/index.php';