<?php

class MaClasse
{
  private $titre = 'Voici ma première classe';
  private $date;

  public function __construct($titre_perso = '')
  {
    $this->titre = $titre_perso;
    $this->setDate();
  }

  /**
   * Attribution d'une date à l'attribut $date
   * de notre classe.
   */
  public function setDate()
  {
    $this->date = date('d/m/Y h:i:s');
  }

  /**
   * Get date.
   */
  public function date(): string
  {
    return $this->date;
  }
  /**
   * Get titre.
   */
  public function titre(): string
  {
    return $this->titre;
  }
}
