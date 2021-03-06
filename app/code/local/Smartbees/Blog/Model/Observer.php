<?php

class Smartbees_Blog_Model_Observer
{
    protected $smartbeesblog1 = array();
    protected $smartbeesblog2 = array();
    protected $smartbeesblog3 = array();
    
    public function adminSystemConfigChangedSectionHomepage_blog_options()
    {
        $smartbeesblog1[]=$firs_blog_url=Mage::getStoreConfig('homepage_blog_options/first_blog_article/first_blog_article_url'); //Get value from field in admin panel
        $smartbeesblog1[]=$firs_blog_image=Mage::getStoreConfig('homepage_blog_options/first_blog_article/logo1'); //Get value from field in admin panel
        

        $smartbeesblog2[]=$second_blog_url=Mage::getStoreConfig('homepage_blog_options/second_blog_article/second_blog_article_url'); //Get value from field in admin panel
        $smartbeesblog2[]=$second_blog_image=Mage::getStoreConfig('homepage_blog_options/second_blog_article/logo2'); //Get value from field in admin panel
        

        $smartbeesblog3[]=$third_blog_url=Mage::getStoreConfig('homepage_blog_options/third_blog_article/third_blog_article_url'); //Get value from field in admin panel
        $smartbeesblog3[]=$third_blog_image=Mage::getStoreConfig('homepage_blog_options/third_blog_article/logo3'); //Get value from field in admin panel


        return array($smartbeesblog1, $smartbeesblog2, $smartbeesblog3);
    }
}