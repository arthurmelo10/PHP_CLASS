<?php

class ConnectDB
{
    //classe movimentada a fim de padronizar a paginação !! 
    
    /**
      * EXECUTANDO PAGINAÇÃO DE DADOS
      * @param int $limit
      * @param array $data
      * @return array
      */
      protected function executePaginator($limit, $data=array())
      {
          $paginator = new Paginator();

          if ($data != null && count($data) > 1) {
            $pgs = $paginator->getPaginator($limit, $data);
            $this->paginate = $paginator->show();
            return $pgs;
          } else {
              return $this->data;
          }
      }
}