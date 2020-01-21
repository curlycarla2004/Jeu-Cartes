<?php

require_once 'CarteInterface.php';

/**
 * La carte triche ne peut être qu'un As!
 *
 */
class CarteTriche implements CarteInterface
{

  //Enseigne d'une carte (Pique, Coeur, Trèfle ou Carreau).
  private $_enseigne;
  //La couleur dépend de l'enseigne.
  private $_couleur;
  //de 1 à 10 ou valet, dame, roi.
  private $_valeur;

  /**
   * COnstructeur de la classe.
   *
   * @param $valeur string
   * @param $enseigne string
   */
  public function __construct($valeur = '', $enseigne = '')
  {
    //On utilise les setters (mutateurs) dédiés.
    $this->setValeur($valeur);
    $this->setEnseigne($enseigne);
    $this->setCouleur();
  }

  /**
   * Set Enseigne
   *
   * @param $valeur string
   */
  private function setEnseigne($valeur){
    $enseignes = [
      'coeur' => '♥',
      'pique' => '♠',
      'carreau' => '♦',
      'trefle' => '♣'
    ];
    //si la valeur n'est pas vide.
    if(!empty($valeur)){
      $this->_enseigne = $enseignes[$valeur];
    }
    //Sinon on retourne une enseigne choisie au hasard.
    else{
      $random = array_rand($enseignes);
      $this->_enseigne = $enseignes[$random];
    }
  }

  /**
   * @inheritdoc
   */
  public function enseigne(): string {
    return  $this->_enseigne;
  }

  /**
   * @inheritdoc
   */
  public function couleur(): string {
    return  $this->_couleur;
  }

  /**
   * Set couleur.
   * Aucun paramètre ici car la couleur dépend de l'enseigne.
   *
   */
  private function setCouleur(){
    if (in_array($this->enseigne(), ['♥', '♦'])) {
      $this->_couleur = '#ff0000';
    } else{
      $this->_couleur = '#000000';
    }
  }

  /**
   * @inheritdoc
   */
  public function valeur(): string {
    return  $this->_valeur;
  }

  /**
   * Set Valeur.
   *
   * @param $valeur string
   */
  private function setValeur($valeur){
    //Si $valeur est vide, alors on cré un As systématiquement.
    if(empty($valeur)){
      $this->_valeur = 1;
    }
    else
      $this->_valeur = $valeur;
  }

}
