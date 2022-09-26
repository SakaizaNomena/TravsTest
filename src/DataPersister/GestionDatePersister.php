<?php
namespace App\DataPersister;

use App\Entity\TheProperty;
use Doctrine\ORM\EntityManagerInterface;
use ApiPlatform\Core\DataPersister\DataPersisterInterface;

class GestionDatePersister implements DataPersisterInterface 
{ 
    /**
     * @var EntityManagerInterface
     */
    private $em;
    public function __construct(EntityManagerInterface $em){
        $this->em = $em;
    }
    /**
     * @param string $data
     * @return boolean
     */
    public function supports($data): bool
    {
        return $data instanceof TheProperty;
    }
    /**
     * @param string $data
     * @return void
     */
    public function persist($data)
    {
        $data->setCreatedAt(new \DateTime());
        // dd($data);
        $this->em->persist($data);
        $this->em->flush();
    }
    /**
     * @param string $data
     * @return void
     */
    public function remove($data)
    {
        $this->em->remove($data);
        $this->em->flush();
    }
}