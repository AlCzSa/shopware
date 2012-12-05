<?php
/**
 * Shopware
 *
 * LICENSE
 *
 * Available through the world-wide-web at this URL:
 * http://shopware.de/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@shopware.de so we can send you a copy immediately.
 *
 * @category   Shopware
 * @package    Shopware_Models
 * @subpackage Emotion
 * @copyright  Copyright (c) 2011-2012, shopware AG (http://www.shopware.de)
 * @license    http://shopware.de/license
 * @version    $Id$
 * @author     $Author$
 */
namespace   Shopware\CustomModels\SwagNewsletter;
use         Shopware\Components\Model\ModelEntity,
            Doctrine\ORM\Mapping AS ORM;

/**
 *
 * Associations:
 * <code>
 *
 * </code>
 *
 *
 * Indices:
 * <code>
 *
 * </code>
 *
 * @category   Shopware
 * @package    Models
 * @subpackage Emotion
 * @copyright  Copyright (c) 2011, shopware AG (http://www.shopware.de)
 * @license    http://enlight.de/license     New BSD License
 *
 * @ORM\Entity
 * @ORM\Table(name="s_campaigns_component_field")
 */
class Field extends ModelEntity
{
    /**
     * Unique identifier field of the element model.
     *
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * Id of the associated \Shopware\CustomModels\SwagNewsletter\Component
     * which will be displayed in the shopware backend component library.
     *
     * @var integer $componentId
     *
     * @ORM\Column(name="componentID", type="integer", nullable=false)
     */
    private $componentId;

    /**
     *
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     *
     * @var string $name
     *
     * @ORM\Column(name="field_label", type="string", length=255, nullable=false)
     */
    private $fieldLabel;

    /**
     * The xType for the backend module.
     *
     * @var string $xType
     *
     * @ORM\Column(name="x_type", type="string", length=255, nullable=false)
     */
    private $xType;

    /**
     * The valueType for the database
     *
     * @var string $valueType
     *
     * @ORM\Column(name="value_type", type="string", length=255, nullable=false)
     */
    private $valueType;

    /**
     * Contains the support text for the extJs field.
     *
     * @var string $supportText
     *
     * @ORM\Column(name="support_text", type="string", length=255, nullable=false)
     */
    private $supportText;

    /**
     * Contains the store name for a component field.
     * @var string $supportText
     * @ORM\Column(name="store", type="string", length=255, nullable=false)
     */
    private $store;
    /**
     * Contains the field name which used as display for a combo box field
     * @var string $supportText
     * @ORM\Column(name="display_field", type="string", length=255, nullable=false)
     */
    private $displayField;

    /**
     * Contains the field name which used as value for a combo box field
     * @var string $valueField
     * @ORM\Column(name="value_field", type="string", length=255, nullable=false)
     */
    private $valueField;

    /**
     * Contains the default-value for the field
     * @var string $defaultValue
     * @ORM\Column(name="default_value", type="string", length=255, nullable=false)
     */
    private $defaultValue;

    /**
     * Could this field be let unfilled
     * @var integer $allowBlank
     * @ORM\Column(name="allow_blank", type="integer", length=1, nullable=false)
     */
    private $allowBlank;


    /**
     * Contains the help title for the extJs field.
     *
     * @var string $helpTitle
     *
     * @ORM\Column(name="help_title", type="string", length=255, nullable=false)
     */
    private $helpTitle;

    /**
     * Contains the help title for the extJs field.
     *
     * @var string $helpTitle
     *
     * @ORM\Column(name="help_text", type="text",  nullable=false)
     */
    private $helpText;

    /**
     * Contains the assigned \Shopware\CustomModels\SwagNewsletter\Component
     * which can be configured in the backend emotion module.
     * The assigned library component contains the data definition for the grid element.
     *
     * @var \Shopware\CustomModels\SwagNewsletter\Component
     * @ORM\ManyToOne(targetEntity="\Shopware\CustomModels\SwagNewsletter\Component", inversedBy="fields")
     * @ORM\JoinColumn(name="componentID", referencedColumnName="id")
     */
    private $component;

