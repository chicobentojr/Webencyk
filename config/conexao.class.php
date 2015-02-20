<?php

class conexao
{
    /*Altere as variaveis a seguir caso necessario*/

    /*
    private $db_host = getenv('OPENSHIFT_MYSQL_DB_HOST'); // servidor
    private $db_user = getenv('OPENSHIFT_MYSQL_DB_USERNAME'); // usuario do banco
    private $db_pass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD'); // senha do usuario do banco
    private $db_name = 'webencyk'; // nome do banco
    
    define('DB_HOST',getenv('OPENSHIFT_MYSQL_DB_HOST'));
    define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 
    define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
    define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
    define('DB_NAME',getenv('OPENSHIFT_GEAR_NAME'));
    */
    
    private $db_host = 'localhost'; // servidor
    private $db_user = 'adminxJwRMuA'; // usuario do banco
    private $db_pass = 'm6NQBP2-XiNa'; // senha do usuario do banco
    private $db_name = 'webencyk'; 
    
    /*
    $_ENV['OPENSHIFT_MYSQL_DB_HOST']      - DB host
    $_ENV['OPENSHIFT_MYSQL_DB_PORT']      - DB Port
    $_ENV['OPENSHIFT_MYSQL_DB_USERNAME']  - DB Username
    $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD']  - DB Password	*/
	
    private $con = false;

  
    public function connect() // estabelece conexao
    {
        if(!$this->con)
        {
            $myconn = @mysql_connect($this->db_host,$this->db_user,$this->db_pass);
            
            if($myconn)
            {
                $seldb = @mysql_select_db($this->db_name,$myconn);
                if($seldb)
                {
                    $this->con = true;
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        else
        {
            return true;
        }
    }

    public function disconnect() // fecha conexao
    {
		if($this->con)
		{
			if(@mysql_close())
			{
                            $this->con = false;
                            return true;
			}
			else
			{
                            return false;
			}
		}
    }     
}

?>
