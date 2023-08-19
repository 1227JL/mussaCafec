<?php
    require_once 'includes/config/database.php';
    require_once 'includes/funciones.php';


    // Conexión a la base de datos
    $db = conectarDB();

    // Consulta preparada
    $query = "SELECT * FROM events;";
    $stmt = mysqli_prepare($db, $query);

    if ($stmt) {
        mysqli_stmt_execute($stmt);
        $concursos = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($concursos) > 0) {
            
        } else {
            echo "No se encontraron eventos.";
        }
    } else {
        die("Error en la consulta preparada: " . mysqli_error($db));
    }
?>
<div class="grid-concursos">
    <h1 class="heading">CONCURSOS</h1>
    <?php foreach($concursos as $concurso): ?>
        <div class="evento_card">
            <img src="/build/img/<?php echo $concurso['image'];?>" alt="banner concurso">
            <div class="evento_card-data">
                <h3 class="heading"><?php echo $concurso['title'];?></h3>
                <span class="fecha">Fecha: 20/10/2023</span>
                <p class="description"><?php echo $concurso['description'];?></p>
                <a class="boton-amarillo" href="/formularios?concurso=<?php echo replaceSpacesWithHyphens($concurso['title']);?>">Inscribete</a>
            </div>
        </div>
    <?php endforeach;?>
</div>
<?php
    mysqli_close($db);
?> 
    