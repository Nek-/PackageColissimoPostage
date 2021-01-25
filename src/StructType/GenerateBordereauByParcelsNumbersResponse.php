<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateBordereauByParcelsNumbersResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:generateBordereauByParcelsNumbersResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GenerateBordereauByParcelsNumbersResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\BordereauResponse
     */
    public $return;
    /**
     * Constructor method for generateBordereauByParcelsNumbersResponse
     * @uses GenerateBordereauByParcelsNumbersResponse::setReturn()
     * @param \ColissimoPostage\StructType\BordereauResponse $return
     */
    public function __construct(\ColissimoPostage\StructType\BordereauResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ColissimoPostage\StructType\BordereauResponse|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ColissimoPostage\StructType\BordereauResponse $return
     * @return \ColissimoPostage\StructType\GenerateBordereauByParcelsNumbersResponse
     */
    public function setReturn(\ColissimoPostage\StructType\BordereauResponse $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
