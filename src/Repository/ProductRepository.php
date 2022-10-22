<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Mapping\OrderBy;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 *
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function add(Product $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Product $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    
   /**
    * @return Product[] Returns an array of Product objects
    */
   public function indexProduct()
   {
       $entity = $this->getEntityManager();
       return $entity->createQuery('
       SELECT p.id as productid, p.Productname, p.Price,
       p.Productdes, p.Productquantity, p.Productimage, b.Brandname as brandid, s.Address as address, p.Status 
       FROM App\Entity\Product p, App\Entity\Brand b, App\Entity\Shop s WHERE p.Brandid = b.id AND p.shop = s.id
       ')
       ->getArrayResult()
       ;
   }

    /**
    * @return Product[] Returns an array of Product objects
    */
   public function indexHome()
   {
       $entity = $this->getEntityManager();
       return $entity->createQuery('
       SELECT p.id, p.Productname, p.Price, p.Productimage 
       FROM App\Entity\Product p, App\Entity\Brand b, App\Entity\Shop s 
       WHERE p.Brandid = b.id AND p.shop = s.id AND
       p.Status = 1 AND b.Status = 1 AND p.Productquantity > 0
       ')
       ->getArrayResult()
       ;
   }

   /**
    * @return Product[] Returns an array of Product objects
    */
    public function addressProduct($idShop)
   {
       return $this->createQueryBuilder('p')
            ->select('s.Address as address')
            ->innerJoin('p.shop', 's')
           ->Where('p.id = :idShop')
           ->setParameter('idShop', $idShop)
           ->getQuery()
           ->getResult()
       ;
   }

      /**
    * @return Product[] Returns an array of Product objects
    */
    public function indexProductHome()
    {
        $entity = $this->getEntityManager();
        return $entity->createQuery('
        SELECT p.id, p.Productname, p.Price,
        p.Productdes, p.Productquantity, p.Productimage
        FROM App\Entity\Product p WHERE p.Status = 1 AND p.Productquantity > 0
        ')
        ->getArrayResult()
        ;
    }

   /**
    * @return Product[] Returns an array of Product objects
    */
    public function findProductByName($productname)
   {
    $productname = strtolower($productname);
       return $this->createQueryBuilder('p')
            ->select('p.id, p.Productname, p.Price, p.Productimage')
            ->innerJoin('p.Brandid', 'b')
           ->Where('LOWER(p.Productname) LIKE :productname')
           ->setParameter('productname', "%${productname}%")
           ->andWhere('p.Status = 1')
           ->andWhere('b.Status = 1')
           ->andWhere('p.Productquantity > 0')
           ->getQuery()
           ->getResult()
       ;
   }

      /**
    * @return Product[] Returns an array of Product objects
    */
    public function countProductByName($productname)
   {
        $productname = strtolower($productname);
       return $this->createQueryBuilder('p')
            ->select('COUNT(p.id) as count')
           ->Where('LOWER(p.Productname) LIKE :productname')
           ->setParameter('productname', "%${productname}%")
           ->andWhere('p.Status = 1')
           ->getQuery()
           ->getResult()
       ;
   }

      /**
    * @return Product[] Returns an array of Product objects
    */
    public function imageProduct($id)
    {
        $entity = $this->getEntityManager();
        return $entity->createQuery('
        SELECT p.Productimage, p.Productquantity as quantity FROM App\Entity\Product p WHERE p.id = :id
        ') ->setParameter('id', $id)
        ->getArrayResult()
        ;
    }

    /**
    * @return Product[] Returns an array of Product objects
    */
    public function statisticsDESCInterest($timeFrom, $timeTo)
   {
        $from = $timeFrom." 00:00:00";
        $to   = $timeTo. " 23:59:59";
       return $this->createQueryBuilder('p')
            ->select('s.Address as address, COUNT(o.id) as order, SUM(ord.OderProQuan) as product, SUM(ord.Total) as total, 
            SUM(ord.Total - (ord.OderProQuan*p.CostPrice)) as res')
            ->innerJoin('p.shop', 's')
            ->innerJoin('p.Orderdetailid', 'ord')
            ->innerJoin('ord.Orderid', 'o')
            ->andWhere('o.Orderdate >= :from')
            ->setParameter('from', $from )
            ->andWhere('o.Orderdate <= :to')
            ->setParameter('to', $to)
            ->groupBy('s.Address')
            ->orderBy('res','DESC')
           ->getQuery()
           ->getResult()
       ;
   }

       /**
    * @return Product[] Returns an array of Product objects
    */
    public function statisticsDESCOrder($timeFrom, $timeTo)
   {
        $from = $timeFrom." 00:00:00";
        $to   = $timeTo. " 23:59:59";
       return $this->createQueryBuilder('p')
            ->select('s.Address as address, COUNT(o.id) as order, SUM(ord.OderProQuan) as product, SUM(ord.Total) as total, 
            SUM(ord.Total - (ord.OderProQuan*p.CostPrice)) as res')
            ->innerJoin('p.shop', 's')
            ->innerJoin('p.Orderdetailid', 'ord')
            ->innerJoin('ord.Orderid', 'o')
            ->andWhere('o.Orderdate >= :from')
            ->setParameter('from', $from )
            ->andWhere('o.Orderdate <= :to')
            ->setParameter('to', $to)
            ->groupBy('s.Address')
            ->orderBy('order','DESC')
           ->getQuery()
           ->getResult()
       ;
   }

       /**
    * @return Product[] Returns an array of Product objects
    */
    public function statisticsDESCProduct($timeFrom, $timeTo)
   {
        $from = $timeFrom." 00:00:00";
        $to   = $timeTo. " 23:59:59";
       return $this->createQueryBuilder('p')
            ->select('s.Address as address, COUNT(o.id) as order, SUM(ord.OderProQuan) as product, SUM(ord.Total) as total, 
            SUM(ord.Total - (ord.OderProQuan*p.CostPrice)) as res')
            ->innerJoin('p.shop', 's')
            ->innerJoin('p.Orderdetailid', 'ord')
            ->innerJoin('ord.Orderid', 'o')
            ->andWhere('o.Orderdate >= :from')
            ->setParameter('from', $from )
            ->andWhere('o.Orderdate <= :to')
            ->setParameter('to', $to)
            ->groupBy('s.Address')
            ->orderBy('product','DESC')
           ->getQuery()
           ->getResult()
       ;
   }

       /**
    * @return Product[] Returns an array of Product objects
    */
    public function statisticsDESCRevenue($timeFrom, $timeTo)
   {
        $from = $timeFrom." 00:00:00";
        $to   = $timeTo. " 23:59:59";
       return $this->createQueryBuilder('p')
            ->select('s.Address as address, COUNT(o.id) as order, SUM(ord.OderProQuan) as product, SUM(ord.Total) as total, 
            SUM(ord.Total - (ord.OderProQuan*p.CostPrice)) as res')
            ->innerJoin('p.shop', 's')
            ->innerJoin('p.Orderdetailid', 'ord')
            ->innerJoin('ord.Orderid', 'o')
            ->andWhere('o.Orderdate >= :from')
            ->setParameter('from', $from )
            ->andWhere('o.Orderdate <= :to')
            ->setParameter('to', $to)
            ->groupBy('s.Address')
            ->orderBy('total','DESC')
           ->getQuery()
           ->getResult()
       ;
   }

       /**
    * @return Product[] Returns an array of Product objects
    */
    public function statisticsASCInterest($timeFrom, $timeTo)
   {
        $from = $timeFrom." 00:00:00";
        $to   = $timeTo. " 23:59:59";
       return $this->createQueryBuilder('p')
            ->select('s.Address as address, COUNT(o.id) as order, SUM(ord.OderProQuan) as product, SUM(ord.Total) as total, 
            SUM(ord.Total - (ord.OderProQuan*p.CostPrice)) as res')
            ->innerJoin('p.shop', 's')
            ->innerJoin('p.Orderdetailid', 'ord')
            ->innerJoin('ord.Orderid', 'o')
            ->andWhere('o.Orderdate >= :from')
            ->setParameter('from', $from )
            ->andWhere('o.Orderdate <= :to')
            ->setParameter('to', $to)
            ->groupBy('s.Address')
            ->orderBy('res','ASC')
           ->getQuery()
           ->getResult()
       ;
   }

       /**
    * @return Product[] Returns an array of Product objects
    */
    public function statisticsASCOrder($timeFrom, $timeTo)
   {
        $from = $timeFrom." 00:00:00";
        $to   = $timeTo. " 23:59:59";
       return $this->createQueryBuilder('p')
            ->select('s.Address as address, COUNT(o.id) as order, SUM(ord.OderProQuan) as product, SUM(ord.Total) as total, 
            SUM(ord.Total - (ord.OderProQuan*p.CostPrice)) as res')
            ->innerJoin('p.shop', 's')
            ->innerJoin('p.Orderdetailid', 'ord')
            ->innerJoin('ord.Orderid', 'o')
            ->andWhere('o.Orderdate >= :from')
            ->setParameter('from', $from )
            ->andWhere('o.Orderdate <= :to')
            ->setParameter('to', $to)
            ->groupBy('s.Address')
            ->orderBy('order','ASC')
           ->getQuery()
           ->getResult()
       ;
   }

       /**
    * @return Product[] Returns an array of Product objects
    */
    public function statisticsASCProduct($timeFrom, $timeTo)
   {
        $from = $timeFrom." 00:00:00";
        $to   = $timeTo. " 23:59:59";
       return $this->createQueryBuilder('p')
            ->select('s.Address as address, COUNT(o.id) as order, SUM(ord.OderProQuan) as product, SUM(ord.Total) as total, 
            SUM(ord.Total - (ord.OderProQuan*p.CostPrice)) as res')
            ->innerJoin('p.shop', 's')
            ->innerJoin('p.Orderdetailid', 'ord')
            ->innerJoin('ord.Orderid', 'o')
            ->andWhere('o.Orderdate >= :from')
            ->setParameter('from', $from )
            ->andWhere('o.Orderdate <= :to')
            ->setParameter('to', $to)
            ->groupBy('s.Address')
            ->orderBy('product','ASC')
           ->getQuery()
           ->getResult()
       ;
   }

       /**
    * @return Product[] Returns an array of Product objects
    */
    public function statisticsASCRevenue($timeFrom, $timeTo)
   {
        $from = $timeFrom." 00:00:00";
        $to   = $timeTo. " 23:59:59";
       return $this->createQueryBuilder('p')
            ->select('s.Address as address, COUNT(o.id) as order, SUM(ord.OderProQuan) as product, SUM(ord.Total) as total, 
            SUM(ord.Total - (ord.OderProQuan*p.CostPrice)) as res')
            ->innerJoin('p.shop', 's')
            ->innerJoin('p.Orderdetailid', 'ord')
            ->innerJoin('ord.Orderid', 'o')
            ->andWhere('o.Orderdate >= :from')
            ->setParameter('from', $from )
            ->andWhere('o.Orderdate <= :to')
            ->setParameter('to', $to)
            ->groupBy('s.Address')
            ->orderBy('total','ASC')
           ->getQuery()
           ->getResult()
       ;
   }

       /**
    * @return Product[] Returns an array of Product objects
    */
    public function indexStatistics()
   {
       return $this->createQueryBuilder('p')
            ->select('s.Address as address, COUNT(o.id) as order, SUM(ord.OderProQuan) as product, SUM(ord.Total) as total, 
            SUM(ord.Total - (ord.OderProQuan*p.CostPrice)) as res')
            ->innerJoin('p.shop', 's')
            ->innerJoin('p.Orderdetailid', 'ord')
            ->innerJoin('ord.Orderid', 'o')
            ->groupBy('s.Address')
           ->getQuery()
           ->getResult()
       ;
   }


//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Product
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
