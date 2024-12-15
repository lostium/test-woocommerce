<?php

// Prevenir cualquier tipo de caché
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Fecha en el pasado

// Incluir el archivo restore-plugin.php
require_once dirname(__DIR__) . '/restore-plugin.php';

// La función restore_seur_plugin() se ejecutará automáticamente
// ya que está al final del archivo restore-plugin.php
