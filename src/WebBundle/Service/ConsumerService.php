<?php
/**
 * Created by PhpStorm.
 * User: harun.akgun
 * Date: 02/02/2017
 * Time: 16:52
 */

namespace WebBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Yaml\Yaml;

class ConsumerService
{
    protected $container,$cache,$pageGateway,$menuGateway,$questionGateway,$widgetGateway,$translationsGateway,$language,$rssGateway,$instagramGateway;
    protected $translationKeys,$statusGateway;
    const ONE_HOUR = 3600;
    const FIVE_MINUTES = 300;

    public function __construct(ContainerInterface $container, RequestStack $requestStack, $translations)
    {
        $this->container = $container;
        $this->cache = $this->container->get('snc_redis.cache');
        $this->pageGateway = $this->container->get('web.page_gateway');
        $this->menuGateway = $this->container->get('web.menu_gateway');
        $this->questionGateway = $this->container->get('web.question_gateway');
        $this->widgetGateway = $this->container->get('web.widget_gateway');
        $this->translationsGateway = $this->container->get('web.translations_gateway');
        $this->rssGateway = $this->container->get('web.rss_gateway');
        $this->instagramGateway = $this->container->get('web.instagram_gateway');
        $this->statusGateway = $this->container->get('web.status_gateway');
        $this->translationKeys = Yaml::parse(file_get_contents($translations));

        $request = $requestStack->getCurrentRequest();
        $this->language = $request->getLocale();

    }

    public function retrieveWidgetArea($location){
        $cacheKey = 'cache-widget-area-'.$location.'-'.$this->language;
        $isCached = false;
        if (!$this->cache->exists($cacheKey)) {
            $rawWidgetData = $this->widgetGateway->getWidgetArea($location,$this->language);
            if ($rawWidgetData && count($rawWidgetData['widgets']) > 0) {
                $widgets = array();
                foreach ($rawWidgetData['widgets'] as $key => $widget) {
                    if (strpos($widget['id'], '-') > 0) {
                        $widgetId = explode('-', $widget['id'])[0];
                    } else {
                        $widgetId = $widget['id'];
                    }

                    $widgets[$widgetId] = json_decode($widget['rendered']);
                }
                $isCached = 0;
                $this->cache->set($cacheKey,json_encode($widgets,JSON_UNESCAPED_UNICODE));
                $this->cache->expire($cacheKey, self::ONE_HOUR);
            }
        } else {
            $isCached = 1;
            $widgets = json_decode($this->cache->get($cacheKey));
        }

        return array(
            'is_cached'=>$isCached,
            'data'=>$widgets
        );
    }

