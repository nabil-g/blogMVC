<?php


function get_billets($offset, $limit)
{
  global $bdd;
  $offset = (int) $offset;
  $limit = (int) $limit;

  $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y \') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT :offset, :limit'); // préparation de requete sql

  $req->bindParam(':offset',$offset, PDO::PARAM_INT);
  $req->bindParam(':limit',$limit, PDO::PARAM_INT);
  $req->execute();
  $billets = $req->fetchAll();

  return $billets;
}
