<?php

namespace App\Controller;

use App\Entity\InfoNumber;
use App\Entity\Interests;
use App\Repository\AboutRepository;
use App\Repository\InfoNumberRepository;
use App\Repository\InterestsRepository;
use App\Repository\NavRepository;
use App\Repository\SkillsRepository;
use App\Repository\SocialLinkRepository;
use App\Repository\TeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(SkillsRepository $skillsRepository,AboutRepository $aboutRepository, InfoNumberRepository $infoNumberRepository, InterestsRepository $interestsRepository, NavRepository $navRepository, SocialLinkRepository $socialLinkRepository, TeamRepository $teamRepository): Response
    {   
        $about = $aboutRepository->findAll();
        $infoNumber = $infoNumberRepository->findAll();
        $interests = $interestsRepository->findAll();
        $nav = $navRepository->findAll();
        $social = $socialLinkRepository->findAll();
        $team = $teamRepository->findAll();
        $skills = $skillsRepository->findAll();


        return $this->render('home/index.html.twig', [
            'about' => $about,
            'infoNumber' => $infoNumber, 
            'interests' => $interests,
            'nav' => $nav, 
            'social' => $social,
            'team' => $team,
            'skills' => $skills,
        ]);
    }
}
