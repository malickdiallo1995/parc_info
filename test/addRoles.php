<?php
/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 03/04/2019
 * Time: 12:01
 */
require_once '../bootstrap.php';

$role = new Roles();
$role->setNom("ROLE_USER");

$entityManager->persist($role);
$entityManager->flush();

echo 'ID : '.$role->getId();