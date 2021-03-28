<?php

    class SearchController extends CController
    {
        public function actions()
        {
            return array(
                'price'=>array(
                    'class'=>'CWebServiceAction',
                ),
            );
        }

        /**
         * @param string the symbol of the telco
         * @return float the telco price
         * @soap
         */
        public function getPrice($name)
        {
            //Make call to DB to search for this.
            $result = (new Telcos())->find(array('condition' => 'name = :name',
                        'params' => array(
                            ':name' => $name,
                        )));
            return isset($result['amount'])? $result['amount'] : 0;
        }
    }
?>