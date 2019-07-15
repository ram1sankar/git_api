<?PHP

    Class DBConnect {
        PRIVATE $server = '172.16.90.106';
        PRIVATE $dbname = 'MBCHRM';
        PRIVATE $user = 'root';
        PRIVATE $pass = 'altech@123';

        
        PUBLIC Function connect_mbchrm(){
            try{
                $conn = new PDO("mysql:host=".$this->server . ";dbname=".$this->dbname, $this->user, $this->pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            } catch(\Exception $ex){
                echo "Database Error : " . $ex->getMessage();
            }
        }

        
    }
        
    Class CRMConnect {
        PRIVATE $server = '172.16.90.111';
        PRIVATE $dbname = 'MBCCRM';
        PRIVATE $user = 'root';
        PRIVATE $pass = 'altech@123';

        
        PUBLIC Function connect_mbccrm(){
            try{
                $conn = new PDO("mysql:host=".$this->server . ";dbname=".$this->dbname, $this->user, $this->pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            } catch(\Exception $ex){
                echo "Database Error : " . $ex->getMessage();
            }
        }    
    }
    
    Class VRMConnect {
        PRIVATE $server = '172.16.90.109';
        PRIVATE $dbname = 'MBCVRM';
        PRIVATE $user = 'root';
        PRIVATE $pass = 'altech@123';

        
        PUBLIC Function connect_mbcvrm(){
            try{
                $conn = new PDO("mysql:host=".$this->server . ";dbname=".$this->dbname, $this->user, $this->pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            } catch(\Exception $ex){
                echo "Database Error : " . $ex->getMessage();
            }
        }    
    }
    
    Class PRConnect {
        PRIVATE $server = '172.16.90.125';
        PRIVATE $dbname = 'MBCPR';
        PRIVATE $user = 'root';
        PRIVATE $pass = 'altech@123';

        
        PUBLIC Function connect_mbcpr(){
            try{
                $conn = new PDO("mysql:host=".$this->server . ";dbname=".$this->dbname, $this->user, $this->pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            } catch(\Exception $ex){
                echo "Database Error : " . $ex->getMessage();
            }
        }    
    }
?>
