<?php

namespace TVGuide\ListingsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony2\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
           
                 
     return $this->render('TVGuideListingsBundle:Default:index.html.twig');
     
    }
    
     public function packageAction()
    {
      
        $request = $this->getRequest();

         $pack=$request->get('package');
         // hard code region for now, but if you change it to 2,3,4 it will show News in the South, East, West  
         $region=' 1';
         // as stated in challenge, all smaller packages are included in large so can just do less than or equal to query for 1 - 3
         $sql="SELECT RegionChannelName.channel_name, Channels.channel_number, package
          FROM Channels
          JOIN RegionChannelName ON Channels.channel_number = RegionChannelName.channel_id
          WHERE package <= $pack
          AND region_id =$region";


          $em = $this->getDoctrine()->getEntityManager();

          $connection = $em->getConnection();

          $statement = $connection->prepare($sql);

          $statement->execute();

          $channel = $statement->fetchAll();

           return $this->render('TVGuideListingsBundle:Default:menu.html.twig', array('name' => $channel));
     
     
    }
    
}
