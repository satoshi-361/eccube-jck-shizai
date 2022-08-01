<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation\EntityExtension;

/**
  * @EntityExtension("Eccube\Entity\Category")
 */
trait CategoryTrait
{
    /**
     * @var string|null
     * @ORM\Column(type="string", length=500, nullable=true)
     * @Eccube\Annotation\FormAppend(
     *     auto_render=false,
     *     type="\Symfony\Component\Form\Extension\Core\Type\TextType",
     *     options={
     *          "required": false,
     *          "label": "image1",
     *          "attr": {"placeholder": ""}
     *     })
     */
    private $image1;
    
    /**
     * @var string|null
     * @ORM\Column(type="string", length=500, nullable=true)
     * @Eccube\Annotation\FormAppend(
     *     auto_render=false,
     *     type="\Symfony\Component\Form\Extension\Core\Type\TextType",
     *     options={
     *          "required": false,
     *          "label": "image2",
     *          "attr": {"placeholder": ""}
     *     })
     */
    private $image2;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=3000, nullable=true)
     * @Eccube\Annotation\FormAppend(
     *     auto_render=false,
     *     type="\Symfony\Component\Form\Extension\Core\Type\TextType",
     *     options={
     *          "required": false,
     *          "label": "product_items",
     *          "attr": {"placeholder": "カテゴリ別商品アイテム: 「/」で区切る"}
     *     })
     */
    private $product_items;

    
    /**
     * @var string|null
     * @ORM\Column(type="string", length=3000, nullable=true)
     * @Eccube\Annotation\FormAppend(
     *     auto_render=false,
     *     type="\Symfony\Component\Form\Extension\Core\Type\TextareaType",
     *     options={
     *          "required": false,
     *          "label": "product_items",
     *          "attr": {"placeholder": "カテゴリー説明"}
     *     })
     */
    private $note;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=false, options={"default"=0})
     * @Eccube\Annotation\FormAppend(
     *     auto_render=false,
     *     type="\Symfony\Component\Form\Extension\Core\Type\CheckboxType",
     *     options={
     *          "label": "カテゴリの説明がある場合",
     *          "required": false,
     *     })
     */
    private $is_note = false;

    /**
     * @return string|null
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * @param string|null $image1
     * @return this
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;
        return $this;
    }
    
    /**
     * @return string|null
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * @param string|null $image2
     * @return this
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;
        return $this;
    }
    
    /**
     * @return string|null
     */
    public function getProductItems()
    {
        return $this->product_items;
    }

    /**
     * @param string|null $product_items
     * @return this
     */
    public function setProductItems($product_items)
    {
        $this->product_items = $product_items;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string|null $note
     * @return this
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @param bool $is_note
     * @return this
     */
    public function setIsNote($is_note)
    {
        $this->is_note = $is_note;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsNote()
    {
        return $this->is_note;
    }
}