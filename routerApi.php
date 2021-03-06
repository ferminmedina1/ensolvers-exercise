<?php

require_once ('routerClass.php');
require_once ('api/Controller/apiFoldersController.php');
require_once ('api/Controller/apiItemsController.php');

$r = new Router();

//Ruta por defecto.
$r->setDefaultRoute("apiFoldersController", "allFolders");

//TRAER TODAS LAS CARPETAS
$r->addRoute("folders", "GET", "apiFoldersController", "allFolders");

//TRAER UNA CARPETA
$r->addRoute("folders/:ID", "GET", "apiFoldersController", "getFolder");

//INSERTAR CARPETA
$r->addRoute("addFolder", "POST", "apiFoldersController", "addFolder");

//ELIMINAR CARPETA
$r->addRoute("folders/:ID", "DELETE", "apiFoldersController", "deleteFolder");

//TRAER ITEMS DE UNA CARPETA
$r->addRoute("items/folder/:ID", "GET", "apiItemsController", "getItemsByFolder");

//INSERTAR ITEM
$r->addRoute("addItem", "POST", "apiItemsController", "addItem");

//EDITAR CHECK DE UN ITEM
$r->addRoute("items/check/:ID", "PUT", "apiItemsController", "editItemCheck");

//EDITAR ITEM
$r->addRoute("items/:ID", "PUT", "apiItemsController", "editItem");


$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 