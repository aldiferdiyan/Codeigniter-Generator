<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Model extends CI_model
{
    private static $tbl;
    private static $model;
    private static $query;

    
    function __construct()
    {
        parent::__construct(); 
    }
    
    public static function model()
    {
        self::$tbl = static::table; 
        self::$model = new self;
        return self::$model;
    }
    public function where($param)
    {
        self::$query = $this->db->where($param);
        return $this; 
    }
    public function like($By = NULL, $Data = NULL, $Type = NULL)
    {
        self::$query = $this->db->like($By, $Data, $Type);
        return $this;
    }
    public function orderBy($param = 'id')
    {
        self::$query = $this->db->order_by($param,'desc');
        return $this;
    }
    public function pagination($Url,$totalRow,$PerPage,$Segment)
    {
            $this->load->library('pagination');
            $config['base_url']   = base_url().$Url;
            $config['total_rows'] = $totalRow;
            $config['per_page']   = $PerPage;
            $config['uri_segment'] = $Segment;
            $config['full_tag_open'] = '<div class="pagination"><ul>';
            $config['full_tag_close'] = '</ul></div>';
            $config['prev_link'] = '<i class="fa fa-angle-left"></i> Previous';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = 'Next <i class="fa fa-angle-right"></i>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['first_link'] = '<i class="fa fa-angle-double-left"></i> First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_link'] = 'Last <i class="fa fa-angle-double-right"></i>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a>';
            $config['cur_tag_close'] = '</a></li>';   
            $this->pagination->initialize($config);
            self::$query = $this->db->get(self::$tbl,$PerPage,$this->uri->segment($Segment));
            return $this::$query;
    }

    // proses get query
    public function get($limit = NULL,$offset = NULL)
    {
        self::$query = $this->db->get(self::$tbl,$limit,$offset);
        return $this::$query;
    }
    // proses delete
    public function delete()
    {
        self::$query =  $this->db->delete(self::$tbl);
        return $this::$query;
    }
    // proses update
    public function update($param)
    {
        $data = $param;
        self::$query =  $this->db->update(self::$tbl,$data);
        return $this::$query;
    }
    // proses insert
    public function insert($param)
    {
        $data = $param;
        self::$query =  $this->db->insert(self::$tbl,$data);
        return $this::$query;
    }
    
    // plugin datatable - server side type - codeigniter datatable v.1
    function getJson($param)
    {
        $this->db       = $this->load->database($param['DB'],TRUE);
	$aColumns       = $param['Column']; // field column to display
        $aColumnsSearch = $param['ColumnSearch']; // field column to search
	$sIndexColumn   = $param['Index']; /* Indexed column (used for fast and accurate table cardinality) */
	$sTable         = $param['Table']; /* DB table to use */
        $OrderBy        = $param['OrderBy']; // order by
        
	/* Paging*/
	$sLimit = "";
	if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
	{
		$sLimit = "LIMIT ".mysql_real_escape_string( $_GET['iDisplayStart'] ).", ".
			mysql_real_escape_string( $_GET['iDisplayLength'] );
	}

	/* Ordering*/
   
	if ( isset( $_GET['iSortCol_0'] ) )
	{
		$sOrder = "ORDER BY  ";
		for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
		{
			if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
			{
				$sOrder .= $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."
				 	".mysql_real_escape_string( $_GET['sSortDir_'.$i] ) .", ";
			}
		}
		
		$sOrder = substr_replace( $sOrder, "", -2 );
		if ( $sOrder == "ORDER BY" )
		{
			$sOrder = "ORDER BY $OrderBy DESC";
		}
	}
	  
	/* 
	 * Filtering
	 * NOTE this does not match the built-in DataTables filtering which does it
	 * word by word on any field. It's possible to do here, but concerned about efficiency
	 * on very large tables, and MySQL's regex functionality is very limited
	 */
	$sWhere = "";
	if ( $_GET['sSearch'] != "" )
	{
		$sWhere = "WHERE (";
		for ( $i=0 ; $i<count($aColumnsSearch) ; $i++ )
		{
			$sWhere .= $aColumnsSearch[$i]." LIKE '%".mysql_real_escape_string( $_GET['sSearch'] )."%' OR ";
		}
		$sWhere = substr_replace( $sWhere, "", -3 );
		$sWhere .= ')';
	}
	
	/* Uncomment if  Individual column filtering */
	//for ( $i=0 ; $i<count($aColumns) ; $i++ )
	//{if ( $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' ){if ( $sWhere == "" ){$sWhere = "WHERE ";
	//}else{$sWhere .= " AND ";}$sWhere .= $aColumns[$i]." LIKE '%".mysql_real_escape_string($_GET['sSearch_'.$i])."%' ";}}
	
	     
	/*SQL queries - Get data to display */
	$sQuery = "
		SELECT ".str_replace(" , ", " ", implode(", ", $aColumns))."
		FROM   $sTable
		$sWhere
		$sOrder
		$sLimit
	";

	$rResult = $this->db->query( $sQuery );

        
	/* Data set length after filtering */
	$sQuery = "
		SELECT * FROM $sTable $sWhere 
	";
	$rResultFilterTotal = $this->db->query( $sQuery );
	$aResultFilterTotal = $rResultFilterTotal->num_rows();
	$iFilteredTotal = $aResultFilterTotal;
	
	/* Total data set length */
	$sQuery = "
		SELECT COUNT(".$sIndexColumn.")
		FROM   $sTable
	";
	$rResultTotal = $this->db->query( $sQuery );
	$aResultTotal = $rResultTotal->num_rows();
	$iTotal = $aResultTotal;
	
	
	/*  Output */
	$output = array(
		"sEcho" => intval($_GET['sEcho']),
		"iTotalRecords" => $iTotal,
		"iTotalDisplayRecords" => $iFilteredTotal,
		"aaData" => array()
	);
        $no = 1 + $_GET['iDisplayStart'] ; // show rows number
	foreach ( $rResult->result_array() as $aRow)
	{
		$row = array();
               
		for ( $i=0 ; $i<count($aColumns) ; $i++ )
		{
                     
			if ( $aColumns[$i] == "version" )
			{
				/* Special output formatting for 'version' column */
				$row[] = ($aRow[ $aColumns[$i] ]=="0") ? '-' : $aRow[ $aColumns[$i] ];
			}
			else if ( $aColumns[$i] != ' ' )
			{
				/* General output */
				$row[] = $aRow[ $aColumns[$i] ];
			}
                         
		}
                $row['no'] = $no++;
		$output['aaData'][] = $row;
	}
	
	return $output;
    }
}
