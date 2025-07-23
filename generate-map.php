<?php
// Read from temp file, encrypt it, and store it
$path = __DIR__ . '/../src/rpms_mapping_temp.php';
$map = include $path;

if (!is_array($map)) {
    echo "Invalid map file.";
    exit(1);
}

$encrypted = \Illuminate\Support\Facades\Crypt::encrypt($map);
file_put_contents(__DIR__ . '/../.h_rpms_map.php', "<?php\nreturn '" . addslashes($encrypted) . "';\n");