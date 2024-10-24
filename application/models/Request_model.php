<?php
class Request_model extends CI_Model
{

    function get_tables()
    {
        return $this->db->list_tables();
    }

    function get_columns_by_table($table)
    {
        $fields = $this->db->list_fields($table);
        return $fields;
    }



    function execute($sql)
    {
        $statut = true;
        $ans = '';
        $message = '';
        try {
            $query = $this->db->query($sql);
            if (!$query) {
                // En cas d'erreur dans la requête SQL
                $statut = false;
                $error = $this->db->error();
                throw new Exception('Error executing the query: ' . $error['message']);
            }
            $ans = $query->result();
            //print_r($ans);
        } catch (Exception $e) {
            // Gestion des exceptions et affichage du message d'erreur
            $message = $e->getMessage();
        }

        $res = array(
            'statut' => $statut,
            'sql' => $sql,
            'answer' => $ans,
            'message' => $message
        );
        return $res;
    }
}
