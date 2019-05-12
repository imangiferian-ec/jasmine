<?php

namespace App\DataFixtures;

use App\Entity\Role;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class RoleFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
      $roleAdmin = new Role();

      $roleAdmin->setLandingPage($this->getReference(PermissionListFixtures::U_INDEX))
              ->setName('ROLE_ADMIN')
              ->setDescription('This is for the Admin Role')
              ->setIsActiveRole(1);
      $manager->persist($roleAdmin);

      $roleUser = new Role();
      $roleUser->setLandingPage($this->getReference(PermissionListFixtures::U_MYDETAILS))
              ->setName('ROLE_USER')
              ->setDescription('This is for the User Role')
              ->setIsActiveRole(1);
      $manager->persist($roleUser);
        // $product = new Product();
        // $manager->persist($product);

      $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            PermissionListFixtures::class,
        );
    }

}
