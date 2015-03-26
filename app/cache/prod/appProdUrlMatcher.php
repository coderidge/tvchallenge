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

        // tv_guide_listings_homepage
        if ($pathinfo === '/listings') {
            return array (  '_controller' => 'TVGuide\\ListingsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'tv_guide_listings_homepage',);
        }

        // tv_guide_listings_package
        if ($pathinfo === '/package') {
            return array (  '_controller' => 'TVGuide\\ListingsBundle\\Controller\\DefaultController::packageAction',  '_route' => 'tv_guide_listings_package',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
