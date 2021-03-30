<?php
namespace Admin\Model;

class common{
    public function __construct() {
        $this->cObj = new Curl();
    }    
    public function curlhit($params=null, $method, $controller='companycontroller') {
        $queryStr = '';
        if(!empty($params)){
            $queryStr = http_build_query($params);
        }
        $url = NODE_API.$controller.'/'.$method.'?'.$queryStr;
       return $this->cObj->callCurl($url);
    }
    
    public function curlhitApi($params=null, $controller='index', $module='application') {
        $queryStr = '';
        if(!empty($params)){
            $queryStr = json_encode($params);
//            $queryStr = http_build_query($params);
//            $queryStr = json_encode($queryStr);
        }
        $data['parameters'] = $queryStr;
        $data['rqid'] = $this->genrateRqid($data['parameters']);
        $url = BASKET_API.$module.'/'.$controller;
        $parametes = http_build_query($data); 
         echo $url = $url.'?'.$parametes;die;
      /// if($params['method'] == 'getcustomersaledetail')      
//{        echo $url = $url.'?'.$parametes;die;}
        return $this->cObj->callPostCurl($url, $parametes);
    }
    
    public function getLocationList($inputParams = array()) {
        $params = array();
        if(!empty($inputParams['address'])) {
            $params['address'] = $inputParams['address'];
        }
        if(!empty($inputParams['id'])) {
            $params['id'] = $inputParams['id'];
        }        
        if(!empty($inputParams['active'])) {
            $params['active'] = $inputParams['active'];
        }        
        if(!empty($inputParams['pagination'])) {
            $params['pagination'] = $inputParams['pagination'];
            $params['page'] = isset($inputParams['page'])?$inputParams['page']:1;
        }      
        $params['method'] = 'getLocationList';
        
        return $this->curlhitApi($params);
    }
    
    public function genrateRqid($parameters) {
        return $rqid = hash('sha512',APIKEY.$parameters);
    }
}
