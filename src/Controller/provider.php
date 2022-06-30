<?php

namespace APP\Controller;

use APP\Model\Provider;
use APP\Utils\Redirect;
use APP\Model\Validation;

require '../../vendor/autoload.php';

if (empty($_POST)) {
    session_start();
    Redirect::redirect(
        type: 'error',
        message: 'Requisição inválida!!!'
    );
}

$providerName = $_POST["name"];
$providerCnpj = $_POST["cnpj"];
$providerPhone = $_POST["phone"];
$adress = $_POST["adress"];
$adressPublicPlace = $_POST["publicPlace"];
$adressNumberOfStreet = $_POST["numberOfStreet"];
$adressComplement = $_POST["complement"];
$adressNeighborhood = $_POST["neighborhood"];
$adressCity = $_POST["city"];
$adressZipCode = $_POST["zipCode"];

$error = array();

if (!Validation::validateName($providerName)) {
    array_push($error, "O nome do provedor deve conter mais de 3 caracteres!!!");
}

if (!Validation::validateCnpj($providerCnpj)) {
    array_push($error, "Informe o CNPJ!!!");
}

if (!Validation::validatePhone($providerPhone)) {
    array_push($error, "Informe um número de telefone!!!");
}
if (!Validation::validatePublicPlace($adressPublicPlace)) {
    array_push($error, "Informe o Logradouro!!!");
}
if (!Validation::validateNumberOfStreet($adressNumberOfStreet)) {
    array_push($error, "Informe o N°!!!");
}
if (!Validation::validateComplement($adressComplement)) {
    array_push($error, "Informe o complemento!!!");
}
if (!Validation::validateNeighborhood($adressNeighborhood)) {
    array_push($error, "Informe o Bairro!!!");
}
if (!Validation::validateCity($adressCity)) {
    array_push($error, "Informe o cidade!!!");
}
if (!Validation::validateZipCode($adressZipCode)) {
    array_push($error, "Informe o Cep!!!");
}


if ($error) {
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
} else {
    $provider = new Provider(
     name: $providerName,
     cnpj: $providerCnpj,
     phone: $providerPhone,
     adress: new Adress(
     publicPlace: $adressPublicPlace,
     numberOfStreet: $adressNumberOfStreet, 
     complement: $adressComplement,
     neighborhood: $adressNeighborhood,
     city: $adressCity,
     zipCode: $adressZipCode,
        )
    );
    Redirect::redirect(
        message: "O provedor foi cadastrado com sucesso!!!"
    );
}