<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        // terms
        if ($pathinfo === '/terms') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::termsAction',  '_route' => 'terms',);
        }

        // privacy
        if ($pathinfo === '/privacy-policy') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::privacyAction',  '_route' => 'privacy',);
        }

        // social_organisations
        if ($pathinfo === '/orgs') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::organisationsAction',  '_route' => 'social_organisations',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // social_profile
            if (preg_match('#^/profile/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_profile')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::viewProfileAction',));
            }

            // social_profile_gallery
            if (preg_match('#^/profile/(?P<username>[^/]++)/gallery$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_profile_gallery')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::viewProfileGalleryAction',));
            }

            // social_profile_locations
            if (preg_match('#^/profile/(?P<username>[^/]++)/where$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_profile_locations')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::viewProfileLocationPostsAction',));
            }

            // social_profile_tags
            if (preg_match('#^/profile/(?P<username>[^/]++)/what$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_profile_tags')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::viewProfileTagsAction',));
            }

            // social_profile_tags_search
            if (preg_match('#^/profile/(?P<username>[^/]++)/what/(?P<tagstring>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_profile_tags_search')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::viewProfileSearchTagsAction',));
            }

        }

        // user_registration
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration',);
        }

        // user_post-registration
        if ($pathinfo === '/setup') {
            return array (  '_controller' => 'AppBundle\\Controller\\SetupController::setupAccountAction',  '_route' => 'user_post-registration',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // user_check
        if ($pathinfo === '/authorised') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::userCheckAction',  '_route' => 'user_check',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/accounts')) {
            // control_summary
            if ($pathinfo === '/accounts/summary') {
                return array (  '_controller' => 'AppBundle\\Controller\\AccountsController::summaryAction',  '_route' => 'control_summary',);
            }

            // my_posts
            if ($pathinfo === '/accounts/my-posts') {
                return array (  '_controller' => 'AppBundle\\Controller\\AccountsController::myPostsAction',  '_route' => 'my_posts',);
            }

            // configure_apps
            if ($pathinfo === '/accounts/configure-apps') {
                return array (  '_controller' => 'AppBundle\\Controller\\AccountsController::configureAppsAction',  '_route' => 'configure_apps',);
            }

            if (0 === strpos($pathinfo, '/accounts/tags')) {
                // budget_codes
                if ($pathinfo === '/accounts/tags') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AccountsController::budgetCodeAction',  '_route' => 'budget_codes',);
                }

                // budget_codes_search
                if (preg_match('#^/accounts/tags/(?P<tagstring>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'budget_codes_search')), array (  '_controller' => 'AppBundle\\Controller\\AccountsController::budgetCodeAction',));
                }

            }

            // customers
            if ($pathinfo === '/accounts/customers') {
                return array (  '_controller' => 'AppBundle\\Controller\\AccountsController::customerAction',  '_route' => 'customers',);
            }

            // income
            if ($pathinfo === '/accounts/income') {
                return array (  '_controller' => 'AppBundle\\Controller\\AccountsController::viewIncomeAction',  '_route' => 'income',);
            }

            // expenses
            if ($pathinfo === '/accounts/expenses') {
                return array (  '_controller' => 'AppBundle\\Controller\\AccountsController::viewExpenseAction',  '_route' => 'expenses',);
            }

            if (0 === strpos($pathinfo, '/accounts/post-')) {
                // post_image_page
                if ($pathinfo === '/accounts/post-image') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AccountsController::createImagePostAction',  '_route' => 'post_image_page',);
                }

                // post_event_page
                if ($pathinfo === '/accounts/post-event') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AccountsController::createEventPostAction',  '_route' => 'post_event_page',);
                }

            }

            // incoming_posts
            if ($pathinfo === '/accounts/incoming-posts') {
                return array (  '_controller' => 'AppBundle\\Controller\\AccountsController::incomingPostsAction',  '_route' => 'incoming_posts',);
            }

            // accounts_search_tags
            if (0 === strpos($pathinfo, '/accounts/search') && preg_match('#^/accounts/search(?:/(?P<tagstring>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'accounts_search_tags')), array (  '_controller' => 'AppBundle\\Controller\\AccountsController::searchTagsAction',  'tagstring' => NULL,));
            }

            // approve_post
            if (0 === strpos($pathinfo, '/accounts/approve-post') && preg_match('#^/accounts/approve\\-post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'approve_post')), array (  '_controller' => 'AppBundle\\Controller\\PostController::approvePostAction',));
            }

            // remove_post
            if (0 === strpos($pathinfo, '/accounts/remove-post') && preg_match('#^/accounts/remove\\-post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_post')), array (  '_controller' => 'AppBundle\\Controller\\PostController::removePostAction',));
            }

            // edit_post_page
            if (0 === strpos($pathinfo, '/accounts/edit-post') && preg_match('#^/accounts/edit\\-post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_post_page')), array (  '_controller' => 'AppBundle\\Controller\\PostController::editIncomingPostAction',));
            }

        }

        if (0 === strpos($pathinfo, '/qa-')) {
            if (0 === strpos($pathinfo, '/qa-media')) {
                // qa-media_upload
                if ($pathinfo === '/qa-media') {
                    return array (  '_controller' => 'AppBundle\\Controller\\QAController::uploadMediaAction',  '_route' => 'qa-media_upload',);
                }

                // qa-media_get
                if (preg_match('#^/qa\\-media/(?P<filehash>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'qa-media_get')), array (  '_controller' => 'AppBundle\\Controller\\QAController::getMediaAction',));
                }

                // qa-media_view
                if (0 === strpos($pathinfo, '/qa-media/view') && preg_match('#^/qa\\-media/view/(?P<filehash>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'qa-media_view')), array (  '_controller' => 'AppBundle\\Controller\\QAController::viewMediaAction',));
                }

            }

            // qa-post_upload
            if ($pathinfo === '/qa-data') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_qapost_upload;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\QAController::uploadPostAction',  '_route' => 'qa-post_upload',);
            }
            not_qapost_upload:

        }

        // accounting_scrapbook_tutorial
        if ($pathinfo === '/using-accounting-scrapbook') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::accountingScrapbookTutorialAction',  '_route' => 'accounting_scrapbook_tutorial',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
