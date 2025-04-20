<?php include 'includes/header.php'; ?>
<main>
<img src="https://grupopana.com.pe/hubfs/Cuponera%20Final-3.png" class="img-contacto" alt="...">
 <br><br>
 <div class="container">
 <p><span><strong>AutoVibe del Perú</strong></span> es importante y distribuidor exclusivo de la marca <span><strong>AUTOVIBE</strong></span> en el peru, no vende al cliente final. Para la 
la compra de unidades y repuestos contacte a su concesionario autorizado.</p>
<br>
<p><strong>¿Que deseas realizar?</strong></p>
<br>
<div class="opciones">
<button type="button" class="btn btn-secondary btn-lg ">Consulta</button>
<button type="button" class="btn btn-secondary btn-lg ">Reclamo</button>
</div>
<br><br>
<P><strong>RELLENAR EL SIGUEINTE FORMULARIO</strong></P>

<section class="formulario1 py-5">
  <div class="container px-3">
    <div class="mx-auto" style="max-width: 900px;">
      <form class="row g-3">
      <P><strong>DATOS PERSONALES</strong></P>
        <div class="col-12 col-md-4">
          <label for="nombre" class="form-label">NOMBRE</label>
          <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
        </div>
        <div class="col-12 col-md-4">
          <label for="apellidos" class="form-label">APELLIDOS</label>
          <input type="text" class="form-control" id="apellidos" placeholder="Ingrese sus apellidos">
        </div>
        <div class="col-12 col-md-4">
          <label for="dni" class="form-label">DNI</label>
          <input type="number" class="form-control" id="dni" placeholder="Ingrese su DNI">
        </div>
        <div class="col-12 col-md-4">
          <label for="telefono" class="form-label">TELÉFONO</label>
          <input type="number" class="form-control" id="telefono" placeholder="Ingrese su teléfono">
        </div>
        <div class="col-12 col-md-4">
          <label for="celular" class="form-label">CELULAR</label>
          <input type="number" class="form-control" id="celular" placeholder="Ingrese su celular">
        </div>
        <div class="col-12 col-md-4">
          <label for="email" class="form-label">E-MAIL</label>
          <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico">
        </div>
        <div class="col-12">
          <label for="direccion" class="form-label">DIRECCIÓN</label>
          <input type="text" class="form-control" id="direccion" placeholder="AV.">
        </div>
        <p class="mt-4 fw-bold">DATOS DEL VEHÍCULO</p>
        <div class="col-12 col-md-6">
          <label for="placa" class="form-label">PLACA</label>
          <input type="text" class="form-control" id="placa" placeholder="Ingrese la placa del vehículo">
        </div>
        <div class="col-12 col-md-4">
          <label for="modelo" class="form-label">MODELO</label>
          <select id="modelo" class="form-select">
            <option selected>Elije...</option>
            <option>Camioneta</option>
            <option>Deportivo</option>
            <option>SVU</option>
          </select>
        </div>
        <div class="col-12 col-md-2">
          <label for="propietario" class="form-label">PROPIETARIO</label>
          <input type="text" class="form-control" id="propietario" placeholder="Ingrese el propietario del vehículo">
        </div>
        <div class="form-floating col-12">
          <textarea class="form-control" placeholder="Deje su mensaje" id="mensaje" style="height: 100px"></textarea>
          <label for="mensaje">Deje su mensaje</label>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="terminos">
            <label class="form-check-label" for="terminos">
              He leído y acepto los <strong>Términos y Condiciones</strong>
            </label>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="privacidad">
            <label class="form-check-label" for="privacidad">
              He leído y acepto la <strong>Política de Privacidad</strong>
            </label>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </div>
        <div class="col-12 col-md-6">
          <button type="reset" class="btn btn-danger w-100">Borrar</button>
        </div>
      </form>
    </div>
  </div>
</section>


</div>
<br><br>


</main>
<?php include 'includes/footer.php'; ?>