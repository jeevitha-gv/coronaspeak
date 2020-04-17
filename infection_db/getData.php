<?php
// Database connection info
$dbDetails = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => 'CoronaSpeak1234#@',
    'db'   => 'corona'
);

// DB table to use
$table = 'infection_db';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database. 
// The `dt` parameter represents the DataTables column identifier.
$columns = array(
    array( 'db' => 'id', 'dt' => 0 ),
    array( 'db' => 'country',  'dt' => 1 ),
    array( 'db' => 'total_case',      'dt' => 2 ),
    array( 'db' => 'new_cases',     'dt' => 3 ),
    array( 'db' => 'total_deaths',    'dt' => 4 ),
    array( 'db' => 'new_deaths',    'dt' => 5 ),
    array( 'db' => 'total_recovered',    'dt' => 6 ),
    array( 'db' => 'active_case',    'dt' => 7 ),
    array( 'db' => 'serious_critical',    'dt' => 8 ),
    array( 'db' => 'total_cases_pm',    'dt' => 9 ),
    array( 'db' => 'total_deaths_pm',    'dt' => 10 ),
    array( 'db' => 'reported',    'dt' => 11 ),
    
);

// Include SQL query processing class
require( 'ssp.class.php' );

// Output data as json format
echo json_encode(
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
);
