<?php 
class redSocial {
    private $intereses = array(
        'Lectura',
        'Videojuegos',
        'Musica'
    );

    private $interesesConId = array(
        array('id' => 1, 'nombre' => 'Lectura'),
        array('id' => 2, 'nombre' => 'Videojuegos'),
        array('id' => 3, 'nombre' => 'Musica')
    );

    public function obtenerInteresesComoCadena() {
        return "Intereses: " . implode(', ', $this->intereses);
    }

    public function obtenerInteresesConIdComoLista() {
        $html = '<ul>';
        foreach ($this->interesesConId as $interes) {
            $html .= '<li>ID: ' . $interes['id'] . ' - Nombre: ' . $interes['nombre'] . '</li>';
        }
        $html .= '</ul>';
        return $html;
    }

    public function agregarInteres($nombre) {
        // Generar un nuevo ID basado en la cantidad actual de intereses
        $nuevoId = count($this->interesesConId) + 1;

        // Agregar interés al arreglo con ID
        $this->interesesConId[] = array('id' => $nuevoId, 'nombre' => $nombre);
        
        // Agregar interés al arreglo sin ID
        $this->intereses[] = $nombre;
    }

    public function obtenerInteresesConNumerosAleatorios() {
        $interesesConNumeros = $this->intereses;
    
        // Asigna números aleatorios como claves para mezclar los intereses
        $mezclado = [];
        foreach ($interesesConNumeros as $interes) {
            $mezclado[mt_rand()] = $interes;
        }
    
        // Ordena el arreglo por las claves aleatorias
        ksort($mezclado);
    
        $html = '<ul>';
        foreach (array_values($mezclado) as $index => $interes) {
            $html .= '<li>' . ($index + 1) . '. ' . $interes . '</li>';
        }
        $html .= '</ul>';
        return $html;
    }
}

?>