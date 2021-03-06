<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_pdf {
    
    function m_pdf()
    {
        $CI = & get_instance();
        log_message('Debug', 'mPDF class is loaded.');
     }
    function load($param=NULL)
    {
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
        
        if ($params == NULL)
        {
            $param = '"en-GB-x","Letter","","",10,10,0,10,0,3';        
        }
        
        return new mPDF('','', 0, '', 15, 15, 16, 16, 9, 9, 'L');
    }
}
