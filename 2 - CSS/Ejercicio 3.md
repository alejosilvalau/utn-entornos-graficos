# Ejercicio 3 - Analizar el siguiente código señalando declaraciones y aplicaciones de reglas, y su efecto.

```css
p.quitar { 
    color: red; 
}
*.desarrollo { 
    font-size: 8px; 
}
.importante {
    font-size: 20px; 
}
```

```html
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

---

En este caso tenemos tres reglas:

- La primera se aplica a todos los elementos p cuya clase sea "quitar". Esta aplica color rojo a las letras.
- La segunda tiene el selector universal, por lo que se aplica a todos los elementos cuya clase sea "desarrollo". Esta le aplica un tamaño de fuente de 8px.
- La tercera es similar a la anterior pero sin el selector universal, pero vimos que esto tiene el mismo efecto. Esta le aplica un tamaño de fuente de 20px.


Cabe destacar el caso extra en donde hay dos clases en un mismo elemento:
```html
<p class="quitar importante">Se pueden aplicar varias clases a la vez</p>
```
 Aquí se aplican ambos estilos: el color rojo de `quitar` y el tamaño de `importante`.
