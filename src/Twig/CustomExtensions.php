<?php
/**
 * Created by PhpStorm.
 * User: harun.akgun
 * Date: 02/02/2017
 * Time: 16:52
 */

namespace App\Twig;

use Symfony\Component\HttpFoundation\RequestStack;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Twig\TwigFilter;

class CustomExtensions extends AbstractExtension
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('activeMenu', [$this, 'activeMenu'])
        ];
    }

    /**
     * Pass route names. If one of route names matches current route, this function returns
     * 'active'
     * @param array $routesToCheck
     * @return string
     */
    public function activeMenu(array $routesToCheck)
    {
        $currentRoute = $this->requestStack->getCurrentRequest()->get('_route');

        foreach ($routesToCheck as $routeToCheck) {
            if ($routeToCheck == $currentRoute) {
                return 'active';
            }
        }

        return '';
    }

    public function getFilters()
    {
        return array(
            new TwigFilter('upperUTF8', array($this, 'upperUTF8')),
            new TwigFilter('getRandomFromArray', array($this, 'getRandomFromArray')),
            new TwigFilter('slugify',array($this,'slugify')),
            new TwigFilter('removeLocale',array($this,'removeLocale')),
            new TwigFilter('getCanonical',array($this,'getCanonical')),
            new TwigFilter('castToArray',array($this,'castToArray'))
        );
    }

    public function upperUTF8($str)
    {
        $str = str_replace(array('i', 'ı', 'ü', 'ğ', 'ş', 'ö', 'ç'), array('İ', 'I', 'Ü', 'Ğ', 'Ş', 'Ö', 'Ç'), $str);
        return strtoupper($str);
    }
    public function getRandomFromArray($collection) {
        if (count($collection)>0){
            return $collection[mt_rand(0,count($collection)-1)];
        } else {
            return false;
        }

    }

    public function slugify($text){
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    public function removeLocale($object){
        unset($object['_locale']);
        return $object;
    }

    public function getCanonical($URI){
        $rawUrl = str_replace("http://", "https://", $URI);
        $rawUrl = explode('?',$rawUrl);
        return $rawUrl[0];
    }
    public function castToArray($stdClassObject){
        $response = array();
        foreach ($stdClassObject as $key => $value) {
            $response[] = array($key, $value);
        }
        return $response;
    }
}
