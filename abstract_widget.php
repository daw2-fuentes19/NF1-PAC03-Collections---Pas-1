<?php

interface Observer {
  public function update(Observable $subject);
}


abstract class Widget implements Observer {

  protected $internalData = array();

  abstract public function draw();

  public function update(Observable $subject) {
         $this->internalData = $subject->getData();
  }
}


class BasicWidget extends Widget {

  function __construct() {
  }

  public function draw() {
         $html = "<table border=1 width=130>";
         $html .= "<tr><td colspan=3 bgcolor=#cccccc>
                        <b>Instrument Info<b></td></tr>";

         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $instms = $this->internalData[0];
                $prices = $this->internalData[1];
                $years =  $this->internalData[2];
                $html .=  "<tr><td>$instms[$i]</td><td> $prices[$i]</td>
                           <td>$years[$i]</td></tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}


class FancyWidget extends Widget {
  
  function __construct() {
  }
  
  public function draw() {
         $html = 
         "<table border=0 cellpadding=5 width=270 bgcolor=#6699BB>
                <tr><td colspan=3 bgcolor=#cccccc>
                <b><span class=blue>Our Latest Prices<span><b>
                </td></tr>
                <tr><td><b>instrument</b></td>
                <td><b>price</b></td><td><b>date issued</b>
                </td></tr>";
         
         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $instms = $this->internalData[0];
                $prices = $this->internalData[1];
                $years =  $this->internalData[2];
                
                $html .= 
                "<tr><td>$instms[$i]</td><td> 
                        $prices[$i]</td><td>$years[$i]
                        </td></tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}

class AWidget extends Widget {

  function __construct() {
  }

  public function draw() {
         $html = "<table border=0 width=330>";
         $html .= "<tr><td colspan=5 bgcolor=#bffc7c>
                        <b>Primera<b></td></tr>";

         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $a = $this->internalData[0];
                $b = $this->internalData[1];
                $c =  $this->internalData[2];
                $d = $this->internalData[3];
                $e = $this->internalData[4];

                $html .=  
                "<tr>
                  <td style='color:blue;'>$a[$i]</td>
                  <td style='color:green;'> $b[$i]</td>
                  <td style='color:gray;'>$c[$i]</td>
                  <td style='color:red;'>$d[$i]</td>
                  <td> $e[$i]</td>

                </tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}

class BWidget extends Widget {

  function __construct() {
  }

  public function draw() {
         $html = "<table border=0 width=370 height=150>";
         $html .= "<tr><td colspan=5 bgcolor=#123ac>
                        <b>Primera<b></td></tr>";

         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $a = $this->internalData[0];
                $b = $this->internalData[1];
                $c =  $this->internalData[2];
                $d = $this->internalData[3];
                $e = $this->internalData[4];

                $html .=  
                "<tr style='background-color:skyblue;'>
                  <td style='background-color:red;'>$a[$i]</td>
                  <td style='color:gray;'> $b[$i]</td>
                  <td style='color:gray;'>$c[$i]</td>
                  <td style='color:red;'>$d[$i]</td>
                  <td > $e[$i]</td>

                </tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}

?>
