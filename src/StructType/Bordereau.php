<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bordereau StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Bordereau extends AbstractStructBase
{
    /**
     * The bordereauDataHandler
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $bordereauDataHandler;
    /**
     * The bordereauHeader
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\BordereauHeader
     */
    public $bordereauHeader;
    /**
     * Constructor method for bordereau
     * @uses Bordereau::setBordereauDataHandler()
     * @uses Bordereau::setBordereauHeader()
     * @param string $bordereauDataHandler
     * @param \ColissimoPostage\StructType\BordereauHeader $bordereauHeader
     */
    public function __construct($bordereauDataHandler = null, \ColissimoPostage\StructType\BordereauHeader $bordereauHeader = null)
    {
        $this
            ->setBordereauDataHandler($bordereauDataHandler)
            ->setBordereauHeader($bordereauHeader);
    }
    /**
     * Get bordereauDataHandler value
     * @return string|null
     */
    public function getBordereauDataHandler()
    {
        return $this->bordereauDataHandler;
    }
    /**
     * Set bordereauDataHandler value
     * @param string $bordereauDataHandler
     * @return \ColissimoPostage\StructType\Bordereau
     */
    public function setBordereauDataHandler($bordereauDataHandler = null)
    {
        // validation for constraint: string
        if (!is_null($bordereauDataHandler) && !is_string($bordereauDataHandler)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bordereauDataHandler, true), gettype($bordereauDataHandler)), __LINE__);
        }
        $this->bordereauDataHandler = $bordereauDataHandler;
        return $this;
    }
    /**
     * Get bordereauHeader value
     * @return \ColissimoPostage\StructType\BordereauHeader|null
     */
    public function getBordereauHeader()
    {
        return $this->bordereauHeader;
    }
    /**
     * Set bordereauHeader value
     * @param \ColissimoPostage\StructType\BordereauHeader $bordereauHeader
     * @return \ColissimoPostage\StructType\Bordereau
     */
    public function setBordereauHeader(\ColissimoPostage\StructType\BordereauHeader $bordereauHeader = null)
    {
        $this->bordereauHeader = $bordereauHeader;
        return $this;
    }
}
