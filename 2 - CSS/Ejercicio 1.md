# Ejercicio 1: Responder 

## 1. Qué es CSS y para qué se usa?

CSS son las siglas de Cascade Style Sheet que traducido significa hojas de estilo en cascada.

Las hojas de estilo es una tecnología que nos permite controlar la apariencia de una página web. En un principio, los sitios web se concentraban más en su contenido que en su presentación. HTML no pone atención en la apariencia del documento, sino en la estructura.

CSS describe como los elementos dispuestos en la página son presentados al usuario. CSS es un gran avance que complementa el HTML y la Web en general. Con CSS podemos especificar estilos como el tamaño, fuentes, color, espaciado entre textos y recuadros así como el lugar donde disponer texto e imágenes en la página.


## 2. CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan? 
Las reglas de declaración de estilo se componen de dos partes principales:
- *selector*: sirve para identificar el o los elementos HTML a los que se le aplicacará el estilo.
- *declaracion*: se compone de una o varias propiedades y sus valores correspondientes. Las propiedades son los aspectos visuales que se desean cambiar, como el color de fondo, el tamaño de fuente, la fuente y la altura de línea.

La sintaxis es la siguiente:

```html
<selector> {
  <declaracion>
}
```

## 3. Cuáles son las tres formas de dar estilo a un documento? 
Las tres formas más conocidas de dar estilo a un documento son las siguientes:

- Utilizando una hoja de estilo externa que estará vinculada a un documento a través del elemento <link>, el cual debe ir situado en la sección `<head>`.
- Utilizando el elemento `<style>`, en el interior del documento al que se le quiere dar estilo, y que generalmente se situaría en la sección `<head>`. De esta forma los estulos serán reconocidos antes de que la página se cargue por completo.
- Utilizando estilos directamente sobre aquellos elementos que lo permiten a través del atributo `<style>` dentro de `<body>`. Pero este tipo de estilo pierde las ventajas que ofrecen las hojas de estilo al mezclarse el contenido con presentación

## 4. Cuáles son los distintos tipos de selectores más utilizados? Ejemplifique cada uno. 
**Selector Universal:** 

*Sintaxis:*
```css
* { 
  atributo: valor;
}
```

*Ejemplo:* El estilo se aplicará a todos los elementos de la página.
```css
* { 
  color: grey; 
}
```

**Selector Etiqueta:**

```css
/* Sintaxis */
* { 
  atributo: valor;
}

/* Ejemplo */
* { 
  color: grey; 
}
```


## 5. Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos?
Una pseudoclase es una palabra clave que se añade a los selectores y sirve para especificar un estado especial del elemento seleccionado. Las más utilizadas aplicadas a vinculos son `:link` y `:visit`.
- `:link` se utiliza para seleccionar enlaces que aún no han sido visitados por el usuario, es decir, enlaces que el usuario aún no ha hecho clic en ellos.
- `:visited` se utiliza para seleccionar enlaces que ya han sido clickeados por el usuario, es decir, enlaces que el usuario ya ha hecho clic en ellos.

## 6. Qué es la herencia? 
La herencia en CSS es un mecanismo mediante el cual las propiedades de estilo aplicadas a un elemento se transmiten a sus elementos hijos. Esto significa que, si se define una propiedad de estilo en un elemento padre, todos los elementos hijos van a heredar esa propiedad a menos que se especifique lo contrario.
<br>
Por ejemplo, si se define un color de texto en un elemento padre `<div>`, todos los elementos `<p>` que estén dentro de ese `<div>` heredarán ese color de texto a menos que se especifique un color diferente para los elementos `<p>`.
<br>
Sin embargo, no todas las propiedades de estilo son heredadas. Ejemplificando, las propiedades de posición, tamaño y margen no se heredan (esto es debido a que su valor depende de la posición del elemento en relación con el documento y no de la posición de sus elementos padres).

## 7. En qué consiste el proceso denominado cascada?
La cascada en CSS es el proceso que determina las propiedades que se asignarán a cada elemento de una página. Cuando se poseen varias reglas CSS que afectan a un mismo elemento, todas ellas deben converger en una serie de estilos en base a las reglas de especificidad, al orden en el que aparecen y a su importancia.
