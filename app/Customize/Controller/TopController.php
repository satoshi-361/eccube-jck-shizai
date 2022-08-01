<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Customize\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Eccube\Controller\AbstractController;
use Eccube\Repository\ProductRepository;    
use Eccube\Repository\Master\ProductStatusRepository;

class TopController extends AbstractController
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     * @var ProductStatusRepository
     */
    protected $productStatusRepository;

    /**
     * TopController constructor.
     *
     * @param ProductRepository $productRepository
     * @param ProductStatusRepository $productStatusRepository
     */
    public function __construct(
        ProductRepository $productRepository,
        ProductStatusRepository $productStatusRepository
    ) {
        $this->productRepository = $productRepository;
        $this->productStatusRepository = $productStatusRepository;
    }

    /**
     * @Route("/", name="homepage", methods={"GET"})
     * @Template("index.twig")
     */
    public function index()
    {
        $Products = $this->productRepository->findAll();
        $NewItems = $this->productRepository->findBy(['Status' => \Eccube\Entity\Master\ProductStatus::DISPLAY_SHOW], ['create_date' => 'DESC'], 8, 0);
        
        return [
            'Products' => $Products,
            'NewItems' => $NewItems
        ];
    }
}
