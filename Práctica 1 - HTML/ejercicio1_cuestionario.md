# Ejercitación 1 - Responder el siguiente cuestionario

## 1. Qué es HTML, cuándo fue creado, cuáles fueron las distintas versiones y cuál es la última?

HTML(HyperText Markup Language) es el lenguaje de marcado estándar para estructurar y presentar contenido en la web.

Fue creado por Tim Berners-Lee en 1991 (basado en SGML).

Versiones: HTML 1.0 (1991), HTML 2.0 (1995), HTML 3.2 (1997), HTML 4.01 (1999), XHTML 1.0/1.1 (2000-2001) y HTML5 (2014).

Última versión: HTML5 (manejado actualmente como un Living Standard o Estándar Vivo en constante actualización por el WHATWG).

## 2. Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML?

- **Separación de capas**: Estructura/contenido en HTML y presentación/diseño en CSS.

- **Accesibilidad universal**: Diseñar páginas legibles para cualquier usuario, incluyendo personas con discapacidad.

- **Independencia de dispositivo**: Compatibilidad con diferentes pantallas, dispositivos y navegadores.

- **Interoperabilidad y validez**: Seguir las normas sintácticas del estándar para asegurar una interpretación consistente.

## 3. En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿y obsoleto?

- **Desaprobado (Deprecated)**: No se recomienda su uso por existir mejores alternativas (como CSS). Aún funciona por compatibilidad histórica.

- **Obsoleto (Obsolete)**: Eliminado formalmente de la especificación. Los navegadores ya no están obligados a soportarlo y puede no funcionar.

## 4. Qué es el DTD y posibles DTDs en HTML 4.01

- **DTD (Document Type Definition)**: Conjunto de reglas formales (basadas en SGML) que definen la sintaxis y etiquetas válidas de un documento.

DTDs en HTML 4.01:

1. Strict (Estricto): Excluye etiquetas de formato visual y elementos desaprobados; promueve el uso estricto de CSS.

2. Transitional (Transicional): Permite elementos de diseño visual y marcas desaprobadas para facilitar la migración de sitios antiguos.

3. Frameset (Marcos): Incluye todo lo del modo transicional más el soporte para división de pantalla mediante <frameset>.

5. Qué son los metadatos y cómo se especifican en HTML?

Metadatos: Datos descriptivos no visibles directamente en el cuerpo de la página que informan a los navegadores y buscadores sobre el contexto del documento (codificación, autor, descripción, etc.).

Se ubican dentro del bloque <head> utilizando principalmente la etiqueta <meta> (ej. <meta charset="UTF-8">, <meta name="description" content="...">), junto a etiquetas como <title> y <link>.


