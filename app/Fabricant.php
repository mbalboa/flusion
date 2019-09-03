<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricant extends Model

  {
    // Nom du tableau dans MySQL.
    protected $table='table_fabricants';

    // Eloquent suppose que chaque table a une clé primaire avec une colonne appelée id.

    protected $primaryKey = 'id';

    // Des attributs qui peuvent être assignés massivement.
    protected $fillable = array('gs','equipe','mail');

    // Ici nous mettons les champs que nous ne voulons pas retourner dans les requêtes.
    protected $hidden = ['created_at','updated_at'];

    // Nous définissons ci-dessous la relation de ce tableau avec les autres.
    // Exemples de relations :
    // 1 utilisateur a 1 téléphone ->hasOne() Rapport 1:1
    // 1 téléphone appartient à 1 utilisateur -> appartient à 1 utilisateur -> belongsTo 1:1 relation inverse à hasOne()
    // 1 post a beaucoup de commentaires -> hasMany() Relationship 1:N
    // 1 commentaire appartient à 1 message -> belongsTo() Relation 1:N inverse à hasMany()
    // 1 utilisateur peut avoir plusieurs rôles -> belongsToMany()



    // Relation entre les flux et le fabricant :
    public function flux()
    {
      // 1 fabricant possède plusieurs flux.
      // this fait référence à l'objet que nous avons en ce moment concernant fabricant
      return $this->hasMany('App\Flux');
    }
  }
