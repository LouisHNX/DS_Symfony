<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Pokemon;
use App\Repository\PokemonRepository;
use Doctrine\ORM\EntityManagerInterface;
class ApiPokemonController extends AbstractController
{
    /**
     * @Route("/api/pokemon", name="app_api_pokemon")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ApiPokemonController.php',
        ]);
    }

    /**
     * @Route("/api/notbruteforcebutnotcleanurl-{id}", name="pokemon_show", methods={"GET"})
     */
    public function show(Pokemon $pokemon): Response
    {
        #var_dump($pokemon);
        return $this->render('pokemon/show.html.twig', [
            'pokemon' => $pokemon,
        ]);
    }

    /**
     * @Route("/pokemon/all", name="pokemon_all", methods={"GET"})
     */
    public function all(PokemonRepository $pokemonRepository): Response
    {
        #var_dump($pokemonRepository);
        return $this->render('pokemon/index.html.twig', [
            'pokemons' => $pokemonRepository->findAll(),
        ]);
    }

}
