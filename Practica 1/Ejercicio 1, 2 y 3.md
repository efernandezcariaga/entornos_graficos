# Ejercitación 1 - Responder el siguiente cuestionario

## 1. Qué es HTML, cuando fue creado, cuáles fueron las distintas versiones y cuál es la última?

HTML son las siglas de *HyperText Markup Language* (lenguaje de marcado de hipertexto), es un lenguaje que se usa para indicar la estructura basica de una pagina web. Este usa distintas etiquetas para indicar los distintos elementos de del sitio; estos elemento spueden ser titulos, subitulos, parrafos, imagenes, metadatos, etc.

Su version incial fue creada en 1991, con el fin de crear un sistema de hipertexto que les permitiera a los investigadores CERN intercambiar informacion facilmente. Receien en 1995 se publico **HTML 2.0**, que fue la primera estandarizacion del lenguaje. Dos años después, en 1997, se generaron dos nuevas versiones: a principios de año se publicó la versión **HTML 3.2** y, a finales del mismo año, se publicó la actualización **HTML 4.0**. Posteriormente, a finales del año 1999, se publicó una nueva especificación oficial: la versión **HTML 4.01**. Desde el año 2014, **HTML 5** es estándar y, aunque siguen surgiendo nuevas modificaciones y actualizaciones, los cambios son mínimos y fáciles de asimilar. Por ejemplo, una de las últimas recomendaciones es **HTML 5.3**, que salió a principios del 2021, pero no significó un cambio traumático. 


## 2. ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML?

Para la creación de documentos con HTML, el W3C recomienda seguir los siguientes principios básicos:

**Estructura:** Es importante utilizar una estructura clara y semántica en el documento HTML, utilizando etiquetas adecuadas para cada sección y contenido. La estructura debe reflejar la jerarquía y relación entre los diferentes elementos del contenido.

**Separación de presentación y contenido:** El HTML debe utilizarse para definir el contenido y la estructura del documento, mientras que el diseño y la presentación deben ser controlados a través de CSS (Cascading Style Sheets).

**Accesibilidad:** El documento HTML debe ser accesible para todos los usuarios, independientemente de su discapacidad o dispositivo de acceso. Esto incluye el uso de etiquetas adecuadas para describir el contenido, el uso de atributos alt en las imágenes, el uso de enlaces de texto descriptivos, entre otros.

**Validación:** Es importante validar el código HTML para asegurarse de que cumple con los estándares definidos por el W3C y que no contiene errores. La validación ayuda a garantizar la interoperabilidad entre diferentes navegadores y dispositivos.

**Optimización:** Es importante optimizar el documento HTML para mejorar su rendimiento y velocidad de carga. Esto incluye el uso de etiquetas semánticas y ligereza en la carga de recursos, entre otros aspectos.

Siguiendo estos principios básicos, se puede garantizar que el documento HTML sea accesible, interoperable y fácil de mantener y actualizar en el futuro.

## 3. En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿y obsoleto?

Un elemento o atributo pasa a estar **desaprobado** o deprecado cuando se desaconsejado su uso, eso puede deberse a que es una etiquera desactualizada para la cual hay una alternativa mejor. Las funcionalidaes deprecadas no son elimindas directamente por los navegadores, ya que esto romperia muchos sitios que la utilizan; pero que una etiqueta este deprecada indica que dentro de poco ser obsoleta.

Un elemento o atributo es **obsoleto** cuando se retira oficialmente del estandar y ya no seguro que sea soportado por los navegadores. En algunos casos, se puede utilizar una etiqueta alternativa para reemplazar la funcionalidad de la etiqueta obsoleta.

        
## 4. ¿Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?

El DTD (Document Type Definition) es la definicion de los elementos y atributos validos un documento HTML y la forma en la que estos se pueden anidar. Basicamente es un conjunto de reglas que define la estructura del documento.

