# Práctica de Programación Orientada a Objetos (POO)

📅 Fecha: 06/10/2026

## Contenido del Repositorio

Este repositorio contiene la práctica de Programación Orientada a Objetos (POO) en PHP, enfocada en herencia, sobreescritura de métodos, enlace estático tardío (Late Static Binding), clases `final` y uso de constructores para calcular propiedades de una figura geométrica.

## 🛠️ Tecnologías Utilizadas

- Lenguaje: PHP (POO: clases, constructores, herencia, `parent::`, `self::`, `static::`, `final`)
- Herramientas: Git, WampServer / XAMPP

## 💻 Capturas de Pantalla y Problemas

- **ejemplo2.php — Herencia y sobreescritura de métodos:** Clase `Coche` con la propiedad `color` y el método `printCaracteristicas()`. La clase `CocheDeLujo` hereda de `Coche`, agrega la propiedad `extras` y sobreescribe `printCaracteristicas()` para mostrar también los extras del vehículo.
- **ejemplo3.php — Clases `final`:** La clase `Coche` se declara como `final`, por lo que no puede ser heredada. Al intentar extenderla con `class CocheDeLujo extends Coche`, PHP genera un Fatal Error, demostrando la restricción de la palabra clave `final`.
- **latestaticbinding.php — Enlace estático tardío (`self::` vs `static::`):** Las clases `A` y `B` (que hereda de `A`) definen `miFuncion()`. Al llamar `B::otraFuncion()`, que internamente usa `self::miFuncion()`, el resultado es `A`, ya que `self::` siempre resuelve a la clase donde se escribió el método.
- **problema4.php — Área y perímetro de un círculo:** Clase `Circulo` con un constructor que recibe el radio, y los métodos `calcularArea()` y `calcularPerimetro()`, que usan la constante `M_PI` para realizar los cálculos. Los resultados se formatean con `number_format()`.
- **persona.php — Herencia Persona → Estudiante / Docente:** Clase base `Persona` (nombre, apellido, fecha de nacimiento) de la que heredan `Estudiante` (código, índice académico, cohorte, estado académico, modalidad de estudio) y `Docente` (código, departamento, categoría, título académico, tipo de contratación), cada una con su propio constructor que llama a `parent::__construct()`.

## 📁 Estructura de Carpetas o Directorios

```
PracticaPOO/
├── ejemplo2.php           # Herencia y sobreescritura de métodos (Coche / CocheDeLujo)
├── ejemplo3.php           # Clase final y el error al intentar heredarla
├── latestaticbinding.php  # self:: vs static:: (Late Static Binding)
├── problema4.php          # Clase Circulo: área y perímetro
├── persona.php            # Herencia Persona -> Estudiante / Docente
└── README.md
```

## ⚙️ Instrucciones de Ejecución / Uso

1. Clonar el repositorio dentro del directorio local del servidor (por ejemplo, `C:\wamp64\www\`).
2. Iniciar WampServer (o XAMPP) y verificar que los servicios de Apache estén activos.
3. Acceder a cada archivo desde el navegador, por ejemplo:
   - `http://localhost/PracticaPOO/ejemplo2.php`
   - `http://localhost/PracticaPOO/latestaticbinding.php`
   - `http://localhost/PracticaPOO/problema4.php`
   - `http://localhost/PracticaPOO/persona.php`
4. `ejemplo3.php` está pensado para mostrar el Fatal Error de PHP al intentar heredar de una clase `final`, por lo que no se ejecuta con una salida normal.

## 👤 Autor y Contexto

- **Nombre:** Nicole Pinto, 8-1031-2426
- **Institución:** Universidad Tecnológica de Panamá (UTP)
- **Fecha de Realización:** 06/10/2026

