<?php

namespace App\Security\Voter;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class PermissionVoter extends Voter
{
    // private URL;
    //
    // public function __const(){
    //     $this->URL = ['building_index', 'building_new'];
    // }

    protected function supports($attribute, $subject)
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array($attribute, ['edit', 'building_index', 'show', 'del', 'new']);
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
      $user = $token->getUser();

      $strRole = implode('', $user->getRoles());

      $access = ['building_index' => ['ROLE_ADMIN'], 'new' => ['ROLE_ADMIN']];




      // if the user is anonymous, do not grant access
      if (!$user instanceof UserInterface) {
          return false;
      }

      $strAccess = implode('', $access['building_index']);
      //var_dump($attribute); die();
       // var_dump(strpos($strAccess, $strRole));
       // var_dump(strpos($strRole, $strAccess)); die();
      //var_dump(strpos('akoito', "ak")); die();


        // ... (check conditions and return true to grant permission) ...
        switch ($attribute) {
            case 'building_index':
                $strAccess = implode('', $access['building_index']);
                if (strpos($strAccess, $strRole) !== false || strpos($strRole, $strAccess) !== false)
                {
                  return true;
                }
                else
                {
                  return false;
                }
                break;
            case 'edit':
                // logic to determine if the user can VIEW
                // return true or false
                break;
        }

        return false;
    }
}
