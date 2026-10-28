# Ejercitación 3 - Comparación de código

## 3.a

El primer enlace abre Google en la misma pestaña.

El segundo utiliza `target="_blank"` y abre el destino en otra pestaña o ventana.

El tercero agrega información sobre el tipo de contenido, idioma, codificación y relación del enlace. Estos atributos no cambian por sí solos su apariencia. En la consigna aparece incompleto, sin texto ni etiqueta de cierre.

El cuarto utiliza `href="#"`, por lo que apunta al comienzo de la página actual.

El quinto apunta al elemento identificado como `arriba`. Su posición dependerá de dónde se encuentre ese elemento.

El último define el destino llamado `arriba` y no muestra texto.

## 3.b

En el primer caso, solamente el texto es un enlace.

En el segundo, solamente la imagen es un enlace.

En el tercero, la imagen y el texto pertenecen al mismo enlace.

En el cuarto, la imagen y el texto pertenecen a dos enlaces separados que apuntan al mismo destino.

## 3.c

El primer caso utiliza una lista no ordenada y muestra viñetas.

El segundo utiliza una lista ordenada y muestra números.

El tercero utiliza tres listas ordenadas separadas. Los atributos `value` hacen que sus elementos muestren los números 1, 2 y 3.

El cuarto utiliza un bloque de cita y escribe los números como texto. Puede verse parecido, pero no es una lista HTML.

## 3.d

El primer caso utiliza `th` para las cabeceras. Normalmente se muestran centradas y en negrita.

El segundo utiliza celdas `td`, centra el contenido mediante `div` y aplica negrita con `strong`.

Pueden verse similares, pero `th` identifica correctamente las cabeceras de la tabla.

## 3.e

El primer caso utiliza `caption` para definir el título de la tabla.

El segundo coloca el título dentro de una fila de la tabla y utiliza `colspan="3"` para unir tres columnas.

La diferencia principal es que el segundo título forma parte de las celdas.

## 3.f

En el primer caso, `rowspan="2"` une una celda verticalmente, ocupando dos filas.

En el segundo, `colspan="2"` une una celda horizontalmente, ocupando dos columnas.

## 3.g

La primera tabla tiene tres columnas. Una celda ocupa dos columnas y dos filas.

La segunda tiene dos columnas. Una celda ocupa dos filas.

Además, la segunda utiliza `cellpadding="0"` y `cellspacing="0"`, eliminando el espacio interior de las celdas y la separación entre ellas.

## 3.h

El primer formulario envía los datos mediante POST a `procesar.php`. Agrupa los campos con `fieldset`, muestra el título con `legend`, tiene valores iniciales y oculta visualmente la clave.

El segundo utiliza GET y envía a la misma página porque `action` está vacío. Los campos están asociados con etiquetas `label`. La clave se muestra como texto normal.

El tercero indica una dirección de correo como destino y utiliza texto plano. Sin embargo, su botón es de tipo `reset`: aunque diga “Enviar”, restablece los campos y no envía el formulario.

Los tres indican `target="_blank"` para el destino de un eventual envío.

## 3.i

`button` permite incluir contenido HTML, como una imagen y texto en negrita.

`input type="button"` muestra el texto indicado mediante `value`.

Ninguno realiza una acción por sí solo porque ambos son botones de tipo `button`.

## 3.j

En el primer caso, los dos botones tienen el mismo `name`, por lo que forman un grupo y solo puede seleccionarse uno.

En el segundo, tienen nombres diferentes y pueden quedar seleccionados ambos.

## 3.k

El primer `select` permite elegir una sola opción.

El segundo utiliza `multiple` y permite elegir varias opciones. El nombre `lista[]` suele utilizarse para recibir varios valores en el servidor.

En ambos casos, `optgroup` organiza las opciones en grupos con un título.