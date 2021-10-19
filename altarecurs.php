<html>
    <body>
<?php
    session_start();
    include_once ('./classes/GestRecursos.php');
   /* $recurs['nom'] = $_POST['nomrecurs'];
    $recurs['aportat'] = $_POST['aportatper'];
    $_SESSION['recursos'][] = $recurs; */
    
/*    print_r($recurs);*/

    $recurs1 = new GestRecursos();

    $_SESSION['recursos'] = [];

    $recurs1->alta("Asd","Impresora");
    $recurs1->alta("2","Impresora 3D");

    $recurs1->mostrar();

    print_r($_SESSION);
    session_destroy();
    //var_dump($recurs1);

   /* $recurs1->llistarRecursos($recurs);
    $recurs1->crearRecurs($_POST['nomrecurs'], $_POST['aportatper']);
    $recurs1->alta($_POST['nomrecurs'], $_POST['aportatper']);
    $recurs1->crearRecurs(2,2);*/
?>
    </body>
</html>