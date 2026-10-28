# Ejercitación 2 - Análisis de código

## 2.a

Es un comentario. No aparece en la página y permite dejar aclaraciones dentro del código.

Puede colocarse en el encabezado o en el cuerpo del documento. No tiene atributos.

El cierre que aparece en la consigna está mal escrito. La forma correcta es:

```html
<!-- Código controlado el día 12/08/2009 -->
```

## 2.b

El elemento `div` agrupa contenido en un bloque y se coloca dentro de `body`.

Sus etiquetas son `<div>` y `</div>`. Ambas son obligatorias.

El atributo `id="bloque1"` identifica el bloque. Es opcional y su valor no debe repetirse en otro elemento del documento.

Se muestra el texto “Contenido del bloque1”. El identificador no produce un cambio visual por sí solo.

## 2.c

El elemento `img` permite mostrar una imagen dentro de `body`.

Es un elemento vacío: tiene etiqueta de apertura y no lleva `</img>`.

Sus atributos son:

| Atributo | Valor | Función | Obligatorio en HTML 4.01 |
|---|---|---|---|
| `src` | `""` | Dirección de la imagen; aquí está vacía. | Sí |
| `alt` | `"lugar imagen"` | Texto alternativo de la imagen. | Sí |
| `id` | `"im1"` | Identificador del elemento. | No |
| `name` | `"im1"` | Nombre para identificar la imagen desde scripts. | No |
| `width` | `"32"` | Ancho de 32 píxeles. | No |
| `height` | `"32"` | Alto de 32 píxeles. | No |
| `longdesc` | `"detalles.htm"` | Dirección de una descripción extensa. | No |

Como `src` está vacío, no se indica una imagen válida para mostrar.

## 2.d

Los dos elementos `meta` se colocan dentro de `head`. Son elementos vacíos y no muestran contenido en el cuerpo de la página.

El primero declara palabras clave:

- `name="keywords"`: indica el tipo de metadato.
- `lang="es"`: indica que su contenido está en español.
- `content="casa, compra, venta, alquiler "`: contiene las palabras clave.

El segundo intenta indicar una fecha de vencimiento del documento:

- `http-equiv="expires"`: identifica la información de vencimiento.
- `content="16-Sep-2019 7:49 PM"`: contiene la fecha indicada.

En HTML 4.01, `content` es obligatorio. Los otros atributos mostrados son opcionales.

## 2.e

El elemento `a` se coloca dentro de `body` y crea un enlace cuyo texto visible es “Resumen HTML”.

Tiene las etiquetas `<a>` y `</a>`, ambas obligatorias.

Sus atributos son:

- `href="http://www.e-style.com.ar/resumen.html"`: dirección de destino.
- `type="text/html"`: tipo de contenido del destino.
- `hreflang="es"`: idioma del documento enlazado.
- `charset="utf-8"`: codificación indicada para el destino.
- `rel="help"`: indica que el destino contiene ayuda.

Estos atributos son opcionales en la definición del elemento `a`, aunque `href` es necesario para que funcione como enlace hacia otra dirección.

## 2.f

El código se coloca dentro de `body` y genera una tabla con el título “Título”, tres filas y cuatro columnas.

Elementos y etiquetas:

- `table`: contiene la tabla.
- `caption`: contiene el título.
- `tr`: representa una fila.
- `th`: representa una celda de encabezado.
- `td`: representa una celda de datos.

`table` y `caption` requieren apertura y cierre. En HTML 4.01, `tr`, `th` y `td` requieren apertura, pero su cierre puede omitirse.

Atributos:

- `width="200"`: ancho de la tabla.
- `summary="Datos correspondientes al ejercicio vencido"`: descripción de su contenido.
- `align="top"`: coloca el título arriba.
- `scope="col"`: identifica encabezados de columna.
- `scope="row"`: identifica encabezados de fila.

Todos los atributos mostrados en este apartado son opcionales.

`&nbsp;` representa un espacio que no se separa mediante un salto de línea.