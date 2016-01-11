<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'SuzaroBundle\\Controller\\IndexController::indexAction',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/korisnici')) {
            // korisnici
            if ($pathinfo === '/korisnici') {
                return array (  '_controller' => 'SuzaroBundle\\Controller\\UsersController::indexAction',  '_route' => 'korisnici',);
            }

            // korisnici_novi
            if ($pathinfo === '/korisnici/novi') {
                return array (  '_controller' => 'SuzaroBundle\\Controller\\UsersController::addUserAction',  '_route' => 'korisnici_novi',);
            }

            // korisnici_uredi
            if ($pathinfo === '/korisnici/uredi') {
                return array (  '_controller' => 'SuzaroBundle\\Controller\\UsersController::editUserAction',  '_route' => 'korisnici_uredi',);
            }

            // korisnici_obrisi
            if ($pathinfo === '/korisnici/obrisi') {
                return array (  '_controller' => 'SuzaroBundle\\Controller\\UsersController::deleteUserAction',  '_route' => 'korisnici_obrisi',);
            }

        }

        if (0 === strpos($pathinfo, '/oprema')) {
            // oprema
            if ($pathinfo === '/oprema') {
                return array (  '_controller' => 'SuzaroBundle\\Controller\\OpremaController::indexAction',  '_route' => 'oprema',);
            }

            // oprema_nova
            if ($pathinfo === '/oprema/nova') {
                return array (  '_controller' => 'SuzaroBundle\\Controller\\OpremaController::addEquipAction',  '_route' => 'oprema_nova',);
            }

            // oprema_uredi
            if ($pathinfo === '/oprema/uredi') {
                return array (  '_controller' => 'SuzaroBundle\\Controller\\OpremaController::editEquipAction',  '_route' => 'oprema_uredi',);
            }

            // oprema_obrisi
            if ($pathinfo === '/oprema/obrisi') {
                return array (  '_controller' => 'SuzaroBundle\\Controller\\OpremaController::deleteEquipAction',  '_route' => 'oprema_obrisi',);
            }

        }

        if (0 === strpos($pathinfo, '/korisnik/koristenje')) {
            // korisnik_koristenje
            if ($pathinfo === '/korisnik/koristenje') {
                return array (  '_controller' => 'SuzaroBundle\\Controller\\RezervacijaController::indexAction',  '_route' => 'korisnik_koristenje',);
            }

            // korisnik_koristenje_ajax
            if ($pathinfo === '/korisnik/koristenje/korisnik') {
                return array (  '_controller' => 'SuzaroBundle\\Controller\\RezervacijaController::userResAction',  '_route' => 'korisnik_koristenje_ajax',);
            }

        }

        if (0 === strpos($pathinfo, '/oprema/koristenje')) {
            // oprema_koristenje
            if ($pathinfo === '/oprema/koristenje') {
                return array (  '_controller' => 'SuzaroBundle\\Controller\\RezervacijaController::opremaAction',  '_route' => 'oprema_koristenje',);
            }

            // oprema_koristenje_ajax
            if ($pathinfo === '/oprema/koristenje/oprema') {
                return array (  '_controller' => 'SuzaroBundle\\Controller\\RezervacijaController::opremaResAction',  '_route' => 'oprema_koristenje_ajax',);
            }

        }

        // rezervacija
        if ($pathinfo === '/rezervacija') {
            return array (  '_controller' => 'SuzaroBundle\\Controller\\RezervacijaController::novaAction',  '_route' => 'rezervacija',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
