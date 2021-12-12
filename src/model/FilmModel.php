<?php
namespace App\model;

class FilmModel{

    private String $titre;
    private String $alias;
    private String $enAffiche;
    private String $titreOriginal;
    private String $realisateur;
    private String $acteurs;
    private String $synopsis;
    private String $enVO;
    private String $dureeMinutes;
    private String $genres_id;
    private String $ageMiniPublic;
    private String $dateSortie;
    private String $affiche;

    public function getTitre(){
        return $this->titre;
    }
    public function getAlias(){
        return $this->alias;
    }
    public function getEnAffiche(){
        return $this->enAffiche;
    }
    public function getTitreOriginal(){
        return $this->titreOriginal;
    }
    public function getRealisateur(){
        return $this->realisateur;
    }
    public function getActeurs(){
        return $this->acteurs;
    }
    public function getSynopsis(){
        return $this->synopsis;
    }
    public function getEnVO(){
        return $this->enVO;
    }
    public function getDureeMinutes(){
        return $this->dureeMinutes;
    }
    public function getGenres_id(){
        return $this->genres_id;
    }
    public function getAgeMiniPublic(){
        return $this->ageMiniPublic;
    }
    public function getDateSortie(){
        return $this->dateSortie;
    }
    public function getaffiche(){
        return $this->affiche;
    }


    public function setTitre($titre){
        $this->titre = $titre;
        return $this;
    }
    public function setAlias($alias){
        $this->alias = $alias;
        return $this;
    }
    public function setEnAffiche($enAffiche){
        $this->enAffiche = $enAffiche;
        return $this;
    }
    public function setTitreOriginal($titreOriginal){
        $this->titreOriginal = $titreOriginal;
        return $this;
    }
    public function setRealisateur($realisateur){
        $this->realisateur = $realisateur;
        return $this;
    }
    public function setActeurs($acteurs){
        $this->acteurs = $acteurs;
        return $this;
    }
    public function setSynopsis($synopsis){
        $this->synopsis = $synopsis;
        return $this;
    }
    public function setEnVO($enVO){
        $this->enVO = $enVO;
        return $this;
    }
    public function setDureeMinutes($dureeMinutes){
        $this->dureeMinutes = $dureeMinutes;
        return $this;
    }
    public function setGenres_id($genres_id){
        $this->genres_id = $genres_id;
        return $this;
    }
    public function setAgeMiniPublic($ageMiniPublic){
        $this->ageMiniPublic = $ageMiniPublic;
        return $this;
    }
    public function setDateSortie($dateSortie){
        $this->dateSortie = $dateSortie;
        return $this;
    }
    public function setAffiche($affiche){
        $this->affiche = $affiche;
        return $this;
    }


}
?>