Hay 3 DTDs para HTML 4.01:
* **Strict DTD**: Este DTD define una estructura de documento muy estricta, en la que sólo se permiten elementos y atributos que están definidos en la especificación HTML 4.01. Este DTD se utiliza para documentos HTML que se ajustan estrictamente a las normas del lenguaje.
* **Transitional DTD**: Este DTD es una versión más flexible del Strict DTD, que permite la inclusión de elementos y atributos que están en desuso en HTML 4.01, pero que aún se utilizan en muchos documentos HTML existentes. Este DTD se utiliza para documentos HTML que aún utilizan elementos y atributos obsoletos, pero que aún necesitan ser visualizados correctamente.
* **Frameset DTD**: Este DTD se utiliza para documentos HTML que utilizan marcos (frames) para dividir la pantalla en varias áreas. El Frameset DTD es una variante del Transitional DTD que incluye elementos y atributos adicionales para permitir la creación y manejo de marcos.


## 5. ¿Qué son los metadatos y cómo se especifican en HTML?
Son ítems descriptivos cruciales sobre la propia web, siendo utilizado en diferentes contextos, pero especialmente al momento de informar sobre el concepto general de la página. Por ejemplo, un metadato importante es indicar que al pagina esta codificada con UTF-8, o que el autor es tal persona.

Para indicar este dato en el HTML se utiliza la etiqueta 'meta' , la cual debe estar dentro de 'head'.
```html
<!--Asi es como se especifica un metadato-->
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Julian Butti">
</head> 
```

# Ejercitación 2 - Analizar los siguientes segmentos de código indicando en qué sección del documento HTML  se colocan, cuál es el efecto que producen y señalar cada uno de los elementos, etiquetas, y atributos (nombre y valor), aclarando si es obligatorio.

## 2a)
```html
<!-- Código controlado el día 12/08/2009 -->
```

Es utilizado para realizar un comentario, se puede encontrar dentro de la etiqueta head o la etiqueta body
Los comentarios no son obligatorios

## 2b) 
```html
<div id="bloque1">Contenido del bloque1</div>
```

Es un bloque div, se coloca dentro body, el efecto que produce es el de crear un segmento que puede tener contenido, como es ente caso es el texto "Contenido del bloque1".
Tiene un atributo id cuyo valor es "bloque1".
No es obligatorio

## 2c) 
```html
<img src="" alt="lugar imagen" id="im1" name="im1" width="32" height="32" longdesc="detalles.htm" />
```

<img/> es una etiqueta utlizada para colocar una imagen, se coloca dentro del body y tiene varios atributos como src (en este caso no tiene valor), alt cuyo valor es lugar imagen",
id cuyo valor es "im1", name cuyo valor es "im1", width cuyo valor es "32", height cuyo valor es "32", longdesc cuyo valor es "detalles.htm".
No es obligatorio
        
## 2d) 
```html
<meta name="keywords" lang="es" content="casa, compra, venta, alquiler " />
<meta http-equiv="expires" content="16-Sep-2019 7:49 PM" />
```

<meta/> es una etiqueta ulizada para aportar información sobre el documento ,se coloca dentro del head

No es obligatoria.

## 2e) 
```html
<a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8"
rel="help">Resumen HTML </a>
```

La etiqueta <a/> es utlizada para especificar un hipervinculo, se coloca dentro el body, tiene varios atributos como href donde se indica la direccion a la cual se quiere acceder, en este caso http://www.e-style.com.ar/resumen.html, 
type cuyo valor es "text/html", hreflang cuyo valor es "es", charset cuyo valor es "utf-8", rel cuyo valor es "help", y el texto "Resumen HTML" es el que se verá en la pagina como enlace
No es obligatoria

## 2f)
 ```html
<table width="200" summary="Datos correspondientes al ejercicio vencido">
    <caption align="top"> Título </caption>
    <tr>
        <th scope="col">&nbsp;</th>
        <th scope="col">A</th>
        <th scope="col">B</th>
        <th scope="col">C</th>
    </tr>
    <tr>
        <th scope="row">1º</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <th scope="row">2º</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>
```

