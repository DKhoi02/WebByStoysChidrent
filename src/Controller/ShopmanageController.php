<?php

namespace App\Controller;

use App\Entity\Shop;
use App\Form\ShopManageType;
use App\Repository\ProductRepository;
use App\Repository\ShopRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

date_default_timezone_set('Asia/Ho_Chi_Minh');

class ShopmanageController extends AbstractController
{
    /**
     * @Route("/shopmanage", name="app_shopmanage")
     */
    public function indexAction(ShopRepository $repo): Response
    {
        $shop = $repo->findAll();
        return $this->render('shopmanage/index.html.twig', [
            'shop' => $shop,
        ]);
    }

    /**
     * @Route("/addshopmanage", name="add_shopmanage")
     */
    public function addShopAction(Request $req, ManagerRegistry $res): Response
    {
        $shop = new Shop();

        $form = $this->createForm(ShopManageType::class, $shop);

        $form->handleRequest($req);
        $entity = $res->getManager();

        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();

            $shop->setEmail($data->getEmail());
            $shop->setTelephone($data->getTelePhone());
            $shop->setAddress($data->getAddress());

            $entity->persist($shop);
            $entity->flush();

            return $this->redirectToRoute('app_shopmanage', []);
        }
        return $this->render('shopmanage/addShop.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/indexStatistics", name="indexStatistics")
     */
    public function indexStatisticsAction(Request $re, ProductRepository $rePro): Response
    {
        $result = $rePro->indexStatistics();

        return $this->render('shopmanage/statistics.html.twig', [
            'result' => $result
        ]);
    }

    /**
     * @Route("/statistics", name="statistics")
     */
    public function statisticsAction(Request $re, ProductRepository $rePro): Response
    {

        $sort = $re->request->get("sort");
        $typeSort = $re->request->get("typeSort");
        $timeFrom = $re->request->get("timeFrom");
        $timeTo = $re->request->get("timeTo");
        
        $result = $rePro->indexStatistics();

        $sortValue = 0;
        $typeSortValue = 0;
        $timeFromFormat = 'yyyy-mm-dd';
        $timeToFormat = 'yyyy-mm-dd';

        if($sort==1){
            $timeFromFormat = $timeFrom;
            $timeToFormat = $timeTo;
            $sortValue = 1;
            $result = $rePro->statisticsDESCInterest($timeFrom, $timeTo);
            $typeSortValue = 1;
            if($typeSort==2){
                $result = $rePro->statisticsDESCOrder($timeFrom, $timeTo);
                $typeSortValue = 2;
            }
            elseif($typeSort==3){
                $result = $rePro->statisticsDESCProduct($timeFrom, $timeTo);
                $typeSortValue = 3;
            }
            elseif($typeSort==4){
                $result = $rePro->statisticsDESCRevenue($timeFrom, $timeTo);
                $typeSortValue = 4;
            }
        }
        elseif($sort==2){
            $timeFromFormat = $timeFrom;
            $timeToFormat = $timeTo;
            $sortValue = 2;
            $result = $rePro->statisticsASCInterest($timeFrom, $timeTo);
            $typeSortValue = 1;
            if($typeSort==2){
                $result = $rePro->statisticsASCOrder($timeFrom, $timeTo);
                $typeSortValue = 2;
            }
            elseif($typeSort==3){
                $result = $rePro->statisticsASCProduct($timeFrom, $timeTo);
                $typeSortValue = 3;
            }
            elseif($typeSort==4){
                $result = $rePro->statisticsASCRevenue($timeFrom, $timeTo);
                $typeSortValue = 4;
            }
        }

        return $this->render('shopmanage/statistics.html.twig', [
            'result' => $result,
            'sortValue' => $sortValue,
            'typeSortValue' => $typeSortValue,
            'timeFromFormat' => $timeFromFormat,
            'timeToFormat' => $timeToFormat
        ]);
    }

}
