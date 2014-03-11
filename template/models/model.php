{PHPTAG} if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *                      - CodeIgniter models - 
 * Created on {date}
 * Class Model ini adalah inheritance dari MY_Model [application/core/MY_Model.php]
 * 
 * @Powered by Warung Data Corporation [warungdata.com]
 * @Framework System - Codeigniter V.2.1.4
 * @Programmer by Aldi Ferdiyan
 * @Contact Programmer [aldiferdiyan@gmail.com]
 */

class {class} extends MY_Model
{
      /*
      * ----------------------------------------------------
      * Setting database dan table untuk model ini
      * ----------------------------------------------------
      */
      
    const table = '{table}';
    const DB    = '{database}'; 
    
    function __construct()
    {
          parent::__construct();
    }
    
    // Manual sql
    public function sql($sql)
    {
        $query = parent::sql(array('DB' => self::DB, 'sql' => $sql));
        return $query;
    }

     /*
      * ----------------------------------------------------
      * ambil semua query
      * ----------------------------------------------------
      */
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
     /*
      * ----------------------------------------------------
      * ambil semua query berdasarkan argument tertentu
      * ----------------------------------------------------
      */
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
     
    /*
     * ----------------------------------------------------
     * ambil semua query berdasarkan pencarian tertentu
     * ----------------------------------------------------
    */
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
     
     
     
     /*
     * ----------------------------------------------------
     * ambil query dengan mode pagination [where / all / search ]
     * ----------------------------------------------------
    */
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
     
    
     /*
     * ----------------------------------------------------
     * delete
     * ----------------------------------------------------
    */
     function delete($delPK = array(), $delBy = 'id')
     {
         $query = parent::delete(array(
                            'Table'   => self::table,
                            'DB'      => self::DB,
                            'delBy'   => $delBy,
                            'delPK' => $delPK
                            ));
         return $query;
     }
     
      /*
     * ----------------------------------------------------
     * update data
     * ----------------------------------------------------
    */
     function update($data = array(), $editPK = NULL, $editBy = 'id')
     {
          $query = parent::update(array(
                            'Table'   => self::table,
                            'DB'      => self::DB,
                            'editBy'   => $editBy,
                            'editPK' => $editPK,
                            'data'   => $data,
                            ));
          return $query;
     }
     
      /*
     * ----------------------------------------------------
     * insert
     * ----------------------------------------------------
    */
     function insert($data = array())
     {
          $query = parent::insert(array(
                            'Table'   => self::table,
                            'DB'      => self::DB,
                            'data'   => $data,
                            ));
          return $query;
     }
     
       /*
     * ----------------------------------------------------
     * getJson data for datatable plugin
     * ----------------------------------------------------
    */
     function getJson($Column = array(), $ColumnSearch = array(), $OrderBy = 'id', $index = 'id')
     {
        $query = parent::getJson(array(
                              'DB'           => self::DB,
                              'Table'        => self::table,
                              'Column'       => $Column,
                              'ColumnSearch' => $ColumnSearch,
                              'Index'        => $index,
                              'OrderBy'      => $OrderBy,
                              ));
        return $query;
     }
}
/* End of file {name}.php */
/* Location: ./application/models/{name}.php */