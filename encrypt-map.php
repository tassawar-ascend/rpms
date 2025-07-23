<?php

use Illuminate\Support\Facades\Crypt;

require __DIR__ . '/vendor/autoload.php';

$app = require __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$mappingFile = __DIR__ . '/rpms_mapping_temp.php';
$encryptedFile = __DIR__ . '/src/Helpers/.h_rpms_map.php';

if (!file_exists($mappingFile)) {
    echo "Mapping file not found.\n";
    exit(1);
}

$map = include $mappingFile;
$encrypted = Crypt::encrypt($map);

$phpContent = "<?php\n\nreturn '" . addslashes($encrypted) . "';\n";

file_put_contents($encryptedFile, $phpContent);

echo "Encrypted route map written to: $encryptedFile\n";
