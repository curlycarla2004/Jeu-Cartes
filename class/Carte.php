<?php

class Carte
{

  //Enseigne d'une carte (Pique, Coeur, Trèfle ou Carreau).
  private $_enseigne;
  //La couleur dépend de l'enseigne.
  private $_couleur;
  //de 1 à 10 ou valet, dame, roi.
  private $_valeur;

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
   * Get Enseigne
   *
   * @return string
   */
  public function enseigne(): string {
    return  $this->_enseigne;
  }

  /**
   * Get Couleur.
   *
   *@return string
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
   * Get valeur.
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
    //Si le paramètre $valeur n'est pas vide.
    if(!empty($valeur)){
      $this->_valeur = $valeur;
    }
    //Sinon on attribue une valeur aléatoire.
    else{
      $hasard = rand(1, 13);
      switch ($hasard) {
        case 11:
          //On va dire que ceci est un valet.
          $this->_valeur = '💂🏻‍♂️';
          break;
        case 12:
          //dame.
          $this->_valeur = '👸🏻';
        break;
        //roi.
        case 13:
          $this->_valeur = '🤴🏻';
        break;
        //Sinon il s'agit d'un nombre entre 1 et 10.
        default:
          $this->_valeur = $hasard;
          break;
      }
    }
  }

  /**
   * Affiche le html permettant d'afficher une carte.
   *
   */
  public function afficher(){
    echo $this->valeur() . '| <span style="color:'.$this->couleur().'">' . $this->enseigne() . '</span><br>';
  }
}
