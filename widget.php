<?php
require_once('class.collection.php');
require_once("observable.php");
require_once("abstract_widget.php");

$datas = new Collection();
$widgets = new Collection();


$datas  -> addItem( new DataSource(),"dat");
$widgets ->addItem( new BasicWidget(),"Uno");
$widgets ->addItem( new FancyWidget(),"Dos");


$datas -> addItem( new Source(),"data");
$widgets ->addItem( new AWidget(),"Tres");
$widgets ->addItem( new BWidget(),"Cuatro");





$datos=$datas->getItem("dat");
$datos->addObserver($widgets->getItem("Uno"));
$datos->addObserver($widgets->getItem("Dos"));


$dades=$datas->getItem("data");
$dades->addObserver($widgets->getItem("Tres"));
$dades->addObserver($widgets->getItem("Cuatro"));




$datos->addRecord("drum", "$12.95", 1955);
$datos->addRecord("guitar", "$13.95", 2003);
$datos->addRecord("banjo", "$100.95", 1945);
$datos->addRecord("piano", "$120.95", 1999);

$dades->addRecord("drum1", "$12.95", 1955,"a", "$12.95");
$dades->addRecord("guitar1", "$13.95", 2003,"v", "$12.95");
$dades->addRecord("banjo1", "$100.95", 1945,"natsort(array)", "$12.95");
$dades->addRecord("piano1", "$120.95", 1999,"n", "$12.95");




$a= $widgets->getItem("Uno");
$a->draw();
$b= $widgets->getItem("Dos");
$b->draw();
$c= $widgets->getItem("Tres");
$c->draw();
$d= $widgets->getItem("Cuatro");
$d->draw();
?>
