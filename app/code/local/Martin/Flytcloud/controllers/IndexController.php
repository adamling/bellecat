<?php

class Martin_Flytcloud_IndexController extends Mage_Core_Controller_Front_Action
{
    public function testAction()
    {
        
        try{
            //$this->loadLayout();
            $order  = Mage::getModel('sales/order')->load(3102);
            $order->setStatus(Mage_Sales_Model_Order::STATE_PROCESSING)
                ->save();
            //echo $order->getPayment()->getMethodInstance()->getCode();
            //$this->renderLayout();
        } catch (Exception $ex) {
           var_dump($ex);exit;
        }
                        
    }
    public function indexAction(){//
        try{
            $roter=Mage::app()->getFrontController()->getRouter('standard');
            $modules=$roter->getModuleByFrontName('export');
            var_dump($modules);exit;   
        } catch (Exception $ex) {
           var_dump($ex);exit;
        }

    }
}