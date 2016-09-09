<?php
class LanguageLoader
{
    function initialize() {
		$ci =& get_instance();
        $ci->load->helper('language');
        $siteLang = $ci->session->userdata('site_lang');
        
        if ($siteLang){
            $ci->lang->load('content',$siteLang);
        }else{
        	$ci->session->set_userdata(array('site_lang' => $ci->config->item('language')));
        	$ci->session->set_userdata(array('site_lang2' => substr($ci->config->item('language'),0,2)));
        	$ci->session->set_userdata(array('site_lang3' => substr($ci->config->item('language'),0,3)));
        	
            $ci->lang->load('content',$ci->config->item('language'));
        }
	}
}