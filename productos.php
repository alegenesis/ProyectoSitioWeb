<?php include("template/cabecera.php")?>

<?php 
include("administrador/config/bd.php");

$sentenciaSQL= $conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC); 

?>

<?php foreach($listaLibros as $libro){ ?>
<div class="col mb-3">
        <div class="card">
            <img class="card-img-top" src="img/<?php echo $libro['imagen'];?>" alt="">
        <div class="card-body">
              <h4 class="card-title"><?php echo $libro['nombre'];?></h4> 
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Ver más </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Texto de Prueba</h5></div>
                      <div class="modal-body">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque maximus nisl in laoreet ultrices. Donec at leo placerat, 
                      dapibus metus id, lacinia dolor. Phasellus porttitor ornare convallis. Nullam sit amet libero lacus. Phasellus tristique a urna quis sodales.
                      Cras urna velit, tempor non libero ut, congue ultricies est. Aenean gravida efficitur velit, vel laoreet dolor dictum ac.
                      Aenean neque turpis, gravida sed pretium id, gravida et eros. Sed rutrum, erat eu tincidunt faucibus, eros tortor posuere eros,
                      in pretium massa arcu vitae est. Nulla facilisi. Etiam ut leo suscipit lorem malesuada congue in et tortor. 
                      Proin vestibulum vulputate mauris sed tincidunt. Nullam nisl nunc,dictum in orci gravida, venenatis maximus dui.
                      Cras sit amet tincidunt nisi, id sagittis diam. Vestibulum mollis libero ut arcu varius iaculis vitae ut leo. 
                      Curabitur convallis euismod facilisis. Cras id mi quis dolor placerat ullamcorper et id sem. Mauris nibh metus,
                      iaculis id elit vel, ultricies dapibus arcu. Nam metus dui, ultrices ac sollicitudin eget, porttitor et nulla. 
                      Donec dui lorem, lobortis sed malesuada ac, euismod sit amet enim. Suspendisse at dictum diam. Aenean blandit faucibus finibus. 
                      Vivamus dapibus consequat sapien, eu maximus erat accumsan at. Mauris laoreet ex at dolor suscipit, quis tempus orci porttitor.
                      Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus pulvinar ipsum sit amet nisi porta,
                      vel scelerisque ligula laoreet. Duis congue maximus lectus vitae facilisis.
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
          </div>       
        </div>
</div>

<?php } ?>
<?php include("template/pie.php")?>