En este caso nos encontramos con las etiquetas `<table/>`, `<caption/>`, `<tr/>`, `<th/>` y `<td/>`. Estas son utilizadas dentro del body
La etiqueta `<table/>` es utilizada para indicar que se esta creando una tabla, la etiqueta <caption/> le da el titulo a la tabla, `<tr/>` es utlizada para indicar en comienzo de una fila de la tabla, `<th/>` se utiliza para marcar la primera fila de una tabla, mientras que <td/> es para indicar las celdas de la misma.
Dentro de la etiqueta `<table/>` encontramos los atributos: width="200" summary="Datos correspondientes al ejercicio vencido", dentro de la estiqueta `<th/>` encontramos el atributo scope que toma los valores de "col"o de "row"
No son obligatorias


# Ejercitación 3 -En cada caso, explicar las diferencias entre los segmentos de código y sus visualizaciones:

## 3a)
 
```html 
a href="http://www.google.com.ar">Click aquí para ir a Google</a>
<a href="http://www.google.com.ar" target="_blank">Click aquí para ir a Google</a>
<a href="http://www. google.com.ar" type="text/html" hreflang="es" charset="utf-8" rel="help">
<a href="#">Click aquí para ir a Google</a>
<a href="#arriba">Click aquí para volver arriba</a>
<a name="arriba" id="arriba"></a>
```

En el primer código que utiliza la etiqueta `<a/>` nos lleva a la pagina "http://www.google.com.ar" en una nueva pestaña, el segundo nos lleva a la misma pagina pero en la misma pestaña que nos encontrabamos.En el tercer segmento al no tener ningun texto entre la aperturra y cerradura de esta, no podremos observar el enlace en la página
En el cuarto segmento de código, al no haber un href que nos indique a que parte de la página ir, al hacer click en el enlace no nos iremos hacia ninguna otra página o moveremos dentro de la misma página
Ahora bien, el quinto y sexto segmento se complementan ya que el href="#arriba" nos llevara a la parte de la pagina donde haya una etiqueta con el id="arriba", que en este caso tambien es una etiqueta `<a/>`

## 3b)

```html
<p>
    <img src="im1.jpg" alt="imagen1" />    
    <a href="http://www.google.com.ar">Click aquí</a>
</p>

<br>

<p>
    <a href="http://www.google.com.ar">
        <img src="im1.jpg" alt="imagen1" />
    </a> 
    Click aquí
<p>

<br>

<p>
    <a href="http://www.google.com.ar">
        <img src="im1.jpg" alt="imagen1" />
        Click aquí
    </a>
</p>

<br>


<p>
    <a href="http://www.google.com.ar">
        <img src="im1.jpg" alt="imagen1" />
    </a> 
    <a href="http://www.google.com.ar">Click aquí</a>
</p>
```

En el primer caso veremos una imágen y a su lado un enlace que al hacerle click nos enviará a la página "http://www.google.com.ar"
En en segundo caso vemremos una imágen con un enlace a Google seguido de un texto sin enlace, la etiqueta de imagen está dentro de la etiqueta de enlace pero el texto está fuera
En el tercer caso una imágen y el texto "Click aquí", donde ambos nos enviaran a Google,ya que ambos estan dentro de la etiueta del enlace
En el ultimo caso tambien tendremos una imágen y un texto que nos enviaran a lapágina de Google, pero estos enlnaces estan separados, ya que se estan utilizando dos etiquetas `<a>`

<br><br>
        
## 3c)
```html
<ul>
    <li>xxx</li>
    <li>yyy</li>
    <li>zzz</li>
</ul>


<br>


<ol>
    <li>xxx</li>
    <li>yyy</li>
    <li>zzz</li>
</ol>

 
<br>

<ol>
    <li>xxx</li>
</ol>
<ol>
    <li value="2">yyy</li>
</ol>
<ol>
    <li value="3">zzz</li>
</ol>

<br>


<blockquote>
    <p>
        1. xxx <br/>
        2. yyy <br/>
        3. zzz
    </p>
</blockquote>
```
<br><br> 

