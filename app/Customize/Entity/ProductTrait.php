<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation\EntityExtension;
use Symfony\Component\Validator\Constraints as Assert;

/**
  * @EntityExtension("Eccube\Entity\Product")
 */
trait ProductTrait
{
    /**
     * @var string|null
     * @ORM\Column(type="string", length=50, nullable=false)
     * @Eccube\Annotation\FormAppend(
     *     auto_render=false,
     *     type="\Symfony\Component\Form\Extension\Core\Type\TextType",
     *     options={
     *          "required": true,
     *          "label": "品番",
     *          "attr": {"placeholder": ""}
     *     })
     * @Assert\NotBlank(message="にゅうりょくしてくださいね！！！")
     */
    private $num_code;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Eccube\Annotation\FormAppend(
     *     auto_render=false,
     *     type="\Symfony\Component\Form\Extension\Core\Type\TextType",
     *     options={
     *          "required": false,
     *          "label": "仕様・寸法",
     *          "attr": {"placeholder": ""}
     *     })
     */
    private $dimension;
    
    /**
     * @var string|null
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Eccube\Annotation\FormAppend(
     *     auto_render=false,
     *     type="\Symfony\Component\Form\Extension\Core\Type\TextType",
     *     options={
     *          "required": false,
     *          "label": "用途",
     *          "attr": {"placeholder": ""}
     *     })
     */
    private $purpose;

        
    /**
     * @var string|null
     * @ORM\Column(type="string", length=3000, nullable=true)
     * @Eccube\Annotation\FormAppend(
     *     auto_render=false,
     *     type="\Symfony\Component\Form\Extension\Core\Type\TextType",
     *     options={
     *          "required": false,
     *          "label": "追加商品アイテム",
     *          "attr": {"placeholder": ""}
     *     })
     */
    private $additional_product_items;

    /**
     * @return string|null
     */
    public function getNumCode()
    {
        return $this->num_code;
    }

    /**
     * @param string|null $num_code
     * @return this
     */
    public function setNumCode($num_code)
    {
        $this->num_code = $num_code;
        return $this;
    }
    
    /**
     * @return string|null
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * @param string|null $dimension
     * @return this
     */
    public function setDimension($dimension)
    {
        $this->dimension = $dimension;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @param string|null $purpose
     * @return this
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }
    
    /**
     * @return string|null
     */
    public function getAdditionalProductItems()
    {
        return $this->additional_product_items;
    }

    /**
     * @param string|null $additional_product_items
     * @return this
     */
    public function setAdditionalProductItems($additional_product_items)
    {
        $this->additional_product_items = $additional_product_items;
        return $this;
    }
}