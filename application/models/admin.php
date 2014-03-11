<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Model
{
    // set DB and Table
    const table = 'ac_voucher';
    const DB    = 'ancient'; 
    
    function __construct()
    {
          parent::__construct();
    }

    // GET ALL
     public function getAll($Limit = NULL, $Offset = NULL, $OrderBy = 'id', $OrderType = 'desc')
     {
        $query = parent::getAll(
                                array(
                                'Table' => self::table,
                                'DB' => self::DB,
                                'Limit' => $Limit,
                                'Offset' => $Offset,
                                'OrderBy' => $OrderBy,
                                'OrderType' => $OrderType,
                               ));
        return $query;
     }
     
     // GET WHERE
     public function getWhere($Where = NULL, $Limit = NULL, $Offset = NULL, $OrderBy = 'id', $OrderType = 'desc')
     {
        $query = parent::getWhere(
                                array(
                                'Table' => self::table,
                                'DB' => self::DB,
                                'Where' => $Where,
                                'Limit' => $Limit,
                                'Offset' => $Offset,
                                'OrderBy' => $OrderBy,
                                'OrderType' => $OrderType,
                               ));
        return $query;
     }
     
     // GET SEARCH
     public function getSearch($SearchBy, $SearchData, $Limit = NULL, $Offset = NULL, $OrderBy = 'id', $OrderType = 'desc')
     {
        $query = parent::getSearch(
                                array(
                                'Table' => self::table,
                                'DB' => self::DB,
                                'SearchBy' => $SearchBy,
                                'SearchData' => $SearchData,
                                'Limit' => $Limit,
                                'Offset' => $Offset,
                                'OrderBy' => $OrderBy,
                                'OrderType' => $OrderType,
                               ));
        return $query;
     }
     
     
     
     
     // PAGINATION MODELS
     public function getPagination($param = NULL, $Url = NULL, $PerPage = 1, $Segment = 3, $OrderBy = 'id', $OrderType = 'desc')
     {
        $Where = '';
        $SearchBy = '';
        $SearchData = '';
        if($param[0] == 'Where'){
            $Where = $param[1];
        }
        elseif($param[0] == 'Search')
        {
            $SearchBy = $param[1];
            $SearchData = $param[2];
        }
        elseif($param[0] == 'SearchWhere')
        {
            $Where = $param[1];
            $SearchBy = $param[2];
            $SearchData = $param[3];
        }
        
        $query = parent::getPagination(
                                array(
                                'Type' => $param[0],
                                'Where' => $Where, // if type == where
                                'SearchBy' => $SearchBy, // if type == search
                                'SearchData' => $SearchData, // if type == search
                                'Table' => self::table,
                                'DB' => self::DB,
                                'Url' => $Url,
                                'PerPage' => $PerPage,
                                'Segment' => $Segment,
                                'OrderBy' => $OrderBy,
                                'OrderType' => $OrderType,
                               ));
        return $query;
     }
     
   
    
}