
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="text-danger card-title"><u>Formulario para Editar Administradores</u> </h1>
</div>
    <form action="liceUpdate.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" class="form-control" value="<?=$adm['id']?>">
    <h5 class="text-danger card-title"><b>CARGO:</b></h5> 
    <select name="carrrera_id" class="form-control">
            