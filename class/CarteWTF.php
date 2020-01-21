<?php

require_once 'CarteInterface.php';

/**
 * La carte WTF a une valeur de 1 à 100, pas de couleur
 * et les enseignes sont une suite d'émoji snas rapport
 * avec les cartes traditionnelles.
 *
 */
class CarteWTF implements CarteInterface
{

  //Enseigne d'une carte (Pique, Coeur, Trèfle ou Carreau).
  private $_enseigne;
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
  }

  /**
   * Set Enseigne
   *
   * @param $valeur string
   */
  private function setEnseigne($valeur){
    $enseignes = [
      '🥥',
      '🥝',
      '🍎',
      '🥚',
      '🍕',
      '🍫',
      '🍷',
      '🍇',
      '🥕'
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
    //On retourne une chaine vide.
    return  '';
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
    // Valeur aléatoire de 1 à 100.
    if(empty($valeur)){
      $this->_valeur = rand(1,100);
    }
    else
      $this->_valeur = $valeur;
  }

}
