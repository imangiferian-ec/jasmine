<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Encoder\DateTimeInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $userAdmin = new User();
        $userAdmin->setEmail('admin.catantan@gmail.com');
        $userAdmin->setPassword($this->passwordEncoder->encodePassword($userAdmin,'admin'));
        $userAdmin->setLastName('Catantan');
        $userAdmin->setFirstName('Admin');
        $userAdmin->setIsActive(1);
        $userAdmin->setBirthdate(\DateTime::createFromFormat('Y-m-d', "1983-12-09"));
        $userAdmin->setRoles(['ROLE_ADMIN']);
        $manager->persist($userAdmin);

        $userUser = new User();
        $userUser->setEmail('user.catantan@gmail.com');
        $userUser->setPassword($this->passwordEncoder->encodePassword($userUser, 'user'));
        $userUser->setLastName('Catantan');
        $userUser->setFirstName('User');
        $userUser->setIsActive(1);
        $userUser->setBirthdate(\DateTime::createFromFormat('Y-m-d', "1983-09-09"));
        $userUser->setRoles(['ROLE_USER']);
        $manager->persist($userUser);

        $manager->flush();
    }
}
