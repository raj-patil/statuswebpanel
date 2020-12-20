<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Settings
 *
 * @ORM\Table(name="settings_table")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SettingsRepository")
 */
class Settings
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="privacypolicy", type="text", nullable = true)
     */
    private $privacypolicy;

    /**
     * @var string
     *
     * @ORM\Column(name="firebasekey", type="text")
     */
    private $firebasekey;

    /**
     * @var string
     *
     * @ORM\Column(name="earning", type="text")
     */
    private $earning;

    /**
     * @var string
     *
     * @ORM\Column(name="shareyoutube", type="integer")
     */
    private $shareyoutube;

    /**
     * @var string
     *
     * @ORM\Column(name="viewyoutube", type="integer")
     */
    private $viewyoutube;

    
    /**
     * @var string
     *
     * @ORM\Column(name="addyoutube", type="integer")
     */
    private $addyoutube;

    /**
     * @var string
     *
     * @ORM\Column(name="authoryoutube", type="integer")
     */
    private $authoryoutube;

    /**
     * @var string
     *
     * @ORM\Column(name="sharevideo", type="integer")
     */
    private $sharevideo;

    /**
     * @var string
     *
     * @ORM\Column(name="viewvideo", type="integer")
     */
    private $viewvideo;



    /**
     * @var string
     *
     * @ORM\Column(name="addvideo", type="integer")
     */
    private $addvideo;

    /**
     * @var string
     *
     * @ORM\Column(name="authorvideo", type="integer")
     */
    private $authorvideo;

    /**
     * @var string
     *
     * @ORM\Column(name="shareimage", type="integer")
     */
    private $shareimage;

    /**
     * @var string
     *
     * @ORM\Column(name="viewimage", type="integer")
     */
    private $viewimage;
    /**
     * @var string
     *
     * @ORM\Column(name="addimage", type="integer")
     */
    private $addimage;

    /**
     * @var string
     *
     * @ORM\Column(name="authorimage", type="integer")
     */
    private $authorimage;

    /**
     * @var string
     *
     * @ORM\Column(name="sharegif", type="integer")
     */
    private $sharegif;

     /**
     * @var string
     *
     * @ORM\Column(name="viewgif", type="integer")
     */
    private $viewgif;
     /**
     * @var string
     *
     * @ORM\Column(name="addgif", type="integer")
     */
    private $addgif;

     /**
     * @var string
     *
     * @ORM\Column(name="authorgif", type="integer")
     */
    private $authorgif;

    /**
     * @var string
     *
     * @ORM\Column(name="sharequote", type="integer")
     */
    private $sharequote;

    /**
     * @var string
     *
     * @ORM\Column(name="viewquote", type="integer")
     */
    private $viewquote;


    /**
     * @var string
     *
     * @ORM\Column(name="addquote", type="integer")
     */
    private $addquote;

    /**
     * @var string
     *
     * @ORM\Column(name="authorquote", type="integer")
     */
    private $authorquote;

    /**
     * @var string
     *
     * @ORM\Column(name="registeruser", type="integer")
     */
    private $registeruser;

    /**
     * @var string
     *
     * @ORM\Column(name="adduser", type="integer")
     */
    private $adduser;

    /**
     * @var string
     *
     * @ORM\Column(name="minpoints", type="integer")
     */
    private $minpoints;

    /**
     * @var string
     *
     * @ORM\Column(name="currency",type="string" , length=255)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="oneusdtopoints", type="integer")
     */
    private $oneusdtopoints;



    /**
     * @var string
     *
     * @ORM\Column(name="publisherid", type="string", length=255 , nullable = true)
     */
    private $publisherid;


    /**
     * @var string
     *
     * @ORM\Column(name="appid", type="string", length=255 , nullable = true)
     */
    private $appid;

    /**
     * @var string
     *
     * @ORM\Column(name="rewardedadmobid", type="string", length=255 , nullable = true)
     */
    private $rewardedadmobid;

    /**
     * @var string
     *
     * @ORM\Column(name="banneradmobid", type="string", length=255 , nullable = true)
     */
    private $banneradmobid;


    /**
     * @var string
     *
     * @ORM\Column(name="bannerfacebookid", type="string", length=255 , nullable = true)
     */
    private $bannerfacebookid;

    /**
     * @var string
     *
     * @ORM\Column(name="nativebannerfacebookid", type="string", length=255 , nullable = true)
     */
    private $nativebannerfacebookid;

    /**
     * @var string
     *
     * @ORM\Column(name="bannertype", type="string", length=255 , nullable = true)
     */
    private $bannertype;

    /**
     * @var string
     *
     * @ORM\Column(name="nativeadmobid", type="string", length=255 , nullable = true)
     */
    private $nativeadmobid;

    /**
     * @var string
     *
     * @ORM\Column(name="nativefacebookid", type="string", length=255 , nullable = true)
     */
    private $nativefacebookid;

    /**
     * @var string
     *
     * @ORM\Column(name="nativeitem",  type="integer",  length=255 , nullable = true)
     */
    private $nativeitem;


    /**
     * @var string
     *
     * @ORM\Column(name="nativetype", type="string", length=255 , nullable = true)
     */
    private $nativetype;

    /**
     * @var string
     *
     * @ORM\Column(name="interstitialadmobid", type="string", length=255 , nullable = true)
     */
    private $interstitialadmobid;

    /**
     * @var string
     *
     * @ORM\Column(name="interstitialfacebookid", type="string", length=255 , nullable = true)
     */
    private $interstitialfacebookid;


     /**
     * @var string
     *
     * @ORM\Column(name="interstitialtype", type="string", length=255 , nullable = true)
     */
    private $interstitialtype;

     /**
     * @var string
     *
     * @ORM\Column(name="interstitialclick", type="integer", length=255 , nullable = true)
     */
    private $interstitialclick;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Get firebasekey
    * @return  
    */
    public function getFirebasekey()
    {
        return $this->firebasekey;
    }
    
    /**
    * Set firebasekey
    * @return $this
    */
    public function setFirebasekey($firebasekey)
    {
        $this->firebasekey = $firebasekey;
        return $this;
    }
    /**
    * Get sharevideo
    * @return  
    */
    public function getSharevideo()
    {
        return $this->sharevideo;
    }
    
    /**
    * Set sharevideo
    * @return $this
    */
    public function setSharevideo($sharevideo)
    {
        $this->sharevideo = $sharevideo;
        return $this;
    }
    /**
    * Get viewvideo
    * @return  
    */
    public function getViewvideo()
    {
        return $this->viewvideo;
    }
    
    /**
    * Set viewvideo
    * @return $this
    */
    public function setViewvideo($viewvideo)
    {
        $this->viewvideo = $viewvideo;
        return $this;
    }
    /**
    * Get addvideo
    * @return  
    */
    public function getAddvideo()
    {
        return $this->addvideo;
    }
    
    /**
    * Set addvideo
    * @return $this
    */
    public function setAddvideo($addvideo)
    {
        $this->addvideo = $addvideo;
        return $this;
    }
    /**
    * Get shareimage
    * @return  
    */
    public function getShareimage()
    {
        return $this->shareimage;
    }
    
    /**
    * Set shareimage
    * @return $this
    */
    public function setShareimage($shareimage)
    {
        $this->shareimage = $shareimage;
        return $this;
    }
    /**
    * Get viewimage
    * @return  
    */
    public function getViewimage()
    {
        return $this->viewimage;
    }
    
    /**
    * Set viewimage
    * @return $this
    */
    public function setViewimage($viewimage)
    {
        $this->viewimage = $viewimage;
        return $this;
    }
    /**
    * Get addimage
    * @return  
    */
    public function getAddimage()
    {
        return $this->addimage;
    }
    
    /**
    * Set addimage
    * @return $this
    */
    public function setAddimage($addimage)
    {
        $this->addimage = $addimage;
        return $this;
    }
    /**
    * Get sharegif
    * @return  
    */
    public function getSharegif()
    {
        return $this->sharegif;
    }
    
    /**
    * Set sharegif
    * @return $this
    */
    public function setSharegif($sharegif)
    {
        $this->sharegif = $sharegif;
        return $this;
    }
    /**
    * Get addgif
    * @return  
    */
    public function getAddgif()
    {
        return $this->addgif;
    }
    
    /**
    * Set addgif
    * @return $this
    */
    public function setAddgif($addgif)
    {
        $this->addgif = $addgif;
        return $this;
    }
    /**
    * Get sharequote
    * @return  
    */
    public function getSharequote()
    {
        return $this->sharequote;
    }
    
    /**
    * Set sharequote
    * @return $this
    */
    public function setSharequote($sharequote)
    {
        $this->sharequote = $sharequote;
        return $this;
    }
    /**
    * Get viewshare
    * @return  
    */
    public function getViewshare()
    {
        return $this->viewshare;
    }
    
    /**
    * Set viewshare
    * @return $this
    */
    public function setViewshare($viewshare)
    {
        $this->viewshare = $viewshare;
        return $this;
    }
    /**
    * Get addquote
    * @return  
    */
    public function getAddquote()
    {
        return $this->addquote;
    }
    
    /**
    * Set addquote
    * @return $this
    */
    public function setAddquote($addquote)
    {
        $this->addquote = $addquote;
        return $this;
    }
    /**
    * Get oneusdtopoints
    * @return  
    */
    public function getOneusdtopoints()
    {
        return $this->oneusdtopoints;
    }
    
    /**
    * Set oneusdtopoints
    * @return $this
    */
    public function setOneusdtopoints($oneusdtopoints)
    {
        $this->oneusdtopoints = $oneusdtopoints;
        return $this;
    }
    /**
    * Get minpoints
    * @return  
    */
    public function getMinpoints()
    {
        return $this->minpoints;
    }
    
    /**
    * Set minpoints
    * @return $this
    */
    public function setMinpoints($minpoints)
    {
        $this->minpoints = $minpoints;
        return $this;
    }
    /**
    * Get viewgif
    * @return  
    */
    public function getViewgif()
    {
        return $this->viewgif;
    }
    
    /**
    * Set viewgif
    * @return $this
    */
    public function setViewgif($viewgif)
    {
        $this->viewgif = $viewgif;
        return $this;
    }
    /**
    * Get viewquote
    * @return  
    */
    public function getViewquote()
    {
        return $this->viewquote;
    }
    
    /**
    * Set viewquote
    * @return $this
    */
    public function setViewquote($viewquote)
    {
        $this->viewquote = $viewquote;
        return $this;
    }
    /**
    * Get adduser
    * @return  
    */
    public function getAdduser()
    {
        return $this->adduser;
    }
    
    /**
    * Set adduser
    * @return $this
    */
    public function setAdduser($adduser)
    {
        $this->adduser = $adduser;
        return $this;
    }
    public function getPoints($name)
    {
        return $this->$name;
    }
    /**
    * Get currency
    * @return  
    */
    public function getCurrency()
    {
        return $this->currency;
    }
    
    /**
    * Set currency
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }


    /**
    * Get banneradmobid
    * @return  
    */
    public function getBanneradmobid()
    {
        return $this->banneradmobid;
    }
    
    /**
    * Set banneradmobid
    * @return $this
    */
    public function setBanneradmobid($banneradmobid)
    {
        $this->banneradmobid = $banneradmobid;
        return $this;
    }

    /**
    * Get bannerfacebookid
    * @return  
    */
    public function getBannerfacebookid()
    {
        return $this->bannerfacebookid;
    }
    
    /**
    * Set bannerfacebookid
    * @return $this
    */
    public function setBannerfacebookid($bannerfacebookid)
    {
        $this->bannerfacebookid = $bannerfacebookid;
        return $this;
    }

    /**
    * Get nativefacebookid
    * @return  
    */
    public function getNativefacebookid()
    {
        return $this->nativefacebookid;
    }
    
    /**
    * Set nativefacebookid
    * @return $this
    */
    public function setNativefacebookid($nativefacebookid)
    {
        $this->nativefacebookid = $nativefacebookid;
        return $this;
    }

    /**
    * Get nativeadmobid
    * @return  
    */
    public function getNativeadmobid()
    {
        return $this->nativeadmobid;
    }
    
    /**
    * Set nativeadmobid
    * @return $this
    */
    public function setNativeadmobid($nativeadmobid)
    {
        $this->nativeadmobid = $nativeadmobid;
        return $this;
    }

    /**
    * Get interstitialfacebookid
    * @return  
    */
    public function getInterstitialfacebookid()
    {
        return $this->interstitialfacebookid;
    }
    
    /**
    * Set interstitialfacebookid
    * @return $this
    */
    public function setInterstitialfacebookid($interstitialfacebookid)
    {
        $this->interstitialfacebookid = $interstitialfacebookid;
        return $this;
    }

    /**
    * Get interstitialadmobid
    * @return  
    */
    public function getInterstitialadmobid()
    {
        return $this->interstitialadmobid;
    }
    
    /**
    * Set interstitialadmobid
    * @return $this
    */
    public function setInterstitialadmobid($interstitialadmobid)
    {
        $this->interstitialadmobid = $interstitialadmobid;
        return $this;
    }

    /**
    * Get bannertype
    * @return  
    */
    public function getBannertype()
    {
        return $this->bannertype;
    }
    
    /**
    * Set bannertype
    * @return $this
    */
    public function setBannertype($bannertype)
    {
        $this->bannertype = $bannertype;
        return $this;
    }

    /**
    * Get interstitialtype
    * @return  
    */
    public function getInterstitialtype()
    {
        return $this->interstitialtype;
    }
    
    /**
    * Set interstitialtype
    * @return $this
    */
    public function setInterstitialtype($interstitialtype)
    {
        $this->interstitialtype = $interstitialtype;
        return $this;
    }

    /**
    * Get nativetype
    * @return  
    */
    public function getNativetype()
    {
        return $this->nativetype;
    }
    
    /**
    * Set nativetype
    * @return $this
    */
    public function setNativetype($nativetype)
    {
        $this->nativetype = $nativetype;
        return $this;
    }

    /**
    * Get interstitialclick
    * @return  
    */
    public function getInterstitialclick()
    {
        return $this->interstitialclick;
    }
    
    /**
    * Set interstitialclick
    * @return $this
    */
    public function setInterstitialclick($interstitialclick)
    {
        $this->interstitialclick = $interstitialclick;
        return $this;
    }

    /**
    * Get nativeitem
    * @return  
    */
    public function getNativeitem()
    {
        return $this->nativeitem;
    }
    
    /**
    * Set nativeitem
    * @return $this
    */
    public function setNativeitem($nativeitem)
    {
        $this->nativeitem = $nativeitem;
        return $this;
    }

    /**
    * Get rewardedadmobid
    * @return  
    */
    public function getRewardedadmobid()
    {
        return $this->rewardedadmobid;
    }
    
    /**
    * Set rewardedadmobid
    * @return $this
    */
    public function setRewardedadmobid($rewardedadmobid)
    {
        $this->rewardedadmobid = $rewardedadmobid;
        return $this;
    }

    /**
    * Get nativebannerfacebookid
    * @return  
    */
    public function getNativebannerfacebookid()
    {
        return $this->nativebannerfacebookid;
    }
    
    /**
    * Set nativebannerfacebookid
    * @return $this
    */
    public function setNativebannerfacebookid($nativebannerfacebookid)
    {
        $this->nativebannerfacebookid = $nativebannerfacebookid;
        return $this;
    }

    /**
    * Get publisherid
    * @return  
    */
    public function getPublisherid()
    {
        return $this->publisherid;
    }
    
    /**
    * Set publisherid
    * @return $this
    */
    public function setPublisherid($publisherid)
    {
        $this->publisherid = $publisherid;
        return $this;
    }

    /**
    * Get appid
    * @return  
    */
    public function getAppid()
    {
        return $this->appid;
    }
    
    /**
    * Set appid
    * @return $this
    */
    public function setAppid($appid)
    {
        $this->appid = $appid;
        return $this;
    }

    /**
    * Get authoryoutube
    * @return  
    */
    public function getAuthoryoutube()
    {
        return $this->authoryoutube;
    }
    
    /**
    * Set authoryoutube
    * @return $this
    */
    public function setAuthoryoutube($authoryoutube)
    {
        $this->authoryoutube = $authoryoutube;
        return $this;
    }

    /**
    * Get authorvideo
    * @return  
    */
    public function getAuthorvideo()
    {
        return $this->authorvideo;
    }
    
    /**
    * Set authorvideo
    * @return $this
    */
    public function setAuthorvideo($authorvideo)
    {
        $this->authorvideo = $authorvideo;
        return $this;
    }

    /**
    * Get authorquote
    * @return  
    */
    public function getAuthorquote()
    {
        return $this->authorquote;
    }
    
    /**
    * Set authorquote
    * @return $this
    */
    public function setAuthorquote($authorquote)
    {
        $this->authorquote = $authorquote;
        return $this;
    }

    /**
    * Get authorimage
    * @return  
    */
    public function getAuthorimage()
    {
        return $this->authorimage;
    }
    
    /**
    * Set authorimage
    * @return $this
    */
    public function setAuthorimage($authorimage)
    {
        $this->authorimage = $authorimage;
        return $this;
    }

    /**
    * Get authorgif
    * @return  
    */
    public function getAuthorgif()
    {
        return $this->authorgif;
    }
    
    /**
    * Set authorgif
    * @return $this
    */
    public function setAuthorgif($authorgif)
    {
        $this->authorgif = $authorgif;
        return $this;
    }

    /**
    * Get addyoutube
    * @return  
    */
    public function getAddyoutube()
    {
        return $this->addyoutube;
    }
    
    /**
    * Set addyoutube
    * @return $this
    */
    public function setAddyoutube($addyoutube)
    {
        $this->addyoutube = $addyoutube;
        return $this;
    }

    /**
    * Get viewyoutube
    * @return  
    */
    public function getViewyoutube()
    {
        return $this->viewyoutube;
    }
    
    /**
    * Set viewyoutube
    * @return $this
    */
    public function setViewyoutube($viewyoutube)
    {
        $this->viewyoutube = $viewyoutube;
        return $this;
    }

    /**
    * Get shareyoutube
    * @return  
    */
    public function getShareyoutube()
    {
        return $this->shareyoutube;
    }
    
    /**
    * Set shareyoutube
    * @return $this
    */
    public function setShareyoutube($shareyoutube)
    {
        $this->shareyoutube = $shareyoutube;
        return $this;
    }
     /**
     * Get registeruser
     * @return  
     */
     public function getRegisteruser()
     {
         return $this->registeruser;
     }
     
     /**
     * Set registeruser
     * @return $this
     */
     public function setRegisteruser($registeruser)
     {
         $this->registeruser = $registeruser;
         return $this;
     }

     /**
     * Get privacypolicy
     * @return  
     */
     public function getPrivacypolicy()
     {
         return $this->privacypolicy;
     }
     
     /**
     * Set privacypolicy
     * @return $this
     */
     public function setPrivacypolicy($privacypolicy)
     {
         $this->privacypolicy = $privacypolicy;
         return $this;
     }

     /**
     * Get earning
     * @return  
     */
     public function getEarning()
     {
         return $this->earning;
     }
     
     /**
     * Set earning
     * @return $this
     */
     public function setEarning($earning)
     {
         $this->earning = $earning;
         return $this;
     }
}
