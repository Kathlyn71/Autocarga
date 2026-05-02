# Autocarga-Laboratorio
Proyecto de autoload con Composer

## 📌 Descripción

Este proyecto demuestra el uso de autoload en PHP utilizando Composer y el estándar PSR-4. Permite cargar clases automáticamente sin usar include

---

## ⚙️ Instalación

Clonar el repositorio:

```
git clone https://github.com/Kathlyn71/Autocarga-Laboratorio.git
```

QUE HACER:
1. Entrar al proyecto en visual Studio Code
2. Generar autoload:
En una terminal ejcuta el siguiente comando

```
composer install
```

o

```
composer dump-autoload
```

---

## 📂 Estructura de los archivos

<img src="images/img1.png" width="400">

---

## ▶️ Ejecución

Debes tener funcionando WAMP
Entoces en el en navegador en la direccion abres:

```
http://localhost/LaboratorioAutocarga/public
```

<img src="images/img2.png" width="400">

---

## 🧪 Prueba de Ejecución

La aplicación permite al usuario seleccionar un animal mediante una opción en pantalla.
Según la opción elegida, el sistema instancia la clase correspondiente y muestra el sonido del animal.

<img src="images/img3.png" width="400">

El siguiente fragmento de código demuestra cómo el sistema evalúa la opción del usuario y carga dinámicamente la clase correspondiente utilizando autoload:

<img src="images/img4.png" width="400">

* Cuando el usuario selecciona una opción, el sistema evalúa el valor con `switch`.
* Al crear el objeto (`new Perro()` o `new Gato()`), Composer carga automáticamente la clase necesaria.
* No se utilizan `include` ni `require` manuales.
* Solo se carga la clase correspondiente en el momento de uso.

Ejemplo de uso:

* Opción 1 → Se selecciona **Perro**
* Resultado: Guau

<img src="images/img5.png" width="400">

* Opción 2 → Se selecciona **Gato**
* Resultado: Miau

<img src="images/img6.png" width="400">

Esto demuestra que el sistema carga dinámicamente la clase necesaria según la interacción del usuario.


---

## 📊 Conclusiones

Mantenibilidad
Permite agregar nuevas clases sin modificar archivos globales.

Eficiencia de memoria
Se utiliza carga bajo demanda (lazy loading), evitando cargar clases innecesarias

Estandarización
El uso de PSR-4 facilita la organización del proyecto y el trabajo en equipo.

---

## 🧹 .gitignore

```
/vendor/
```
