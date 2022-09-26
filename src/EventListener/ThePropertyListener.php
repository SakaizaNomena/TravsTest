<?php
namespace App\EventListener;

use App\Entity\TheProperty;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Event\LifecycleEventArgs;

class ThePropertyListener
{
    private $em;
    public function __construct(EntityManagerInterface $em){
        $this->em = $em;
    }
    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if(true === property_exists($entity, 'updatedAt') && $entity instanceof TheProperty){
            $entity->setUpdatedAt(new \Datetime());
        }
    }
    public function preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if(true === property_exists($entity, 'updatedAt') && $entity instanceof TheProperty){
            $entity->setUpdatedAt(new \Datetime());
        }
    }
}