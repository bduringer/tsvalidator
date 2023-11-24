
## Instalação

Instale o tsvalidator com o composer

```bash
  composer require tecsa/tsvalidator
```

Em seu projeto, carregue as dependencias do composer, instancie o Validator e utilize seus recursos, como mostra abaixo:

```bash
  <?php

    require 'vendor/autoload.php';
    use Ts\Tsvalidator\Validator;
    
    $validator = new Validator();

    if($validator->isEmail('example@gmail.com')){
        echo 'É um email válido';
    } else {
        echo 'Não é um email válido';
    };
```

    
## Documentação

#### Métodos

| Método   | Tipo       | Descrição                           |
| :---------- | :--------- | :---------------------------------- |
| `isEmail` | `string` | Retorna se uma string é um email válido. |
| `isNumeric` | `integer` | Retorna se um valor é numérico. |
| `isAlphabetical` | `string` | Retorna se um valor é composto somente por letras. |
| `hasMinLength` | `string` | Retorna se uma string é maior que um número. |
| `hasMaxLength` | `string` | Retorna se uma string é menor que um número. |
| `isDate` | `string` | Retorna se uma data é válida. |
| `isStrongPassword` | `string` | Retorna se uma string contém minúsculas, maiúsculas, números, caracteres especiais e é menor que um valor. |
| `isValidName` | `string` | Retorna se uma string é um nome válido. |
| `isValidAddress` | `string` | Retorna se uma string é um endereço válido. |











