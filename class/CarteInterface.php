<?php

interface CarteInterface{

  /**
   * Retourne l'enseigne de la carte.
   *
   *@return string
   */
  public function enseigne():string;

  /**
   * Retourne la Couleur de la carte.
   *
   *@return string
   */
  public function couleur():string;

  /**
   * Retourne la valeur de la carte.
   *
   * @return string
   */
  public function valeur():string;

}
