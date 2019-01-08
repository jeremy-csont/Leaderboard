<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\TeamEntity;
use App\Entity\MatchesEntity;

class LeadFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $team1 = new TeamEntity();
        $team1->setName("Vitality");
        $team1->setSkillMu(30);
        $team1->setSkillSigma(8);
        $team2 = new TeamEntity();
        $team2->setName("Optic Gaming");
        $team2->setSkillMu(24);
        $team2->setSkillSigma(3);
        $team3 = new TeamEntity();
        $team3->setName("Luminosity");
        $team3->setSkillMu(20);
        $team3->setSkillSigma(1);
        $team4 = new TeamEntity();
        $team4->setName("Evil Geniuses");
        $team4->setSkillMu(25);
        $team4->setSkillSigma(1);
        $manager->persist($team1);
        $manager->persist($team2);
        $manager->persist($team3);
        $manager->persist($team4);

        $match1 = new MatchesEntity();
        $match1->setStart(new \DateTime());
        $match1->setEnd(new \DateTime());
        $match1->setIdTeam1($team1);
        $match1->setIdTeam2($team2);
        $match1->setWinner(1);
        $match2 = new MatchesEntity();
        $match2->setStart(new \DateTime());
        $match2->setEnd(new \DateTime());
        $match2->setIdTeam1($team3);
        $match2->setIdTeam2($team4);
        $match2->setWinner(2);
        $match3 = new MatchesEntity();
        $match3->setStart(new \DateTime());
        $match3->setEnd(new \DateTime());
        $match3->setIdTeam1($team1);
        $match3->setIdTeam2($team3);
        $match3->setWinner(0);
        $match4 = new MatchesEntity();
        $match4->setStart(new \DateTime());
        $match4->setEnd(new \DateTime());
        $match4->setIdTeam1($team2);
        $match4->setIdTeam2($team4);
        $match4->setWinner(1);
        $match5 = new MatchesEntity();
        $match5->setStart(new \DateTime());
        $match5->setEnd(new \DateTime());
        $match5->setIdTeam1($team1);
        $match5->setIdTeam2($team4);
        $match5->setWinner(2);
        $match6 = new MatchesEntity();
        $match6->setStart(new \DateTime());
        $match6->setEnd(new \DateTime());
        $match6->setIdTeam1($team2);
        $match6->setIdTeam2($team3);
        $match6->setWinner(0);
        $manager->persist($match1);
        $manager->persist($match2);
        $manager->persist($match3);
        $manager->persist($match4);
        $manager->persist($match5);
        $manager->persist($match6);
        $manager->flush();
  }
}
