<?php

namespace App\Controller;

use App\Entity\Shop;
use App\Form\ShopManageType;
use App\Repository\ShopRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
}
