<?php
namespace App\Controller\Admin\Bien;

use App\Entity\TheProperty;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ThePropertyRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ControllerThePropertyController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em,
                                ThePropertyRepository $repo)
    {
        $this->em = $em;
        $this->repo = $repo;
    }
    /**
     * @Route("/list", name = "listTheProperty")
     */
    public function listTheProperty()
    {
        $this->repo->findAll();
        return $this->render('Admin\Bien\list.html.twig');
    }
}