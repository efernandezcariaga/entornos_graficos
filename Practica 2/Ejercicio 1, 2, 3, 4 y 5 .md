# Ejercicio 1 - Responder

## 1. Qué es CSS y para qué se usa?

CSS (Cascading Style Sheets) es un lenguaje de hojas de estilo utilizado para definir la presentación visual de un documento HTML. En otras palabras, se utiliza para dar estilo a la apariencia de una página web. Podemos usarlo para darle una apariencia propia a nuestra pagina en HTML. Además, el CSS también ayuda a mejorar la accesibilidad web y la experiencia del usuario, ya que permite controlar cómo se presentan los elementos visuales en diferentes dispositivos y tamaños de pantalla.

## 2. CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan?

Las reglas de declaración de estilo se componen de dos partes principales:

selector: sirve para identificar el o los elemento HTML a los que se le aplicacara el estilo
delcaracion: se compone de una o varias propiedades y sus valores correspondientes. Las propiedades son los aspectos visuales que se desean cambiar, como el color de fondo, el tamaño de fuente, la fuente y la altura de línea.
Se escriben con la siguiente sintaxis:

```html
<selector>{
    <declaracion>
}
```

Por ejemplo, si se desea cambiar el color de fondo de un encabezado H1 a rojo, la regla de declaración de estilo podría ser así:
```html
h1{
    background-color: red;
}
```
## 3. Cuáles son las tres formas de dar estilo a un documento?

Existen tres formas de incluir CSS en un documento HTML:

-CSS externo: En el HTML debemos incluir una referencia al archivo de hoja de estilos dentro del elemento <link>
-CSS interno: Se define dentro de la etiqueta <style> de una pagina
-CSS en linea: Se puede usar un estilo en linea, para aplicar un estilo unico para un solo elemento. Los estilos en linea se definen dentro del atributo style del elemento en cuestion.


## 4. Cuáles son los distintos tipos de selectores más utilizados? Ejemplifique cada uno.

A continuacion muestro ejemplos de los 4 selectores mas usados:

```html
/* Selector de elementos  */
h1{
    color: blue;
}

/* Selector de clase  */
.miClase { 
    font-size: 1px ;
}

/* Selector id  */
#id {
    background: red; 
}

/* Selector universal  */
* {
    margin:3000px ;
}
```


## 5. Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos?

Una pseudoclase en CSS es una palabra clave que se añade a los selectores y que especifica un estado especial del elemento seleccionado. Las mas utilizadas aplicadas a vinculos son :link y :visit.

:link se utiliza para seleccionar enlaces que aún no han sido visitados por el usuario, es decir, enlaces que el usuario aún no ha hecho clic en ellos.
:visited se utiliza para seleccionar enlaces que ya han sido visitados por el usuario, es decir, enlaces que el usuario ya ha hecho clic en ellos.

## 6. Qué es la herencia?
La herencia en CSS es un mecanismo mediante el cual las propiedades de estilo aplicadas a un elemento se transmiten a sus elementos hijos. Esto significa que, si se define una propiedad de estilo en un elemento padre, todos los elementos hijos pueden heredar esa propiedad a menos que se especifique lo contrario.

Por ejemplo, si se define un color de texto en un elemento padre `<div>`, todos los elementos `<p>` que estén dentro de ese `<div>` heredarán ese color de texto a menos que se especifique un color diferente para los elementos `<p>`.

La herencia en CSS funciona de acuerdo con una jerarquía definida de elementos, en la que los elementos más internos o hijos heredan propiedades de los elementos más externos o padres. En general, los elementos más cercanos al elemento padre heredan las propiedades de estilo de forma más directa que los elementos más lejanos.

Es importante tener en cuenta que no todas las propiedades de estilo son heredadas. Por ejemplo, las propiedades de posición, tamaño y margen no se heredan, ya que su valor depende de la posición del elemento en relación con el documento y no de la posición de sus elementos padres.

## 7. En qué consiste el proceso denominado cascada?

La cascada CSS es el proceso que determina las propiedades que se asignarán a cada elemento de una página. Cuando tienes varias reglas CSS que afectan a un mismo elemento, todas ellas deben converger en una serie de estilos en base a las reglas de especificidad, al orden en el que aparecen y a su importancia.

