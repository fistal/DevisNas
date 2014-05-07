<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'nas_app_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\IndexController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'nasApp_voirSpecialite' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\SpecialiteController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/voirSpecialite',    ),  ),  4 =>   array (  ),),
        'nasApp_listeSpecialite' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\SpecialiteController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listeSpecialite/',    ),  ),  4 =>   array (  ),),
        'nasApp_ajouterSpecialite' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\SpecialiteController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouterSpecialite/',    ),  ),  4 =>   array (  ),),
        'nasApp_detailSpecialite' => array (  0 =>   array (    0 => 'idSpecialite',  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\SpecialiteController::detailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idSpecialite',    ),    1 =>     array (      0 => 'text',      1 => '/detailSpecialite',    ),  ),  4 =>   array (  ),),
        'nasApp_voirIntervention' => array (  0 =>   array (    0 => 'idSpecialite',  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\InterventionController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idSpecialite',    ),    1 =>     array (      0 => 'text',      1 => '/voirIntervention',    ),  ),  4 =>   array (  ),),
        'nasApp_ajouterIntervention' => array (  0 =>   array (    0 => 'idSpecialite',  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\InterventionController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idSpecialite',    ),    1 =>     array (      0 => 'text',      1 => '/ajouterIntervention',    ),  ),  4 =>   array (  ),),
        'nasApp_modifierIntervention' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\InterventionController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modifierIntervention',    ),  ),  4 =>   array (  ),),
        'nasApp_supprimerIntervention' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\InterventionController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimerIntervention',    ),  ),  4 =>   array (  ),),
        'nasApp_voirHonoraire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\HonoraireController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/voirHonoraire/',    ),  ),  4 =>   array (  ),),
        'nasApp_ajouterHonoraire' => array (  0 =>   array (    0 => 'idSpecialite',  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\HonoraireController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idSpecialite',    ),    1 =>     array (      0 => 'text',      1 => '/ajouterHonoraire',    ),  ),  4 =>   array (  ),),
        'nasApp_modifierHonoraire' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\HonoraireController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modifierHonoraire',    ),  ),  4 =>   array (  ),),
        'nasApp_ajouterDevis' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\DevisController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouterDevis/',    ),  ),  4 =>   array (  ),),
        'nasApp_voirDevis' => array (  0 =>   array (    0 => 'idDevis',  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\DevisController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idDevis',    ),    1 =>     array (      0 => 'text',      1 => '/voirDevis',    ),  ),  4 =>   array (  ),),
        'nasApp_listeDevis' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\DevisController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listeDevis/',    ),  ),  4 =>   array (  ),),
        'nasApp_chercheDevis' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\DevisController::chercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/chercheDevis/',    ),  ),  4 =>   array (  ),),
        'nasApp_annuleDevis' => array (  0 =>   array (    0 => 'idDevis',  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\DevisController::annuleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idDevis',    ),    1 =>     array (      0 => 'text',      1 => '/annuleDevis',    ),  ),  4 =>   array (  ),),
        'nasApp_extraction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\ExtractionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/extraction/',    ),  ),  4 =>   array (  ),),
        'nasApp_extractionExport' => array (  0 =>   array (    0 => 'listeDevis',  ),  1 =>   array (    '_controller' => 'Nas\\AppBundle\\Controller\\ExtractionController::exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'listeDevis',    ),    1 =>     array (      0 => 'text',      1 => '/extractionExport',    ),  ),  4 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),),
        'nasUser_listUser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nas\\UserBundle\\Controller\\UtilisateurController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listUtilisateur/',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
