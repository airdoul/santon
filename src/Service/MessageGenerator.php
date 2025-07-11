<?php
namespace App\Service;

class MessageGenerator 
{
    public function generateMessage(): string
    {
        $messages = [
  "Salut, c’est pas un peu tôt pour faire le malin ?",
  "Ah ben si c’est pour dire bonjour comme ça, fallait pas vous déranger.",
  "Moi j’dis bonjour aux gens quand j’arrive, c’est pas pour me faire insulter !",
  "On peut pas dire bonjour normalement comme tout le monde ?",
  "Quand on veut dire bonjour, on frappe pas avec une épée !",
  "Alors c’est ça, votre collection de saloperies ?",
  "J’ai une collection de cailloux qui ressemblent à des trucs, si vous voulez.",
  "Il fait une collection de miettes ou quoi ? On peut plus s’asseoir !",
  "Je classe mes armes par ordre alphabétique. Pratique pour massacrer méthodiquement.",
  "Si ranger les fourchettes c’était un métier, vous seriez roi !",
  "J’ai vu votre salle des coffres, on dirait un marché aux puces !",
  "Votre système de rangement est basé sur le chaos, non ?",
  "C’est une manière de dire bonjour, de me balancer une enclume ?",
  "Moi j’dis : si on dit pas bonjour au roi, autant aller cultiver des navets.",
  "Tenez, ça c’est un caillou qui ressemble à une pomme. Je l’ai classé dans ‘fruits’.",
  "J’ai un inventaire, si vous voulez. Enfin, c’est surtout une liste de trucs que j’ai perdus.",
  "C’est pas une collection, c’est un foutoir, votre affaire.",
  "Pour moi, dire bonjour c’est comme faire la vaisselle. Faut que ça soit rapide.",
  "Y en a qui collectionnent les pièces, moi c’est les baffes."
];
    

    $index = array_rand(($messages) );

    return $messages[$index];

    }
}
