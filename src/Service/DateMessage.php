<?php

namespace App\Service;

class DateMessage
{
    public function getMessage(): string
    {
        $today = new \DateTime();
        $formatted = $today->format('m-d');

        $messages = [
            '01-06' => "Épiphanie : « Faut arrêter de chercher des fèves… j’en ai mangé trois et j’ai toujours pas eu le trône. »",  // Perceval (adaptation)
            '02-14' => "Saint‑Valentin : « L'amour, c'est une merde. C'est juste des complications en plus. »",  // Arthur (conservée)
            '04-23' => "Jour du livre : « Moi j’ai appris à lire, ben je souhaite ça à personne. »",  // Léodagan — absurde et décalée :contentReference[oaicite:6]{index=6}
            '05-01' => "Fête du travail : « Le travail ? C'est bien pour ceux qui ont rien à foutre de leur journée. »",  // Perceval (conservée)
            '06-21' => "Solstice d’été : « 38 degrés en armure, c’est un sport, pas une fête. »",  // Arthur :contentReference[oaicite:5]{index=5}
            '12-21' => "Solstice d’hiver : « Nuit à 15h ? Enfin une excuse pour siester. »",  // Karadoc (style) :contentReference[oaicite:6]{index=6}
            '03-20' => "Équinoxe de printemps : « Le printemps, tout le monde en parle comme une révolution. Moi, je vois surtout du pollen et des nez qui coulent. »",  // Perceval, Livre II
            '05-23' => "Fête de l’hydromel : « L’hydromel, c'est un truc qui commence par sentir bon et qui finit par sentir la gueule de bois. »",  // Karadoc, Livre II
            '04-01' => "Poisson d’avril : « Un poisson dans le dos ? Non mais je préfère encore que ce soit un rôti. »",  // Merlin, Livre III
            '10-31' => "Samain : « Faut pas respirer la compote, ça fait tousser. »",  // Léodagan/Perceval — phrase absurde, sans queue ni tête :contentReference[oaicite:5]{index=5}
            '01-03' => "Fête des Vœux : « Moi, à une époque, je voulais faire vœu de pauvreté… mais avec le pognon que j'rentrais, j'y arrivais pas, alors j'ai abandonné l'idée »",  // Seigneur Galessin, grand prince malgré lui.
            '07-11' => "Nouvel An : « C’est pas faux. Mais si on est équidistants du Nouvel An de l’année prochaine et de celui d’il y a un an, ça veut dire qu’on peut encore récupérer les résolutions qu’on n’a pas tenues ? »",  // Perceval, avec un raisonnement très pragmatique.


        ];

        return $messages[$formatted] ?? "";
    }
}