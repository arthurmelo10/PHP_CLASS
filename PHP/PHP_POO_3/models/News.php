<?php

use EstBase\Routes;

class News extends ConnectDB
{
    /**
     * @return array listando os dados
     */

     public function getList()
     {
         $i = 1;

         while($list = $this-> listData()) {

            $this->data[$i] = array(
                'id' => $list['id'],
                'titulo' => $list['titulo'],
                'data' => Helper::formatDateBR($list['data']),
                'texto' => $list['texto'],
                'img' => Routes::getImgURL($list['img'],280,200,0),
                'slug' => $list['slug'],
                'resumo' => substr($list['texto'], 0, 140),
                'link' => Routes::getLinks()['LER'] . "/" . $LIST['slug']
            );    

            $i++;
        }

        return $this->executePaginator(5,$this->data);
     }


}