<?php

require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/project/:id', 'getProject');
$app->post('/project', 'addProject');
$app->put('/project/:id', 'updateProject');
$app->delete('/project/:id', 'deleteProject');

$app->run();

function getProject($id) {
        /*$sql = "SELECT * FROM projects WHERE id=:id";
        try {
                $db = getConnection();
                $stmt = $db->prepare($sql);  
                $stmt->bindParam("id", $id);
                $stmt->execute();
                $project = $stmt->fetchAll(PDO::FETCH_OBJ);  
                $db = null;
                echo json_encode($project); 
        } catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }*/
                echo "<div class=white-popup><p>Popup content $id</p></div>";

}

function addProject() {
        $request = Slim::getInstance()->request();
        $project = json_decode($request->getBody());

        $sql = "INSERT INTO projects (name, company, email, website, address, telephone) VALUES (:name, :company, :email, :website, :address, :telephone)";
        try {
                $db = getConnection();
                $stmt = $db->prepare($sql);  
                $stmt->bindParam("name", $customer->name);
                $stmt->bindParam("company", $customer->company);
                $stmt->bindParam("email", $customer->email);
                $stmt->bindParam("website", $customer->website);
                $stmt->bindParam("address", $customer->address);
                $stmt->bindParam("telephone", $customer->telephone);
                $stmt->execute();
                $customer->cid = $db->lastInsertId();
                $db = null;
                echo json_encode($customer); 
        } catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
}

function updateProject($id) {
        $request = Slim::getInstance()->request();
        $body = $request->getBody();
        $project = json_decode($body);
        $sql = "UPDATE projects SET name=:name, grapes=:grapes, country=:country, region=:region, year=:year, description=:description WHERE id=:id";
        try {
                $db = getConnection();
                $stmt = $db->prepare($sql);  
                $stmt->bindParam("name", $wine->name);
                $stmt->bindParam("grapes", $wine->grapes);
                $stmt->bindParam("country", $wine->country);
                $stmt->bindParam("region", $wine->region);
                $stmt->bindParam("year", $wine->year);
                $stmt->bindParam("description", $wine->description);
                $stmt->bindParam("id", $id);
                $stmt->execute();
                $db = null;
                echo json_encode($wine); 
        } catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
}

function deleteProject($id) {
        $sql = "UPDATE projects SET deleted=1 WHERE id=:id";
        try {
                $db = getConnection();
                $stmt = $db->prepare($sql);  
                $stmt->bindParam("id", $id);
                $stmt->execute();
                $db = null;
        } catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
}

function getConnection() {
        $dbhost="127.0.0.1";
        $dbuser="root";
        $dbpass="";
        $dbname="ngWizpick";
        $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);        
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
}