<?php

function restore_seur_plugin() {
    // Cambiar al directorio correcto del proyecto
    $project_dir = '/srv/www/test-woocommerce.lostium.com/current';
    chdir($project_dir);
    
    // Ruta al directorio del plugin
    $plugin_dir = '/srv/www/test-woocommerce.lostium.com/current/web/app/plugins/seur';
    
    echo "Iniciando proceso...\n\n";
    echo "Ejecutando: wp plugin deactivate seur --skip-plugins=seur\n";
    exec('cd ' . $project_dir . ' && wp plugin deactivate seur --skip-plugins=seur 2>&1', $wp_output, $wp_return);
    echo implode("\n", $wp_output) . "\n\n";
    $wp_output = [];
    echo "Ejecutando: wp plugin list\n";
    exec('cd ' . $project_dir . ' && wp plugin list --format=yaml 2>&1', $wp_output, $wp_return);
    echo implode("\n", $wp_output) . "\n\n";
    
    // Añadir enlace para reactivar el plugin con número aleatorio
    $random = rand(1000, 9999);
    echo "<strong>El plugin ha sido desactivado, puedes reactivarlo aquí: <a href='/wp/wp-admin/plugins.php?r={$random}'>Gestionar plugins</a></strong>\n";
}

// Ejecutar la función
echo "<pre>";
restore_seur_plugin();
echo "</pre>";

