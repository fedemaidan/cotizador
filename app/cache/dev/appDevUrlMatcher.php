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

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/073fb1e')) {
                // _assetic_073fb1e
                if ($pathinfo === '/js/073fb1e.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '073fb1e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_073fb1e',);
                }

                if (0 === strpos($pathinfo, '/js/073fb1e_part_1_editablegrid_')) {
                    // _assetic_073fb1e_0
                    if ($pathinfo === '/js/073fb1e_part_1_editablegrid_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '073fb1e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_073fb1e_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/073fb1e_part_1_editablegrid_charts_')) {
                        // _assetic_073fb1e_1
                        if ($pathinfo === '/js/073fb1e_part_1_editablegrid_charts_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '073fb1e',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_073fb1e_1',);
                        }

                        // _assetic_073fb1e_2
                        if ($pathinfo === '/js/073fb1e_part_1_editablegrid_charts_ofc_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '073fb1e',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_073fb1e_2',);
                        }

                    }

                    // _assetic_073fb1e_3
                    if ($pathinfo === '/js/073fb1e_part_1_editablegrid_editors_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '073fb1e',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_073fb1e_3',);
                    }

                    // _assetic_073fb1e_4
                    if ($pathinfo === '/js/073fb1e_part_1_editablegrid_renderers_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '073fb1e',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_073fb1e_4',);
                    }

                    // _assetic_073fb1e_5
                    if ($pathinfo === '/js/073fb1e_part_1_editablegrid_utils_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '073fb1e',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_073fb1e_5',);
                    }

                    // _assetic_073fb1e_6
                    if ($pathinfo === '/js/073fb1e_part_1_editablegrid_validators_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '073fb1e',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_073fb1e_6',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/3')) {
                if (0 === strpos($pathinfo, '/js/387daca')) {
                    // _assetic_387daca
                    if ($pathinfo === '/js/387daca.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '387daca',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_387daca',);
                    }

                    // _assetic_387daca_0
                    if ($pathinfo === '/js/387daca_bootstrap3-typeahead.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '387daca',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_387daca_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/3de1b25')) {
                    // _assetic_3de1b25
                    if ($pathinfo === '/js/3de1b25.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3de1b25',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_3de1b25',);
                    }

                    // _assetic_3de1b25_0
                    if ($pathinfo === '/js/3de1b25_cotizador_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3de1b25',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_3de1b25_0',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/8b5d6d3')) {
                // _assetic_8b5d6d3
                if ($pathinfo === '/js/8b5d6d3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8b5d6d3',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8b5d6d3',);
                }

                // _assetic_8b5d6d3_0
                if ($pathinfo === '/js/8b5d6d3_jquery-1.11.1.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8b5d6d3',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8b5d6d3_0',);
                }

            }

        }

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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

        // inicio
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'inicio');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\CotizadorController::inicioAction',  '_route' => 'inicio',);
        }

        // datos
        if ($pathinfo === '/datos') {
            return array (  '_controller' => 'AppBundle\\Controller\\CotizadorController::datosAction',  '_route' => 'datos',);
        }

        // validarDatosGenerales
        if ($pathinfo === '/validarDatosGenerales') {
            return array (  '_controller' => 'AppBundle\\Controller\\CotizadorController::validarDatosGeneralesAction',  '_route' => 'validarDatosGenerales',);
        }

        // cotizar
        if ($pathinfo === '/cotizar') {
            return array (  '_controller' => 'AppBundle\\Controller\\CotizadorController::cotizarAction',  '_route' => 'cotizar',);
        }

        if (0 === strpos($pathinfo, '/ge')) {
            if (0 === strpos($pathinfo, '/generar')) {
                // generarPDF
                if ($pathinfo === '/generarPDF') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CotizadorController::generarPDFAction',  '_route' => 'generarPDF',);
                }

                // generarBoleta
                if ($pathinfo === '/generarBoleta') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CotizadorController::generarBoletaAction',  '_route' => 'generarBoleta',);
                }

            }

            if (0 === strpos($pathinfo, '/get')) {
                // getCategoriasJSON
                if ($pathinfo === '/getCategoriasJSON') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CotizadorController::categoriasAction',  '_route' => 'getCategoriasJSON',);
                }

                // getObrasJSON
                if ($pathinfo === '/getObrasJSON') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CotizadorController::obrasAction',  '_route' => 'getObrasJSON',);
                }

                // unidad
                if ($pathinfo === '/getUnidad') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CotizadorController::unidadAction',  '_route' => 'unidad',);
                }

            }

        }

        // validarCaptcha
        if ($pathinfo === '/validarCaptcha') {
            return array (  '_controller' => 'AppBundle\\Controller\\CotizadorController::validarCaptchaAction',  '_route' => 'validarCaptcha',);
        }

        // secure_code
        if ($pathinfo === '/secure_code') {
            return array (  '_controller' => 'AppBundle\\Controller\\CotizadorController::secureCodeAction',  '_route' => 'secure_code',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
