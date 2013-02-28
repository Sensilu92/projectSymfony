<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // suivi_projet_developper_cra
        if ($pathinfo === '/compte_rendu_dactivite') {
            return array (  '_controller' => 'suiviProjet\\DevelopperBundle\\Controller\\DevelopperController::afficheCraHebdomadaireVueAction',  '_route' => 'suivi_projet_developper_cra',);
        }

        // suivi_projet_developper_cra_individuel
        if ($pathinfo === '/compte_rendu_dactivite_individuel') {
            return array (  '_controller' => 'suiviProjet\\DevelopperBundle\\Controller\\DevelopperController::afficheCraIndividuelVueAction',  '_route' => 'suivi_projet_developper_cra_individuel',);
        }

        // suivi_projet_developper_creation_notice
        if ($pathinfo === '/creation_notice_dutilisation') {
            return array (  '_controller' => 'suiviProjet\\DevelopperBundle\\Controller\\DevelopperController::afficheCreationNoticeVueAction',  '_route' => 'suivi_projet_developper_creation_notice',);
        }

        // suivi_projet_developper_consulte_notice
        if (0 === strpos($pathinfo, '/consultation_notice_dutilisation') && preg_match('#^/consultation_notice_dutilisation/(?P<idNotice>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'suiviProjet\\DevelopperBundle\\Controller\\DevelopperController::afficheConsultationNoticeVueAction',)), array('_route' => 'suivi_projet_developper_consulte_notice'));
        }

        // sprint_tableau_de_bord_sprint
        if ($pathinfo === '/tableau_de_bord_sprint') {
            return array (  '_controller' => 'Suiviprojet\\SprintBundle\\Controller\\SprintController::afficheTableauDeBordSprintVueAction',  '_route' => 'sprint_tableau_de_bord_sprint',);
        }

        // sprint_assignation_user_stories
        if ($pathinfo === '/assignation_user_stories') {
            return array (  '_controller' => 'Suiviprojet\\SprintBundle\\Controller\\SprintController::afficheAssignationUserStoriesVueAction',  '_route' => 'sprint_assignation_user_stories',);
        }

        // sprint_creation
        if ($pathinfo === '/creation_sprint') {
            return array (  '_controller' => 'Suiviprojet\\SprintBundle\\Controller\\SprintController::afficheCreationSprintVueAction',  '_route' => 'sprint_creation',);
        }

        // suiviprojet_administrateur_creation_projet
        if ($pathinfo === '/creation_projet') {
            return array (  '_controller' => 'Suiviprojet\\AdministrateurBundle\\Controller\\AdministrateurController::creationProjetAction',  '_route' => 'suiviprojet_administrateur_creation_projet',);
        }

        // suiviprojet_administrateur_creation_compte_client
        if ($pathinfo === '/creation_compte_client') {
            return array (  '_controller' => 'Suiviprojet\\AdministrateurBundle\\Controller\\AdministrateurController::creationCompteClientAction',  '_route' => 'suiviprojet_administrateur_creation_compte_client',);
        }

        // suiviprojet_administrateur_connexion
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'Suiviprojet\\AdministrateurBundle\\Controller\\AdministrateurController::afficheConnexionVueAction',  '_route' => 'suiviprojet_administrateur_connexion',);
        }

        // suiviprojet_administrateur_accueil
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'Suiviprojet\\AdministrateurBundle\\Controller\\AdministrateurController::afficheAccueilVueAction',  '_route' => 'suiviprojet_administrateur_accueil',);
        }

        // suiviprojet_administrateur_deconnexion
        if ($pathinfo === '/deconnexion') {
            return array (  '_controller' => 'Suiviprojet\\AdministrateurBundle\\Controller\\AdministrateurController::afficheDeconnexionVueAction',  '_route' => 'suiviprojet_administrateur_deconnexion',);
        }

        // suiviprojet_administrateur_identification
        if ($pathinfo === '/identification') {
            return array (  '_controller' => 'Suiviprojet\\AdministrateurBundle\\Controller\\GeneralController::isConnectedAction',  'url' => 'suiviprojet_administrateur_creation_compte_client',  '_route' => 'suiviprojet_administrateur_identification',);
        }

        // client_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Suiviprojet\\ClientBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'client_homepage'));
        }

        // client_devis
        if ($pathinfo === '/devis') {
            return array (  '_controller' => 'Suiviprojet\\ClientBundle\\Controller\\FacturationDevisController::consultdevisAction',  '_route' => 'client_devis',);
        }

        // blacklog_product_creation_userstories
        if ($pathinfo === '/creation_user_stories') {
            return array (  '_controller' => 'Suiviprojet\\BlacklogBundle\\Controller\\BlacklogProductController::afficheUserStoriesVueAction',  '_route' => 'blacklog_product_creation_userstories',);
        }

        // blacklog_product_creation_userstories_technique
        if (0 === strpos($pathinfo, '/creation_user_stories_tech') && preg_match('#^/creation_user_stories_tech/(?P<idUserStorie>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Suiviprojet\\BlacklogBundle\\Controller\\BlacklogProductController::afficheUserStoriesTechniqueVueAction',)), array('_route' => 'blacklog_product_creation_userstories_technique'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
