<?php

namespace App\Controller;

use App\Entity\TeamEntity;
use App\Entity\MatchesEntity;
use App\Repository\MatchesEntityRepository;
use App\Repository\TeamEntityRepository;
use PhpParser\Node\Expr\Cast\Int_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LeaderboardController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('/index.html.twig');
    }

    /**
     * @Route("/teams", name="teams")
     */
    public function team()
    {
        $teams = $this->getDoctrine()->getRepository(TeamEntity::class)->findAll();
        $matches = $this->getDoctrine()->getRepository(MatchesEntity::class)->findAll();
        return $this->render('/teams.html.twig', [ 'teams' => $teams, 'matches' => $matches]);
    }

    /**
     * @Route("/teams/{name}", name="team")
     */
    public function teams($name)
    {
        $teamAct = $this->getDoctrine()->getRepository(TeamEntity::class)->findOneBy(array('name' => $name));
        $teams = $this->getDoctrine()->getRepository(TeamEntity::class)->findAll();
        $matches = $this->getDoctrine()->getRepository(MatchesEntity::class)->findAll();
        if (!$teamAct) {
            return $this->render('/pnf.html.twig');
        }
        return $this->render('/team.html.twig', [ 'team'=>$teamAct, 'teams' => $teams, 'matches' => $matches]);
    }

    /**
     * @Route("/ranking", name="ranking")
     */
    public function ranking()
    {
        $teams = $this->getDoctrine()->getRepository(TeamEntity::class)->findAllOrderBySkill();
        $matches = $this->getDoctrine()->getRepository(MatchesEntity::class)->findAll();
        return $this->render('/ranking.html.twig', [ 'teams' => $teams, 'matches' => $matches]);
    }

    /**
     * @Route("/register", name="register")
     */
    public function register()
    {
        return $this->render('/register.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('/login.html.twig');
    }
}
