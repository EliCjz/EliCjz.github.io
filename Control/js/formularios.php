<?php
class formularios{
    private $usuario;
    private $correo;
    private $contra;
    private $noticias;
    public function inicializar($usuario,$correo,$contra,$noticias){
        $this->usuario=$usuario;
        $this->correo=$correo;
        $this->contra=$contra;
        $this->noticias=$noticias;
    }
    public function imprimir(){
       echo "El usuario es: $this->usuario<br>";
       echo "El correo es: $this->correo<br>";
       echo "La contraseña es: $this->contra<br>";
            
       
       foreach($this->noticias as $noticia){

        echo "<li>Si - $noticia</li>";
    }

    echo "</ul>";

    }

}
$usuario=$_REQUEST['usuario'];
$correo=$_REQUEST['correo'];
$contra=$_REQUEST['contra'];
$noticias=$_REQUEST['noticias'];
$form=new Formulario();
$form->inicializar($usuario,$correo,$contra, $noticias);
$form->imprimir();

?>


