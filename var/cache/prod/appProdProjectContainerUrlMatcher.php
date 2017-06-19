<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        // landing_features
        if ($pathinfo === '/features') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::featuresAction',  '_route' => 'landing_features',);
        }

        // social_organisations
        if ($pathinfo === '/orgs') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::organisationsAction',  '_route' => 'social_organisations',);
        }

        // social_profile
        if (0 === strpos($pathinfo, '/profile') && preg_match('#^/profile/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'social_profile')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::viewProfileAction',));
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

            // configure_apps
            if ($pathinfo === '/accounts/configure-apps') {
                return array (  '_controller' => 'AppBundle\\Controller\\AccountsController::configureAppsAction',  '_route' => 'configure_apps',);
            }

            // budget_codes
            if ($pathinfo === '/accounts/budget-codes') {
                return array (  '_controller' => 'AppBundle\\Controller\\AccountsController::budgetCodeAction',  '_route' => 'budget_codes',);
            }

            // customers
            if ($pathinfo === '/accounts/customers') {
                return array (  '_controller' => 'AppBundle\\Controller\\AccountsController::customerAction',  '_route' => 'customers',);
            }

            if (0 === strpos($pathinfo, '/accounts/add-')) {
                // add_invoice
                if ($pathinfo === '/accounts/add-invoice') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AccountsController::invoiceAction',  '_route' => 'add_invoice',);
                }

                // add_expense
                if ($pathinfo === '/accounts/add-expense') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AccountsController::addExpenseAction',  '_route' => 'add_expense',);
                }

            }

            if (0 === strpos($pathinfo, '/accounts/view-')) {
                // view_income
                if ($pathinfo === '/accounts/view-income') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AccountsController::viewIncomeAction',  '_route' => 'view_income',);
                }

                // view_expense
                if ($pathinfo === '/accounts/view-expense') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AccountsController::viewExpenseAction',  '_route' => 'view_expense',);
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

        if (0 === strpos($pathinfo, '/qa-media')) {
            // qa-media_upload
            if ($pathinfo === '/qa-media') {
                return array (  '_controller' => 'AppBundle\\Controller\\QAController::uploadMediaAction',  '_route' => 'qa-media_upload',);
            }

            // qa-media_get
            if (preg_match('#^/qa\\-media/(?P<filehash>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'qa-media_get')), array (  '_controller' => 'AppBundle\\Controller\\QAController::getMediaAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