En el primer caso veremos una lista no ordenada.
En el segundo caso una lista ordenada
En el tercercer caso, veremos lo mismo que en el segundo, la diferencia es que se estan utilizando 3 listas ordenadas distintas, cambiando el valor del número que apareceá pevio al tetxo
El último caso es una cita en bloque. se visualizará algo similar a una lista orenada pero en realidad solo es texto.

## 3d)

```html
<table border="1" width="300">
    <tr>
        <th>Columna 1</th>
        <th>Columna 2</th>
    </tr>
    <tr>
        <td>Celda 1</td>
        <td>Celda 2</td>
    </tr>
    <tr>
        <td>Celda 3</td>
        <td>Celda 4</td>
    </tr>
</table>

<br>

<table border="1" width="300">
    <tr>
        <td>
            <div align="center">
                <strong>Columna1</strong>
            </div>
        </td>
        <td>
            <div align="center">
                <strong>Columna2</strong>
            </div>
        </td>
    </tr>
    <tr>
        <td>Celda 1</td>
        <td>Celda 2</td>
    </tr>
    <tr>
        <td>Celda 3</td>
        <td>Celda 4</td>
    </tr>
</table>
```
La diferencia entre estos dos códigos no es algo visual, ya que ambos se ven exactamente igual en una página, sino que la diferencia cae en que la etiqueta `<th/>` de por si pone el texto en negrita y lo ubica en el centro.
Esto nos permite escribir menos etiquetas como la de `<strong/>` y `<div/>` y codigo CSS como el v align="center">

<br><br>

## 3e)
```html
<table width="200">
    <caption>Título</caption>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>

<br>

<table width="200">
<tr>
    <td colspan="3">
        <div align="center">Título</div>
    </td>
</tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
```

Ambas tablas se verán igual, la diferencia es que en la primera se está utilizando la etiqueta `<caption>` para el título mientras que en la segunda se quiere imitar esto utlizando un div con la propiedad align="center"

<br><br>


## 3f) 
```html
<table width="200">
    <tr>
        <td colspan="3">
            <div align="center">Título</div>
        </td>
    </tr>
    <tr>
        <td rowspan="2" bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>


<br>

<table width="200">
    <tr>
        <td colspan="3">
            <div align="center">Título</div>
        </td>
    </tr>
    <tr>
        <td colspan="2" bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
    <tr>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
        <td bgcolor="#dddddd">&nbsp;</td>
    </tr>
</table>
```

Este caso es similar al enterior, los dos codigos no se distinguen visualmente en la página pero como se puede observar el primer código es mas acotado, ya que la etiqueta <caption/> nos evita tener que agregar en códgio CSS 
<br><br>

## 3g)

```html
<table width="200" border="1">
    <tr>
        <td colspan="3">
            <div align="center">Título</div>
        </td>
    </tr>
    <tr>
        <td colspan="2"rowspan="2">&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="50%">&nbsp;</td>
    </tr>
</table>
```

<br>

```html
<table width="200" border="1" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="2">
            <div align="center">Título</div>
        </td>
    </tr>
    <tr>
        <td rowspan="2">&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="50%">&nbsp;</td>
    </tr>
</table>
```
Ambas son tablas de tres filas con la primera haciendo de titulo y las 2 celdas de la primera columnas juntas en una. La unica diferencia visual es que la primera tabla tiene bordes separados y la segunda tiene bordes unidos usando los atributos de tabla cellpading=0 y cellspacing=0

<br><br>

## 3h)

