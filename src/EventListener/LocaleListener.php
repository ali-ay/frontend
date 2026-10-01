<?php
/**
 * Created by PhpStorm.
 * User: harun.akgun
 * Date: 24/02/2017
 * Time: 11:22
 */

namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LocaleListener implements EventSubscriberInterface
{
    private $defaultLocale;
    public function __construct($defaultLocale = 'tr')
    {
        $this->defaultLocale = $defaultLocale;
    }

    public function onKernelRequest(RequestEvent $event)
    {
        if ($event->isMainRequest()) {

            $noChangePaths = array(
                '_wdt','_profiler_home','_profiler_search','_profiler_search_bar', '_profiler_info', '_profiler_phpinfo',
                '_profiler_search_results', '_profiler_open_file','_profiler', '_profiler_router','_profiler_exception',
                '_profiler_exception_css', '_twig_error_test','international','switch_region','form_international_contact_us');

            $notAllowedOnEuPaths = array(
                'homepage',
                'iyzipos_landing_page',
                'iyzibazaar_landing_page',
                'iyzilink_landing_page',
                'buyer_protection_landing_page',
                'international',
                'iyzilink_apply_page',
                'iyziglobe_landing_page',
            );

            $countryCodesToRedirect = array(

            );

            $request = $event->getRequest();

            $incomignRegisterLeadSource = $request->getSession()->get('register_lead_source');
            $currentRegion = $request->getSession()->get('_region');
            $currentRoute = $request->get('_route');

            if ($currentRegion == 'Europe' && array_search($currentRoute,$notAllowedOnEuPaths) !== false){
                $event->setResponse(new RedirectResponse('/'));
            }

            if ($currentRegion == null && array_search($currentRoute,$noChangePaths) === false) {
                $bypassLocale =  $request->query->get('bypassLocale');
                if ($bypassLocale) {
                    $request->getSession()->set('_region','Turkey');
                    $currentRegion="Turkey";
                } else {
                    $countryCode = "TR";
                    if ($request->headers->get('cf-ipcountry')) $countryCode = $request->headers->get('cf-ipcountry');

                    if (in_array($countryCode,$countryCodesToRedirect)) {
                        $request->getSession()->set('_region','Europe');
                        $request->getSession()->set('_locale','en');
                        $event->setResponse(new RedirectResponse('/eu'));
                    } else {
                        $request->getSession()->set('_region','Turkey');
                        $request->getSession()->set('_locale','tr');
                    }
                }
            }

            $route = $request->get('_route');

            if($route == 'homepage_eu') {
                $event->setResponse(new RedirectResponse('/'));
            }

/*
            if ($currentRegion != 'Europe' && $currentRoute == "europe")  {
                $event->setResponse(new RedirectResponse('/isim-icin'));
            }
*/

            //$currentRegion = $request->getSession()->get('_region');
            //if ($currentRegion === null) $request->getSession()->set('_region','Turkey');


            if ($incomignRegisterLeadSource == null) {

                $registerLeadSource = "";

                $gclid = $request->query->get('gclid');
                $utmSource = $request->query->get('utm_source');
                $referrer = $request->headers->get('referer');

                if ($referrer) {
                    if (strpos($referrer, 'www.iyzico.com') == true) {
                        $registerLeadSource = $referrer;
                    }
                }
                if ($utmSource) {
                    $registerLeadSource = $utmSource;
                }
                if ($gclid) {
                    $registerLeadSource = 'google-adwords';
                }

                $request->getSession()->set('register_lead_source',$registerLeadSource);
            }

            if (!$request->hasPreviousSession()) {
                return;
            }

            if ($locale = $request->attributes->get('_locale')) {
                $request->getSession()->set('_locale', $locale);
            } else {
                // if no explicit locale has been set on this request, use one from the session
                $request->setLocale($request->getSession()->get('_locale', $this->defaultLocale));
            }
        }

    }

    public static function getSubscribedEvents()
    {
        return array(
            // must be registered after the default Locale listener
            KernelEvents::REQUEST => array(array('onKernelRequest', 15)),
        );
    }

}
