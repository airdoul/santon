<?php
namespace App\Service;

class MessageGenerator 
{
    public function generateMessage(): string
    {
        $messages = [
            "Alors c’est ça, votre collection de saloperies ?",
            "J’ai une collection de cailloux qui ressemblent à des trucs, si vous voulez.",
            "Il fait une collection de miettes ou quoi ? On peut plus s’asseoir !",
            "Si ranger les fourchettes c’était un métier, vous seriez roi !",
            "J’ai vu votre salle des coffres, on dirait un marché aux puces !",
            "Votre système de rangement est basé sur le chaos, non ?",
            "Tenez, ça c’est un caillou qui ressemble à une pomme. Je l’ai classé dans ‘fruits’.",
            "J’ai un inventaire, si vous voulez. Enfin, c’est surtout une liste de trucs que j’ai perdus.",
            "C’est pas une collection, c’est un foutoir, votre affaire.",
        ];
    

    $index = array_rand(($messages) );

    return $messages[$index];

    }
}
