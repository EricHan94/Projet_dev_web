<?php
namespace App\repository;

use App\Database;
use App\model\FilmModel;

class FilmRespository extends Database{

    private function buildObject(array $row): FilmModel 
    {

        $film = new FilmModel();
        $film->setTitre($row['titre']);
        $film->setRealisateur($row['realisateur']);
        $film->setSynopsis($row['synopsis']);
        
        return $film;
    }

    public function checkFilmExists(array $data = [])
    {
        $result = $this->createQuery(
            'SELECT id FROM films WHERE Titre = :postTitre and Alias = :postAlias and 
            TitreOriginal = :postTitreOriginal and Realisateur = :postRealisateur and Acteurs = :postActeurs and 
            Synopsis = :postSynopsis and EnVO = :postEnVO and DureeMinutes = :postDureeMinutes and Genres_id = :postGenres_id and 
            AgeMiniPublic = :postAgeMiniPublic and DateSortie = :postDateSortie and Affiche = :postAffiche',
            [
                'postTitre' => $data['titre'],
                'postAlias' => $data['alias'],
                'postTitreOriginal' => $data['titreOriginal'],
                'postRealisateur' => $data['realisateur'],
                'postActeurs'=> $data['acteurs'],
                'postSynopsis' => $data['synopsis'],
                'postEnVO' => $data['enVO'],
                'postDureeMinutes' => $data['dureeMinutes'],
                'postGenres_id' => $data['genres_id'],
                'postAgeMiniPublic' => $data['ageMiniPublic'],
                'postDateSortie'=> $data['dateSortie'],
                'postAffiche'=> $data['affiche'],
            ]
        );
     
        if(empty($result->fetch())){
            return False;
        }else{
                  return TRUE;
                 
       }
    }

    public function ajouter(array $data = [])
    {
        $this->createQuery(
            'INSERT INTO films (titre, alias, titreOriginal, realisateur, acteurs, synopsis, enVO, dureeMinutes, genres_id, ageMiniPublic, dateSortie, affiche) 
            VALUES(:titre, :alias, :titreOriginal, :realisateur, :acteurs, :synopsis, :enVO, :dureeMinutes, :genres_id, :ageMiniPublic, :dateSortie, :affiche)',
            [
                'titre' => $data['titre'],
                'alias' => $data['alias'],
                'titreOriginal' => $data['titreOriginal'],
                'realisateur' => $data['realisateur'],
                'acteurs'=> $data['acteurs'],
                'synopsis' => $data['synopsis'],
                'enVO' => $data['enVO'],
                'dureeMinutes' => $data['dureeMinutes'],
                'genres_id' => $data['genres_id'],
                'ageMiniPublic' => $data['ageMiniPublic'],
                'dateSortie'=> $data['dateSortie'],
                'affiche'=> $data['affiche'],
            ]
    );
    }

    public function getFilmParGenre(int $genre)
    {
        $tableau = [];
        $result = $this->createQuery(
            'SELECT titre, synopsis, realisateur FROM films WHERE genres_id = :genre',
            ['genre' => $genre]
        );
        $tab = $result->fetchAll();
        
        foreach($tab as $row){
          
            $objet = $this->buildObject($row);
            array_unshift($tableau, $objet);
        }
        return $tableau;
    }
}