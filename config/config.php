<?php
declare(strict_types=1);

define('APP_ROOT', dirname(__DIR__));
define('DB_HOST', 'gateway01.ap-southeast-1.prod.aws.tidbcloud.com');
define('DB_PORT', '4000');
define('DB_USER', '46jZHgSHadbdFwT.root');
define('DB_PASS', 'X6Gf4DPW0KGeQhsR');
define('DB_DATABASE', 'depokin');

$docRoot = isset($_SERVER['DOCUMENT_ROOT']) ? realpath($_SERVER['DOCUMENT_ROOT']) : '';
$appRoot = realpath(APP_ROOT);
$base = ($docRoot && str_starts_with($appRoot, $docRoot)) ? substr($appRoot, strlen($docRoot)) : '';
define('BASE_URL', rtrim(str_replace('\\', '/', $base), '/'));

define('UPLOAD_DIR', APP_ROOT . '/uploads');
define('UPLOAD_URL', BASE_URL . '/uploads');

date_default_timezone_set('Asia/Jakarta');

require_once APP_ROOT . '/app/db.php';
require_once APP_ROOT . '/app/helpers.php';
require_once APP_ROOT . '/app/auth.php';
require_once APP_ROOT . '/app/articles.php';