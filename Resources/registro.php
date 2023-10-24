<div class="presentacion">
  <h1>¿No estás registrado?</h1>
  <p>Regístrate y disfrutarás de una experiencia de compra más rápida</p>
</div>

<div class="formulario">
  <div class="beneficios">
    <h2>Beneficios de tener una cuenta</h2>
    <ul>
      <li>Tener acceso exclusivo a <b>ofertas y promociones.</b></li>
      <li><b>Comprar en un click.</b></li>
      <li>Revisar tu <b>historial de compras.</b></li>
      <li>Guardar y actualizar <b>tus datos o direcciones</b></li>
    </ul>
  </div>
  <div class="campos">
    <h2>Completa el siguiente formulario</h2>
    <form action="Controller/C_Registro.php" method="post">
      <input type="text" placeholder="Ingresa tu nombre" class="campo" name="nombre">
      <input type="text" placeholder="Ingresa tu apellido" class="campo" name="apellido">
      <input type="text" placeholder="Ingresa tu DNI" class="campo" name="dni">
      <input type="email" placeholder="Ingresa un email válido" class="campo" name="email">
      <input type="password" placeholder="Crea tu contraseña" class="campo" name="contraseña">
      <a href="recuperar.php" class="recuperar">¿Olvidaste tu contraseña?</a>
      <button type="submit" class="inicio" name="iniciar">Iniciar sesión</button>
    </form>
  </div>
  </div>