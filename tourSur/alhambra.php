<style>
    *{
        font-size: 20px;
    }
input{
    margin-bottom: 15px;
    padding: 15px;
    font-size: 20px;
    border: 1px solid deepskyblue;
}
form{
    background: yellow;
}
</style>
<?php
    $resultado = NULL;
    if( isset($_POST['formulario']))
    {
        $name = $_FILES['imagen']['name']; //CONTROLAR NOMBRE DEL RCHVIO
        $tmp_name = $_FILES['imagen']['tmp_name'];//RUTA TEMPORAL TMP_NAME ES una carpeta que siempre esta oculta en los servidores
        $error = $_FILES['imagen']['error']; //GENERAR U N ERROR SI NO SE CARGA EL ARCHIVO
        $size = $_FILES['imagen']['size']; //CONTROLAR EL TAMAÑO DEL ARCHIVO
        $maxsize = 1024*1024*1; //UN Megabyte
        $type = $_FILES['imagen']['type']; //VER EL TIPO DE ARCHIVO
        
        if($error){
            $resultado = ' Ha ocurrido un error';
        }
        else if ($size > $maxsize){
            $resultado = ' El tamaño supera el maximo permitido';
        }
        else if($type !='image/jpeg' && $type != 'image/png' && $type != 'image/gif'){
            $resultado = ' El tipo de archivo no es permitido solo se admite: JPG/PNG/GIF';
        }else
        {
            $ruta = 'imagenes/'. $name;
            move_uploaded_file($tmp_name, $ruta);
            $resultado = ' La imagen $name ha sido guardada con éxito';
        }
    }

?>
<strong><?php echo $resultado;?></strong>
<form method="post" enctype="multipart/form-data" action='<?php echo $_SERVER['PHP_SELF'];?>'>
    Subir imagen: <input type='file' name="imagen">
    <input type="hidden" name='formulario'>
    <input type="submit" value="Subir Foto">

</form>