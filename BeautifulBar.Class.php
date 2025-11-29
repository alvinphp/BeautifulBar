<?php 
 /** 
  * Clase BeautifulBar
  * clase para cambiar el color de la barra de busqueda 
  * en dispositivos moviles
  */
 class BeautifulBar
 {  
           // funcion para validar el codigo del color 
    public static function ValidateColor($color){

      return preg_match('/^#[0-9A-Fa-f]{6}$/', $color);
  }

 	// agregar color a la barra de estado
  public static function AddColorBar($color = '#000000'){

      if(!self::ValidateColor($color)){

       throw new Exception("The color '$color' is not valid. It must be a hexadecimal code.");
   }

      // add tag

   echo '<meta name="theme-color" content="' . $color . '">';

}
 	// funcion para manejar excepciones
public static function AddColorBarBrowser($color = '#000000'){

    try {
    	self::AddColorBar($color);

    } catch (Exception $e) {

        echo 'Oops! Something went wrong:' . $e->getMessage();
    }
}
}