    public function retrieveMenu($location){
        $cacheKey = 'cache-menu-'.$location.'-'.$this->language;
        $isCached = false;
        $menu = array();
        if (!$this->cache->exists($cacheKey)) {
            $menu = $this->menuGateway->getMenu($location,$this->language);
            $this->cache->set($cacheKey,json_encode($menu,JSON_UNESCAPED_UNICODE));
            $this->cache->expire($cacheKey, self::ONE_HOUR);
        } else {
            $isCached = 1;
            $menu = json_decode($this->cache->get($cacheKey));
        }
        return array(
            'is_cached'=>$isCached,
            'data'=>$menu
        );
    }
    public function retrieveRssByCategory($category){
        $cacheKey = 'cache-rss-'.$category;
        $isCached = false;
        if (!$this->cache->exists($cacheKey)) {
            $rss = $this->rssGateway->getRssByCategory($category);
            $readFeed = new \SimpleXMLElement($rss);
            $rssObject = array(
                'title'=> $readFeed->channel->item[0]->title,
                'link'=> $readFeed->channel->item[0]->link
            );
            $this->cache->set($cacheKey,json_encode($rssObject,JSON_UNESCAPED_UNICODE));
            $this->cache->expire($cacheKey, self::ONE_HOUR);
            $rssObject = json_decode(json_encode($rssObject,JSON_UNESCAPED_UNICODE));
        } else {
            $isCached = 1;
            $rssObject = json_decode($this->cache->get($cacheKey));
        }
        return array(
            'is_cached'=>$isCached,
            'data'=>$rssObject
        );
    }
    public function retrievePage($pageId){
        $cacheKey = 'cache-page-'.$pageId.'-'.$this->language;
        $isCached = false;
        $page = array();
        if (!$this->cache->exists($cacheKey)) {
            $page = $this->pageGateway->getPage($pageId,$this->language);
            $this->cache->set($cacheKey,json_encode($page,JSON_UNESCAPED_UNICODE));
            $this->cache->expire($cacheKey, self::ONE_HOUR);
            $page = json_decode(json_encode($page,JSON_UNESCAPED_UNICODE));
        } else {
            $isCached = 1;
            $page = json_decode($this->cache->get($cacheKey));
        }
        return array(
            'is_cached'=>$isCached,
            'data'=>$page
        );
    }
    public function retrievePost($postId){
        $cacheKey = 'cache-post-'.$postId.'-'.$this->language;
        $isCached = false;
        $page = array();
        if (!$this->cache->exists($cacheKey)) {
            $post = $this->pageGateway->getPost($postId,$this->language);
            $this->cache->set($cacheKey,json_encode($post,JSON_UNESCAPED_UNICODE));
            $this->cache->expire($cacheKey, self::ONE_HOUR);
            $post = json_decode(json_encode($post,JSON_UNESCAPED_UNICODE));
        } else {
            $isCached = 1;
            $post = json_decode($this->cache->get($cacheKey));
        }
        return array(
            'is_cached'=>$isCached,
            'data'=>$post
        );
    }
    public function retrievePostByCategory($category){
        $cacheKey = 'cache-post-category-'.$category.'-'.$this->language;
        $isCached = false;
        $page = array();
        if (!$this->cache->exists($cacheKey)) {
            $post = $this->pageGateway->getPostByCategory($category,$this->language);
            $this->cache->set($cacheKey,json_encode($post,JSON_UNESCAPED_UNICODE));
            $this->cache->expire($cacheKey, self::ONE_HOUR);
            $post = json_decode(json_encode($post,JSON_UNESCAPED_UNICODE));
        } else {
            $isCached = 1;
            $post = json_decode($this->cache->get($cacheKey));
        }
        return array(
            'is_cached'=>$isCached,
            'data'=>$post
        );
    }
    public function retrieveQuestionCategories(){
        $cacheKey = 'cache-question-categories-'.$this->language;
        $isCached = false;
        $categories = array();
        if (!$this->cache->exists($cacheKey)) {
            $categories = $this->questionGateway->getCategories($this->language);
            $this->cache->set($cacheKey,json_encode($categories,JSON_UNESCAPED_UNICODE));
            $this->cache->expire($cacheKey, self::ONE_HOUR);
            $categories = json_decode(json_encode($categories,JSON_UNESCAPED_UNICODE));
        } else {
            $isCached = 1;
            $categories = json_decode($this->cache->get($cacheKey));
        }
        return array(
            'is_cached'=>$isCached,
            'data'=>$categories
        );
    }

    public function retrieveQuestionCategoriesOtherLanguage(){
        $language = "tr";
        if ($this->language == "tr") $language = "en";
        $cacheKey = 'cache-question-categories-'.$language;
        $isCached = false;
        $categories = array();
        if (!$this->cache->exists($cacheKey)) {
            $categories = $this->questionGateway->getCategories($language);
            $this->cache->set($cacheKey,json_encode($categories,JSON_UNESCAPED_UNICODE));
            $this->cache->expire($cacheKey, self::ONE_HOUR);
            $categories = json_decode(json_encode($categories,JSON_UNESCAPED_UNICODE));
        } else {
            $isCached = 1;
            $categories = json_decode($this->cache->get($cacheKey));
        }
        return array(
            'is_cached'=>$isCached,
            'data'=>$categories
        );
    }

