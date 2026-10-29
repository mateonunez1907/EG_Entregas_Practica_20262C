# Práctica 4 - PHP

## Parte 1: variables, operadores y estructuras de control

### Ejercicio 1

**Variables y tipos**

| Variable | Tipo | Valor final |
|---|---|---|
| `$a` | Booleano | `true` |
| `$b` | String | `"xyz"` |
| `$c` | String | `"xyz"` |
| `$d` | Entero | `18` |
| `$f` | Entero | `44` |
| `$g` | Entero | `44` |
| `$i` | Entero, parámetro local de `doble` | Recibe `17` |

**Operadores**

- `=`: asignación.
- `*`: multiplicación.
- `+=`: suma y asignación.
- `++`: incremento.
- `? :`: operador condicional ternario.

**Funciones y parámetros**

- `doble($i)`: recibe un número y devuelve su doble.
- `gettype(...)`: recibe una variable y devuelve su tipo.
- `is_int($d)`: comprueba si `$d` es entero.
- `is_string($a)`: comprueba si `$a` es una cadena.

`echo` es una construcción del lenguaje utilizada para mostrar información.

**Estructuras de control**

Hay dos instrucciones `if`. También se utiliza una expresión condicional ternaria y `return` para devolver el resultado de la función.

**Ejecución**

1. `$d` comienza en `12`.
2. Como es entero, se le suma `4` y queda en `16`.
3. `$a` no es string, por lo que no se muestra el mensaje “Cadena”.
4. Como `$a` es verdadero, `++$d` deja `$d` en `17`.
5. `doble($d++)` recibe `17` y devuelve `34`. Después del incremento, `$d` queda en `18`.
6. `$f += 10` deja `$f` en `44`, y ese mismo valor se asigna a `$g`.

**Salida completa**

```text
booleanstringstringinteger1xyzxyz184444
```

La salida aparece junta porque no se agregaron espacios ni saltos de línea. El valor booleano `true` se muestra como `1`.

### Ejercicio 2

**a)** Los tres códigos muestran:

```text
12345678910
```

Son equivalentes respecto de la salida, pero el valor final de `$i` es diferente:

- En los dos `while`, termina en `11`.
- En el `do...while`, termina en `10`.

`$i++` utiliza el valor y después lo incrementa. `++$i` primero incrementa y después utiliza el valor. [Manual de PHP](https://www.php.net/manual/es/language.operators.increment.php).

**b)** Los cuatro códigos son equivalentes: muestran los números del 1 al 10 sin separadores y terminan con `$i = 11`.

En el último, el cuerpo del `for` está vacío y la impresión se realiza en la tercera expresión del bucle.

**c)** Ambos códigos son equivalentes para los casos indicados:

- Si `$i` vale `0`, muestran `i equals 0`.
- Si vale `1`, muestran `i equals 1`.
- Si vale `2`, muestran `i equals 2`.
- Para otros valores enteros, no muestran ningún mensaje.

Los `break` evitan que el `switch` continúe ejecutando los casos siguientes.

### Ejercicio 3

**a)** Genera una tabla HTML de cinco filas y dos columnas, con borde y un ancho del 90 %.

El primer `for` genera las filas. El segundo genera las dos celdas de cada fila. En total se crean diez celdas con espacios.

**b)** Muestra un formulario para ingresar una edad.

Cuando todavía no se envió, muestra el formulario. Al enviarlo mediante POST, obtiene el valor de `age`.

Si la edad ingresada es mayor o igual a `21`, el programa muestra “Mayor de edad”. En caso contrario, muestra “Menor de edad”.

`$_SERVER['PHP_SELF']` hace que el formulario se envíe al mismo archivo.

### Ejercicio 4

Antes del `include`, las variables `$flor` y `$color` todavía no están definidas.

Por eso, el primer `echo` muestra `El` seguido de tres espacios y un salto de línea. También pueden aparecer avisos por las variables no definidas, según la configuración de PHP.

`include 'datos.php'` incorpora y ejecuta el archivo, definiendo las variables.

El segundo `echo` muestra:

```text
 El clavel blanco
```

### Ejercicio 5

El código implementa un contador de cargas de la página:

1. Abre `contador.dat` en modo lectura.
2. Lee el número guardado.
3. Cierra el archivo.
4. Lo abre en modo escritura.
5. Suma uno al contador.
6. Guarda el nuevo valor.
7. Cierra el archivo y muestra el total.

`visitas.php` incluye `contador.php`, por lo que el contador aumenta cada vez que se carga esa página.

`contador.dat` debe existir, contener inicialmente `0` y permitir lectura y escritura.

El contador registra cargas de la página, no visitantes diferentes.

## Parte 2: arrays y funciones

### Ejercicio 1

Sí, ambos códigos producen el mismo array si `$a` no estaba definido previamente.

El resultado contiene:

```php
array(
    "color" => "rojo",
    "sabor" => "dulce",
    "forma" => "redonda",
    "nombre" => "manzana",
    0 => 4
)
```

En el primer código se crea el array completo. En el segundo se agregan sus elementos mediante asignaciones.

### Ejercicio 2

**a)** La salida es:

```text
bar1
```

Se muestra `"bar"` y luego el booleano `true`, que se convierte en `1`.

**b)** La salida es:

```text
5942
```

Se muestran consecutivamente los valores `5`, `9` y `42`, sin separadores.

**c)** No se muestra ninguna salida porque no hay instrucciones de impresión.

`$matriz[] = 56` agrega el elemento con índice `13`.

Después se agrega la clave `"x"` con valor `42`, se elimina el elemento con índice `5` y finalmente se elimina toda la variable `$matriz`.

### Ejercicio 3

**a)** Muestra un mensaje con la fecha y hora del momento de ejecución, según la zona horaria configurada en PHP.

Su formato es:

```text
Has entrado en esta pagina a las H horas, con M minutos y S segundos, del D/M/A
```

`getdate()` devuelve un array con datos como horas, minutos, segundos, día, mes y año. Por eso no existe una salida fija. [Manual de getdate](https://www.php.net/manual/es/function.getdate.php).

**b)** La salida es:

```text
5+6=11
```

La función recibe los números `5` y `6`, calcula su suma y muestra la operación.

### Ejercicio 4

La función comprueba si un nombre de usuario cumple estas condiciones:

- Tiene entre 3 y 20 caracteres, inclusive.
- Solo contiene letras de la A a la Z, mayúsculas o minúsculas, números, guion o guion bajo.

`strlen` obtiene la longitud. El `for` recorre el nombre y `substr` obtiene cada carácter.

`strpos` busca el carácter entre los permitidos. Se compara con `=== false` porque la posición `0` también puede ser un resultado válido. [Manual de strpos](https://www.php.net/manual/es/function.strpos.php).

Si encuentra un error, muestra que el nombre no es válido y devuelve `false`. Si supera todas las comprobaciones, muestra que es válido y devuelve `true`.

El archivo `usuario.php` contiene el script de prueba.