```html
<form id="form1" name="form1" action="procesar.php" method="post" target="_blank">
<fieldset>
    <legend>LOGIN</legend>
    Usuario: <input type="text" id="usu1" name="usu1" value="xxx" />
    <br/>
    Clave: <input type="password" id="clave1" name="clave1" value="xxx" />
</fieldset>
<input type="submit" id="boton1" name="boton1" value="Enviar" />
</form>

<br>

<form id="form2" name="form2" action="" method="get" target="_blank">
    LOGIN <br/>
    <label>Usuario: 
        <input type="text" id="usu2" name="usu2"/>
    </label>
    <br/>
    <label>
        Clave: 
        <input type="text" id="clave2" name="clave2" />
    </label>
    <br/>
    <input type="submit" id="boton2" name="boton2" value="Enviar" />
</form>

<br>

<form id="form3" name="form3" action="mailto:xx@xx.com” enctype=text/plain method="post" target="_blank">
    <fieldset>
        <legend>LOGIN</legend>
        Usuario: <input type="text" id="usu3" name="usu3" /> <br/>
        Clave: <input type="password" id="clave3" name="clave3" />
    </fieldset>
    <input type="reset" id="boton3" name="boton3" value="Enviar"/>
</form>                                                            
```

El primero es un formulario que tiene dentro de un bloque `<fieldset>`, tiene una leyenda y dos campos usuario y clave ambos con atributo value por lo que se podran ver esos valores predefinidos. Fuera del fieldset hay un boton enviar de tipo submit. El atributo action es "procesar.php" y el method post.
El segundo codigo es un formulario pero sin bloque `<fieldset>`, tambien tiene una leyenda y dos campos usuario y clave pero sin atributo value por lo cual estaran vacios. Tambien posee un boton enviar. El atributo action del form esta vacio y el metodo es get.
El ultimo segmento de codigo es un formulario y dentro de un bloque `<fieldset>` al igual que el primero. Las diferencias son que en este form el atributo action es "mailto:xx@xx.com" con method post y enctype="text/plain". En este caso el boton enviar es de tipo reset.

<br><br>

## 3i)

```html
<label>Botón 1
    <button type="button" name="boton1" id="boton1">
        <img src="logo.jpg" alt="Botón con imagen " width="30" height="20"> 
        <br/>
        <b>CLICK AQUÍ</b>
    </button>
</label>

<br>

<label>Botón 2
    <input type="button" name="boton2" id="boton2" value="CLICK AQUÍ" />
</label>
```
En el primer caso veremos un botón que incluirá una imagen y un texto que negrita que dice "CLICK AQUÍ".
En el segundo caso se verá un botón donde dentro diga "CLICK AQUÍ", este texto se lo asigna a traves de la propiedad value

<br><br>

## 3j)

```html
<p>
    <label>
        <input type="radio" name="opcion" id="X" value="X" />
        X
    </label>
    <br/>
    <label>
        <input type="radio" name="opcion" id="Y" value="Y" />
        Y
    </label>
</p>

<br>
<p>
    <label>
        <input type="radio" name="opcion1" id="X" value="X" />
        X
    </label>
    <br/>
    <label>
        <input type="radio" name="opcion2" id="Y" value="Y" />
        Y
    </label>
</p>
```
Se van a ver 4 radio buttons. Los dos primeros X e Y estan en el mismo grupo ya que tienen el mismo nombre como atributo, por esto al seleccionar uno se va a quitar la seleccion del otro. Los otros dos botones estan en diferentes grupos ya que sus atributos de nombre son diferentes y se podran seleccionar los dos a la vez.

## 3k)        


```html
<select name="lista">
    <optgroup label="Caso 1">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
    <optgroup label="Caso 2">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
</select>
<br>
<select name="lista[]" multiple="multiple">
    <optgroup label=" Caso 1">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
    <optgroup label=" Caso 2">
        <option>Mayo</option>
        <option>Junio</option>
    </optgroup>
</select>
```
La primera es una lista desplegable con dos subcategorias. Solo se puede elegir una opcion. 
La segunda es una lista igual a la primera pero con la diferencia de que se pueden elegir multiples opciones ya que tiene el atributo multiple="multiple"


