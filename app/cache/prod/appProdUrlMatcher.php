<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // nas_app_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nas_app_homepage');
            }

            return array (  '_controller' => 'Nas\\AppBundle\\Controller\\IndexController::indexAction',  '_route' => 'nas_app_homepage',);
        }

        // nasApp_voirSpecialite
        if (0 === strpos($pathinfo, '/voirSpecialite') && preg_match('#^/voirSpecialite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nasApp_voirSpecialite')), array (  '_controller' => 'Nas\\AppBundle\\Controller\\SpecialiteController::voirAction',));
        }

        // nasApp_listeSpecialite
        if (rtrim($pathinfo, '/') === '/listeSpecialite') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nasApp_listeSpecialite');
            }

            return array (  '_controller' => 'Nas\\AppBundle\\Controller\\SpecialiteController::listAction',  '_route' => 'nasApp_listeSpecialite',);
        }

        // nasApp_ajouterSpecialite
        if (rtrim($pathinfo, '/') === '/ajouterSpecialite') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nasApp_ajouterSpecialite');
            }

            return array (  '_controller' => 'Nas\\AppBundle\\Controller\\SpecialiteController::ajouterAction',  '_route' => 'nasApp_ajouterSpecialite',);
        }

        // nasApp_detailSpecialite
        if (0 === strpos($pathinfo, '/detailSpecialite') && preg_match('#^/detailSpecialite/(?P<idSpecialite>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nasApp_detailSpecialite')), array (  '_controller' => 'Nas\\AppBundle\\Controller\\SpecialiteController::detailAction',));
        }

        // nasApp_voirIntervention
        if (0 === strpos($pathinfo, '/voirIntervention') && preg_match('#^/voirIntervention/(?P<idSpecialite>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nasApp_voirIntervention')), array (  '_controller' => 'Nas\\AppBundle\\Controller\\InterventionController::voirAction',));
        }

        // nasApp_ajouterIntervention
        if (0 === strpos($pathinfo, '/ajouterIntervention') && preg_match('#^/ajouterIntervention/(?P<idSpecialite>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nasApp_ajouterIntervention')), array (  '_controller' => 'Nas\\AppBundle\\Controller\\InterventionController::ajouterAction',));
        }

        // nasApp_modifierIntervention
        if (0 === strpos($pathinfo, '/modifierIntervention') && preg_match('#^/modifierIntervention/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nasApp_modifierIntervention')), array (  '_controller' => 'Nas\\AppBundle\\Controller\\InterventionController::modifierAction',));
        }

        // nasApp_supprimerIntervention
        if (0 === strpos($pathinfo, '/supprimerIntervention') && preg_match('#^/supprimerIntervention/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nasApp_supprimerIntervention')), array (  '_controller' => 'Nas\\AppBundle\\Controller\\InterventionController::supprimerAction',));
        }

        // nasApp_voirHonoraire
        if (rtrim($pathinfo, '/') === '/voirHonoraire') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nasApp_voirHonoraire');
            }

            return array (  '_controller' => 'Nas\\AppBundle\\Controller\\HonoraireController::voirAction',  '_route' => 'nasApp_voirHonoraire',);
        }

        // nasApp_ajouterHonoraire
        if (0 === strpos($pathinfo, '/ajouterHonoraire') && preg_match('#^/ajouterHonoraire/(?P<idSpecialite>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nasApp_ajouterHonoraire')), array (  '_controller' => 'Nas\\AppBundle\\Controller\\HonoraireController::ajouterAction',));
        }

        // nasApp_modifierHonoraire
        if (0 === strpos($pathinfo, '/modifierHonoraire') && preg_match('#^/modifierHonoraire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nasApp_modifierHonoraire')), array (  '_controller' => 'Nas\\AppBundle\\Controller\\HonoraireController::modifierAction',));
        }

        // nasApp_ajouterDevis
        if (rtrim($pathinfo, '/') === '/ajouterDevis') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nasApp_ajouterDevis');
            }

            return array (  '_controller' => 'Nas\\AppBundle\\Controller\\DevisController::ajouterAction',  '_route' => 'nasApp_ajouterDevis',);
        }

        // nasApp_voirDevis
        if (0 === strpos($pathinfo, '/voirDevis') && preg_match('#^/voirDevis/(?P<idDevis>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nasApp_voirDevis')), array (  '_controller' => 'Nas\\AppBundle\\Controller\\DevisController::voirAction',));
        }

        // nasApp_listeDevis
        if (rtrim($pathinfo, '/') === '/listeDevis') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nasApp_listeDevis');
            }

            return array (  '_controller' => 'Nas\\AppBundle\\Controller\\DevisController::listAction',  '_route' => 'nasApp_listeDevis',);
        }

        // nasApp_chercheDevis
        if (rtrim($pathinfo, '/') === '/chercheDevis') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nasApp_chercheDevis');
            }

            return array (  '_controller' => 'Nas\\AppBundle\\Controller\\DevisController::chercheAction',  '_route' => 'nasApp_chercheDevis',);
        }

        // nasApp_annuleDevis
        if (0 === strpos($pathinfo, '/annuleDevis') && preg_match('#^/annuleDevis/(?P<idDevis>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nasApp_annuleDevis')), array (  '_controller' => 'Nas\\AppBundle\\Controller\\DevisController::annuleAction',));
        }

        if (0 === strpos($pathinfo, '/extraction')) {
            // nasApp_extraction
            if (rtrim($pathinfo, '/') === '/extraction') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'nasApp_extraction');
                }

                return array (  '_controller' => 'Nas\\AppBundle\\Controller\\ExtractionController::indexAction',  '_route' => 'nasApp_extraction',);
            }

            // nasApp_extractionExport
            if (0 === strpos($pathinfo, '/extractionExport') && preg_match('#^/extractionExport/(?P<listeDevis>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nasApp_extractionExport')), array (  '_controller' => 'Nas\\AppBundle\\Controller\\ExtractionController::exportAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // nasUser_listUser
        if (rtrim($pathinfo, '/') === '/listUtilisateur') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nasUser_listUser');
            }

            return array (  '_controller' => 'Nas\\UserBundle\\Controller\\UtilisateurController::listAction',  '_route' => 'nasUser_listUser',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
