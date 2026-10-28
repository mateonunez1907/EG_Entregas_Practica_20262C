# Práctica 2 - CSS

## Ejercicio 1

### 1. ¿Qué es CSS y para qué se usa?

CSS es un lenguaje que permite definir la presentación de los documentos HTML. Se utiliza para cambiar colores, fuentes, tamaños, espacios y distribución de los elementos.

### 2. ¿Cómo funcionan las reglas?

Una regla tiene un selector y un conjunto de declaraciones. El selector indica qué elementos reciben el estilo. Cada declaración contiene una propiedad y su valor.

```css
p {
  color: red;
}
```

En este ejemplo, `p` es el selector y `color: red` es la declaración.

### 3. Tres formas de dar estilo

- En línea: mediante el atributo `style` de un elemento.
- Interna: mediante una etiqueta `style` dentro de `head`.
- Externa: mediante un archivo CSS enlazado con `link`.

### 4. Selectores más utilizados

```css
/* Selector de elemento */
p { color: red; }

/* Selector de clase */
.importante { color: blue; }

/* Selector de identificador */
#menu { color: green; }

/* Selector universal */
* { font-family: Arial; }

/* Selector de descendientes */
div p { color: black; }

/* Selector de hijos directos */
ul > li { color: orange; }

/* Selector de atributo */
a[title] { color: purple; }

/* Pseudoclase */
a:hover { color: red; }

/* Agrupación de selectores */
h1, h2 { color: blue; }
```

### 5. ¿Qué es una pseudoclase?

Es una palabra que se agrega a un selector para seleccionar elementos según su estado o posición.

En los vínculos se utilizan:

- `:link`: enlace no visitado.
- `:visited`: enlace visitado.
- `:hover`: puntero colocado sobre el enlace.
- `:active`: enlace durante su activación.

### 6. ¿Qué es la herencia?

Es el mecanismo por el cual algunas propiedades pasan de un elemento a sus descendientes. Por ejemplo, el color y la fuente pueden heredarse. No todas las propiedades se heredan.

### 7. ¿Qué es la cascada?

Es el proceso que determina qué declaración se aplica cuando varias afectan a la misma propiedad de un elemento.

Se consideran su origen e importancia, la especificidad y el orden de aparición. Cuando las demás condiciones empatan, gana la última declaración.

## Ejercicio 2

Cada expresión entre llaves es un conjunto de declaraciones. Las reglas se aplican a los elementos que coinciden con sus selectores.

`p#normal` selecciona el párrafo con `id="normal"`. Aplica fuente Arial o Helvetica, tamaño de 11 píxeles y negrita.

`*#destacado` selecciona cualquier elemento con `id="destacado"`. Aplica un borde sólido azul de 2 píxeles. Por eso afecta al segundo párrafo y a la tabla del ejemplo.

`#distinto` selecciona el elemento con `id="distinto"`. Aplica fondo celeste `#9EC7EB` y texto rojo.

El ejemplo repite el identificador `destacado`. Aunque la regla se aplique a ambos elementos, un identificador debe ser único dentro del documento.

## Ejercicio 3

`p.quitar` aplica color rojo únicamente a los párrafos de clase `quitar`.

`*.desarrollo` aplica un tamaño de 8 píxeles a cualquier elemento de clase `desarrollo`.

`.importante` aplica un tamaño de 20 píxeles a cualquier elemento de clase `importante`.

Resultados:

- Primer párrafo: tamaño de 8 píxeles.
- Segundo párrafo: texto rojo.
- Tercer párrafo: estilos predeterminados.
- Cuarto párrafo: tamaño de 20 píxeles.
- Encabezado `h1`: no recibe el rojo de `p.quitar`, porque no es un párrafo.
- Último párrafo: texto rojo y tamaño de 20 píxeles, porque tiene ambas clases.

El nombre `quitar` no elimina ni oculta elementos. Solo identifica una clase.

El cierre `</ p>` debe escribirse `</p>`.

## Ejercicio 4

### Primer código

El párrafo tiene fuente Arial o Helvetica, tamaño de 14 píxeles y color negro.

Aunque `.contenido` aplica negrita, el estilo en línea `font-weight: normal` hace que el párrafo tenga grosor normal.

El texto de la tabla es verde por el selector universal y conserva el tamaño y grosor predeterminados.

### Segundo código

La clase `contenido` se aplica a `body`, estableciendo tamaño de 14 píxeles y negrita.

El párrafo recibe directamente el tamaño de 10 píxeles de la regla `p`, que prevalece sobre el tamaño heredado. Su color es negro y hereda la negrita.

El texto de la tabla es verde, de 14 píxeles y en negrita.

### Enlaces de ambos códigos

Los enlaces son grises cuando no fueron visitados, azules cuando fueron visitados, fucsias al pasar el puntero y rojos durante su activación.