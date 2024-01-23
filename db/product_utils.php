<?php
// https://stackoverflow.com/questions/27886117/php-intl-installation-on-xampp
// add to path /Applications/XAMPP/xamppfiles/bin/php
// brew install unixodbc php -m | grep intl
// brew install icu4c 
// sudo CXXFLAGS="-I/opt/homebrew/opt/unixodbc/include/" LDFLAGS="-L/opt/homebrew/lib/" pecl install sqlsrv
// sudo CXXFLAGS="-I/opt/homebrew/opt/unixodbc/include/" LDFLAGS="-L/opt/homebrew/lib/" pecl install pdo_sqlsrv

    define ("PATH_TO_PARAMS", '/Applications/XAMPP/albumdb.php');
    
    function get_suggests_from_bd($query) {
        include PATH_TO_PARAMS;
        
        $connectionOptions = array(
        "Database" => $DATABASE_2,
        "Uid" => $USER_2,
        "PWD" => $PASSWORD_2
        );
        $conn = sqlsrv_connect($SERVER_2, $connectionOptions);

        $sql = "SELECT DISTINCT TOP 20 Name, LEN(Name) AS NameLength
        FROM Production.Product
        WHERE Name LIKE ?
        ORDER BY NameLength ASC";

        $stmt = sqlsrv_prepare($conn, $sql, array(&$query));

        // Execute the statement
        if (sqlsrv_execute($stmt) === false) {
            die(print_r(sqlsrv_errors(), true));
        }
        
        $suggests = array();
        // Fetch and display the results
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $suggests[] = $row['Name'];
        }
        
        // Free the statement and connection resources
        sqlsrv_free_stmt($stmt);
        sqlsrv_close($conn);
        return $suggests;
    }

    function get_suggests_from_csv($query) {
        $csvFilePath = "../data/Product.csv";
        $results = [];
        
        if (($handle = fopen($csvFilePath, "r")) !== FALSE) {
            fgetcsv($handle);
        
            while (($data = fgetcsv($handle)) !== FALSE) {
                // if (str_starts_with(strtolower($data[0]), $query))
                if (stripos($data[0], $query) === 0) {
                    $results[] = $data[0];
        
                    // if (count($results) >= 20) {
                    //     break;
                    // }
                }
            }
        
            fclose($handle);
        }
        
        return $results;
    }

// var_dump(get_suggests_from_csv("i"));