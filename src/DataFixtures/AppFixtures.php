<?php

namespace App\DataFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Pokemon;
use App\Entity\Type;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $feu = new Type();
        $feu->setName('Feu');
        $manager->persist($feu);

        $feuille = new Type();
        $feuille->setName('Feuille');
        $manager->persist($feuille);
        
        $eau = new Type();
        $eau->setName('Eau');
        $manager->persist($eau);

        $psi = new Type();
        $psi->setName('Psi');
        $manager->persist($psi);

        $dragon = new Type();
        $dragon->setName('Dragon');
        $manager->persist($dragon);

        $salameche = new Pokemon();
        $salameche->setName('Salamèche');
        $salameche->setDescription('Petit dragon rouge et orange');
        $salameche->addType($feu);
        $manager->persist($salameche); 
        

        $bulbizarre = new Pokemon();
        $bulbizarre->setName('Bulbizarre');
        $bulbizarre->setDescription('Petit animal vert');
        $bulbizarre->addType($feuille);
        $manager->persist($bulbizarre);

        $carapuce = new Pokemon();
        $carapuce->setName('Carapuce');
        $carapuce->setDescription('Petite tortue bleu');
        $carapuce->addType($eau);
        $manager->persist($carapuce);

        $Carabaffe = new Pokemon();
        $Carabaffe->setName('Carabaffe');
        $Carabaffe->setDescription('Moyenne tortue bleu');
        $Carabaffe->addType($eau);
        $manager->persist($Carabaffe);
        
        $Torkank = new Pokemon();
        $Torkank->setName('Torkank');
        $Torkank->setDescription('Grosse tortue bleu');
        $Torkank->addType($eau);
        $manager->persist($Torkank);
        
        $Reptincelle = new Pokemon();
        $Reptincelle->setName('Reptincelle');
        $Reptincelle->setDescription('petit dragon de feu');
        $Reptincelle->addType($feu);
        $manager->persist($Reptincelle);
        
        $Dracaufeu = new Pokemon();
        $Dracaufeu->setName('Dracaufeu');
        $Dracaufeu->setDescription('Grand dragon de feu');
        $Dracaufeu->addType($feu);
        $manager->persist($Dracaufeu);

        $Herbizarre = new Pokemon();
        $Herbizarre->setName('Herbizarre');
        $Herbizarre->setDescription('Moyen animal vert foncé');
        $Herbizarre->addType($feuille);
        $manager->persist($Herbizarre);

        $Florizarre = new Pokemon();
        $Florizarre->setName('Florizarre');
        $Florizarre->setDescription('Grand animal vert');
        $Florizarre->addType($feuille);
        $manager->persist($Florizarre);

        $mew = new Pokemon();
        $mew->setName('Mew');
        $mew->setDescription('Petite créature viollete');
        $mew->addType($psi);
        $manager->persist($mew);

        $mewtwo = new Pokemon();
        $mewtwo->setName('Mewtwo');
        $mewtwo->setDescription('Grande créature viollete');
        $mewtwo->addType($psi);
        $manager->persist($mewtwo);

        $Dialga = new Pokemon();
        $Dialga->setName('Dialga');
        $Dialga->setDescription('Dragon bleu');
        $Dialga->addType($dragon);
        $manager->persist($Dialga);

        $Palkia = new Pokemon();
        $Palkia->setName('Palkia');
        $Palkia->setDescription('Dragon violet');
        $Palkia->addType($dragon);
        $manager->persist($Palkia);

        $Rayquaza = new Pokemon();
        $Rayquaza->setName('Rayquaza');
        $Rayquaza->setDescription('Serpent-dragon vert');
        $Rayquaza->addType($dragon);
        $manager->persist($Rayquaza);

        $Giratina = new Pokemon();
        $Giratina->setName('Giratina');
        $Giratina->setDescription('Dragon noir');
        $Giratina->addType($dragon);
        $manager->persist($Giratina);

        $Dracolosse = new Pokemon();
        $Dracolosse->setName('Dracolosse');
        $Dracolosse->setDescription('Dragon beige');
        $Dracolosse->addType($dragon);
        $manager->persist($Dracolosse);

        $Drattak = new Pokemon();
        $Drattak->setName('Drattak');
        $Drattak->setDescription('Dragon gris');
        $Drattak->addType($dragon);
        $manager->persist($Drattak);

        $Airmur = new Pokemon();
        $Airmur->setName('Airmur');
        $Airmur->setDescription('Dragon gris clair');
        $Airmur->addType($dragon);
        $manager->persist($Airmur);

        $Leviator = new Pokemon();
        $Leviator->setName('Leviator');
        $Leviator->setDescription('Dragon bleu');
        $Leviator->addType($dragon, $eau);
        $manager->persist($Leviator);

        $magicarp = new Pokemon();
        $magicarp->setName('magicarp');
        $magicarp->setDescription('poisson rouge');
        $magicarp->addType($dragon);
        $manager->persist($magicarp);
    
        $manager->flush();
    }
}
