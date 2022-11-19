# Json Schema Validator
Se trata de una implementación de la librería como servicio de Symfony. Definimos el servicio `JsonSchemaValidator` dentro del container, de manera que podemos luego
en las clases de nuestro proyecto utilizarlo como inyección de dependencia.

## Requisitos
Actualmente, este servicio requiere de las librerías de symfony en la versión 6.1:

        "symfony/dependency-injection"
        "symfony/config"
        "symfony/http-kernel"
        "symfony/yaml"

## Instalación
Añadir el vendor al proyecto con composer:

    composer require jakala/json-schema-validator

Añadir el bundle en el archivo config/bundles.php:

    Jakala\Validator\JsonSchemaValidatorBundle::class => ['all' => true],
    
Una vez hecho esto, podemos verificar que el servicio está disponible en el proyecto con el comando:

    bin/console debug:container | grep validator
    
Entre los distintos servicios, deberia aparecer el Json schema validator con su alias:

    Jakala\Validator\JsonSchemaValidator      Jakala\Validator\JsonSchemaValidator 
    json.schema.validator                     alias for "Jakala\Validator\JsonSchemaValidator"

## Uso

  --TODO
    
# Agradecimientos
  - **Seldaek** por su implementación de la librería de validación de json schema para PHP. [justinrainbow/json-schema](https://github.com/justinrainbow/json-schema)
  - **Diego Macrini** por su tutorial de definición de un servicio de symfony como librería. [How to create service bundles for a Symfony application](https://macrini.medium.com/how-to-create-service-bundles-for-a-symfony-application-f266ecf01fca)
