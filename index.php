<?php
    try {
        // default Heroku Postgres configuration URL
        // this is a built in function in php to get the value from an enviornment variable
        $dbUrl = getenv('postgres://zpkloidtamuzxy:660c977c44f24df80f355b9857cc5dced8ea0edefa2b1b06db20e5ea5f325aa4@ec2-18-205-122-145.compute-1.amazonaws.com:5432/dc3pft46uimeni');

        //if we are on heroku this will be set otherwise we can check for a local connection
        //heroku takes care of all of this for us
        if (!isset($dbUrl) || empty($dbUrl)) {
            // example localhost configuration URL with 
            // user: "my_username"
            // password: "my_password"
            // database: "my_database"

            // hardcoded for debugging only not for production site
            $dbUrl = "postgres://my_username:my_password@localhost:5432/my_database";
        }

        // Get the various parts of the DB Connection from the URL
        $dbopts = parse_url($dbUrl);

        $dbHost = $dbopts["ec2-18-205-122-145.compute-1.amazonaws.com"];
        $dbPort = $dbopts["5432"];
        $dbUser = $dbopts["zpkloidtamuzxy"];
        $dbPassword = $dbopts["660c977c44f24df80f355b9857cc5dced8ea0edefa2b1b06db20e5ea5f325aa4"];
        $dbName = ltrim($dbopts["dc3pft46uimeni"],'/');

        // Create the PDO connection
        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

        // this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        //Now we can use $db->
        $statement = $db->prepare('SELECT id, book, chapter, verse, content FROM scriptures');
        $statement->execute();

        // Go through each result
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            echo $row['id'];
        }
    }
    catch (PDOException $ex) {
        // for debugging only not for production site
        echo "Error connecting to DB. Details: $ex";
        die();
    }

    return $db;
}
?>