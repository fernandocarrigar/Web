<?php
include_once("Modelos/model_contactos.php");
?>


<div class="row">
    <div class="col-md-12">
        <div class="container table-responsive justify-content-center p-0 border table-scroll" style="max-height:500px;max-width:900px;">
            <table class="table table-hover table-bordered overflow-auto table-responsive-sm m-0 break-word">
                <thead class="table-dark sticky-top z-0">
                    <tr>
                        <th scope="col">Correo</th>
                        <th scope="col" colspan="3">Dirección</th>
                        <th scope="col">Código Postal</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col" class="text-center" colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dtcontactos as $contact) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($contact['Correo']); ?></td>
                            <td colspan="3"><?php echo htmlspecialchars($contact['Direccion']); ?></td>
                            <td><?php echo htmlspecialchars($contact['CodigoP']); ?></td>
                            <td><?php echo htmlspecialchars($contact['Ciudad']); ?></td>
                            <td><?php echo htmlspecialchars($contact['Estado']); ?></td>
                            <td><?php echo htmlspecialchars($contact['Telefono']); ?></td>
                            <td>
                                <a href="index.php?page=AddContactos&IdC=<?php echo $contact['IdContacto']; ?>" class="btn btn-primary btn-sm">
                                    Editar
                                </a>
                            </td>
                            <td>
                                <a href="index.php?page=Contactos&actioncon=delete&IdC=<?php echo $contact['IdContacto']; ?>" onclick="return confirm('¿Estás seguro de eliminar este contacto?');" class="btn btn-danger btn-sm">
                                    Borrar
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>