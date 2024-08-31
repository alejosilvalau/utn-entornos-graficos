# Ejercicio 2: Analizar el siguiente código señalando declaraciones y aplicaciones de reglas, y su efecto.

```css
p#normal {
  font-family: arial,helvetica;
  font-size: 11px;
  font-weight: bold;
}

*#destacado {
  border-style: solid;
  border-color: blue;
  border-width: 2px;
}

#distinto {
  background-color: #9EC7EB;
  color: red;
}
```

```html
<p id="normal">Este es un párrafo</p>
<p id="destacado">Este es otro párrafo</p>
<table id="destacado"><tr><td>Esta es una tabla</td></tr></table>
<p id="distinto">Este es el último párrafo</p>
```

---

Analizamos parte por parte:

1. La primera regla afecta a cualquier etiqueta `<p>` con `id="normal"`. En este caso, se aplica a la primera linea del código HTML. La regla cambia:
    - Fuente Arial (y si no se le pude aplicar esa fuente se aplica Helvética).
    - Tamaño de letra de 11 píxeles.
    - Texto en negrita.


2. La segunda regla se aplica a todas las etiquetas que tienen `id="destacado"` que en este caso son una etiqueta `<p>` y una etiqueta `<table>`. La regla cambia:
    - Borde sólido.
    - Borde de color azul.
    - Ancho del borde de dos píxeles.


3. La última regla se aplica a cualquier elemento con `id="distinto"`. La regla cambia:
    - Color de letra rojo.
    - Color de fondo de #9EC7EB (está en hexadecimal, es una especie de celeste).