    /**
     * Unique identifier field of the element model.
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Id of the associated \Shopware\CustomModels\SwagNewsletter\Component
     * which will be displayed in the shopware backend component library.
     *
     * @return int
     */
    public function getComponentId()
    {
        return $this->componentId;
    }

    /**
     * Id of the associated \Shopware\CustomModels\SwagNewsletter\Component
     * which will be displayed in the shopware backend component library.
     *
     * @param int $componentId
     */
    public function setComponentId($componentId)
    {
        $this->componentId = $componentId;
    }

    /**
     * The xType for the backend module.
     *
     * @return string
     */
    public function getXType()
    {
        return $this->xType;
    }

    /**
     * The xType for the backend module.
     *
     * @param string $xType
     */
    public function setXType($xType)
    {
        $this->xType = $xType;
    }

    /**
     * Contains the support text for the extJs field.
     *
     * @return string
     */
    public function getSupportText()
    {
        return $this->supportText;
    }

    /**
     * Contains the support text for the extJs field.
     *
     * @param string $supportText
     */
    public function setSupportText($supportText)
    {
        $this->supportText = $supportText;
    }

    /**
     * Contains the help title for the extJs field.
     *
     * @return string
     */
    public function getHelpTitle()
    {
        return $this->helpTitle;
    }

    /**
     * Contains the help title for the extJs field.
     *
     * @param string $helpTitle
     */
    public function setHelpTitle($helpTitle)
    {
        $this->helpTitle = $helpTitle;
    }

    /**
     * Contains the help title for the extJs field.
     *
     * @return string
     */
    public function getHelpText()
    {
        return $this->helpText;
    }

    /**
     * Contains the help title for the extJs field.
     *
     * @param string $helpText
     */
    public function setHelpText($helpText)
    {
        $this->helpText = $helpText;
    }

    /**
     * Contains the assigned \Shopware\CustomModels\SwagNewsletter\Component
     * which can be configured in the backend emotion module.
     * The assigned library component contains the data definition for the grid element.
     *
     * @return \Shopware\CustomModels\SwagNewsletter\Component
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Contains the assigned \Shopware\CustomModels\SwagNewsletter\Component
     * which can be configured in the backend emotion module.
     * The assigned library component contains the data definition for the grid element.
     *
     * @param \Shopware\CustomModels\SwagNewsletter\Component $component
     */
    public function setComponent($component)
    {
        $this->component = $component;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFieldLabel()
    {
        return $this->fieldLabel;
    }

    /**
     * @param string $fieldLabel
     */
    public function setFieldLabel($fieldLabel)
    {
        $this->fieldLabel = $fieldLabel;
    }

    /**
     * @return string
     */
    public function getValueType()
    {
        return $this->valueType;
    }

    /**
     * @param string $valueType
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;
    }

    /**
     * @return string
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @param string $store
     */
    public function setStore($store)
    {
        $this->store = $store;
    }

    /**
     * @return string
     */
    public function getDisplayField()
    {
        return $this->displayField;
    }

    /**
     * @param string $displayField
     */
    public function setDisplayField($displayField)
    {
        $this->displayField = $displayField;
    }

    /**
     * @return string
     */
    public function getValueField()
    {
        return $this->valueField;
    }

    /**
     * @param string $valueField
     */
    public function setValueField($valueField)
    {
        $this->valueField = $valueField;
    }

    /**
     * @param int $allowBlank
     */
    public function setAllowBlank($allowBlank)
    {
        $this->allowBlank = $allowBlank;
    }

    /**
     * @return int
     */
    public function getAllowBlank()
    {
        return $this->allowBlank;
    }

    /**
     * @param string $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }
}