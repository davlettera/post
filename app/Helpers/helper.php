<?php
if (!function_exists('contrastColor')) {
    function contrastColor($color) {
        // Converti il valore esadecimale del colore in RGB
        list($r, $g, $b) = sscanf($color, "#%02x%02x%02x");

        // Calcola il valore medio del colore
        $luma = (0.299 * $r + 0.587 * $g + 0.114 * $b) / 255;

        // Se il valore medio del colore è superiore a 0,5, restituisci il colore del testo nero, altrimenti restituisci il colore del testo bianco
        return $luma > 0.5 ? 'text-black' : 'text-white';
    }
}

;
