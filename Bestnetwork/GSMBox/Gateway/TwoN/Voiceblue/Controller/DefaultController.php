<?php

namespace Bestnetwork\GSMBox\Gateway\TwoN\Voiceblue\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction()
    {
        $gsm = $this->get('gsm_box');
        
        return array();
    }
}
