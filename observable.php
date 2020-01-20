<?php
abstract class Observable {

  private $observers = array();

  public function addObserver(Observer $observer) {
         array_push($this->observers, $observer);
  }

  public function notifyObservers() {
         for ($i = 0; $i < count($this->observers); $i++) {
                 $widget = $this->observers[$i];
                 $widget->update($this);
         }
     }
}


class DataSource extends Observable {

  private $names;
  private $prices;
  private $years;

  function __construct() {
         $this->names = array();
         $this->prices = array();
         $this->years = array();
  }

  public function addRecord($name, $price, $year) {
         array_push($this->names, $name);
         array_push($this->prices, $price);
         array_push($this->years, $year);
         $this->notifyObservers();
  }

  public function getData() {
         return array($this->names, $this->prices, $this->years);
  }
}
  class Source extends Observable {

  private $e;
  private $d;
  private $c;
  private $b;
  private $a;

  function __construct() {
         $this->a = array();
         $this->b = array();
         $this->c = array();
         $this->d = array();
         $this->e = array();

  }

  public function addRecord($a, $b, $c, $d, $e) {
         array_push($this->a, $a);
         array_push($this->b, $b);
         array_push($this->c, $c);
         array_push($this->d, $d);
         array_push($this->e, $e);
         $this->notifyObservers();
  }

  public function getData() {
         return array(
                $this->a,
                $this->b,
                $this->c,
                $this->d,
                $this->e
        );
  }
}
?>