<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Contact;
use App\Entity\InfoNumber;
use App\Entity\Interests;
use App\Form\ContactType;
use App\Notification\ContactNotification;
use App\Repository\AboutRepository;
use App\Repository\CvRepository;
use App\Repository\InfoNumberRepository;
use App\Repository\InterestsRepository;
use App\Repository\NavRepository;
use App\Repository\PortfolioRepository;
use App\Repository\ProduitRepository;
use App\Repository\ServicesRepository;
use App\Repository\SkillsRepository;
use App\Repository\SocialLinkRepository;
use App\Repository\TeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
//COmmentaire, mettre les données en bdd pour le cv
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index( ProduitRepository $produitRepository ,ContactNotification $contactNotification, Request $request, PortfolioRepository $portfolioRepository ,ServicesRepository $servicesRepositoy , CvRepository $cvRepository, SkillsRepository $skillsRepository,AboutRepository $aboutRepository, InfoNumberRepository $infoNumberRepository, InterestsRepository $interestsRepository, NavRepository $navRepository, SocialLinkRepository $socialLinkRepository, TeamRepository $teamRepository): Response
    {   


        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact); 
        $form->handleRequest($request);

        

        
        if ($form->isSubmitted() && $form->isValid()){
            $contactNotification->notify($contact);
            $this->addFlash('success', 'Votre mail est bien envoyé');
            // puis vider le formulaire
             return $this->redirectToRoute('app_home');
        }
       
        $about = $aboutRepository->findByExampleField('1');
        $infoNumber = $infoNumberRepository->findAll();
        $interests = $interestsRepository->findAll();
        $nav = $navRepository->findAll();
        $social = $socialLinkRepository->findAll();
        $team = $teamRepository->findAll();
        $skills = $skillsRepository->findByskills5to9();
        $skills_section = $skillsRepository->findByskillsto14();
        $cv = $cvRepository->findByCV();
        $services = $servicesRepositoy->findAll();
        $portfolio = $portfolioRepository->findAll();
        $produit = $produitRepository->findAll();

        return $this->render('home/index.html.twig', [
            'about' => $about,
            'infoNumber' => $infoNumber, 
            'interests' => $interests,
            'nav' => $nav, 
            'social' => $social,
            'team' => $team,
            'skills' => $skills,
            'skills_section' => $skills_section,
            'cv' => $cv,
            'services' => $services,
            'portfolio' => $portfolio,
            'form' => $form->createView(),
            'produit' => $produit,
        ]);
    }



}