# Ejercicio 2 - Analizar el siguiente código señalando declaraciones y aplicaciones de reglas, y su efecto.

```html
<p id="normal">Este es un párrafo</p>
<p id="destacado">Este es otro párrafo</p>
<table id="destacado">
  <tr>
    <td>Esta es una tabla</td>
  </tr>
</table>
<p id="distinto">Este es el último párrafo</p>
```

```html
p#normal { font-family: arial,helvetica; font-size: 11px; font-weight: bold; }
```

Este código se aplicará a todas las etiquetas `<p>` con el atributo id="normal", aplicantedole un tipo de fuente de letra arial y si el navegador no lo soporta usará helvetica, un tamaño de letra de 11 pixeles, y define un grosor de la fuente haciendo en este caso que esta sea negrita.

```html
*#destacado { border-style: solid; border-color: blue; border-width: 2px; }
```

Este código se aplica a todas las etiquetas que tienen el atributo id="destacado", que es este caso son una etiqueta `<p>` y una etiqueta `<table>`.
Se le asignara ambas un borde sólido, de dos pixeles y de color azul

```html
#distinto { background-color: #9EC7EB; color: red; }
```

Este código se aplica a las etiquetas con el atributo id="distinto", asignandole un color de fondo de #9EC7EB y un color de letra rojo. En este caso se aplicaría a la etiqueta `<p id="distinto">Este es el último párrafo</p>`

# Ejercicio 3 - Analizar el siguiente código señalando declaraciones y aplicaciones de reglas, y su efecto.

```html
p.quitar { color: red; } *.desarrollo { font-size: 8px; } .importante {
font-size: 20px; }
<p class="desarrollo">
  En este primer párrafo trataremos lo siguiente:
  <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="quitar">
  Este párrafo debe ser quitado de la obra…
  <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p>
  En este otro párrafo trataremos otro tema:<br />
  xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="importante">
  Y este es el párrafo más importante de la obra…
  <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<h1 class="quitar">Este encabezado también debe ser quitado de la obra</h1>
<p class="quitar importante">Se pueden aplicar varias clases a la vez</p>
```

Para empezar se le asigna un color de letra rojo a todas las etiquetas `<p>` que posean como atributo de clase con valor "quitar" (En nuestro caso son las dos útlimas etiquetas `<p>` y la `<h1>`).
A todas las etiquetas con el atributo class="desarrollo", se les dará un tamaño de letra de 8 pixeles (En este caso solo se le aplica a la primer etiqueta `<p>`)
Luego a todas las etiquetas que tengan una clase "importante" se les dará un tamaño de letra de 20 pixeles (En este caso se aplicará solo a las dos últimas etiquetas `<p>`)

# Ejercicio 4 - Analizar los siguientes códigos y comparar sus efectos. Explicar:

Dadas las siguientes declaraciones:

```html
* {color:green; } a:link {color:gray } a:visited{color:blue } a:hover
{color:fuchsia } a:active {color:red } p {font-family:
arial,helvetica;font-size: 10px;color:black; } .contenido{font-size:
14px;font-weight: bold; }
```

```html
<body>
  <p class="contenido" style="font-weight: normal;">
    Este es un texto ...............
  </p>
  <table>
    <tr>
      <td>Y esta es una tabla.......</td>
    </tr>
    <tr>
      <td><a href="http://www.google.com.ar">con un enlace</a></td>
    </tr>
  </table>
</body>
```

```html
<body class="contenido">
  <p>Este es un texto................</p>
  <table>
    <tr>
      <td>Y esta es una tabla.......</td>
    </tr>
    <tr>
      <td><a href="http://www.google.com.ar">con un enlace</a></td>
    </tr>
  </table>
</body>
```

