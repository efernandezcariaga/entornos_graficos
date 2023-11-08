<title>Modificacion</title>
</head>
<boby>
  <?php
  include("configuracion.inc");
  //Captura datos desde el Form anterior
  $ciudad = $_POST['ciudad'];
  //Arma la instrucción SQL y luego la ejecuta
  $vSql = "SELECT * FROM capitales WHERE ciudad ='$ciudad' ";
  $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));;
  $fila = mysqli_fetch_array($vResultado);
  if (mysqli_num_rows($vResultado) == 0) {
    echo ("Ciudad Inexistente...!!! <br>");
    echo ("<A href='formModificar.html'>Continuar</A>");
  } else {
  ?>
    <FORM action="modificar.php" method="POST" name="FormModi">
      <table width="356">
        <tr>
          <td width="103"> Ciudad: </td>
          <td width="243"> <input type="text" disabled  value="<?php
                                                                    echo ($fila['ciudad']); ?>">
          </td>
        </tr>
        <tr>
          <td style="display: none;""> <input type="text"  name="ciudad" value="<?php
                                                                    echo ($fila['ciudad']); ?>">
          </td>
        </tr>
        <tr>
          <td width="103"> Pais: </td>
          <td width="243"> <input type="TEXT" name="pais" size="20" maxlength="20" value="<?php echo ($fila['pais']); ?>">
          </td>
        </tr>
        <tr>
          <td width="103"> Habitantes: </td>
          <td width="243"> <input type="TEXT" name="habitantes" size="20" maxlength="20" value="<?php echo ($fila['habitantes']); ?>">
          </td>
        </tr>
        <tr>
          <td width="103"> Superficie: </td>
          <td width="243"> <input type="TEXT" name="superficie" size="20" maxlength="40" value="<?php echo ($fila['superficie']); ?>">
          </td>
        </tr>
        <tr>
          <td width="103"> Tiene Metro?: </td>
          <TD> <INPUT TYPE="radio" name="respuesta" <?php  if(!$fila['tieneMetro']){ echo 'checked';}else{ echo '';}; ?> id="si" value="si">SI</TD>
          <TD> <INPUT TYPE="radio" name="respuesta" <?php  if($fila['tieneMetro']){ echo "checked";}else{ echo '';}      ; ?>  id="no" value="no">NO</TD>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center"> <input type="SUBMIT" name="Submit" value="Modificar">
          </td>
        </tr>
      </table>
    </FORM>
  <?php
  }
  // Liberar conjunto de resultados
  mysqli_free_result($vResultado);
  // Cerrar la conexion
  mysqli_close($link);
  ?>