    public function retrieveQuestionsByCategorySlug($categorySlug){
        $cacheKey = 'cache-questions-by-category-'.$categorySlug.'-'.$this->language;
        $isCached = false;
        $questions = array();
        if (!$this->cache->exists($cacheKey)) {
            $questions = $this->questionGateway->getQuestionsByCategorySlug($categorySlug,$this->language);
            $this->cache->set($cacheKey,json_encode($questions,JSON_UNESCAPED_UNICODE));
            $this->cache->expire($cacheKey, self::ONE_HOUR);
        } else {
            $isCached = 1;
            $questions = json_decode($this->cache->get($cacheKey));
        }
        return array(
            'is_cached'=>$isCached,
            'data'=>$questions
        );
    }
    public function retrieveQuestionsByQuery($query){
        $requestObject = array();
        $requestObject['query'] = $query;
        $searchResults = $this->questionGateway->getQuestionsByQuery($requestObject,$this->language);
        return array(
            'is_cached'=>false,
            'data'=>$searchResults
        );
    }

    public function getAllMenus(){
        $allMenus = $this->container->getParameter('menu_ids');
        $organizedMenus = array();
        foreach ($allMenus as $menuName=>$menuId) {
            $response = $this->retrieveMenu($menuId);
            $organizedMenus[$menuName] = $response['data'];
        }
        return $organizedMenus;
    }

    public function getTranslations(){
        $jsonObject = $this->translationKeys;
        $requestObject = array();
        foreach ($jsonObject as $context=>$nameValue){
            foreach($nameValue as $name=>$value) {
                if (!isset($requestObject[$context.'#'.$name])) {
                    $requestObject[$context.'#'.$name] = $value;
                }
            }
        }
        $md5Key = md5(json_encode($requestObject));
        $cacheKey = 'translations-'.$md5Key.'-'.$this->language;
        $isCached = false;
        if (!$this->cache->exists($cacheKey)) {
            $translations = $this->translationsGateway->getTranslations($requestObject,$this->language);
            $this->cache->set($cacheKey,json_encode($translations,JSON_UNESCAPED_UNICODE));
            $this->cache->expire($cacheKey, self::ONE_HOUR);
        } else {
            $isCached = 1;
            $translations = json_decode($this->cache->get($cacheKey));
        }
        return array(
            'is_cached'=>$isCached,
            'data'=>$translations
        );
    }
    public function retrievePageBySlug($slug){
        $cacheKey = 'cache-page-'.$slug.'-'.$this->language;
        $isCached = false;
        $page = array();
        if (!$this->cache->exists($cacheKey)) {
            $page = $this->pageGateway->getPageBySlug($slug,$this->language);
            $this->cache->set($cacheKey,json_encode($page,JSON_UNESCAPED_UNICODE));
            $this->cache->expire($cacheKey, self::ONE_HOUR);
            $page = json_decode(json_encode($page,JSON_UNESCAPED_UNICODE));
        } else {
            $isCached = 1;
            $page = json_decode($this->cache->get($cacheKey));
        }
        return array(
            'is_cached'=>$isCached,
            'data'=>$page
        );
    }

