# Json Schema Validator
Se trata de una implementación de la librería [justinrainbow/json-schema](https://github.com/justinrainbow/json-schema)
como servicio de Symfony. Definimos el servicio `JsonSchemaValidator` dentro del container, de manera que podemos luego
en las clases de nuestro proyecto utilizarlo como inyección de dependencia.

# Requisitos
Actualmente, este servicio requiere de las librerías de symfony en la versión 6.1:

        "symfony/dependency-injection"
        "symfony/config"
        "symfony/http-kernel"
        "symfony/yaml"

# Agradecimientos
  - **Seldaek** por su implementación de la librería de validación de json schema para PHP.
  - **Diego Macrini** por su tutorial de definición de un servicio de symfony como librería. 
[How to create service bundles for a Symfony application](https://macrini.medium.com/how-to-create-service-bundles-for-a-symfony-application-f266ecf01fca)