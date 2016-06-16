<?php

class LDAPConnect {
    
    public function __construct() {
        
    }
    
    public function getConnect(array $config, $getuser = true) {
        $server = isset($config['ldap_server'])?$config['ldap_server']:'';
        $domain = isset($config['ldap_domain'])?$config['ldap_domain']:'';
        $domdn = isset($config['ldap_domdn'])?$config['ldap_domdn']:'';
        $username = isset($config['ldap_username'])?$config['ldap_username']:'';
        $password = isset($config['ldap_password'])?$config['ldap_password']:'';
//echo "$server $domain $domdn $username $password <br>";
        $connect = ldap_connect($server);

        ldap_set_option($connect, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($connect, LDAP_OPT_REFERRALS, 0);

        if ($connect) {
            $login = ldap_bind(
                    $connect, 
                    $username . "@" . $domain, 
                    $password
            );
            if ($login)
            {
                if ($getuser===false)
                    return true;
                
                $dn = "CN=Users,".$domdn;
                $filter="(&(objectCategory=person)(objectClass=user)(sAMAccountName=$username))";
                $justthese = array("ou", "cn", "givenname", "userprincipalname","objectguid","name","samaccountname");
                $sr=ldap_search($connect, $dn, $filter,$justthese);
                $entry = ldap_get_entries($connect, $sr);

                $user = new stdClass();
                if (isset($entry[0]) && $entry['count'] == 1) {
                    
                    $user->name = $entry[0]['cn'][0];
                    $user->guid = $entry[0]['objectguid'][0];
                    $user->account = $entry[0]['samaccountname'][0];
                    $user->dn = $entry[0]['dn'];
                }
                    
                return $user;
            }
        }
        return false;
    }
            
}