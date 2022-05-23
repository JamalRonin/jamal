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
     * @Route("/", name="app_home")
     */
    public function index(SkillsRepository $skillsRepository,AboutRepository $aboutRepository, InfoNumberRepository $infoNumberRepository, InterestsRepository $interestsRepository, NavRepository $navRepository, SocialLinkRepository $socialLinkRepository, TeamRepository $teamRepository): Response
    {   
        $about = $aboutRepository->findByExampleField('1');
        $infoNumber = $infoNumberRepository->findAll();
        $interests = $interestsRepository->findAll();
        $nav = $navRepository->findAll();
        $social = $socialLinkRepository->findAll();
        $team = $teamRepository->findAll();
        $skills = $skillsRepository->findByskills5to9();
        $skills_section = $skillsRepository->findByskillsto14();
        dump($about);

        return $this->render('home/index.html.twig', [
            'about' => $about,
            'infoNumber' => $infoNumber, 
            'interests' => $interests,
            'nav' => $nav, 
            'social' => $social,
            'team' => $team,
            'skills' => $skills,
            'skills_section' => $skills_section,
        ]);
    }
}