*{color:green;} Le da a todo el texto del documento un color verde.
a:link {color:gray} Hace que todoas las etiquetas `<a>`, cuando NO haya sido visitado el enlace, tengan un color de letra gris.
a:visited{color:blue} Hace que todoas las etiquetas `<a>`, cuando SI haya sido visitado el enlace, tengan un color de letra azul.
a:hover{color:fuchsia} Hace que cuando se pasa el cursor por arriba de una etiqueta `<a>`, el color del texto del enlace cambie a fucsia.
a:active {color:red } Hace que cuando un enlace se active, se cambie el color de letra de este a rojo
p {font-family: arial,helvetica;font-size: 10px;color:black;} Aplicaria una fuente de letra "arial,helvetica", tamaño de letra de 10 pixeles y da un color negro a todas las etiquetas `<p>`
.contenido{font-size: 14px;font-weight: bold;} Asigna a todas las etiquetas con la clase "contenido" un tamaño de letra de 14 pixeles y letra negrita.

## Primer código

Lo que ocurre en el primer código es que para comenzar se le asigna un color de letra verde a todos los textos del documento.
Luego, nos encontramos con una etiqueta `<p>` con la clase "contenido", que a su vez tiene un atributo style="font-weight: normal;".
En este caso primero se le aplicarían los estilos especificados en '_', después los especificados a nivel de etiqueta 'p', luego los especificados a nivel de clase '.contendio' y por útlimo los especificados con el atributo style, por lo que visualmente veremos el párrafo "Este es un texto ..............." con un color de letra negro, con un tipo de letra norma, con una fuente de letra "arial,helvetica" y un tamaño de letra de 14 pixeles.
Algo similar ocurre con las etiquetas `<a>`, ya que primero se le aplicaran las propiedades globales (clolor:green) y las propiedades especificadas, haciendo que los enlaces se vean en gris cuando no fueron visitados, en azul cuando si lo fueron, en fucsia cuando se pasa el cursos por encima y rojos cuando están activos.
El resto de etiquetas solo se ven afectadas por los estilos definidos con '_', por lo cual el texto que se encuentra en la tabla tendrá un color verde.

## Segundo código

En este caso también se asigna un color de letra verde a todos los textos del documento, en este código, es la etiqueta `<body>` la que cuenta con las clase "contenido", y dentro de esta encontramos una etiqueta `<p>` sin ninguna clase, una etiqueta `<table>` y dentro de esta una etiqueta `<a>`
El texto dentro de la etiqueta `<p>` tendrá un color de letra negro, un tamaño de letra de 10 pixeles, una fuente de letra "arial,helvetica" y estará en negrita.
El texto dentro de la etiqueta `<table>` tendrá un color de letra negro, un tamaño de letra de 14 píxeles y estará en negrita
El texto dentro de la etiqueta `<a>` tendrá un tamaño de letra de 14 píxeles, estará en negrita pero el color de este será gris cuando no fue visitado, azul cuando si lo fuero, fuscia cuando se pasa el cursos por encima de este y rojo cuando está activo.

# Ejercicio 5 - En cada caso, declarar una regla CSS que produzca el siguiente efecto:

## 1 - Los textos enfatizados dentro de cualquier título deben ser rojos.

```html
h1,h2,h3,h4,h5,h6 strong{ 
  color:red; }
```

## 2 - Cualquier elemento que tenga asignado el atributo "href" y que esté dentro de cualquier párrafo que a su vez esté dentro de un bloque debe ser color negro.

```html
div p *[href]{ 
  color:black; }
```

## 3 - El texto de las listas no ordenadas que estén dentro del bloque identificado como “ultimo” debe ser amarillo pero si es un enlace a otra página debe ser azul.

```html
#ultimo ul{ 
  color:yellow; }
#ultimo ul a{ c
   olor:blue; }
```

## 4 - Los elementos identificados como “importante” dentro de cualquier bloque deben ser verdes, pero si están dentro de un título deben ser rojos

```html
#importante{ 
  color:green; } 
h1,h2,h3,h4,h5,h6 #importante{ 
  color:red; }
```

## 5 - Todos los elementos h1 que especifique el atributo title, cualquiera que sea su valor, deben ser azules.

```html
h1[title]{ color:blue; }
```

## 6 - El color de los enlaces en las listas ordenadas debe ser azul para los enlaces aún no visitados, y violeta para los ya visitados y, además, no deben aparecer subrayados.

```html
ol a:link{ 
  color:blue; } 
ol a:visited{ 
  color:purple; 
  text-decoration:none; }
```
