<?php class ConexionBD {
    const SERVER="pda.vrammdev.com";
    const USER="giampieer24";
    const PASS="Gi@mpieer24-pe";
    const DATABASE="pda";
    private  $cn=null;
    
    public function getconecionBD() {
        try {
            $this->cn= mysqli_connect(self::SERVER,self::USER, self::PASS, self::DATABASE,self::PORT);
        } catch (Exception $exc) {
          
        }
        return $this->cn;
        }
}
?>