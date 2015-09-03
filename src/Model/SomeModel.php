<?php

namespace Api\Client\Model;

class SomeModel
{
    /**
     @var string  */
    private $someAttr;

    /**
     @var  integer */
    private $anotherAttr;

    /**
     * @return string
     */
    public function getSomeAttr()
    {
        return $this->someAttr;
    }

    /**
     * @param string $someAttr
     */
    public function setSomeAttr($someAttr)
    {
        $this->someAttr = $someAttr;
    }

    /**
     * @return int
     */
    public function getAnotherAttr()
    {
        return $this->anotherAttr;
    }

    /**
     * @param int $anotherAttr
     */
    public function setAnotherAttr($anotherAttr)
    {
        $this->anotherAttr = $anotherAttr;
    }

    public function serialize()
    {
        return json_encode(array('someAttr' => $this->getSomeAttr(), 'anotherAttr' => $this->
                getAnotherAttr()));
    }

}
