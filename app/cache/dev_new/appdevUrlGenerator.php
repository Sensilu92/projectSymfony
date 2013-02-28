<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => '_profiler_search_results',    'token' => 'empty',    'ip' => '',    'url' => '',    'method' => '',    'limit' => '10',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),),
        'suivi_projet_developper_cra' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'suiviProjet\\DevelopperBundle\\Controller\\DevelopperController::afficheCraHebdomadaireVueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/compte_rendu_dactivite',    ),  ),),
        'suivi_projet_developper_cra_individuel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'suiviProjet\\DevelopperBundle\\Controller\\DevelopperController::afficheCraIndividuelVueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/compte_rendu_dactivite_individuel',    ),  ),),
        'suivi_projet_developper_creation_notice' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'suiviProjet\\DevelopperBundle\\Controller\\DevelopperController::afficheCreationNoticeVueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/creation_notice_dutilisation',    ),  ),),
        'suivi_projet_developper_consulte_notice' => array (  0 =>   array (    0 => 'idNotice',  ),  1 =>   array (    '_controller' => 'suiviProjet\\DevelopperBundle\\Controller\\DevelopperController::afficheConsultationNoticeVueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'idNotice',    ),    1 =>     array (      0 => 'text',      1 => '/consultation_notice_dutilisation',    ),  ),),
        'sprint_tableau_de_bord_sprint' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suiviprojet\\SprintBundle\\Controller\\SprintController::afficheTableauDeBordSprintVueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tableau_de_bord_sprint',    ),  ),),
        'sprint_assignation_user_stories' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suiviprojet\\SprintBundle\\Controller\\SprintController::afficheAssignationUserStoriesVueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/assignation_user_stories',    ),  ),),
        'sprint_creation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suiviprojet\\SprintBundle\\Controller\\SprintController::afficheCreationSprintVueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/creation_sprint',    ),  ),),
        'suiviprojet_administrateur_creation_projet' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suiviprojet\\AdministrateurBundle\\Controller\\AdministrateurController::creationProjetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/creation_projet',    ),  ),),
        'suiviprojet_administrateur_creation_compte_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suiviprojet\\AdministrateurBundle\\Controller\\AdministrateurController::creationCompteClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/creation_compte_client',    ),  ),),
        'suiviprojet_administrateur_connexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suiviprojet\\AdministrateurBundle\\Controller\\AdministrateurController::afficheConnexionVueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connexion',    ),  ),),
        'suiviprojet_administrateur_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suiviprojet\\AdministrateurBundle\\Controller\\AdministrateurController::afficheAccueilVueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/accueil',    ),  ),),
        'suiviprojet_administrateur_deconnexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suiviprojet\\AdministrateurBundle\\Controller\\AdministrateurController::afficheDeconnexionVueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deconnexion',    ),  ),),
        'suiviprojet_administrateur_identification' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suiviprojet\\AdministrateurBundle\\Controller\\GeneralController::isConnectedAction',    'url' => 'suiviprojet_administrateur_creation_compte_client',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/identification',    ),  ),),
        'client_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Suiviprojet\\ClientBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),),
        'client_devis' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suiviprojet\\ClientBundle\\Controller\\FacturationDevisController::consultdevisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/devis',    ),  ),),
        'blacklog_product_creation_userstories' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Suiviprojet\\BlacklogBundle\\Controller\\BlacklogProductController::afficheUserStoriesVueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/creation_user_stories',    ),  ),),
        'blacklog_product_creation_userstories_technique' => array (  0 =>   array (    0 => 'idUserStorie',  ),  1 =>   array (    '_controller' => 'Suiviprojet\\BlacklogBundle\\Controller\\BlacklogProductController::afficheUserStoriesTechniqueVueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'idUserStorie',    ),    1 =>     array (      0 => 'text',      1 => '/creation_user_stories_tech',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