    public function retrieveInstagramByHashtag($hashTag){
        $cacheKey = 'cache-instagram-'.$hashTag;
        $isCached = false;
        $photos = array();
        if (!$this->cache->exists($cacheKey)) {
            $photos = $this->instagramGateway->getMediaByHashtag($hashTag,50);
            if (count($photos) > 0) {
                $iyzicoUserId = "942508622";
                $iyzicoEngUserId = "4371803384";
                $filteredPhotos = array();
                foreach($photos as $key=>$photo) {
                    if ($photo->owner->id == $iyzicoUserId || $photo->owner->id == $iyzicoEngUserId) {
                        array_push($filteredPhotos,array(
                            'caption' => $photo->caption,
                            'isVideo' => $photo->is_video,
                            'likes' => $photo->likes,
                            'src' => $photo->thumbnail_src,
                            'link' => 'https://www.instagram.com/p/' . $photo->code . '/'
                        ));
                    }
                }
                $photos = $filteredPhotos;
                
                $this->cache->set($cacheKey,json_encode($photos,JSON_UNESCAPED_UNICODE));
                $this->cache->expire($cacheKey, self::ONE_HOUR);
            }
            $photos = json_decode(json_encode($photos,JSON_UNESCAPED_UNICODE));
        } else {
            $isCached = 1;
            $photos = json_decode($this->cache->get($cacheKey));
        }
        return array(
            'is_cached'=>$isCached,
            'data'=>$photos
        );
    }

    public function retrieveStatusLog($ruleName){
        $cacheKey = 'cache-status-log-'.$ruleName;
        $isCached = false;
        if (!$this->cache->exists($cacheKey)) {
            $logs = $this->statusGateway->getLogByRulename($ruleName);
            if (count($logs) > 0) {
                $this->cache->set($cacheKey,json_encode($logs,JSON_UNESCAPED_UNICODE));
                $this->cache->expire($cacheKey, self::FIVE_MINUTES);
            }
            $logs = json_decode(json_encode($logs,JSON_UNESCAPED_UNICODE));
            
        } else {
            $isCached = 1;
            $logs = json_decode($this->cache->get($cacheKey));
        }
        return array(
            'is_cached'=>$isCached,
            'data'=>$logs
        );
    }

    public function retrieveStatusDay($ruleName,$datetime){
        $cacheKey = 'cache-status-log-'.$ruleName.'-'.$datetime;
        $isCached = false;
        $photos = array();
        if (!$this->cache->exists($cacheKey)) {
            $logs = $this->statusGateway->getDayByRulename($ruleName,$datetime);
            if (count($logs) > 0) {
                $this->cache->set($cacheKey,json_encode($logs,JSON_UNESCAPED_UNICODE));
                $this->cache->expire($cacheKey, self::ONE_HOUR);
            }
            $logs = json_decode(json_encode($logs,JSON_UNESCAPED_UNICODE));
            
        } else {
            $isCached = 1;
            $logs = json_decode($this->cache->get($cacheKey));
        }
        return array(
            'is_cached'=>$isCached,
            'data'=>$logs
        );
    }

    public function retrieveInstagramByUserID($userid){
        $cacheKey = 'cache-instagram-'.$userid.
        $isCached = false;
        $photos = array();
        if (!$this->cache->exists($cacheKey)) {
            $photos = $this->instagramGateway->getMediaByUserID($userid,50);
            if (count($photos) > 0) {
                $iyzicoUserId = "942508622";
                $filteredPhotos = array();
                foreach($photos as $key=>$photo) {
                    if ($photo->owner->id == $iyzicoUserId) {
                        array_push($filteredPhotos,array(
                            'caption' => $photo->caption,
                            'isVideo' => $photo->is_video,
                            'likes' => $photo->likes,
                            'src' => $photo->thumbnail_src,
                            'link' => 'https://www.instagram.com/p/' . $photo->code . '/'
                        ));
                    }
                }
                $photos = $filteredPhotos;
                
                $this->cache->set($cacheKey,json_encode($photos,JSON_UNESCAPED_UNICODE));
                $this->cache->expire($cacheKey, self::ONE_HOUR);
            }
            $photos = json_decode(json_encode($photos,JSON_UNESCAPED_UNICODE));
        } else {
            $isCached = 1;
            $photos = json_decode($this->cache->get($cacheKey));
        }
        return array(
            'is_cached'=>$isCached,
            'data'=>$photos
        );
    }

}